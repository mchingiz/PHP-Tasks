<?php
class Telebe {
 
  public $ad;
  public $soyad;
	
  public function qarsila()
  {
	  echo "Salam $this->ad $this->soyad.";
  }
 

  public function qeydiyyataAl()
  {
	 $this->qarsila();
	 return $this;
  }
 

  public function melumatlandir()
  {
	  echo "Sizin muracietiniz qeyde alindi ve size email gonderildi. Tesekkurler";
  }
}
 
$telebe01 = new Telebe();
$telebe01 -> ad = "Memmed";
$telebe01 -> soyad = "Hesenov";

 
$telebe01 -> qeydiyyataAl() -> melumatlandir();
/* 

 verilen Telebe class struktrunu ele qurmaq lazımdır ki,

$telebe01 -> qeydiyyataAl() -> melumatlandir();

 komandasını işe saldıgınız zaman ekrana 
   "Salam Memmed Hesenov!.Sizin müracietiniz qeyde alındı ve size email gönderildi.Teşekkürler" 
 ifadesi cıxsın

 */
?>