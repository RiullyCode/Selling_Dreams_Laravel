window.onload = function () {
  initMap();
};

function initMap() {
  var map = new google.maps.Map(document.getElementById("map"), {
    center: { lat: 43.361915, lng: -5.849389 },
    zoom: 14,
    mapId: "663d3bd556eb5ea6" // Agrega esta línea para usar tu mapa personalizado
  });

  var marker = new google.maps.Marker({
    position: { lat: -12.046373, lng: -77.042754 },
    map: map,
    title: "Mi máquina expendedora",
  });
}



  document.addEventListener("DOMContentLoaded", function() {
    AOS.init();
  });