<?php
session_start();
if (!isset($_SESSION['Username'])) {
    header('location:login.php');
}
require_once("koneksi.php");

// Update status pesanan
if (isset($_GET['terima'])) {
    $id = (int)$_GET['terima'];
    mysql_query("UPDATE bookings SET status_pembayaran='Lunas' WHERE id_booking='$id'");
    header("Location: tabelbooking.php");
    exit();
}
if (isset($_GET['tolak'])) {
    $id = (int)$_GET['tolak'];
    mysql_query("UPDATE bookings SET status_pembayaran='Dibatalkan' WHERE id_booking='$id'");
    header("Location: tabelbooking.php");
    exit();
}

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Admin - Pesanan Booking</title>

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
				<li class="active">Data Booking</li>
			</ol>
		</div>
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Pesanan Masuk</h1>
			</div>
		</div>
				
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Daftar Transaksi</div>
					<div class="panel-body">
						<table class="table table-bordered table-striped">
						    <thead>
						    <tr>
						        <th data-field="id" data-sortable="true">ID Pesanan</th>
						        <th data-field="user" data-sortable="true">Nama Pelanggan</th>
						        <th data-field="date" data-sortable="true">Tanggal</th>
						        <th data-field="total" data-sortable="true">Total Harga</th>
						        <th data-field="status">Status</th>
						        <th>Aksi</th>
						    </tr>
						    </thead>
						    <tbody>
						    	<?php
						    	$sql = mysql_query("SELECT b.*, u.nama FROM bookings b JOIN users u ON b.id_user = u.id_user ORDER BY b.id_booking DESC");
						    	while ($data = mysql_fetch_array($sql)) {
						    	?>
						    	<tr>
						    		<td>#<?php echo $data['id_booking']; ?></td>
						    		<td><?php echo $data['nama']; ?></td>
						    		<td><?php echo date('d M Y H:i', strtotime($data['tanggal_booking'])); ?></td>
						    		<td>Rp <?php echo number_format($data['total_harga'],0,',','.'); ?></td>
						    		<td>
                                        <?php if($data['status_pembayaran'] == 'Pending') { ?>
                                            <span class="label label-warning">Pending</span>
                                        <?php } else if($data['status_pembayaran'] == 'Lunas') { ?>
                                            <span class="label label-success">Lunas</span>
                                        <?php } else { ?>
                                            <span class="label label-danger">Dibatalkan</span>
                                        <?php } ?>
                                    </td>
						    		<td>
                                        <?php if($data['status_pembayaran'] == 'Pending') { ?>
						    			<a href="?terima=<?php echo $data['id_booking']; ?>" class="btn btn-success btn-sm">Validasi Lunas</a>
						    			<a href="?tolak=<?php echo $data['id_booking']; ?>" class="btn btn-danger btn-sm">Batalkan</a>
                                        <?php } ?>
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
