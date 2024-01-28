<?php

class Packages{
    private $id;
    private $emri;
    private $pershkrimi;
    private $oferta1;
    private $oferta2;
    private $oferta3;
    private $imazhi;

    function __construct($id, $emri, $pershkrimi, $oferta1, $oferta2, $oferta3, $imazhi){
        $this->id = $id;
        $this->emri = $emri;
        $this->pershkrimi = $pershkrimi;
        $this->oferta1 = $oferta1;
        $this->oferta2 = $oferta2;
        $this->oferta3 = $oferta3;
        $this->imazhi = $imazhi;
    }

    function getId(){
        return $this->id;
    }
    function getEmri(){
        return $this->emri;
    }
    function getPershkrimi(){
        return $this->pershkrimi;
    }
    function getOferta1(){
        return $this->oferta1;
    }
    function getOferta2(){
        return $this->oferta2;
    }
    function getOferta3(){
        return $this->oferta3;
    }
    function getImazhi(){
        return $this->imazhi;
    }
    function setEmri($emri){
        $this->emri = $emri;
    }
    function setPershkrimi($pershkrimi){
        $this->pershkrimi = $pershkrimi;
    }
    function setOferta1($oferta1){
        $this->oferta1 = $oferta1;
    }
    function setOferta2($oferta2){
        $this->oferta2 = $oferta2;
    }
    function setOferta3($oferta3){
        $this->oferta3 = $oferta3;
    }
    function setImazhi($imazhi){
        $this->imazhi = $imazhi;
    }
}

?>
