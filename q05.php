<?php 
	/*Asagidaki kodlar-ın outputu necə olacaq və nə üçün?*/


// 1-ci
$x = 5;
echo $x; //5 // $X=5
echo "<br />";
echo $x+++$x++; //5+6=11 $x++(5)+$x++(6)=11 Current $x=7
echo "<br />";
echo $x; // 7
echo "<br />";
echo $x---$x--;// 7-6=1 $x--(7)-$x--(6)=1 current $x=5
echo "<br />";
echo $x; // 5



//2-ci
var_dump(0123 == 123); //false // 0123 indicates octal number --> octal 0123==83 decimal //
var_dump('0123' == 123);//true// 0123 is string and when it's compared with an integer, 0s in front of string are ignored. Then 123==123
var_dump('0123' === 123);//false // === is checked for value and data type. '0123' is string, 123 is integer so answer is false.


//3-cü
$x = true and false;
var_dump($x); // true// Assignment operator has higher precedence than "and"


//4-cü $x-in dəyəri nə olacaq?
$x = 3 + "15%" + "$25"; // "15%" is string and when evaulating to integer , characters except than numeric characters are ignored. 
                        //"$25" is string but it starts with non-numeric character so it evaulates to 0.
                        //3+15+0=18



 ?>