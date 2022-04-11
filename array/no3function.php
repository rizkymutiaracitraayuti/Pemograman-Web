<?php 
$nrp = array("1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30");

$nama = array("Atun","Dece","Shelma","Citra","Fadiya","Rara","Husna","Zaskhia","Baga","Tyas","Widya","Ibram","Faza","Lia","Nizar","Rizal","Vina","Orin","Cindy","Mirna","Iksan","Nomar","Irfan","Okky","Alda","Iqbal","Irvan","Firly","Fauzi","Kartika");asort($nama);
$dosen =  array("Desy Intan Permatasari");
$kelas=array("D4-A","D4-B" );
$nilai= array("A");
$aktif = array("HIMTI");
function Tampil($nrp,$nama,$dosen,$kelas,$nilai,$aktif){
	for ($i=0; $i <30 ; $i++) {
		echo "$nama[$i] adalah mahasiswa $kelas[0] yang aktif di $aktif[0]";
		echo "<hr>";


}
	
}
Tampil($nrp,$nama,$dosen,$kelas,$nilai,$aktif);


 ?>