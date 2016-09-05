<?php 
//sort() funksiyasindan istifade ederek tam ededlerden ibaret array-in elementlerini sort eden Class yazin.//

class sorter{
	
	public $array1=array();
	
	public function __construct($array){
		$this->array1=$array;
	}
	
	public function sort(){
		sort($this->array1);
		foreach($this->array1 as $value)
			echo $value." ";
	}
	
}

$singleArray= new sorter([5,3,8,1,9,34]);
$singleArray->sort();

?>