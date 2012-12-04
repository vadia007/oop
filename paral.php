<?php
class paral extends Shape{
    private $a;
    private $b;
    protected $h;

    function __construct($gustina,$a,$b,$h,$name='Паралелепіпед')
    {   $this->name=$name;
        $this->a = $a;
        $this->b = $b;
        $this->h = $h;
        parent::__construct($gustina);
    }

    function getObem(){
        return $this->a*$this->b*$this->h;
    }
}