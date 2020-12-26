<?php
Class HomeController{
    
    function index(){
      echo file_get_contents("app/view/template/template.html");    
    }
}