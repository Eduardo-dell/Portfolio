<?php
Class Core{
    
    private $url;
    private $object;
    function start(){
        if(!empty($_GET['pagina'])){
            $this->url = ucfirst($_GET['pagina'])."Controller";
            
        }
        else 
            $this->url = "HomeController";
        
       // call_user_func_array( array($this->url,index) , array());
        $this->object = new $this->url();
        $this->object->index();
    }
}