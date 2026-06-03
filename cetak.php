<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Clustering</title>

    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!--CUSTOM BASIC STYLES-->
    <link href="assets/css/basic.css" rel="stylesheet" />
    <!--CUSTOM MAIN STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>

<body onload="print()">
	<h2 align="center">
		Hasil Clustering
	</h2>
   <table class="table table-striped table-bordered table-hover" cellspacing=0 border=1 align="center">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Orang</th>
                                            <th>Harga</th>
                                            <th>Menu</th>
                                            <th>Fasilitas</th>
                                            <th>Jam Layanan</th>
                                            <th>C1</th>
                                            <th>C2</th>
                                            <th>C3</th>
                                            <th>Hasil</th>
                                        </tr>
                                    </thead>
                                       <tbody>
    
    
  <?php

  include ('koneksi.php');
  $queryutama = mysql_query("SELECT  *  FROM kasus order by idk"); 
    $no = 1;
    while ($data = mysql_fetch_array($queryutama)) {

		 $c1=sqrt((pow(($data[kharga]-1.4),2))+(pow(($data[kmenu]-1.4),2))+(pow(($data[kfasilitas]-1.2),2))+(pow(($data[kjam]-1.4),2)));
		 $c2=sqrt((pow(($data[kharga]-1.8),2))+(pow(($data[kmenu]-1.4),2))+(pow(($data[kfasilitas]-1.6),2))+(pow(($data[kjam]-1.8),2)));
		 $c3=sqrt((pow(($data[kharga]-2.6),2))+(pow(($data[kmenu]-2.2),2))+(pow(($data[kfasilitas]-2.2),2))+(pow(($data[kjam]-1.6),2)));
		 
		 
		 $min=min($c1,$c2,$c3);
		 if($min==$c1){
			$hasil=C1;
		 }elseif($min==$c2){
			$hasil="C2";
		}
		 elseif($min==$c3){
			$hasil="C3";
		 }
?>
           <tr>
           <td><?php echo $no;  ?></td> 
           <td><?php echo"$data[nama]";  ?></td>
           <td><?php echo $data['kharga']; ?></td>
           <td><?php echo $data['kmenu']; ?></td>
           <td><?php echo $data['kfasilitas']; ?></td>
           <td><?php echo $data['kjam']; ?></td>
           <td><?php echo number_format($c1,2); ?></td>
           <td><?php echo number_format($c2,2); ?></td>
           <td><?php echo number_format($c3,2); ?></td>
           <td><?php echo $hasil; ?></td>
           
<?php 
$no++;	
}  

?>
</tr></tbody></table><!-- /. FOOTER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>

</body>