<?php
   // echo date('d');  //day
   // echo date('m');  //month
   // echo date('Y');  //year
   // echo date('I');  //day of the week
   
   //echo date('Y/m/d');
   //echo date('Y-m-d');
   

     // echo date('h');  //hour
   // echo date('i');  //min
   // echo date('s');  //second
   // echo date('a');  //AM or PM

   //set time zone
    date_default_timezone_set('America/new_york');

    //echo date ('h:i:sa');



    $timestamp = mktime(10,14,54,9,10,1981);

     echo $timestamp;
?>