<?php 
$id = $_GET['Id_dive'];
include_once "ambildata_id.php";
$obj = json_decode($data);
$namadivesite="";
$id="";
$lokasi="";
$kedalaman="";
$visibility="";
$jeniskarang="";
$jenisbiolaut="";
$gambar="";
$gambar2="";
$gambar3="";
$gambar4="";
$gambar5="";
$gambar6="";
$gambar7="";
$gambar8="";
$gambar9="";
$gambar10="";
$lat="";
$long="";

foreach($obj->results as $item){
  $namadivesite.=$item->namadivesite;
  $id.=$item->Id_dive;
  $lokasi.=$item->lokasi;
  $kedalaman.=$item->kedalaman;
  $visibility.=$item->visibility;
  $jeniskarang.=$item->jeniskarang;
  $jenisbiolaut.=$item->jenisbiolaut;
  $gambar.=$item->gambar;
  $gambar2.=$item->gambar2;
  $gambar3.=$item->gambar3;
  $gambar4.=$item->gambar4;
  $gambar5.=$item->gambar5;
  $gambar6.=$item->gambar6;
  $gambar7.=$item->gambar7;
  $gambar8.=$item->gambar8;
  $gambar9.=$item->gambar9;
  $gambar10.=$item->gambar10;
  $lat.=$item->lat;
  $long.=$item->lng;
}

$title = "Detail And Location : ".$namadivesite;
include_once "header.php"; ?>

<script src="https://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyB6QymIKKv7qrk64Jk4riqIzUIv_0fvWT0"></script>

<script>

function initialize() {
  var myLatlng = new google.maps.LatLng(<?php echo $lat ?>,<?php echo $long ?>);
  var mapOptions = {
    zoom: 17,
    center: myLatlng,
    mapTypeId: google.maps.MapTypeId.HYBRID
    
    
  };

  var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

  var contentString = '<div id="content">'+
      '<div id="siteNotice">'+
      '</div>'+
      '<h1 id="firstHeading" class="firstHeading"><?php echo $namadivesite ?></h1>'+
      '<div id="bodyContent">'+
      '<p><?php echo $lokasi ?></p>'+
      '</div>'+
      '</div>';

  var infowindow = new google.maps.InfoWindow({
      content: contentString
  });

  var marker = new google.maps.Marker({
      position: myLatlng,
      map: map,
      title: 'Maps Info',
      icon:'img/diveflag.gif'
  });
  google.maps.event.addListener(marker, 'click', function() {
    infowindow.open(map,marker);
  });
}

google.maps.event.addDomListener(window, 'load', initialize);

    </script>
      <div class="row">
      <div class="col-md-5">
          <div class="panel panel-info panel-dashboard">
            <div class="panel-heading centered">
              <h2 class="panel-title"><strong> - Location - </strong></h4>
            </div>
            <div class="panel-body">
              <div id="map-canvas" style="width:100%;height:460px;"></div>
            </div>
          </div>
        </div>
        <div class="col-md-7">
          <div class="panel panel-info panel-dashboard">
            <div class="panel-heading centered">
              <h2 class="panel-title"><strong> - Detail Information - </strong></h4>
            </div>
            <div class="panel-body">
             <table class="table">
           
               <tr>
                 <td><b>Dive site</b></br><i>(situs selam)</i></td>
                 <td><h4><font color="red"><b><?php echo $namadivesite ?></b></font></h4></td>
               </tr>
               <tr>
                 <td><b>Location</b></br><i>(lokasi)</i></td>
                 <td><h4><?php echo $lokasi ?></h4></td>
               </tr>
               <tr>
                 <td><b>Depth</b></br><i>(Kedalaman)</i></td>
                 <td><h4><?php echo $kedalaman ?></h4></td>
               </tr>
               <tr>
                 <td><b>Visibility</b></br><i>(Jarak Pandang)</i></td>
                 <td><h4><?php echo $visibility ?></h4></td>
               </tr>
               <tr>
                 <td><b>Coral reef</b></br><i>(Jenis Karang)</i></td>
                 <td><h4><?php echo $jeniskarang ?></h4></td>
               </tr>
               <tr>
                 <td><b>Reef fish and creature</b></br><i>(Jenis Biota Laut)</i></td>
                 <td><h4><?php echo $jenisbiolaut ?></h4></td>
               </tr>
                 <tr>
                 <td><b>latitude and longitude</b></td>
                 <td><h4><?php echo $lat ?> <?php echo $long ?></h4></td>
               </tr>
               <tr>
                 <td><b>Picture</b></br><i>(Foto)</i></td>
                 <td> <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">GALERI</button>

