<?php
session_start();
if(empty($_SESSION['kosong']))
header("location:login.php");
    
extract($_POST);
//$con=mysqli_connect('localhost','root','','db_carousel');

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Webgis Tabel</title>

<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/datepicker3.css" rel="stylesheet">
<link href="css/bootstrap-table.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">


    <link rel="stylesheet" href="css2/font-awesome.min.css">
 
    <link href="css2/datatable-bootstrap.css" rel="stylesheet">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

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
				<a class="navbar-brand" href="#"><span>GorntaloDiveSite</span>ADMIN</a>
				<ul class="user-menu">
						<li><a href="logout.php"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Logout</a></li>
				</ul>
			</div>
							
		</div><!-- /.container-fluid -->
	</nav>
		
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<form role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
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
				<li class="active">Tabel Data Dive Site</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
        <div class="col-md-12">
          <div class="panel panel-info panel-dashboard">
            <div class="panel-heading centered">
              <h2 class="panel-title"><strong>DATA DIVE SITE</strong></h2>
            </div>
            <div class="panel-body">
              <table class="table table-bordered table-striped table-admin">
              <thead>
                <tr>
					<th width="0%">Id</th>
					<th width="20%">Nama Dive Site</th>
					<th width="20%">Lokasi</th>
					<th width="9%">Kedalaman</th>
					<th width="9%">Visibility</th>
					<th width="30%">Jenis Karang</th>
					<th width="30%">Jenis Biota Laut</th>
					<th width="15%">Action</th>
				</tr>
				<tbody>   
				<?php
					include 'connection.php';
					$query  = "select * from divedata order by id_dive limit 1000";
					$res    = mysqli_query($con,$query);
					while($row=mysqli_fetch_array($res)){
						echo '<tr>';
						echo '<td>'. $row['Id_dive'] . '</td>';
						echo '<td>'. $row['namadivesite'] . '</td>';
						echo '<td>'. $row['lokasi'] . '</td>';
						echo '<td>'. $row['kedalaman'] . '</td>';
						echo '<td>'. $row['visibility'] . '</td>';
						echo '<td>'. $row['jeniskarang'] . '</td>';
						echo '<td>'. $row['jenisbiolaut'] . '</td>';
						echo '<td><a class="btn btn-xs btn-primary" href="updatedivesite.php?Id_dive='. $row['Id_dive'] . '">Update</a>
								  <a class="btn btn-xs btn-danger" href="hapusdivesite.php?Id_dive='. $row['Id_dive'] . '">Delete</a>
							  </td>';
						echo '</tr>';
					}
				?>
		 		</tbody>
            </table>
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>
		
		
		
	</div><!--/.main-->

	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/bootstrap-table.js"></script>
	


    <script src="js2/script.js"></script>
    <script src="js2/jquery.dataTables.min.js"></script>
    <script src="js2/datatable-bootstrap.js"></script>
</body>

</html>
