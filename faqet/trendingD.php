<?php

class trending{
    private $id;
    private $location;
    private $image;

    function __construct($id, $location, $image){
        $this->id = $id;
        $this->location = $location;
        $this->image = $image;
    }

    function getId(){
        return $this->id;
    }
    function getLocation(){
        return $this->location;
    }
    function getImage(){
        return $this->image;
    }
    function setLocation($location){
        $this->location = $location;
    }
    function setImage($image){
        $this->image = $image;
    }
}

?>
