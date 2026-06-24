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
				<input type="text" class="form-control" placeholder="Search" >
			</div>
		</form>
		<?php
			include"menu.php";
			?>

    </div><!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="index.php"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Input Data Dive</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Tambah Data Dive</h1>
			</div>
		</div><!--/.row-->
				
		
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Form Elements</div>
					<div class="panel-body">
					<form method="POST" action="input_data.php">
						<div class="col-md-6">
							<form role="form">
							
								<div class="form-group">
									<label for="inputnamadivesite">Nama Dive</label>
									<input type="text" class="form-control" required="required" id="inputnamadivesite" value="<?php echo !empty($namadivesite)?$namadivesite:'';?>" name="Namadivesite" placeholder="" >
								</div>
																
								<div class="form-group">
									<label for="inputlokasi">Lokasi</label>
									<input type="text" class="form-control" required="required" id="inputlokasi" value="<?php echo !empty($lokasi)?$lokasi:'';?>" name="Lokasi" placeholder="">
								</div>

								<div class="form-group">
									<label for="inputkedalaman">Kedalaman Laut</label>
									<input type="text" class="form-control" required="required" id="inputkedalaman" value="<?php echo !empty($kedalaman)?$kedalaman:'';?>" name="Kedalaman" placeholder="">
								</div>

								<div class="form-group">
									<label for="inputvisibility">Visibility</label>
									<input type="text" class="form-control" required="required" id="inputvisibility" value="<?php echo !empty($visibility)?$visibility:'';?>" name="Visibility" placeholder="">
								</div>
								
								<div class="form-group">
									<label for="inputjeniskarang">Jenis Karang</label>
									<input type="text" class="form-control" required="required" id="inputjeniskarang" value="<?php echo !empty($jeniskarang)?$jeniskarang:'';?>" name="Jeniskarang" placeholder="">
								</div>

								<div class="form-group">
									<label for="inputjenisbiolaut">Jenis Biota Laut</label>
									<input type="text" class="form-control" required="required" id="inputjenisbiolaut" value="<?php echo !empty($jenisbiolaut)?$jenisbiolaut:'';?>" name="Jenisbiolaut" placeholder="">
								</div>

								<div class="form-group">
									<label for="lat">Latitude</label>
									<input type="text" class="form-control" required="required" id="lat" value="<?php echo !empty($Lat)?$Lat:'';?>" name="Lat" placeholder="">
								</div>

								<div class="form-group">
									<label for="lng">Langitude</label>
									<input type="text" class="form-control" required="required" id="lng" value="<?php echo !empty($Lng)?$Lng:'';?>" name="Lng" placeholder="">
								</div>
								
			                    
								<div class="form-group">
									<label for="inputgambar">FOTO</label>
									<input type="file" class="form-control"  id="inputgambar" value="<?php echo !empty($gambar)?$gambar:'';?>" name="Gambar">
									<input type="file" class="form-control"  id="inputgambar" value="<?php echo !empty($gambar2)?$gambar2:'';?>" name="Gambar2">
									<input type="file" class="form-control"  id="inputgambar" value="<?php echo !empty($gambar3)?$gambar3:'';?>" name="Gambar3">
									<input type="file" class="form-control"  id="inputgambar" value="<?php echo !empty($gambar4)?$gambar4:'';?>" name="Gambar4">
									<input type="file" class="form-control"  id="inputgambar" value="<?php echo !empty($gambar5)?$gambar5:'';?>" name="Gambar5">
									<input type="file" class="form-control"  id="inputgambar" value="<?php echo !empty($gambar6)?$gambar6:'';?>" name="Gambar6">
									<input type="file" class="form-control"  id="inputgambar" value="<?php echo !empty($gambar7)?$gambar7:'';?>" name="Gambar7">
									<input type="file" class="form-control"  id="inputgambar" value="<?php echo !empty($gambar8)?$gambar8:'';?>" name="Gambar8">
									<input type="file" class="form-control"  id="inputgambar" value="<?php echo !empty($gambar9)?$gambar9:'';?>" name="Gambar9">
									<input type="file" class="form-control"  id="inputgambar" value="<?php echo !empty($gambar10)?$gambar10:'';?>" name="Gambar10">
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
      zoom: 7,
        scaleControl: true,
      center:  new google.maps.LatLng(0.639285, 122.0319069,9),
       mapTypeId: google.maps.MapTypeId.HYBRID
    };

 
    var map = new google.maps.Map(document.getElementById("map"),
        myOptions);

 var marker1 = new google.maps.Marker({
 position : new google.maps.LatLng(0.639285, 122.0319069,9),
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
