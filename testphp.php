#!/usr/bin/php
<?php

# this is a comment, yo

echo "begin script ".$argv[0].PHP_EOL;#afasdkjfl;aksdjf

class Student
{
    private $name;
    private $address;
    private $gpa;
    private $year;

    public $major;

    public function __construct($name,$address="",$gpa=0.0,$year=1)
    {
	$this->name = $name;
	$this->address = $address;
	$this->gpa = $gpa;
	$this->year = $year;
    }
    
    public function printName()
    {
	echo "name: ".$this->name.PHP_EOL;
    }

    public function PrintStudent()
    {
        echo "student:".PHP_EOL; 
	echo "    name: ".$this->name.PHP_EOL;
	echo "    address: ".$this->address.PHP_EOL;
	echo "    gpa: ".$this->gpa.PHP_EOL;
	echo "    year: ".$this->year.PHP_EOL;
    }

    public function setGPA($gpa)
    {
	$this->gpa = $gpa;
    }
}

$myStudent = new Student("Steve");
$myStudent->major = "Information Technology";
$myStudent->printStudent();

/*
this 

whole
block
of comments


*/
$var = "some value";
$var = $var." some other value";
$number = 412342134;// this is is a comment
$realNumber = 12341234.1241241;
//this is also a comment, datebayo
$arr = array();
$arr[] = 5;
$arr[] = "words";
$arr[] = 5345.2342;
$arr[] = array("food","water","shelter","heart");

//print_r($arr);

//var_dump($arr);

echo "end script ".$argv[0].PHP_EOL;
?>