<div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    
    
    
      
  <div style="background-color:black">
 <div align="center">
 
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
  </ol>

  <!-- Wrapper for slides -->
 
  <div class="carousel-inner" role="listbox">
    <div class="item active">
 <img src="img/uploads/<?php echo $gambar ?>" alt="<?php echo $namadivesite ?>" width="300" height="200"  class="img-responsive" style="width:70%">
    </div>

    <div class="item">
     <img src="img/uploads/<?php echo $gambar2 ?>" alt="<?php echo $namadivesite ?>" width="300" height="200"  class="img-responsive" style="width:70%">
    </div>
    
    <div class="item">
 <img src="img/uploads/<?php echo $gambar3 ?>" alt="<?php echo $namadivesite ?>" width="300" height="200"  class="img-responsive" style="width:70%">
    </div>
    
    <div class="item">
  <img src="img/uploads/<?php echo $gambar4 ?>" alt="<?php echo $namadivesite ?>" width="300" height="200"  class="img-responsive" style="width:70%">
    </div>
    
    <div class="item">
 <img src="img/uploads/<?php echo $gambar5 ?>" alt="<?php echo $namadivesite ?>" width="300" height="200"  class="img-responsive" style="width:70%">
    </div>

    <div class="item">
 <img src="img/uploads/<?php echo $gambar6 ?>" alt="<?php echo $namadivesite ?>" width="300" height="200"  class="img-responsive" style="width:70%">
    </div>

    <div class="item">
       <img src="img/uploads/<?php echo $gambar7 ?>" alt="<?php echo $namadivesite ?>" width="300" height="200"  class="img-responsive" style="width:70%">
    </div>
     <div class="item">
       <img src="img/uploads/<?php echo $gambar8 ?>" alt="<?php echo $namadivesite ?>" width="300" height="200"  class="img-responsive" style="width:70%">
    </div>
     <div class="item">
       <img src="img/uploads/<?php echo $gambar9 ?>" alt="<?php echo $namadivesite ?>" width="300" height="200"  class="img-responsive" style="width:70%">
    </div>
     <div class="item">
       <img src="img/uploads/<?php echo $gambar10 ?>" alt="<?php echo $namadivesite ?>" width="300" height="200"  class="img-responsive" style="width:70%">
    </div>
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


  <script>
var slideIndex = [1,1];
var slideId = ["mySlides1", "mySlides2"]
showSlides(1, 0);
showSlides(1, 1);

function plusSlides(n, no) {
  showSlides(slideIndex[no] += n, no);
}

function showSlides(n, no) {
  var i;
  var x = document.getElementsByClassName(slideId[no]);
  if (n > x.length) {slideIndex[no] = 1}    
  if (n < 1) {slideIndex[no] = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  x[slideIndex[no]-1].style.display = "block";  
}
</script>
</div>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">CLOSE</bottom>
                
 </div> </td>
                
                </div>
               </tr>
             </table>
            </div>
            </div>
          </div>
               <script>
function centerModal() {
    $(this).css('display', 'block');
    var $dialog = $(this).find(".modal-dialog");
    var offset = ($(window).height() - $dialog.height()) / 2;
    // Center modal vertically in window
    $dialog.css("margin-top", offset);
}

$('.modal').on('show.bs.modal', centerModal);
$(window).on("resize", function () {
    $('.modal:visible').each(centerModal);
});
</script>






        
        </div>
      </div>
    </div>
    <?php include_once "footer.php"; ?>