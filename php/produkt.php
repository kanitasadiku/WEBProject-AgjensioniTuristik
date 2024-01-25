<?php

class Hotel {
    private $hotel_id;
    private $emri;
    private $pershkrimi;
    private $cmimi;
    private $imazhi;

    function __construct($hotel_id, $emri, $pershkrimi, $cmimi, $imazhi) {
        $this->hotel_id = $hotel_id;
        $this->emri = $emri;
        $this->pershkrimi = $pershkrimi;
        $this->cmimi = $cmimi;
        $this->imazhi = $imazhi;
    }

    function getHotelId() {
        return $this->hotel_id;
    }

    function getEmri() {
        return $this->emri;
    }

    
    function getPershkrimi() {
        return $this->pershkrimi;
    }

    
    function getCmimi() {
        return $this->cmimi;
    }

    
    function getImazhi() {
        return $this->imazhi;
    }
    function setEmri($emri) {
        $this->emri = $emri;
    }

   
    function setPershkrimi($pershkrimi) {
        $this->pershkrimi = $pershkrimi;
    }

    function setCmimi($cmimi) {
        $this->cmimi = $cmimi;
    }

    function setImazhi($imazhi) {
        $this->imazhi = $imazhi;
    }

}