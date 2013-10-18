$(document).ready(function() {
    setTimeout(function(){ jQuery(".message").hide(800);}, 3000);
    $('a').tooltip();
    ////////////////////////////////////////////////////////////////////////
///Google maps/////////////////////////////////////////////////////////

var geocoder = new google.maps.Geocoder();



function updateMarkerPosition(latLng) {
    
    $("#PlaceLat").val(latLng.lat());
    $("#PlaceLon").val(latLng.lng());
}

function updateMarkerAddress(str) {
  document.getElementById('address').innerHTML = str;
}

function initialize() {
    var lat = "";
    var lon = "";
  if($("#PlaceLat").val() != ""){
    lat = $("#PlaceLat").val();
    lon = $("#PlaceLon").val();
  }else{
    lat = "19.041099756549464";
    lon = "-98.22183374572757";
  }
  var latLng = new google.maps.LatLng(lat,lon);
  var map = new google.maps.Map(document.getElementById('mapCanvas'), {
    zoom: 16,
    center: latLng,
    mapTypeId: google.maps.MapTypeId.ROADMAP
  });
  var marker = new google.maps.Marker({
    position: latLng,
    title: 'Arrastra hasta la ubicación',
    map: map,
    draggable: true
  });
  
  // Update current position info.
  
  // Add dragging event listeners.
  google.maps.event.addListener(marker, 'drag', function() {
    updateMarkerPosition(marker.getPosition());
  });
}

// Onload handler to fire off the app.
google.maps.event.addDomListener(window, 'load', initialize);
////////////////////////////////////////////////////////////////////////
/*
 *edicion de campo de manera individual
 */
$('input#editAjax,textarea#editAjax').change(function(){
        var pk     = $(this).attr('data-pk');
        var type   = $(this).attr('data-type');
        var action = $(this).attr('data-action');
        var model  = $(this).attr('data-model');
        var field  = $(this).attr('data-field');
        var value  = $(this).val();
        var url    = $('#urlpagina').val();
        //alert(pk+type+action+value+url);
        $.ajax({
              url: url + "/" + action + "/" + pk,
              type:"POST",
              data:"data["+model+"][id]=" + pk + "&data["+model+"]["+field+"]="+$.trim(value),
              beforeSend: function() {
                $('.loading').show();
              },
              dataType:'json',
              success:function(data){
                $('.loading').hide();
                alert(data.msj);
              }
        });
    });  
});