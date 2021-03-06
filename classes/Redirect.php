<?php
    namespace Phplab;

    /**
    * Redirect to page
    * Warning do not put any text before this method otherwise the redirection will not work
    */
class Redirect
{
    public static function to($location = null)
    {
        if (is_numeric($location)) {
            switch ($location) {
                case 404:
                    header($_SERVER["SERVER_PROTOCOL"]." 404 Not Found");
                    include '404.php';
                    exit();
                break;
            
                case 418:
                    header($_SERVER["SERVER_PROTOCOL"]." 404 Not Found");
                    include '418.php';
                    exit();
                break;
            }
        }
        header('Location: ' . $location);
        exit();
    }
}
