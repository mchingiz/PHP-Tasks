<?php 
	
//   Neticesi aşağıdakılar olan funksiya yazın

	/*
		ekranaYaz(); 								-->Boş
		ekranaYaz('salam'); 						-->arg1: salam
		ekranaYaz('salam', 'heci', 'necesen');		-->arg1: salam,arg2: heci,arg3: necesen


	*/

/*function ekranaYaz( ...$words){
    foreach($words as $key->$value){
        echo $value."<br>";
    }
}

ekranaYaz('salam');*/


function ekranaYaz(...$words) {
    foreach ($words as $value) {
        echo $value." ";
    }
}
ekranaYaz();
echo "<br>";
ekranaYaz('salam');
echo "<br>";
ekranaYaz('salam','heci','necesen');
?>