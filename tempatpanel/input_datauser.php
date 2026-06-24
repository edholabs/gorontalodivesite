<?php

include ('inc/configrestoran.php');
//data dari lokasi

$username = $_POST['Username'];
$password = $_POST['Password'];
$namalengkap = $_POST['Namalengkap'];
$email = $_POST['Email'];

//display success message
		echo "<font color='green'>Data Berhasil Disimpan.";
		echo "<br/><a href='login.php'>Login</a>";

$aksi = $_POST['aksi'];
$Id = $_POST['Id_admin'];

 $sql = "INSERT INTO admin(Username, Password, Namalengkap, Email)
  VALUES('$username','$password','$namalengkap','$email')";

$result = mysql_query($sql) or die(mysql_error());

?>