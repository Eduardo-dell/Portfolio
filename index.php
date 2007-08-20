<?php
spl_autoload_register(function($class){
    require_once "app/controller/$class.php";
});



$core = new Core();
$core->start();