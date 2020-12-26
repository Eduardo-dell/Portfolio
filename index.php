<?php
spl_autoload_register(function($class){
    require_once "app/controller/$class.php";
});
    require_once 'app/util/Routes.php';


$core = new Core();
$core->start();