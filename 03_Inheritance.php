<?php
class employee{
    public $name,$age,$salary;

    function __construct($n,$a,$s){
        $this->name=$n;
        $this->age=$a;
        $this->salary=$s;
    }

    function info(){
        echo"<h3>Employee Info</h3>";
        echo "Name of the employee:- ". $this->name."<br>";
        echo "Age of the employee:- ". $this->age."<br>";
        echo "Salary of the employee:- ". $this->salary."<br>";
    }
}

class manager extends employee{
    public $ta=1000;
    public $phone=300;
    public $totalsalry;


    function info(){
        $this->totalsalry=$this->salary + $this->ta + $this->phone;

        echo"<h3>Manager Info</h3>";
        echo "Name of the employee:- ". $this->name."<br>";
        echo "Age of the employee:- ". $this->age."<br>";
        echo "Salary of the employee:- ". $this->totalsalry."<br>";
    }

}



$e1= new manager("Zeeshan",25,10000);
$e2= new employee("Prathamesh",25,2000);




echo $e1->info();
echo $e2->info();



?>