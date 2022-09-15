function myMap() {
    let mapProp= {
      center:new google.maps.LatLng(-25.746020,28.187120),
      zoom:9,
    };


    let map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
      
    
    var marker = new google.maps.Marker({position: new google.maps.LatLng(-25.782507489106653, 28.27494224312276),});
    marker.setMap(map);
    var marker = new google.maps.Marker({position: new google.maps.LatLng(-25.780735559037144, 28.311350657393145),});
    marker.setMap(map);
    var marker = new google.maps.Marker({position: new google.maps.LatLng(-25.822529003791036, 28.294122111518902),});
    marker.setMap(map);
    var marker = new google.maps.Marker({position: new google.maps.LatLng(-25.84863771937726, 28.185342030594125),});
    marker.setMap(map);
    var marker = new google.maps.Marker({position: new google.maps.LatLng(-26.002363747048726, 28.10643434629474),});
    marker.setMap(map);
    
    google.maps.event.addListener(marker,'click',function() {
      map.setZoom(15);
      map.setCenter(marker.getPosition());
    });
  
  }


function play() {
    let audio = document.getElementById("audio");
    audio.play();
  }


window.onscroll = function() {
    let num = document.documentElement.scrollTop / 70 % Math.PI;

document.getElementById('svg8').style.transform ='rotate(' + num + 'rad)';
}

