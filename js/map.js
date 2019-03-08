function initMap() {
  var element = document.getElementById('map');
  var mapType = google.maps.MapTypeId.ROADMAP; // ROADMAP, SATELLITE , HYBRID , TERRAIN
  var animationType = google.maps.Animation.BOUNCE
  var windowMessage = "Butwal";
  // map options
  var nepallocation ={
    lat:28.5104855,
    lng:84.7614624
  }
  var positionlocation ={
    lat:27.6874,  // 27.6874, 83.4323
    lng:83.4323
  }
  var currentlocation ={
    lat:27.69130,
    lng:83.44051
  }
  var options= {
    center:positionlocation,
    zoom:13,
    disableDefault: true,
    scrollwheel:true,
    draggable:true,
    mapTypeId:mapType,
    streetViewControl: false, 
        scaleControl: true, 
  };
  
  // actual map
  map = new google.maps.Map(element, options);

  var marker = new google.maps.Marker({
        position: currentlocation,
        map: map,
        animation:animationType
    });

  var infowindow = new google.maps.InfoWindow({
    content:windowMessage
    });

  
  infowindow.open(map,marker);

  
   google.maps.event.addListener(map, 'click', function (e) {

    var latitute = e.latLng.lat();
    var longitude = e.latLng.lng();
      
      var mylocation = ("Latitude: " + latitute + " \r\nLongitude: " + longitude);

    alert(mylocation);

    console.log(mylocation);

   });
      

};