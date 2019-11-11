<?php
require_once('Models\student.php');

$stu = new Student();

$stu->setId(101);
$stu->setName("aaa");


echo "Id: " . $stu->getId();
echo "Name: ". $stu->getName();


?>