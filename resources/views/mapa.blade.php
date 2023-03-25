@extends('base')

@section('title', 'Mapa Selling Dreams')

@section('head')
  <!-- Cualquier otra etiqueta meta, estilo o script que se necesite incluir en el head -->
<!-- link al CSS -->
<link rel="stylesheet" href="{{ url('css/mapa.css') }}">
<!-- link a JS -->
<script src="{{ url('js/mapa.js') }}"></script>
<!-- link a api google maps -->

@endsection

@section('body')
<h1 data-aos="zoom-in">Mapa de máquinas expendedoras</h1>
<div id="map" style="width:100%; height:500px;" data-aos="fade-up" data-aos-duration="1000"></div>

<!-- Contenedor para mostrar información de la máquina al hacer clic -->
<div id="machine-info" style="display:none;" data-aos="fade-up" data-aos-duration="1000">
  <h3>Información de la máquina</h3>
  <p><strong>Ubicación:</strong> <span id="machine-location"></span></p>
  <p><strong>Estocaje:</strong> <span id="machine-stock"></span></p>
</div>
@endsection

@section('scripts')
  <!-- Cualquier script adicional que necesites incluir -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBc9uaA7-k7wHPanrwYdSY7sanbhSfKibk"></script>
  <script src="{{ url('js/mapa.js') }}"></script>
  <script>
    AOS.init();
  </script>
@endsection
