<?php
$title = "Sistem Informasi Geografis Jasa Web";
include_once "header.php"; ?>

<!-- Bagian artikel berita -->
<div class="container" style="margin-top: 30px;">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <?php
            include "koneksiberita.php";
            $data=mysqli_fetch_row(mysqli_query($con,"select * from berita where id_berita='".$_GET['id_berita']."'"));
            date_default_timezone_set("Asia/Jakarta");
            $tgl=explode("-",$data[1]);
            $x  = mktime(0, 0, 0, date("$tgl[1]"), date("$tgl[2]"),  date("$tgl[0]")); 
            switch(date("l",$x))
            {
                case 'Monday':$nmh="Senin";break; 
                case 'Tuesday':$nmh="Selasa";break; 
                case 'Wednesday':$nmh="Rabu";break; 
                case 'Thursday':$nmh="Kamis";break; 
                case 'Friday':$nmh="Jum'at";break; 
                case 'Saturday':$nmh="Sabtu";break; 
                case 'Sunday':$nmh="Minggu";break; 
            }
            ?>
            <div class="article-header">
                <h1><?php echo $data[3]; ?></h1>
                <div class="article-meta">
                    <i class="fa fa-calendar"></i> <?php echo "$nmh, $tgl[2]-$tgl[1]-$tgl[0]" ?> &nbsp;&nbsp;|&nbsp;&nbsp; 
                    <i class="fa fa-user"></i> Gorontalo Dive Admin
                </div>
            </div>
            
            <div class="article-content">
                <?php echo $data[4]; ?>
                
                <div style="margin-top: 50px; border-top: 1px solid #eee; padding-top: 20px;">
                    <a href="berita" class="btn btn-default"><i class="fa fa-arrow-left"></i> Back to News</a>
                </div>
            </div>
        </div>
    </div>                  
</div>                                  
<!-- Akhir dari artikel berita -->  

<?php include_once "footer.php"; ?>