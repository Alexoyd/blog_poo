<?php

use App\Config;

session_start();
require '../app/Autoloader.php';
App\Autoloader::register();

$config = Config::getInstance();
var_dump($config);














/** --------------------------------------------  */
/**
if(isset($_GET['p'])){
    $p = $_GET['p'];
} else {
    $p = 'home';
}
 **/ //remplacé par :
/*
$p = $_GET['p'] ?? 'home';


ob_start();
if($p === 'home') {
    require '../pages/home.php';
} elseif($p === 'article'){
    require '../pages/single.php';
} elseif($p === 'categorie'){
    require '../pages/categorie.php';
}
$content = ob_get_clean();
require '../pages/templates/default.php';
*/
