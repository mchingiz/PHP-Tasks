<?php 
// Shirket ucun Ishcilerin siyahisi yaradilmalidir, yaradilan butun ishcilerin siyahisi table sheklinde muvafiq melumatlarla ekrana cixmali ve hal hazirki gunde dogum gunu olan ishcinin melumatlari qirmizi rengle yazilmalidir.
include "db.php";
class Workers  {
	public $name;
	public $surname;
	public $position;
	public $birthDate;
	
	
	public function __construct($name,$surname,$position,$date){
		$this->name=$name;
		$this->surname=$surname;
		$this->position=$position;
		$this->birthDate=$date;
	}
	
	public function addWorker(){
		$connection = new database("localhost","root","","codeacademy");
		$connection->insert("workers","name,surname,position,birthdate","'$this->name','$this->surname','$this->position','$this->birthDate'");
	}
}

$object=new Workers("Nigar","Jafarova","student","2016-09-05");
$object->addWorker();

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		tr.happyBirthday{
			background-color: red;
		}
	</style>
</head>
<body>
<table class="table table-striped">
<thead>
	<tr>
		<td>id</td>
		<td>Ad</td>
		<td>Soyad</td>
		<td>Status</td>
		<td>Dogum tarixi</td>
	</tr>
</thead>
<tbody>
	<?php
		$newQuery=$connection->select("workers");
		while($row=mysqli_fetch_assoc($newQuery)){
			echo "<tr ";
			if($row['birthdate']==date('Y-m-d'))
				echo 'class="happyBirthday"';
			echo ">";
			foreach($row as $key => $value){
				echo "<td>$value</td>";
			}
			echo "</tr>";
		}
	?>
</tbody>
</table>
</body>
</html>