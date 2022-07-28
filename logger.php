<?php 

class LoggerClass
{
    private $date;   
    private $level;
    private $description;

    public function __construct(String $level, String $description)
    {
        $this->level = $level;
        $this->description = $description;
        $this->date = new DateTime('now');
    }

    public function debug(){
        echo "Debug";
    }
}


?>