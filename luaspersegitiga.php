<?php 
class Persegipanjang{
    public $luas;
    public $panjang;
    public $lebar;

    private function hitungLuas(){
        $this-> luas = $this -> panjang * $this -> lebar;
    }
    private function setPanjang($panjang, $lebar){
        $this -> panjang = $panjang;
        $this -> lebar = $lebar;
        $this -> hitungLuas();
    }
    public function __construct($panjang=10, $lebar=5){
        $this -> setPanjang($panjang, $lebar);
    }
    public function getpanjang(){
        return $this->panjang;
        return $this->lebar;
    }
    public function getluas(){
        return $this ->luas;
    }
}
//nilai panjang default = 10, lebar = 5
$persegipj = new Persegipanjang();
echo "<br>====================================";
echo "<br>Luas Persegi Panjang = p x l";
echo "<br>====================================";
echo "<br>Luas Persegi Panjang<br>nilai default panjang (10), lebar 5 : ", $persegipj->getLuas()." cm2";
$persegipj = new Persegipanjang(20,8);
echo "<br>Luas Persegi Panjang<br>yang panjang 20 cm lebar 8cm : ", $persegipj->getLuas(), " cm2";

class Segitiga{
    public $luas;
    public $alas;
    public $tinggi;

    private function luasegi3(){
        $this->luas = 1/2 * $this->alas * $this->tinggi;
    }
    private function setkali($alas, $tinggi){
        $this-> alas = $alas;
        $this-> tinggi = $tinggi;
        $this -> luasegi3();
    }
    public function __construct($alas=20, $tinggi=6){
        $this -> setkali($alas, $tinggi);
    }
    public function getkali(){
        return $this-> alas;
        return $this -> tinggi;
    }
    public function getluas3(){
        return $this ->luas;
    }
}
//nilai alas default = 20, tinggi = 6
$segi3 = new Segitiga();
echo "<br>====================================";
echo "<br>Luas Segitiga = 1/2 x a x t";
echo "<br>====================================";
echo "<br>Luas Segitigaa <br>nilai default alas (20), tinggi 6 : ", $segi3->getLuas3()." cm2";
$segi3 = new Segitiga(30,8);
echo "<br>Luas Segitigaa <br>yang alas 30 cm tinggi 8 cm : ", $segi3->getluas3(), " cm2";
