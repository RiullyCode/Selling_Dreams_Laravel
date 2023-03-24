@extends('base')

@section('title', 'Mapa Selling Dreams')

@section('head')
  <!-- Cualquier otra etiqueta meta, estilo o script que se necesite incluir en el head -->
<!-- link al CSS -->
<link rel="stylesheet" href="{{ url('css/mapa.css') }}">
<!-- link a JS -->
<script src="{{ url('js/mapa.js') }}"></script>
<!-- link al mapa googleapi -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD0Na630R_K2PnRSlLSiNHPLelsIQQJwFM&callback=initMap" async defer></script>

@endsection

@section('body')
<h1 data-aos="zoom-in">Mapa de máquinas expendedoras</h1>
<div id="map" data-aos="fade-up" data-aos-duration="1000"></div>
<!-- Contenedor para mostrar información de la máquina al hacer clic -->
<div id="machine-info" style="display:none;" data-aos="fade-up" data-aos-duration="1000">
  <h3>Información de la máquina</h3>
  <p><strong>Ubicación:</strong> <span id="machine-location"></span></p>
  <p><strong>Estocaje:</strong> <span id="machine-stock"></span></p>
</div>
@endsection

@section('scripts')
  <!-- Cualquier script adicional que necesites incluir -->
  <script>
    AOS.init();
  </script>
@endsection

@section('footer')
  <!-- Cualquier elemento adicional que se quiera añadir al footer -->
@endsection