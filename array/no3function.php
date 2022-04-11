<?php 
$nrp = array("1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30");

$nama = array("Atun","Dece","Shelma","Citra","Fadiya","Rara","Husna","Zaskhia","Baga","Tyas","Widya","Ibram","Faza","Lia","Nizar","Rizal","Vina","Orin","Cindy","Mirna","Iksan","Nomar","Irfan","Okky","Alda","Iqbal","Irvan","Firly","Fauzi","Kartika");asort($nama);
$dosen =  array("Desy Intan Permatasari");
$kelas=array("D4-A","D4-B" );
$nilai= array("A");
$aktif = array("HIMTI");
function Tampil($nrp,$nama,$dosen,$kelas,$nilai,$aktif){
	for ($i=0; $i <15 ; $i++) {
	echo "<p>User $nrp[$i]<p>";	
	echo "<p>Nama Mhs :	$nama[$i]<p>";
	echo "<p>Kelas Mhs	: $kelas[0]<p>";
	echo "<p>nama Dosen	: $dosen[0]<p>";
	echo "<p>Nilai :	 $nilai[0]<p>";
	echo "<p>Mahasiswa Aktif Dihimti :	$aktif[0]  <p>";
	echo "<hr>";


}
	for ($q=15; $q <30 ; $q++) {
	echo "<p>User $nrp[$q]<p>";	
	echo "<p>Nama Mhs :	$nama[$q]<p>";
	echo "<p>Nama KelasMhs	: $kelas[1]<p>";
	echo "<p>Nama Dosen	: $dosen[0]<p>";
	echo "<p>Nilai :	 $nilai[0]<p>";
	echo "<p>Mahasiswa Aktif Dihimti :	$aktif[0]  <p>";
	echo "<hr>";


}
	
}
Tampil($nrp,$nama,$dosen,$kelas,$nilai,$aktif);


 ?>