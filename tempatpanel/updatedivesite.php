<?php
session_start();
if(empty($_SESSION['kosong']))
header("location:login.php");
    
extract($_POST);
//$con=mysqli_connect('localhost','root','','db_carousel');
 
	require 'connection.php';
	if(empty($_SESSION['kosong']))
    $Id = null;
    if(!empty($_GET['Id_dive']))
    {
        $Id = $_GET['Id_dive'];
    }
    if($Id == null)
    {
        header("Location: tabeldivesite.php");
    }
	if ( !empty($_POST))
    {
              
        // post values
        $namadivesite = $_POST['namadivesite'];
		$lokasi = $_POST['lokasi'];
		$kedalaman = $_POST['kedalaman'];
		$visibility = $_POST['visibility'];
		$jeniskarang = $_POST['jeniskarang'];
		$jenisbiolaut = $_POST['jenisbiolaut'];
		$gambar = $_POST['gambar'];
		$gambar2 = $_POST['gambar2'];
		$gambar3 = $_POST['gambar3'];
		$gambar4 = $_POST['gambar4'];
		$gambar5 = $_POST['gambar5'];
		$gambar6 = $_POST['gambar6'];
		$gambar7 = $_POST['gambar7'];
		$gambar8 = $_POST['gambar8'];
		$gambar9 = $_POST['gambar9'];
		$gambar10 = $_POST['gambar10'];
		$lat = $_POST['lat'];
		$lng = $_POST['lng'];
		
		// Update data
        $query = "Update divedata set namadivesite='$namadivesite',lokasi='$lokasi',kedalaman='$kedalaman',visibility='$visibility',jeniskarang='$jeniskarang',jenisbiolaut='$jenisbiolaut',gambar='$gambar',gambar2='$gambar2',gambar3='$gambar3',gambar4='$gambar4',gambar5='$gambar5',gambar6='$gambar6',gambar7='$gambar7',gambar8='$gambar8',gambar9='$gambar9',gambar10='$gambar10',Lat='$lat',Lng='$lng' where Id_dive='$Id'";
        mysqli_query($con,$query);
		 header("Location: tabeldivesite.php");
    }
	else
	{
		
		$query = "SELECT * FROM divedata where Id_dive = $Id";
		$res    = mysqli_query($con,$query);
		
		$data=mysqli_fetch_array($res);
		
		$namadivesite = $data['namadivesite'];
		$lokasi = $data['lokasi'];
		$kedalaman = $data['kedalaman'];
		$visibility = $data['visibility'];
		$jeniskarang = $data['jeniskarang'];
		$jenisbiolaut = $data['jenisbiolaut'];
		$gambar = $data['gambar'];
		$gambar2 = $data['gambar2'];
		$gambar3 = $data['gambar3'];
		$gambar4 = $data['gambar4'];
		$gambar5 = $data['gambar5'];
		$gambar6 = $data['gambar6'];
		$gambar7 = $data['gambar7'];
		$gambar8 = $data['gambar8'];
		$gambar9 = $data['gambar9'];
		$gambar10 = $data['gambar10'];
		$lat = $data['lat'];
		$lng = $data['lng'];
	}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Tambah Data Dive Site</title>

<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/datepicker3.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDIevSvpV-ONb4Pf15VUtwyr_zZa7ccwq4&sensor=false" type="text/javascript"></script>

<!--Icons-->
<script src="js/lumino.glyphs.js"></script>

<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

</head>

