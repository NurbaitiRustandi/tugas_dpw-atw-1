<?php

 class hewan{

 	public $jumlah_kaki, $kemampuan, $suara;
 	public function cetakjumlah_kaki(){
 		return $this->jumlah_kaki;
 	}
 	public function kemampuan(){
 		return "kemampuan dari hewan ini adalah ".$this->kemampuan;
 	}
 }


 class kucing extends hewan {

 }

 class angsa extends hewan {
 	function canfly(){
 		echo "bisa terbang";
 	}
 }

class anjing extends hewan {

 }

 class elang extends hewan {
 	function canfly(){
 		echo "bisa terbang";


 $cimot = new Kucing;
 $cimot->jumlah_kaki = 4;
 echo "cimot adalah kucing <br>";
 echo "punya kaki sebanyak : ".cimot->jumlah_kaki."<br>";
 $cimot->kemampuan = "tidak_bisa_terbang";
 $cimot->suara = "meoooong";

 $momo = new anjing;
 $momo->jumlah_kaki = 4;
 echo "momo adalah anjing <br>";
 echo "punya kaki sebanyak : ".momo->jumlah_kaki."<br>";
 $momo->kemampuan ="tidak_bisa_terbang";
 $momo->suara ="guk guk";

$zya = new elang;
$zya->jumlah_kaki =2;
echo "zya adalah elang <br>";
echo "punya kaki sebanyak : ".zya->jumlah_kaki."<br>";
$zya->kemampuan ="bisa_terbang";
$zya->suara ="miiiip";

$masha = new angsa;
$masha->jumlah_kaki =2;
echo "masha adalah angsa <br>";
echo "punya kaki sebanyak : ".masha->jumlah_kaki."<br>";
$masha->kemampuan ="bisa_terbang";
$masha->suara ="kwaaak";



