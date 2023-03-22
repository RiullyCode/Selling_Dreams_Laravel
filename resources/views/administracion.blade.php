@extends('base')

@section('title', 'Administración Selling Dreams')

@section('head')
  <!-- Cualquier otra etiqueta meta, estilo o script que se necesite incluir en el head -->
<!-- link al CSS -->
<link rel="stylesheet" href="{{ url('css/administacion.css') }}">
<!-- link al JS -->

@endsection

@section('body')
  <!-- Aquí va el contenido de la página, es decir, todo lo que va dentro de la etiqueta body -->

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