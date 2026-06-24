<?php
include ('inc/configdivesite.php');
//data dari lokasi

$namadivesite = $_POST['Namadivesite'];
$lokasi= $_POST['Lokasi'];
$kedalaman = $_POST['Kedalaman'];
$visibility = $_POST['Visibility'];
$jeniskarang = $_POST['Jeniskarang'];
$jenisbiolaut = $_POST['Jenisbiolaut'];
$gambar= $_POST['Gambar'];
$gambar2= $_POST['Gambar2'];
$gambar3= $_POST['Gambar3'];
$gambar4= $_POST['Gambar4'];
$gambar5= $_POST['Gambar5'];
$gambar6= $_POST['Gambar6'];
$gambar7= $_POST['Gambar7'];
$gambar8= $_POST['Gambar8'];
$gambar9= $_POST['Gambar9'];
$gambar10= $_POST['Gambar10'];
$lat = $_POST['Lat'];
$lng = $_POST['Lng'];

//display success message
		echo "<font color='green'>Data Berhasil Disimpan.";
		echo "<br/><a href='tabeldivesite.php'>Lihat Data</a>";

$aksi = $_POST['aksi'];
$Id = $_POST['Id_dive'];

 $sql = "INSERT INTO divedata(Namadivesite,Lokasi,Kedalaman,Visibility,Jeniskarang,Jenisbiolaut,Gambar,Gambar2,Gambar3,Gambar4,Gambar5,Gambar6,Gambar7,Gambar8,Gambar9,Gambar10,Lat,Lng)
  VALUES('$namadivesite','$lokasi','$kedalaman','$visibility','$jeniskarang','$jenisbiolaut','$gambar','$gambar2','$gambar3','$gambar4','$gambar5','$gambar6','$gambar7','$gambar8','$gambar9','$gambar10','$lat','$lng')";

$result = mysql_query($sql) or die(mysql_error());

?>