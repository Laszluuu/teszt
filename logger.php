<?php 

class LoggerClass
{
    public function debug(String $level, String $description){
        echo (new DateTime('now'))->format('Y-m-d')."[$level] - $description";
    }

    public function debug2(String $level, String $description){
        echo (new DateTime('now'))->format('Y-m-d')."[$level] - $description";
    }

    public function debug3(String $level, String $description){
        echo (new DateTime('now'))->format('Y-m-d')."[$level] - $description";
    }

    public function debug4(String $level, String $description){
        echo (new DateTime('now'))->format('Y-m-d')."[$level] - $description";
    }


    public function debug5(String $level, String $description){
        echo (new DateTime('now'))->format('Y-m-d')."[$level] - $description";
    }
}


?>