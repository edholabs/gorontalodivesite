<?php 
$title = "Daftar Data Restoran Hasil CLustering";
include_once "header.php";
include_once "koneksi.php"; ?>

      <div class="row">
        <div class="col-md-12">
          <div class="panel panel-info panel-dashboard">
            <div class="panel-heading centered">
              <h2 class="panel-title"><strong> - <?php echo $title ?> - </strong></h2>
            </div>
            <div class="panel-body">
              <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Hasil Clustering</h1>
                        
                    </div>
                </div>
                <!-- /. ROW  -->
                <div class="row">
                    <div class="col-md-12">
					
   <?php
if($_GET[act]=="lihat"){

  $queryutama = mysql_query("SELECT  *  FROM kasus where idk='$_GET[id]'"); 
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
		echo"<h3>Perhitungan ID Kasus $_GET[id]</h3>";
		echo"<p><b>Hitung jarak ID Kasus $_GET[id] terhadap cluster Pertama:</b></p>";
		echo"<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C$_GET[id]1 = √((($data[kharga]-1.4)^2)+(($data[kmenu]-1.4)^2)+(($data[kfasilitas]-1.2)^2)+(($data[kjam]-1.4)^2)) = $c1 </p>";
		echo"<p><b>Hitung jarak ID Kasus $_GET[id] terhadap cluster Kedua:</b></p>";
		echo"<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C$_GET[id]2 = √((($data[kharga]-1.8)^2)+(($data[kmenu]-1.4)^2)+(($data[kfasilitas]-1.6)^2)+(($data[kjam]-1.8)^2)) = $c2</p>";
		echo"<p><b>Hitung jarak ID Kasus $_GET[id] terhadap cluster Ketiga:</b></p>";
		echo"<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C$_GET[id]3 = √((($data[kharga]-2.6)^2)+(($data[kmenu]-2.2)^2)+(($data[kfasilitas]-2.2)^2)+(($data[kjam]-1.6)^2)) = $c3</p>";
		
		echo"<p><b>jarak terdekat (terkecil) dari pusat cluster: MIN(C$_GET[id]1,C$_GET[id]2,C$_GET[id]3) = MIN($c1,$c2,$c3) = $hasil</b></p>";
		
		$no++;	  

}
 
$no++;	
}else{  

?>
                      <table class="table table-bordered table-striped table-admin">
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
                                            <th>Detail Perhitungan</th>
                                        </tr>
                                    </thead>
                                       <tbody>
    
    
  <?php

//  include ('config.php');

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
           
		   <td align=center><a href="data2.php?act=lihat&id=<?php echo $data['idk']; ?>" class="btn btn-info">Lihat</a></td>

<?php 
$no++;	
}  

echo"<p><a href='cetak.php' target='_blank'  class='btn btn-primary'> PRINT</a></p>";

}
?>
</tr></tbody></table>

                    </div>
                </div>

            </div>
            <!-- /. PAGE INNER  -->
        </div>
        
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>
		
		
		
	</div><!--/.main-->

            </div>
            </div>
          </div>
        </div>
      </div>
    </div>

<?php include_once "footer.php" ?>