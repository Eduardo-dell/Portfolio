<?php
Class Core{
    
    private $url;
    private $object;
    function start(){
        //if(isset($_GET['pagina'])){
        if(!empty($_GET['pagina'])){
            $this->object = new Routes();
            
            if($this->object->getRout($_GET['pagina'])){
               echo "True"; 
            }else{
               echo "False";
            }
            $this->url = ucfirst($_GET['pagina'])."Controller";
            
        }
        else 
            $this->url = "HomeController";
        
       // call_user_func_array( array($this->url,index) , array());
        
        $this->object = new $this->url();
        $this->object->index();
     //}
   }
}