<?php

//An array is a special variable, which can hold more than one value at a time.
/*
there are three types of arrays:

Indexed arrays - Arrays with a numeric index
Associative arrays - Arrays with named keys
Multidimensional arrays - Arrays containing one or more arrays

*/
//indexed
$people =   array('Hanzla','Akram','Tahir','shabaz');
$ids = array(12, 23, 34);
$cars =['honda','toyota','ford'];

//echo $people[2]
//echo $ids [1];
//echo $cars [1];

//Associative arrays
$people =   array('Hanzla'=> 35,'Akram' =>32,'Tahir' =>37,);
$ids = [12 =>'Hanzla', 23 =>'Akram', 34 =>'Tahir'];
//echo $people['Akram'];
//echo $ids[23];

//Multi-dimensional

$cars = array(
      array('Honda',20,10),
         array('toyota',30,20),
            array('ford',23,12),
);
echo $cars[1][2];
?>