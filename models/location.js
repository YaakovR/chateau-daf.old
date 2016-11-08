/*global google, console, $*/

function initialize() {
    "use strict";
    
    var shul = new google.maps.LatLng(40.064711, -74.221907),
        map = new google.maps.Map(document.getElementById('map'), {
            center: shul,
            zoom: 17
        }),
        marker = new google.maps.Marker({
            position: shul,
            map: map
        }),
        infoWindow = new google.maps.InfoWindow({
            maxWidth: 200
        });
    
    marker.addListener('click', function () {
        infoWindow.setContent('<h6>Bais Medrash Chateau Park</h6>' + '71 Cushman St' + '<br>Lakewood Township, NJ 08701<br>' + '<a href="https://www.google.com/maps/place/Bais+Medrash+Chateau+Park/@40.064932,-74.221907,18z/data=!4m2!3m1!1s0x0:0xcd02fea6fb0d1130?hl=en-US">View on Google Maps<a>');
        infoWindow.open(map, marker);
    });
}