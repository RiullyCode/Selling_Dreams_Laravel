@extends('base')

@section('title', 'Sobre Nosotros Selling Dreams')

@section('head')
  <!-- Cualquier otra etiqueta meta, estilo o script que se necesite incluir en el head -->
<!-- link al CSS -->
<link rel="stylesheet" href="{{ url('css/sobre_nosotros.css') }}">
<!-- link al JS -->

@endsection

@section('body')
  <!-- Aquí va el contenido de la página, es decir, todo lo que va dentro de la etiqueta body -->
<!-- resources/views/about.blade.php -->
<div class="container mt-5">
      <!-- Sección de presentación -->
      <div class="row">
        <div class="col-md-6" data-aos="fade-right">
          <img
            src="https://cdn.discordapp.com/attachments/914613587715182622/1087395881298436106/pexels-andrew-neel-2330507.jpg"
            alt="Imagen de presentación"
            class="img-fluid"
          />
        </div>
        <div class="col-md-6" data-aos="fade-left">
          <h2>Quiénes Somos</h2>
          <p>
            Somos una empresa líder en el desarrollo de soluciones tecnológicas
            innovadoras. Nuestro equipo de profesionales altamente capacitados
            se dedica a crear productos y servicios que mejoren la vida de
            nuestros clientes y les permitan alcanzar sus objetivos de negocio.
          </p>
          <p>
            Desde nuestra fundación en 20XX, hemos trabajado con una amplia
            variedad de clientes en diferentes sectores, incluyendo tecnología,
            finanzas, salud y educación. Nuestra misión es empoderar a nuestros
            clientes a través de la tecnología y ayudarlos a crear un futuro
            mejor.
          </p>
        </div>
      </div>

      <!-- Sección del equipo -->
      <div class="row mt-5">
        <div class="col-12">
          <h2 class="text-center" data-aos="zoom-in">Nuestro Equipo</h2>
        </div>
      </div>
      <div class="row mt-3">
        <div class="col-md-4" data-aos="flip-left">
          <div class="card">
            <img
              src="https://cdn.discordapp.com/attachments/914613587715182622/1087395881298436106/pexels-andrew-neel-2330507.jpg"
              class="card-img-top"
              alt="Miembro del equipo"
            />
            <div class="card-body">
              <h5 class="card-title">Nombre Apellido</h5>
              <p class="card-text">Cargo en la empresa</p>
              <p class="card-text">Breve descripción del miembro del equipo.</p>
            </div>
          </div>
        </div>
        <!-- Repite este bloque para cada miembro del equipo -->
      </div>

      <!-- Sección de logros -->
      <div class="row mt-5">
        <div class="col-12">
          <h2 class="text-center" data-aos="zoom-in">Nuestros Logros</h2>
        </div>
      </div>
      <div class="row mt-3">
        <div class="col-md-4" data-aos="fade-up">
          <div class="achievement">
            <i class="fas fa-award fa-2x"></i>
            <h4>Logro 1</h4>
            <p>Descripción del logro 1.</p>
          </div>
        </div>
        <!-- Repite este bloque para cada logro -->
      </div>
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