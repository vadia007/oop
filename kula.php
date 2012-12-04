<?php
class kula extends Shape{
    private $r;
    function __construct($gustina,$r,$name="Куля"){
        $this->name = $name;
        $this->r = $r;
        parent::__construct($gustina);
    }
    function getObem(){
        return 4/3*pi()*$this->r*$this->r*$this->r;
    }
}