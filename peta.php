<?php
$title = "GORONTALO DIVE MAP";
include_once "header.php";
?>

      <div class="row">
          <div class="col-md-12">
          <div class="panel panel-info panel-dashboard centered">
            <div class="panel-heading">
              <h2 class="panel-title"><strong> - GORONTALO DIVE MAP - </strong></h2>
            </div>
    
            
              <div id="map" style="width:100%;height:450px;"></div>

<script src="https://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyB6QymIKKv7qrk64Jk4riqIzUIv_0fvWT0"></script>
<script type="text/javascript">
  function initialize() {
    
    var mapOptions = {   
        zoom: 9,
        center: new google.maps.LatLng(0.6605783, 122.2357893,70586), 
        mapTypeId: google.maps.MapTypeId.HYBRID
    };

    var mapElement = document.getElementById('map');

    var map = new google.maps.Map(mapElement, mapOptions);

    setMarkers(map, officeLocations);

}

var officeLocations = [
<?php
$data = file_get_contents('http://gorontalodivesite.com/ambildata.php');
                $no=1;
                if(json_decode($data,true)){
                  $obj = json_decode($data);
                  foreach($obj->results as $item){
?>
[<?php echo $item->Id_dive ?>,'<?php echo $item->namadivesite ?>','<?php echo $item->lokasi ?>', <?php echo $item->lng ?>, <?php echo $item->lat ?>],
<?php 
}
} 
?>    
];

function setMarkers(map, locations)
{
    var globalPin = 'img/flag.gif';

    for (var i = 0; i < locations.length; i++) {
       
        var office = locations[i];
        var myLatLng = new google.maps.LatLng(office[4], office[3]);
        var infowindow = new google.maps.InfoWindow({content: contentString});
         
        var contentString = 
            '<div Id="content">'+
            '<div Id="siteNotice">'+
            '</div>'+
            '<h4 Id="firstHeading" class="firstHeading"><b>'+ office[1] + '</b></h4>'+
            '<div Id="bodyContent">'+ 
            '<h5 Id="firstHeading" class="firstHeading"><i>'+ office[2] + '</i></h5>'+
            '<a href=detail.php?Id_dive='+office[0]+'><b><font color="red">Info Detail</font></b></a>'+
            '</div>'+
            '</div>';

        var marker = new google.maps.Marker({
            position: myLatLng,
            map: map,
            title: office[1],
            icon:'img/flag.gif'
            
        });

        google.maps.event.addListener(marker, 'click', getInfoCallback(map, contentString));
    
    }
}

function getInfoCallback(map, content) {
    var infowindow = new google.maps.InfoWindow({content: content});
    return function() {
            infowindow.setContent(content); 
            infowindow.open(map, this);
            
        };
}

initialize();
</script>
            </div>
          </div>
        </div>
        </div>
      </div>
    </div>
<?php include_once "footer.php"; ?>