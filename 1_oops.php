<?php

//define class 
class calculation{      
    //properties
    public $a,$b,$c;

    //methods
    function sum($a,$b){
        $this->c = $a + $b;
        return $this->c;
    
    }
    function sub($a,$b){
        $this->c=$a-$b;
        return $this->c;
    }
}
//objects 
$c1= new calculation();     
//$c1->a=10;
//$c1->b=20;


$c2= new calculation();
//$c2->a=50;
//$c2->b=35;

echo"The sum of c1:-". $c1->sum(10,20) ."<br>";
echo"Substraction of c2:-". $c2->sub(50,10);

class example {
    public $value;
    function setvalue($value){
        $this->value=$value;
    }
    function getvalue(){
        if($this->value>0){
            return "Positive";
        }else{
            return "Negative";
        }
    }
}
    $example= new example();
    $example->setvalue(10);
    echo $example->getvalue();
    echo"<br>";


    // example 2

    class example1{
        public $value1;
        function setvalue1($value1){
            $this->value1=$value1;
        }
        public function checkvalue(){
            if($this->value1>0){
                return"The Number Is Positive";
            }else{
                return" The Number Is Negative";
            }
        }
        
    }
    $example1= new example1();
    $example1->setvalue1(-70);
    echo $example1->checkvalue();

?>