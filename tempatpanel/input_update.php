<?php 
    require 'connection.php';
    $No = null;
    if(!empty($_GET['No']))
    {
        $No = $_GET['No'];
    }
    if($No == null)
    {
        header("Location: tabeldivesite.php");
    }
	if ( !empty($_POST))
    {
              
        // post values
		$namadivesite = $_POST['Namadivesite'];
		$lokasi= $_POST['Lokasi'];
		$kedalaman = $_POST['Kedalaman'];
		$visibility = $_POST['Visibility'];
		$jeniskarang = $_POST['Jeniskarang'];
		$jenisbiolaut = $_POST['Jenisbiolaut'];
		$gambar= $_POST['Gambar'];
		$lat = $_POST['Lat'];
		$lng = $_POST['Lng'];
		
		// Update data
        $query = "Update divedata set Namadivesite='$namadivesite',Lokasi='$lokasi',Kedalaman='$kedalaman',Visibility='$visibility',Jeniskarang='$jeniskarang',Jenisbiolaut='$jenisbiolaut',Gambar='$gambar',Lat='$lat',Lng='$lng' where No='$No'";
        mysqli_query($con,$query);
		 header("Location: tables.php");
    }
	else
	{
		
		$query = "SELECT * FROM divedata where No = $No";
		$res    = mysqli_query($con,$query);
		
		$data=mysqli_fetch_array($res);
		
		$namadivesite = $data['namadivesite'];
		$lokasi = $data['lokasi'];
		$kedalaman = $data['kedalaman'];
		$visibility = $data['visibility'];
		$jeniskarang = $data['jeniskarang'];
		$jenisbiolaut = $data['jenisbiolaut'];
		$gambar = $data['gambar'];
		$lat = $data['lat'];
		$lng = $data['lng'];
	}
?>