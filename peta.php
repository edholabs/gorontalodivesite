<?php
$title = "GORONTALO DIVE MAP";
include_once "header.php";
?>

        <div class="row">
          <div class="col-md-12">
            <div class="section-title">
                <h2><?php echo $title; ?></h2>
                <p>Explore all the magnificent dive spots in Gorontalo</p>
            </div>
          <div class="dive-card" style="padding: 20px;">
            <div class="map-actions" style="margin-bottom: 20px; display: flex; justify-content: space-between; align-items: center; background: #f8f9fa; padding: 15px; border-radius: 10px;">
                <span class="text-muted" style="font-weight: 600;"><i class="fa fa-info-circle" style="color: #00b4d8; font-size: 1.2em;"></i> Click any marker for details & directions</span>
                <button onclick="findMyLocation()" class="btn-premium" style="padding: 10px 20px; border-radius: 8px;"><i class="fa fa-crosshairs"></i> Find My Location</button>
            </div>
            
            <div id="map" style="width:100%;height:600px; border-radius: 15px; box-shadow: inset 0 0 20px rgba(0,0,0,0.1);"></div>

<script src="https://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyB6QymIKKv7qrk64Jk4riqIzUIv_0fvWT0"></script>
<script type="text/javascript">
  var map;
  var userMarker;

  function initialize() {
    // Premium Oceanic map style
    var customMapStyle = [
      {
        "featureType": "water",
        "elementType": "geometry",
        "stylers": [
          { "color": "#193341" }
        ]
      },
      {
        "featureType": "landscape",
        "elementType": "geometry",
        "stylers": [
          { "color": "#2c5a71" }
        ]
      },
      {
        "featureType": "road",
        "elementType": "geometry",
        "stylers": [
          { "color": "#29768a" },
          { "lightness": -37 }
        ]
      },
      {
        "featureType": "poi",
        "elementType": "geometry",
        "stylers": [
          { "color": "#406d80" }
        ]
      },
      {
        "featureType": "transit",
        "elementType": "geometry",
        "stylers": [
          { "color": "#406d80" }
        ]
      },
      {
        "elementType": "labels.text.stroke",
        "stylers": [
          { "visibility": "on" },
          { "color": "#3e606f" },
          { "weight": 2 },
          { "gamma": 0.84 }
        ]
      },
      {
        "elementType": "labels.text.fill",
        "stylers": [
          { "color": "#ffffff" }
        ]
      },
      {
        "featureType": "administrative",
        "elementType": "geometry",
        "stylers": [
          { "weight": 0.6 },
          { "color": "#1a3541" }
        ]
      },
      {
        "elementType": "labels.icon",
        "stylers": [
          { "visibility": "off" }
        ]
      },
      {
        "featureType": "poi.park",
        "elementType": "geometry",
        "stylers": [
          { "color": "#2c5a71" }
        ]
      }
    ];

    var mapOptions = {   
        zoom: 10,
        center: new google.maps.LatLng(0.6605783, 122.2357893), 
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        styles: customMapStyle,
        disableDefaultUI: true,
        zoomControl: true
    };

    var mapElement = document.getElementById('map');
    map = new google.maps.Map(mapElement, mapOptions);

    setMarkers(map, officeLocations);
  }

var officeLocations = [
<?php
ob_start();
include "ambildata.php";
$data = ob_get_clean();
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

function setMarkers(map, locations) {
    for (var i = 0; i < locations.length; i++) {
        var office = locations[i];
        var lat = office[4];
        var lng = office[3];
        var myLatLng = new google.maps.LatLng(lat, lng);
         
        var contentString = 
            '<div class="premium-info-window">'+
            '<h4>'+ office[1] + '</h4>'+
            '<h5><i class="fa fa-map-marker"></i> '+ office[2] + '</h5>'+
            '<div class="info-actions">'+
            '<a href="detail?Id_dive='+office[0]+'" class="info-btn"><i class="fa fa-info"></i> Info Detail</a>'+
            '<a href="https://www.google.com/maps/dir/?api=1&destination='+lat+','+lng+'" target="_blank" class="directions-btn"><i class="fa fa-location-arrow"></i> Directions</a>'+
            '</div>'+
            '</div>';

        var marker = new google.maps.Marker({
            position: myLatLng,
            map: map,
            title: office[1],
            animation: google.maps.Animation.DROP
        });

        google.maps.event.addListener(marker, 'click', getInfoCallback(map, contentString, marker));
    }
}

function getInfoCallback(map, content, marker) {
    var infowindow = new google.maps.InfoWindow({content: content});
    return function() {
            infowindow.setContent(content); 
            infowindow.open(map, marker);
        };
}

function findMyLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function(position) {
            var pos = {
                lat: position.coords.latitude,
                lng: position.coords.longitude
            };

            if (userMarker) {
                userMarker.setMap(null);
            }

            userMarker = new google.maps.Marker({
                position: pos,
                map: map,
                icon: 'http://maps.google.com/mapfiles/ms/icons/blue-dot.png',
                title: 'You are here',
                animation: google.maps.Animation.BOUNCE
            });

            map.setCenter(pos);
            map.setZoom(12);
        }, function() {
            alert('Error: The Geolocation service failed.');
        });
    } else {
        alert('Error: Your browser doesn\'t support geolocation.');
    }
}

initialize();
</script>
            </div>
          </div>
        </div>
      </div>
    </div>
<?php include_once "footer.php"; ?>