<?php
session_start();
if(empty($_SESSION['langue'])){
	$_SESSION['langue']="fr";
}
//print_r($_SESSION['adminLog']);
if(empty($_SESSION['adminLog'])){
	//strpos cherche la premiere position de /
	$page = substr($_SERVER['PHP_SELF'], strrpos($_SERVER['PHP_SELF'], '/')+1, strlen($_SERVER['PHP_SELF']));//strrpos($_SERVER['PHP_SELF'],'.')-1
	if($page!='index.php'){
		header('Location:index.php');
	}
}

/* MEMORISATION DES CHEMINS DE CLASSES */
$_SESSION['classPath'] = dirname(dirname(__FILE__))."/classes/";
$_SESSION['libsPath'] = dirname(dirname(__FILE__))."/libs/";
//echo "============>".$_SESSION['classPath'];
//
/*echo '$_SESSION[\'classPath\']='. $_SESSION['classPath'];*/
/* CHARGEMENT DES CLASSES PHP */
define('CLASSES_DIR', $_SESSION['classPath']);
define("CHEMIN", "c:/inetpub/wwwroot/base_documentaire_v2/ETP-BASE-DOC");
define("CHEMIN1", "c:\\inetpub\\wwwroot\\base_documentaire_v2\\ETP-BASE-DOC");
define("ETP", "e:\\ETP-BASE-DOC\\");
define("EXTRACTION", "e:/Extraction/");
/*function __autoload($classname){
	require_once(CLASSES_DIR.$classname.'.class.php');
}*/

function my_autoloader($class) {
    include $_SESSION['classPath'] . $class . '.class.php';
}
spl_autoload_register('my_autoloader');


?>