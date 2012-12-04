<?php
include_once("paral.php");
class kub extends paral{
    function __construct($gustina,$h,$name='Куб')
    {
        $this->name = $name;
        $this->h = $h;
        $this->gustina = $gustina;

    }
    function getObem(){
        return $this->h*$this->h*$this->h;
    }
}