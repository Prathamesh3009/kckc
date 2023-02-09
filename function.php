<?php
function evenodd($num){
    if($num % 2==0){
        return "Even";
    }else{
        return"Odd";
    }

}
//$num=100;
echo evenodd(100);


function familyname($fname,$lname){
    echo"The first name is ". $fname . "And Last name is : ". $lname;
    echo"<br>";
}
//$fname="Prathamesh";
//$lname="sawant";
echo familyname("Zeeshan","Shaikh");


function sum($a,$b){
    $c=$a+$b;
    return $c;

}
$d=sum(4,6);
echo "The total of a + b is : ".$d;
echo"<br>";

function sum1($eng,$math,$sci){
    $s=$eng+$math+$sci;
    return $s;
}
$sum= sum1(55,65,88);
echo $sum;
function percentage($st){
    $per= $st/3;
    echo "The percentage is:". $per;
}
percentage($sum);



$a=["prathamesh"=>"1","zeeshan"=>"2","ramesh"=>"3"]

function square($n){
    return $n*$n;
}

$newarray= array_map('square',$a);
echo"<pre>";
print_r($newarray);
echo"</pre>";
?>