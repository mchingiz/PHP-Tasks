<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		input{
			display:block;
			padding:5px 10px;
			margin:5px;
		}
		input[type="radio"]{
			display:inline-block;
		}
		p{
			background:gray;
		}
	</style>
</head>
<body>
<form action="" method="post">
	<input type="number" name="num01">
	<input type="number" name="num02">
	<span>+</span><input type="radio" name="add">
	<span>-</span><input type="radio" name="substract">
	<span>*</span><input type="radio" name="multiply">
	<span>/</span><input type="radio" name="divide" >
	<input type="submit" value="Hesabla" name="submit">
	<p>Netice:</p>
</form>
</body>
</html>

<?php 

if(isset($_POST["submit"])){
    $num1=$_POST["num01"];
    $num2=$_POST["num02"];
    
    if(isset($_POST["add"])){   echo $num1+$num2;   }
    if(isset($_POST["substract"])){   echo $num1-$num2;   }
    if(isset($_POST["multiply"])){   echo $num1*$num2;   }
    if(isset($_POST["divide"])){  
        if($num2!=0){ echo $num1/$num2;}
        else{ echo "0-a bolmek olmaz";}
    }
    
}

// forması yuxarıda verilen besit hesablama masını yazın 
	
?>