<?php
 
 //loops execute a block of code a specified number of times.

/*
for 
while 
do..while
foreach
*/
	//for loop
/*
	for ($i=0; $i < 10; $i++) { 
		echo'number' .$i;
		echo '<br>';
	}
	*/

	//while loop
/*
	$i =0;

	while ($i < 10) {
		echo $i;
		echo '<br>';
		$i++;
	}
*/
	  //DO...while
/*
	$i = 0;
	do{
		echo $i;
		echo '<br>';
		$i++;
	}
	while ($i < 10);
	*/ 
	//foreach
	/*
	$people =   array('Hanzla','Akram','Tahir','shabaz');
    foreach ( $people as $person) {
    	echo $person;
    	echo '<br>';
    }

*/
    $people =   array('Hanzla'=>'hanzla@gmail.com','Akram'=>'Akram@gmail.com','Tahir'=>'Tahir@gmail.com');
    foreach ( $people as $person =>$email) {
    	echo $person.':'.$email;
    	echo '<br>';
    }
?>