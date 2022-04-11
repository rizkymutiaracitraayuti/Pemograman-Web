<?php 
$nrpasc = array("1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30");asort($nrpasc);
$namaasc = array("Atun","Dece","Shelma","Citra","Fadiya","Rara","Husna","Zaskhia","Baga","Tyas","Widya","Ibram","Faza","Lia","Nizar","Rizal","Vina","Orin","Cindy","Mirna","Iksan","Nomar","Irfan","Okky","Alda","Iqbal","Irvan","Firly","Fauzi","Kartika");asort($namaasc);

$nrpdesc = array("1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30");rsort($nrpdesc);
$namadesc= array("Atun","Dece","Shelma","Citra","Fadiya","Rara","Husna","Zaskhia","Baga","Tyas","Widya","Ibram","Faza","Lia","Nizar","Rizal","Vina","Orin","Cindy","Mirna","Iksan","Nomar","Irfan","Okky","Alda","Iqbal","Irvan","Firly","Fauzi","Kartika");rsort($namadesc);

echo "<p>_________________________________________ASC_______________________________________________<p>";


function dataMhsasc($nrpasc,$namaasc){
	for ($i=0; $i <30 ; $i++) { 
	echo "<p>NRP $nrpasc[$i]<p>";
	echo "<p>Nama $namaasc[$i]<p>";
	echo "<hr>";
	
	}

}
dataMhsasc($nrpasc,$namaasc);
echo "<p>_________________________________________DESC_______________________________________________<p>";

function dataMhsDesc($nrpdesc,$namadesc){
for ($i=0; $i <29 ; $i++) { 
	echo "<p>NRP $nrpdesc[$i]<p>";
	echo "<p>Nama $namadesc[$i]<p>";
	echo "<hr>";
	
	}


}
dataMhsasc($nrpdesc,$namadesc);

 ?>