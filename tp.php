<?php
/*
    class human {
        public $genders= array("Men","Women","Other");

        public function getFeatures($gender){
            if($gender=="Male"){
                echo"Male will be men";
            }else if($gender=="Women"){
                echo"Women  will be Women";
            }else if ($gender=="Other"){
                echo"Other";
            }

        }
    }

    class male extends human {
        public $gender="Other";

        public function getMalefeatures(){
            $this->getFeatures($this->gender);
        }
    }

    $e1= new male();
    echo $e1->getFeatures("Men");

    echo $e1->getMalefeatures();


    abstract class employee{
        public $name;

        function __construct($n){
            $this->name=$n;
        }
        abstract public function details(){
            
        }
        
    }
    class person extends employee{

        public function details(){
            return"My salary is ".$this->name;
        }
    }

$s1= new person();
$s1->name="Prathamesh";
echo $s1->details();
*/

class abc{

    public function __construct(){
        echo"This is construct method\n";
    }
    public function hello(){
        echo"Helllo World\n";
    }
    public function __destruct(){
        echo"This is Distruct method\n";
    }
}
$a= new abc();
$a->hello();

?>