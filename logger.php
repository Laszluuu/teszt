<?php 

class LoggerClass
{
    public function debug(String $level, String $description){
        echo (new DateTime('now'))->format('Y-m-d')."[$level] - $description";
    }
}


?>