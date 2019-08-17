<?php

    /*conditional
     ==
     ===
     <
     >
     <=
     =>
     !=
     !==
     */
/*
     $num = 6;
     if($num ==5){
     	echo '5 passed';
     } elseif ($num==6) {
     	echo '6 passed';
     } else {
     	echo 'did not passed';
     }
*/
     $favColor = 'blue';
     switch ($favColor) {
     	case 'red':
     	 echo 'your fav color is red';
     		break;
     		case 'blue':
     	 echo 'your fav color is blue';
     		break;
     	case 'green':
     	 echo 'your fav color is green';
     		break;
     		default:
     		echo 'your fav color is something else';
     	
     	
     }
?>