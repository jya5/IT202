#!/usr/bin/php
<?php

#this is a comment 
// this is also a comment 

echo "begin script".$argv[0].PHP_EOL;

$var = "some value";

$number = 12345;
$arr = array();
$arr[] = 5;
$arr[] = "words";
$arr[] = 34.56;
$arr[] = array("food", "water", "shelter", "heart");

//print_r($arr);

echo "end script".$argv[0].PHP_EOL; 
#phpeol is a reserved word that is used to find the new line character in a cross platform way. 

var_dump($arr); #alternaitve print besides echo and print r

class Student   #php supports classes,it is effectively creating data which holds functions
{

	private $name; #private variable 
	private $address;
	private $gpa;
	private $year;
	public $major;

	
		
	public function __construct($name) #always a public contructor
		{ 
		$this->name=$name; 
		}

	public function printName()
	{
	echo "name: ".$this->name.PHP_EOL;
	}

	public function setGPA($gpa)
	{
	$this->gpa = $gpa;
	}
}

	$myStudent = new Student("Steve");
	$myStudent->setGPA(2.3);
	$myStudent->major = "Information Technology";
	$myStudent->gpa=4.0;
	$myStudent->printName();

#class can be viewed public or private



/*
this is a 
block of 
comments
*/


?>






