<body>
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#"><span>GorontaloDiveSite</span>ADMIN</a>
				<ul class="user-menu">
						<li><a href="logout.php"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Logout</a></li>
				</ul>
			</div>
							
		</div><!-- /.container-fluid -->
	</nav>

	<div id="map" style="width:1600px;height: 500px;"></div>
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<form role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
		</form>
		<ul class="nav menu">
			<li class="active"><a href="index.php"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg> Dashboard</a></li>
			<li class="parent ">
				<a href="#">
					<span data-toggle="collapse" href="#sub-item-1"><svg class="glyph stroked chevron-down"><use xlink:href="#stroked-chevron-down"></use></svg></span> Manajemen
				</a>
				<ul class="children collapse" id="sub-item-1">
					<li>
						<a class="" href="tabeldivesite.php">
							<svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Data 
						</a>
					</li>
					<li>
						<a class="" href="inputdivesite.php">
							<svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Input 
						</a>
					</li>
				</ul>
			</li>

			<li class="parent ">
				<a href="#">
					<span data-toggle="collapse" href="#sub-item-2"><svg class="glyph stroked chevron-down"><use xlink:href="#stroked-chevron-down"></use></svg></span> Manajemen 
				</a>
				<ul class="children collapse" id="sub-item-2">
					<li>
						<a class="" href="tabelkota.php">
							<svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Data Kota
						</a>
					</li>
					<li>
						<a class="" href="inputdatakota.php">
							<svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Input Kota
						</a>
					</li>
				</ul>
			</li>

			<li class="parent ">
				<a href="#">
					<span data-toggle="collapse" href="#sub-item-3"><svg class="glyph stroked chevron-down"><use xlink:href="#stroked-chevron-down"></use></svg></span> Manajemen Berita 
				</a>
				<ul class="children collapse" id="sub-item-3">
					<li>
						<a class="" href="tabelberita.php">
							<svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Data Berita
						</a>
					</li>
					<li>
						<a class="" href="inputberita.php">
							<svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Input Berita
						</a>
					</li>
					<li>
				</ul>
			</li>


			 <li class="parent ">
                <a href="#">
                    <span data-toggle="collapse" href="#sub-item-4"><svg class="glyph stroked chevron-down"><use xlink:href="#stroked-chevron-down"></use></svg></span> Manajemen Komentar
                </a>
                <ul class="children collapse" id="sub-item-4">
                    <li>
                        <a class="" href="tabelkomentar.php">
                            <svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Data Komentar
                        </a>
                    </li>
                    <li>
                </ul>
            </li>
            <li role="presentation" class="divider"></li>
            <li><a href="logout.php"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Logout</a></li>
        </ul>

    </div><!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="index.php"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Update Data </li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Update </h1>
			</div>
		</div><!--/.row-->
				
		<form method="POST" action="updatedivesite.php?Id_dive=<?php echo $Id;?>">
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Form Elements</div>
					<div class="panel-body">
						<div class="col-md-6">
							<form role="form">
							
								<div class="form-group">
									<label for="inputnamadivesite">Nama Dive Site</label>
									<input type="text" class="form-control" required="required" id="inputnamadivesite" value="<?php echo !empty($namadivesite)?$namadivesite:'';?>" name="namadivesite" placeholder="">
								</div>
																
								<div class="form-group">
									<label for="inputlokasi">Lokasi</label>
									<input type="text" class="form-control" required="required" id="inputalokasi" value="<?php echo !empty($lokasi)?$lokasi:'';?>" name="lokasi" placeholder="">
								</div>

								<div class="form-group">
									<label for="inputkedalaman">Kedalaman Laut</label>
									<input type="text" class="form-control" required="required" id="inputkedalaman" value="<?php echo !empty($kedalaman)?$kedalaman:'';?>" name="kedalaman" placeholder="">
								</div>

								<div class="form-group">
									<label for="inputvisibility">Visibility</label>
									<input type="text" class="form-control" required="required" id="inputvisibility" value="<?php echo !empty($visibility)?$visibility:'';?>" name="visibility" placeholder="">
								</div>
								
								<div class="form-group">
									<label for="inputjeniskarang">Jenis Karang</label>
									<input type="text" class="form-control" required="required" id="inputjeniskarang" value="<?php echo !empty($jeniskarang)?$jeniskarang:'';?>" name="jeniskarang" placeholder="">
								</div>

								<div class="form-group">
									<label for="inputjenisbiolaut">Jenis Biota Laut</label>
									<input type="text" class="form-control" required="required" id="inputjenisbiolaut" value="<?php echo !empty($jenisbiolaut)?$jenisbiolaut:'';?>" name="jenisbiolaut" placeholder="">
								</div>
					
								<div class="form-group">
									<label for="lat">Latitude</label>
									<input type="text" class="form-control" required="required" id="lat" value="<?php echo !empty($lat)?$lat:'';?>" name="lat" placeholder="">
								</div>

								<div class="form-group">
									<label for="lng">Langitude</label>
									<input type="text" class="form-control" required="required" id="lng" value="<?php echo !empty($lng)?$lng:'';?>" name="lng" placeholder="">
								</div>
								<div class="form-group">
									<label for="inputgambar">FOTO</label>
									<input type="file" class="form-control" id="inputgambar" value="<?php echo !empty($gambar)?$gambar:'';?>" name="gambar" placeholder="">
									<input type="file" class="form-control" id="inputgambar" value="<?php echo !empty($gambar2)?$gambar2:'';?>" name="gambar2" placeholder="">
									<input type="file" class="form-control" id="inputgambar" value="<?php echo !empty($gambar3)?$gambar3:'';?>" name="gambar3" placeholder="">
									<input type="file" class="form-control" id="inputgambar" value="<?php echo !empty($gambar4)?$gambar4:'';?>" name="gambar4" placeholder="">
									<input type="file" class="form-control" id="inputgambar" value="<?php echo !empty($gambar5)?$gambar5:'';?>" name="gambar5" placeholder="">
									<input type="file" class="form-control" id="inputgambar" value="<?php echo !empty($gambar6)?$gambar6:'';?>" name="gambar6" placeholder="">
									<input type="file" class="form-control" id="inputgambar" value="<?php echo !empty($gambar7)?$gambar7:'';?>" name="gambar7" placeholder="">
									<input type="file" class="form-control" id="inputgambar" value="<?php echo !empty($gambar8)?$gambar8:'';?>" name="gambar8" placeholder="">
									<input type="file" class="form-control" id="inputgambar" value="<?php echo !empty($gambar9)?$gambar9:'';?>" name="gambar9" placeholder="">
									<input type="file" class="form-control" id="inputgambar" value="<?php echo !empty($gambar10)?$gambar10:'';?>" name="gambar10" placeholder="">
								</div>


															
								<button type="submit" class="btn btn-primary">Submit</button>
								<button type="reset" class="btn btn-default">Reset</button>
							</div>
						</form>
					</div>
				</div>
			</div><!-- /.col-->
		</div><!-- /.row -->
		
	</div><!--/.main-->

	<script type="text/javascript">
    document.getElementById('reset').onclick= function() {
        var field1= document.getElementById('lng');
 var field2= document.getElementById('lat');
        field1.value= field1.defaultValue;
 field2.value= field2.defaultValue;
    };
</script>    
<script type="text/javascript">
     function updateMarkerPosition(latLng) {
  document.getElementById('lat').value = [latLng.lat()];
  document.getElementById('lng').value = [latLng.lng()];
  }

    var myOptions = {
      zoom: 10,
        scaleControl: true,
      center:  new google.maps.LatLng(0.639285, 122.0319069),
      mapTypeId: google.maps.MapTypeId.ROADMAP
    };

 
    var map = new google.maps.Map(document.getElementById("map"),
        myOptions);

 var marker1 = new google.maps.Marker({
 position : new google.maps.LatLng(0.639285, 122.0319069),
 title : 'lokasi',
 map : map,
 draggable : true
 });
 
 //updateMarkerPosition(latLng);

 google.maps.event.addListener(marker1, 'drag', function() {
  updateMarkerPosition(marker1.getPosition());
 });
</script>

	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script>
		!function ($) {
			$(document).on("click","ul.nav li.parent > a > span.icon", function(){		  
				$(this).find('em:first').toggleClass("glyphicon-minus");	  
			}); 
			$(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
		}(window.jQuery);

		$(window).on('resize', function () {
		  if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
		})
		$(window).on('resize', function () {
		  if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
		})
	</script>	
</body>

</html>

