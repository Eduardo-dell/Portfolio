<?php
 spl_autoload_register(function($class) {
 	require "app/controller/".$class.".php";
 
 });
    require "app/util/variables/routes.php";
   $core = new Core ();