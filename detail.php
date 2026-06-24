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
  var contentString = '<div id="content" class="premium-info-window">'+
      '<h4><?php echo $namadivesite ?></h4>'+
      '<h5><i class="fa fa-map-marker"></i> <?php echo $lokasi ?></h5>'+
      '</div>';
  var infowindow = new google.maps.InfoWindow({ content: contentString });
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

<?php 
// Fix character encoding issues from old database imports
$kedalaman = preg_replace('/[^0-9a-zA-Z\s]+/', ' - ', $kedalaman);
$visibility = preg_replace('/[^0-9a-zA-Z\s]+/', ' - ', $visibility);
?>

<div class="container-fluid" style="padding: 40px 20px;">
    <div class="section-title">
        <h2><?php echo $namadivesite; ?></h2>
        <p><i class="fa fa-map-marker"></i> <?php echo $lokasi; ?></p>
    </div>

    <div class="row">
        <!-- Map Section -->
        <div class="col-md-5">
            <div class="dive-card" style="margin-bottom: 30px;">
                <div class="panel-heading centered" style="background: #f8f9fa; padding: 15px; border-bottom: 1px solid #eee;">
                    <h4 style="margin:0; font-weight: 700; color:#023e8a;"><i class="fa fa-map"></i> Location Map</h4>
                </div>
                <div class="panel-body" style="padding: 0;">
                    <div id="map-canvas" style="width:100%; height:500px; border-radius: 0 0 20px 20px;"></div>
                </div>
            </div>
        </div>

        <!-- Detail Section -->
        <div class="col-md-7">
            <div class="dive-card" style="padding: 30px;">
                <h3 style="color:#023e8a; font-weight: 700; margin-top: 0; margin-bottom: 25px; border-bottom: 2px solid #00b4d8; padding-bottom: 10px;">
                    <i class="fa fa-info-circle"></i> Detail Information
                </h3>
                
                <table class="table table-hover" style="font-size: 1.1em;">
                    <tr>
                        <td style="border-top: none; width: 40%; color: #666;">
                            <strong>Dive Site</strong><br><small><i>(Situs Selam)</i></small>
                        </td>
                        <td style="border-top: none; color: #e63946; font-weight: 700; font-size: 1.2em;">
                            <?php echo $namadivesite ?>
                        </td>
                    </tr>
                    <tr>
                        <td style="color: #666;">
                            <strong>Location</strong><br><small><i>(Lokasi)</i></small>
                        </td>
                        <td style="font-weight: 600; color: #2b3a42;"><?php echo $lokasi ?></td>
                    </tr>
                    <tr>
                        <td style="color: #666;">
                            <strong>Depth</strong><br><small><i>(Kedalaman)</i></small>
                        </td>
                        <td style="font-weight: 600; color: #2b3a42;"><?php echo $kedalaman ?></td>
                    </tr>
                    <tr>
                        <td style="color: #666;">
                            <strong>Visibility</strong><br><small><i>(Jarak Pandang)</i></small>
                        </td>
                        <td style="font-weight: 600; color: #2b3a42;"><?php echo $visibility ?></td>
                    </tr>
                    <tr>
                        <td style="color: #666;">
                            <strong>Coral Reef</strong><br><small><i>(Jenis Karang)</i></small>
                        </td>
                        <td style="font-weight: 600; color: #2b3a42;"><?php echo $jeniskarang ?></td>
                    </tr>
                    <tr>
                        <td style="color: #666;">
                            <strong>Marine Life</strong><br><small><i>(Biota Laut)</i></small>
                        </td>
                        <td style="font-weight: 600; color: #2b3a42;"><?php echo $jenisbiolaut ?></td>
                    </tr>
                    <tr>
                        <td style="color: #666;">
                            <strong>Coordinates</strong><br><small><i>(Lat, Lng)</i></small>
                        </td>
                        <td style="font-weight: 600; color: #2b3a42;">
                            <span class="label label-primary" style="font-size: 0.9em; padding: 5px 10px; border-radius: 10px;">
                                <?php echo $lat ?>, <?php echo $long ?>
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td style="color: #666; vertical-align: middle;">
                            <strong>Gallery</strong><br><small><i>(Foto)</i></small>
                        </td>
                        <td>
                            <button type="button" class="btn-premium" data-toggle="modal" data-target="#myModal">
                                <i class="fa fa-picture-o"></i> View Gallery
                            </button>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Gallery Modal -->
<div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" style="position: absolute; left: 50%; top: 50%; transform: translate(-50%, -50%) !important; margin: 0 !important; width: 90%; max-width: 1000px;">
    <div class="modal-content" style="background-color: transparent; border: none; box-shadow: none; width: 100%;">
      <div class="modal-header" style="border: none; position: absolute; right: 0; z-index: 9999;">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: white; opacity: 0.8; text-shadow: 0 2px 4px rgba(0,0,0,0.5); font-size: 3em; margin-right: -40px; margin-top: -30px;">&times;</button>
      </div>
      <div class="modal-body" style="padding: 0;">
        <div id="myCarousel" class="carousel slide" data-ride="carousel" style="border-radius: 15px; overflow: hidden; box-shadow: 0 30px 60px rgba(0,0,0,0.6); background: #000;">
          
          <!-- Indicators -->
          <ol class="carousel-indicators" style="bottom: 10px;">
            <?php 
            $images = [$gambar, $gambar2, $gambar3, $gambar4, $gambar5, $gambar6, $gambar7, $gambar8, $gambar9, $gambar10];
            $count = 0;
            foreach ($images as $img) { 
                if(!empty($img)) {
            ?>
            <li data-target="#myCarousel" data-slide-to="<?php echo $count; ?>" class="<?php if($count==0) echo 'active'; ?>"></li>
            <?php $count++; }} ?>
          </ol>

          <!-- Wrapper for slides -->
          <div class="carousel-inner" role="listbox">
            <?php 
            $active = true;
            foreach ($images as $img) { 
                if(!empty($img)) {
            ?>
                <div class="item <?php if($active) { echo 'active'; $active = false; } ?>" style="transition: transform .6s ease-in-out;">
                    <img src="img/uploads/<?php echo $img ?>" alt="<?php echo $namadivesite ?>" style="width:100%; height: 75vh; object-fit: contain; margin: 0 auto;">
                </div>
            <?php }} ?>
          </div>

          <!-- Controls -->
          <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev" style="background: linear-gradient(to right, rgba(0,0,0,0.5) 0%, rgba(0,0,0,0) 100%); width: 10%;">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true" style="font-size: 3em; text-shadow: 0 2px 5px rgba(0,0,0,0.5);"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next" style="background: linear-gradient(to left, rgba(0,0,0,0.5) 0%, rgba(0,0,0,0) 100%); width: 10%;">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true" style="font-size: 3em; text-shadow: 0 2px 5px rgba(0,0,0,0.5);"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include_once "footer.php"; ?>