<?php 
//1.Ededin faktorialini hesablayan Class yazin//

class Fact{
    public  $number;
    public function __construct($number) {
        $this->number=$number;
    }
    
    public function Factorial(){
        $result=1;
        for($i=$this->number;$i>0; $i--){
            $result*=$i;
        }
        return $result;
    } 
}

$number= new Fact(6);
echo $number->Factorial();


 ?>