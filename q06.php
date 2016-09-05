<?php 
/*PHP OOP yaxinlasmasinnan istifade ederek iki tarix arasindaki ferqi tapin.
Qeyd: Uzun hesablamalar aparmaga ehtiyac yoxdur. maksimum 4 setirle hell edin*/

	

$date1 = new DateTime("2016-09-05");
$date2 = new DateTime("1997-04-27");
$diff = $date1->diff($date2);
echo  $diff->y . " years, " . $diff->m." months, ".$diff->d." days "; 

 ?>