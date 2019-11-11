<?php
require_once('Models\student.php');
$students = [];

$stu = new Student();

$stu->setId(101);
$stu->setName("aaa");

$students[] =$stu;
$students[] = new Student(102,'bbb');
$students[] = new Student(103,'ccc');



foreach($students as $s){
    echo $s->Display() . "<br/>";
}


?>