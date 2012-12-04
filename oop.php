<?php
header('Content-Type: text/html; charset=utf-8');
class Shape{
    protected $name;
    protected $gustina;

    function __construct($gustina)
    {
        $this->gustina = $gustina;
    }

    function getMass(){
        return $this->gustina*$this->getObem();
    }
    function getName(){
       return $this->name;
    }
    function getObem(){}

}
function __autoload($name){
    include("$name.php");
}

$paralelepiped= new paral(0.9,3,3,4);
echo $paralelepiped->getName()."\n<br>";
echo "Обэм = ".$paralelepiped->getObem()."\n<br>";
echo "Масса  = ".$paralelepiped->getMass()."\n\n<br><br>";

$kub= new kub(0.5,7);
echo $kub->getName()."\n<br>";
echo "Обэм = ".$kub->getObem()."\n<br>";
echo "Масса  = ".$kub->getMass()."\n\n<br><br>";

$piramida= new piramida(0.9,3,3,4);
echo $piramida->getName()."\n<br>";
echo "Обэм = ".$piramida->getObem()."\n<br>";
echo "Масса  = ".$piramida->getMass()."\n\n<br><br>";

$kula= new kula(0.4,5);
echo $kula->getName()."\n<br>";
echo "Обэм = ".$kula->getObem()."\n<br>";
echo "Масса  = ".$kula->getMass()."\n<br><br>";

$n=5;
echo "<p style='text-align: center;'> Початкова таблиця";
echo "<table border='1px' align='center'>";
for($i = 0; $i < $n; $i++){
    echo "<tr>";
        for($j = 0; $j < $n; $j++){
            echo "<td>";
                switch (rand(0,3)){
                    case 0: echo $paralelepiped->getName()."<br>";
                            echo "Масса  = ".$paralelepiped->getMass();
                            $mass[]=$paralelepiped;
                        break;
                    case 1:echo $kub->getName()."<br>";
                            echo "Масса  = ".$kub->getMass();
                            $mass[] = $kub;
                        break;
                    case 2:echo $piramida->getName()."<br>";
                            echo "Масса  = ".$piramida->getMass();
                            $mass[] = $piramida;
                        break;
                    case 3:echo $kula->getName()."<br>";
                            echo "Масса  = ".$kula->getMass();
                            $mass[] = $kula;
                        break;
                }
            echo "</td>";
        }
    echo "</tr>";
}
echo "</table>";


function cmp($a, $b)
{
    if ($a->getMass() == $b->getMass()) {
        return 0;
    }
    return ($a->getMass() < $b->getMass()) ? -1 : 1;
}

usort($mass, "cmp");

$count = 0;
echo "<p style='text-align: center;'> Відсортована таблиця";
echo "<table border='1px' align='center'>";
for($i = 0; $i < $n; $i++){
    echo "<tr>";
    for($j = 0; $j < $n; $j++){
        echo "<td>";
            echo $mass[$count]->getName()."<br>";
            echo $mass[$count]->getMass();
            $count++;
        echo "</td>";
    }
    echo "</tr>";
}
echo "</table>";