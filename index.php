<?php
    namespace Phplab;

    require_once 'init.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP lab</title>
    <link rel="stylesheet" href="normalize.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<h1>Hello There ! <small>Welcome to the phplab.</small></h1>
    <?php
    
    // phpinfo();

    $playerLvl = array(
        'Skullmasher' => 'Master Guardian I',
        'Barbeuh' => 'Master Guardian I',
        'Pinax' => 'Master Guardian II',
        'MakBAN' => 'Gold Nova 4'
    );

    echo "<h3>Joueur de CS:GO et Level</h3>";
    foreach ($playerLvl as $key => $value) {
        echo $key . ' rank : ' . $value . '<br>';
    }
    ?>
    <h3>Get player profile</h3>
    <form method="post" action='index.php'>
        <input type="text" placeholder='Type a player name' name="player_name">
        <select name="select_player" id="select-player">
            <option value="Skullmasher">Skullmasher</option>
            <option value="Barbeuh">Barbeuh</option>
            <option value="Pinax">Pinax</option>
        </select>
        <input type="submit" value="Go !">
    </form>

    <div id="return-player-profile">
    <?php
    if (isset($_POST["player_name"]) || isset($_POST["select_player"])) {
        if (isset($_POST["player_name"]) && !empty($_POST["player_name"])) {
            $player = $_POST["player_name"];
            echo 'Player : ' . $player . ' is at rank : ' . $playerLvl[$player];
        } else {
            $player = $_POST["select_player"];
            echo 'Player : ' . $player . ' is at rank : ' . $playerLvl[$player];
        }
    }

    ?>
    <h3>Calculatrice</h3>
    <form action="index.php" method="post">
        <input type="text" name="val1" placeholder="Premier nombre">
        <select name="calcul_operator" id="">
            <option value="Multiplier">Multiplier</option>
            <option value="Diviser">Diviser</option>
            <option value="Additionner">Additionner</option>
            <option value="Soustraire">Soustraire</option>
        </select>
        <input type="text" name="val2" placeholder="Deuxième nombre">
        <input type="submit" value="Lancer le calcul">
    </form>
    <div id="return-result-cacul">
        <?php
        if (isset($_POST["val1"]) && isset($_POST["calcul_operator"]) && isset($_POST["val2"])) {
            $operator_list = array(
                'Multiplier' => '*',
                'Diviser' => '/',
                'Additionner' => '+',
                'Soustraire' => '-'
            );
            foreach ($operator_list as $key => $value) {
                if ($_POST['calcul_operator'] === $key) {
                    $operator = $value;
                }
            }
            if (is_numeric($_POST['val1']) && is_numeric($_POST['val2'])) {
                $result = calculate_string($_POST['val1'] . $operator . $_POST['val2']);
                echo "Le résultat est : " . $result . ".";
            } else {
                echo "Une des deux valeurs n'est pas numérique.";
            }
        }
        ?>
    <h3>Db wrapper test</h3>
        <?php $db = Db::getInstance();
        $db->query('select * from actualite');
        if ($db->getError()) {
            echo($db->getError());
        } else {
            // echo($db->getCount());
            echo '<pre>';
            print_r($db->getFirstResult());
            echo '</pre>';

            for ($i=0; $i < $db->getCount(); $i++) {
                $actualite = $db->getResult()[$i];
                echo '<p>' . $actualite->titre . ' <br> ' . $actualite->description . '</p>';
            }
            
        }?>
    </div>
    </div>
</body>
</html>