<?php
//A function is a block of statements that can be used repeatedly in a program.

function simplefunction(){
	echo 'hello world';
}

//simplefunction();

//function with param
 function sayHello($name){
 	echo "Hello $name<br>";
 }
  // sayHello("Hanzla");
   //sayHello("Akram");
   //sayHello("Tahir");

 function addNumbers($num1, $num2){
 	echo $num1 + $num2;
 }

   addNumbers(2,3);
?>