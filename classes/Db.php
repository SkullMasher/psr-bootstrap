<?php
    namespace Phplab;

    use \PDO as PDO;

    /**
    * dbwrapper
    */
class Db
{
    private static $instance = null;
    private $PDO;
    private $QUERY;
    private $ERROR = false;
    private $RESULTS;
    private $COUNT = 0;

    private $HOST = '127.0.0.1:3306';
    private $DBNAME = 'dbtest';
    private $USER = 'root';
    private $PASS = '';

    public function __construct()
    {
        try {
            $this->PDO = new PDO('mysql:host=' . $this->HOST . ';dbname=' . $this->DBNAME . ';charset=UTF8', $this->USER, $this->PASS);
        } catch (PDOException $e) {
            echo 'Connect failed : ' . $e->getMessage();
        }
    }

    public static function getInstance()
    {
        // Singleton : if instance of DB not exist return it. It avoid multiple conection to the db
        // in fact it allows us to have only one connection to the db at any time.
        if (!isset(self::$instance)) {
            self::$instance = new Db();
        }
        return self::$instance;
    }
    public function query($sql, $params = array())
    {
        $this->ERROR = false;
        if ($this->QUERY = $this->PDO->prepare($sql)) {
            $x = 1;
            if (count($params)) {
                foreach ($params as $param) {
                    $this->QUERY->bindValue($x, $param);
                    $x++;
                }
            }
            // If execution is possible, exec
            if ($this->QUERY->execute()) {
                $this->RESULTS = $this->QUERY->fetchAll(PDO::FETCH_OBJ);
                $this->COUNT = $this->QUERY->rowCount();
            } else {
                $this->ERROR = true;
            }
        }
        return $this;
    }
    public function getResult()
    {
        return $this->RESULTS;
    }
    // Return the first result of the resulted query
    public function getFirstResult()
    {
        return $this->getResult()[0];
    }
    // Row count
    public function getCount()
    {
        return $this->COUNT;
    }
    public function getError()
    {
        return $this->ERROR;
    }
}
