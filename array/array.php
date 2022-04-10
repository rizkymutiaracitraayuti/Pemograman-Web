<?php 
$nrp = array("1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30");
$nama = array("Anisa","Bayu","Cici","Diva","Erlang","Fahmi","ilang","Hamzah","Iwan","Jessika","Kinan","Lailatul","Monika","Nando","Osma","Pandu","Qila","Riris","Sugeng","Tutik","Utami","Vivi","Wulan","Xiomin","Yuda","Zamy","Admi","Bima","Caca","Daniel");
$ipk = array("3.05","3.10","3.015","3.20","3.23");
$rambut = array("Hitam dan Lurus","Hitam dan Ikal");
$bb = array("BB 50kg dan TB 160cm","BB 50kg dan TB 160cm","BB 60kg dan TB 170cm","BB 60kg dan TB 130cm");
$aktif = array("Aktif","Cuti");

echo "<p>----------------------------------------------if-else------------------------------------<p>";
if ($nrp[0] == 1) {
	echo "<p>NRP $nrp[0]<p>";
	echo "<p>Nama : $nama[0]<p>";
	echo "<p>IPK : $ipk[0]<p>";
	echo "<p>Rambut : $rambut[0]<p>";
	echo "<p>BB : $bb[0]<p>";	
	echo "<p>aktif : $aktif[0]<p>";

}
if ($nrp[1] == 2) {
	echo "<p>NRP $nrp[1]<p>";
	echo "<p>Nama : $nama[1]<p>";
	echo "<p>IPK : $ipk[1]<p>";
	echo "<p>Rambut : $rambut[1]<p>";
	echo "<p>BB : $bb[0]<p>";	
	echo "<p>aktif : $aktif[0]<p>";

} 
if ($nrp[2] == 3) {
	echo "<p>NRP $nrp[2]<p>";
	echo "<p>Nama : $nama[2]<p>";
	echo "<p>IPK : $ipk[2]<p>";
	echo "<p>Rambut : $rambut[0]<p>";
	echo "<p>BB : $bb[2]<p>";	
	echo "<p>aktif : $aktif[0]<p>";

} 
if ($nrp[3] == 4) {
	echo "<p>NRP $nrp[3]<p>";
	echo "<p>Nama : $nama[3]<p>";
	echo "<p>IPK : $ipk[3]<p>";
	echo "<p>Rambut : $rambut[1]<p>";
	echo "<p>BB : $bb[1]<p>";	
	echo "<p>aktif : $aktif[0]<p>";

} 
if ($nrp[4] == 5) {
	echo "<p>NRP $nrp[4]<p>";
	echo "<p>Nama : $nama[4]<p>";
	echo "<p>IPK : $ipk[4]<p>";
	echo "<p>Rambut : $rambut[0]<p>";
	echo "<p>BB : $bb[2]<p>";	
	echo "<p>aktif : $aktif[0]<p>";

}  

echo "<p>----------------------------------------------switch-case------------------------------------<p>";
$favcolor = "6";

switch ($favcolor) {
	case "6":
	echo "<p>NRP : $nrp[5]<p>";
	echo "<p>Nama : $nama[5]<p>";
	echo "<p>IPK : $ipk[2]<p>";
	echo "<p>Rambut : $rambut[1]<p>";
	echo "<p>BB : $bb[1]<p>";	
	echo "<p>aktif : $aktif[0]<p>";
	case "7":
	echo "<p>NRP : $nrp[6]<p>";
	echo "<p>Nama : $nama[6]<p>";
	echo "<p>IPK : $ipk[3]<p>";
	echo "<p>Rambut : $rambut[0]<p>";
	echo "<p>BB : $bb[0]<p>";	
	echo "<p>aktif : $aktif[0]<p>";
	case "8":
	echo "<p>NRP : $nrp[7]<p>";
	echo "<p>Nama : $nama[7]<p>";
	echo "<p>IPK : $ipk[1]<p>";
	echo "<p>Rambut : $rambut[0]<p>";
	echo "<p>BB : $bb[2]<p>";	
	echo "<p>aktif : $aktif[0]<p>";
	case "9":
	echo "<p>NRP : $nrp[8]<p>";
	echo "<p>Nama : $nama[8]<p>";
	echo "<p>IPK : $ipk[4]<p>";
	echo "<p>Rambut : $rambut[1]<p>";
	echo "<p>BB : $bb[3]<p>";	
	echo "<p>aktif : $aktif[0]<p>";
	case "10":
	echo "<p>NRP : $nrp[9]<p>";
	echo "<p>Nama : $nama[9]<p>";
	echo "<p>IPK : $ipk[2]<p>";
	echo "<p>Rambut : $rambut[0]<p>";
	echo "<p>BB : $bb[1]<p>";	
	echo "<p>aktif : $aktif[0]<p>";
	break;

}

echo "<p>----------------------------------------------do-while------------------------------------<p>";

$nrpdo = 10;

do {
	echo "<p>NRP $nrp[$nrpdo]<p>";
	echo "<p>Nama : $nama[$nrpdo]<p>";
	echo "<p>IPK : $ipk[2]<p>";
	echo "<p>Rambut : $rambut[1]<p>";
	echo "<p>BB : $bb[1]<p>";	
	echo "<p>aktif : $aktif[0]<p>";
	$nrpdo++;
} while ($nrpdo <= 14);

echo "<p>----------------------------------------------foreach------------------------------------<p>";


for ($nrploop=15;$nrploop<20;$nrploop++){
	echo "<p>NRP : $nrp[$nrploop]<p>";
	echo "<p>Nama : $nama[$nrploop]<p>";
	echo "<p>IPK : $ipk[2]<p>";
	echo "<p>Rambut : $rambut[1]<p>";
	echo "<p>BB : $bb[1]<p>";	
	echo "<p>aktif : $aktif[0]<p>";

}
echo "<p>----------------------------------------------while------------------------------------<p>";


$nrpwhile = 20;

while($nrpwhile <30) {
	echo "<p>NRP : $nrp[$nrpwhile]<p>";
	echo "<p>Nama : $nama[$nrpwhile]<p>";
	echo "<p>IPK : $ipk[2]<p>";
	echo "<p>Rambut : $rambut[1]<p>";
	echo "<p>BB : $bb[1]<p>";	
	echo "<p>aktif : $aktif[0]<p>";
	$nrpwhile++;
}
?>