<?php
class Kendaraan 
{
    public $nama, $warna, $merk;

    public function berjalan (){
        return "$this->nama bisa jalan";
    }

    public function tambahkecepatan(){
        return "$this->nama bisa menambah kecepatan";
    }

    public function  getkendaraan(){
        echo "Nama : $this->nama <br> 
                Warna : $this->warna <br>   
                Merk : $this->merk";
    }
}

$objekkendaraan = new kendaraan;;
$objekkendaraan->nama = "Hijet 1000";
$objekkendaraan->warna = "Merah";
$objekkendaraan->merk = "Daihatsu";
echo $objekkendaraan->berjalan();
echo "<br>";
echo $objekkendaraan->tambahkecepatan();
echo "<br>";
echo $objekkendaraan->getkendaraan();

?>