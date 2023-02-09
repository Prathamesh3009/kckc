<?php   

class employee{
  public  $name,$age,$salary;

    public  function __construct($n,$a,$s){
        $this->name=$n;
        $this->age=$a;
        $this->salary=$s;
    }

    function show(){
        echo"The Name of the person is :- ". $this->name."<br>";
        echo"The age of the person is :- ". $this->age."<br>";
        echo"The salary of the person is :- ". $this->salary."<br>"."<br>";
    }
}
/*
class Manager extends employee {
    public $ta=1000;
    public $ha=300;
    public $total;


    function show(){
        $this->total= $this->salary + $this->ta+$this->ha;

        echo"The Name of the person is :- ". $this->name."<br>";
        echo"The age of the person is :- ". $this->age."<br>";
        echo"The salary of the person is :- ". $this->total."<br>";
    }



}
*/
$p1= new employee("Prathamesh",20,20000);
echo $p1->show();

//$p2= new manager ("Zeeshan",25,25000);
//echo $p2->show();





?>

