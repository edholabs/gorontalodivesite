<?php
session_start();
if (!isset($_SESSION['Username'])) {
    header('location:login.php');
}
require_once("koneksi.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Admin - Data Produk & Tiket</title>

<link href="css2/bootstrap.min.css" rel="stylesheet">
<link href="css2/datepicker3.css" rel="stylesheet">
<link href="css2/styles.css" rel="stylesheet">
<script src="js2/lumino.glyphs.js"></script>

</head>

<body>
	<?php include 'inc/config.php'; ?>
	<?php include 'menu.php'; ?>
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Data Produk</li>
			</ol>
		</div>
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Data Produk & Sewa Alat</h1>
			</div>
		</div>
				
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Daftar Produk</div>
					<div class="panel-body">
						<table class="table table-bordered table-striped">
						    <thead>
						    <tr>
						        <th data-field="id" data-sortable="true">ID</th>
						        <th data-field="name" data-sortable="true">Nama Produk</th>
						        <th data-field="harga" data-sortable="true">Harga</th>
						        <th>Aksi</th>
						    </tr>
						    </thead>
						    <tbody>
						    	<?php
						    	$sql = mysql_query("SELECT * FROM products ORDER BY id_produk DESC");
						    	while ($data = mysql_fetch_array($sql)) {
						    	?>
						    	<tr>
						    		<td><?php echo $data['id_produk']; ?></td>
						    		<td><?php echo $data['nama_produk']; ?></td>
						    		<td>Rp <?php echo number_format($data['harga'],0,',','.'); ?></td>
						    		<td>
						    			<a href="#" class="btn btn-warning btn-sm">Edit</a>
						    			<a href="#" class="btn btn-danger btn-sm">Hapus</a>
						    		</td>
						    	</tr>
						    	<?php } ?>
						    </tbody>
						</table>
					</div>
				</div>
			</div>
		</div>

	</div>

	<script src="js2/jquery-1.11.1.min.js"></script>
	<script src="js2/bootstrap.min.js"></script>
</body>
</html>
