<?php
class person{
    public $name,$age;

    function __construct($n="Prathamesh",$a=50){
        $this->name=$n;
        $this->age=$a;
    }
    function show(){
        echo $this->name ."-".$this->age;
    }
}
$p1= new person("Prathamesh",25);
$p2= new person("Ramesh",15);

echo $p1->show() ;
echo"<br>";

echo $p2->show();

?>