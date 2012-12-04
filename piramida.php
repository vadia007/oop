<?php
include_once("paral.php");
class piramida extends paral{
    function __construct($gustina,$a,$b,$h,$name='Піраміда')
    {
        parent::__construct($gustina,$a,$b,$h,$name='Піраміда');
    }

    function getObem(){
        return 1/3*parent::getObem();
    }
}