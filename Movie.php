<?php

class Movie {
    public $name;
    public $releasedate;
    public $actors;
    public $price;
    public $code;
    static $counter = 0;


public function __construct($_name, $_releasedate){

    $this->name = $_name;
    $this->releasedate = $_releasedate;
    self::$counter++;
}

public function getInfo(){
    return "Nome del film: ".$this->name." Data di rilascio: ".$this->releasedate;
}





}


?>