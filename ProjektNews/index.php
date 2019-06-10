<?php
/**
 * Created by PhpStorm.
 * User: uczen
 * Date: 2018-09-19
 * Time: 08:46
 */
session_start();



if(!isset($_REQUEST['c']) && !isset($_REQUEST['f'])){
    $_REQUEST['c'] = "HomePage";
    $_REQUEST['f'] = "generateSortowanieXnaStronie";
}
$controller = $_REQUEST['c'];
$function = $_REQUEST['f'];
echo "<script src=\"./Jquery/jquery-3.3.1.js\" type=\"text/javascript\"></script>";
//unset($_REQUEST['f']);
//unset($_REQUEST['c']);

$parameters = $_REQUEST;
include_once "./Controllers/Controller.php";
include_once "./Models/Model.php";
include "./Controllers/$controller".".php";

$o = new $controller();
$o->$function($parameters);