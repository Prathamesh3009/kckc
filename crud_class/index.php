<?php
include 'database.php';


$obj= new Database();
$insertion = $obj->insert('students',['student_name'=>'Ram Kumar','age'=>'20','city'=>'Goa']);
echo"Insert result is : ";
print_r($obj->getresult());


?>