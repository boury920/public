<?php

class name{
	public $s1 = 0;
	public $s2 = 1; 

public function __construct($a,$b){
	$this ->s1 = $a;
	$this ->s2 = $b;

}
public function s1($a){
   $this ->s2();
} 
public function s2(){
   echo $this ->s1;
}
}
$name = new name("a","b");
$name ->s1(45);
?>