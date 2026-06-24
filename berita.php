<?php
$title = "Sistem Informasi Geografis Jasa Web";
include_once "header.php"; ?>


<div class="container-fluid">
    <div class="section-title">
        <h2>Latest Information</h2>
        <p>Stay updated with the latest news and events around Gorontalo Dive Sites</p>
    </div>

    <div class="card-grid">
        <?php
        include "koneksiberita.php";
        date_default_timezone_set("Asia/Jakarta");
        $qu=mysqli_query($con,"select * from berita order by id_berita desc limit 6");
        while($has=mysqli_fetch_row($qu))
        {
            $tgl=explode("-",$has[1]);
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
            <div class="news-card">
                <div class="news-card-date">
                    <i class="fa fa-calendar"></i> <?php echo "$nmh, $has[1]"; ?>
                </div>
                <div class="news-card-body">
                    <h3><a href="detailberita?id_berita=<?php echo $has[0]; ?>"><?php echo $has[3]; ?></a></h3>
                    <p><?php echo strip_tags(substr(substr($has[4],0,150),0,strrpos(substr($has[4],0,150),' '))); ?>...</p>
                    <div style="margin-top: auto; text-align: right;">
                        <a href="detailberita?id_berita=<?php echo $has[0]; ?>" class="btn-premium" style="font-size: 0.8em; padding: 5px 15px;">Read More <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>
<!-- Akhir dari artikel berita -->


  

    
    <?php include_once "footer.php"; ?>