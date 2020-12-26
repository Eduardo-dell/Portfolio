<?php
class Routes{
    private $rout = array("home","sobre","resumo");
    function getRout($pagina){
        foreach ($this->rout as $key){
            if($pagina == $key){
                return true;
            }else{
                die("<center>Página não encontrada!</center>");
            }
        }
    }
    
}