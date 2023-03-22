@extends('base')

@section('title', 'Inicio Selling Dreams')

@section('head')
  <!-- Cualquier otra etiqueta meta, estilo o script que se necesite incluir en el head -->
<!-- link al CSS -->
<link rel="stylesheet" href="{{ url('css/inicio.css') }}">
<!-- link al JS -->
<script src="{{ url('js/inicio.js') }}"></script>

@endsection

@section('body')
  <!-- Aquí va el contenido de la página, es decir, todo lo que va dentro de la etiqueta body -->
  <!--TODO Primera section (contiene un titulo dinámico y un video de fondo) -->
<section id="mi-seccion" class="section video-background">
    <div class="video-overlay"></div>
    <video id="mi-video" autoplay muted loop>
      <source src="https://cdn.discordapp.com/attachments/914613587715182622/1085485605158404106/AdobeStock_207672549.mov" type="video/mp4" />
    </video>
    <div class="container">
      <h1>
        Descubre <span id="typed" style="color: rgb(12, 180, 188)"></span>
      </h1>
      <p>
        La tentación está en cada esquina <br />
        nosotros te ayudamos a encontrarla
      </p>
      <div class="buttons">
        <a href="{{ route('sobre_nosotros') }}" class="btn btn-light"
          ><i class="fa-solid fa-users"></i> Conócenos</a
        >
        <a href="{{ route('sobre_nosotros') }}" class="btn btn-warning"
          ><i class="fas fa-map-location-dot fa-fw"></i> Ver Mapa</a
        >
      </div>
    </div>
  </section>
  <!--TODO segunda section (contiene 3 tarjetas dinamicas con un mensaje al pasar el raton por encima) -->
  <section class="about-us">
    <div class="title-container" data-aos="fade-up">
      <h2 class="title">Quiénes somos</h2>
    </div>               
    <div class="services">
      <div class="service col-sm-12" data-aos="fade-up" data-aos-delay="200">
        <img src="https://media.discordapp.net/attachments/914613587715182622/1085523993622229082/pexels-francesco-paggiaro-999296.jpg?width=876&height=583" alt="Servicio de geolocalización">
        <div class="overlay">
          <p class="service-name">Geolocalización de máquinas expendedoras</p>
          <p class="service-description">Utilizamos tecnología de vanguardia para ayudar a nuestros clientes a localizar máquinas expendedoras</p>
        </div>
      </div>
      <div class="service col-sm-12" data-aos="fade-up" data-aos-delay="400">
        <img src="https://media.discordapp.net/attachments/914613587715182622/1085546251673669642/AdobeStock_310282865_1.jpeg?width=876&height=583" alt="Servicio de muestreo">
        <div class="overlay">
          <p class="service-name">Muestreo de estocaje de máquinas expendedoras</p>
          <p class="service-description">Ofrecemos servicios de muestreo de manera eficiente y precisa para que nuestros clientes puedan localizar los productos que desean.</p>
        </div>
      </div>
      <div class="service col-sm-12" data-aos="fade-up" data-aos-delay="600">
        <img src="https://media.discordapp.net/attachments/914613587715182622/1085524872962244639/pexels-pavel-danilyuk-8294618.jpg?width=873&height=583" alt="Servicio de monitoreo">
        <div class="overlay">
          <p class="service-name">Monitoreo, gestión y análisis de datos</p>
          <p class="service-description">Brindamos soluciones de monitoreo, gestión y análisis de datos para gestionar su flota de máquinas expendedoras</p>
        </div>
      </div>
    </div>
  </section>
   
  <!--TODO tercera section (contiene una imagen, un titulo, descripcion y boton directo al mapa de la web) -->
  <section id="map-section">
    <div class="map-content">
      <h2 data-aos="fade-up" data-aos-delay="300" class="aos-title">Encuentra máquinas expendedoras cerca de ti</h2>
      <p data-aos="fade-up" data-aos-delay="600" class="aos-text">Explora nuestro mapa interactivo y descubre las máquinas expendedoras en tu área.</p>
      <a href="{{ route('mapa') }}"  data-aos="fade-up" data-aos-delay="900" class="btn btn-map aos-button">Ver Mapa <i class="fas fa-map-location-dot fa-fw"></i></a>
    </div>
    <img src="https://cdn.discordapp.com/attachments/914613587715182622/1086364643754266724/pexels-justin-hamilton-92248.jpg" alt="Mapa de máquinas expendedoras" class="map-image" />
  </section>
  
  
  <!--TODO cuarta section (contiene un video, un titulo, descripcion y boton directo a la sección de administración) -->
  <section id="animated-map-section">
    <div class="content-wrapper">
      <div class="left-content" data-aos="fade-right">
        <h2>Gestiona tus máquinas expendedoras</h2>
        <p>Añade máquinas expendedoras y controla su estocaje, lleva tu empresa al siguiente nivel con nosotros</p>
        <a href="{{ route('administracion') }}"  class="btn btn-animated-map">Administración <i class="fa-solid fa-wand-magic-sparkles"></i></a>
      </div>
      <div class="right-content" data-aos="fade-left">
        <video src="https://cdn.discordapp.com/attachments/914613587715182622/1085692550632972388/AdobeStock_227525536.mov" autoplay muted loop class="map-thumbnail"></video>
      </div>
    </div>
  </section>
  
  <!--TODO quinta section (contiene distintas cartas con los precios y los servicios que ofrece la web) -->
  <section id="pricing-section">
    <div class="pricing-container">
      <h2 class="pricing-title" data-aos="fade-up">Planes <span>Premium</span></h2>
      <p class="pricing-subtitle">Disfruta de nuestra plataforma sin anuncios y con descuentos en máquinas expendedoras.</p>
      <div class="pricing-cards">
        <!--? Usuarios -->
        <div class="pricing-card" data-aos="fade-up" data-aos-delay="120">
          <h3 class="card-title">Usuario</h3>
          <h4 class="card-subtitle">Sin anuncios para siempre</h4>
          <p class="card-price">10€</p>
          <a href="{{ route('premium') }}" class="btn-card">Seleccionar plan</a>
        </div>
        <div class="pricing-card" data-aos="fade-up" data-aos-delay="120">
          <h3 class="card-title">Usuario</h3>
          <h4 class="card-subtitle">Descuentos y sin anuncios</h4>
          <p class="card-price">9€/mes</p>
          <a href="{{ route('premium') }}" class="btn-card">Seleccionar plan</a>
        </div>
        <div class="pricing-card" data-aos="fade-up" data-aos-delay="120">
          <h3 class="card-title">Usuario</h3>
          <h4 class="card-subtitle">Descuentos en todas las máquinas y ofertas exclusivas</h4>
          <p class="card-price">20€</p>
          <a href="{{ route('premium') }}" class="btn-card">Seleccionar plan</a>
        </div>
        <!--? Empresas -->
        <div class="pricing-card" data-aos="fade-up" data-aos-delay="120">
          <h3 class="card-title">Empresa</h3>
          <h4 class="card-subtitle">Destacar 1 máquina expendedora</h4>
          <p class="card-price">20€/mes</p>
          <a href="{{ route('premium') }}" class="btn-card">Seleccionar plan</a>
        </div>
        <div class="pricing-card" data-aos="fade-up" data-aos-delay="120">
          <h3 class="card-title">Empresa</h3>
          <h4 class="card-subtitle">Destacar hasta 4 máquinas</h4>
          <p class="card-price">50€/mes</p>
          <a href="{{ route('premium') }}" class="btn-card">Seleccionar plan</a>
        </div>
        <div class="pricing-card" data-aos="fade-up" data-aos-delay="120">
          <h3 class="card-title">Empresa</h3>
          <h4 class="card-subtitle">Destacar todas las máquinas que quieras</h4>
          <p class="card-price">100€/mes</p>
          <a href="{{ route('premium') }}" class="btn-card">Seleccionar plan</a>
        </div>
      </div>
    </div>
  </section>
  
  <!--TODO section contactanos (contiene un formulario para contactar con el soporte) -->
  <section id="contact-section">
    <div class="contact-container">
      <h2 class="contact-title" data-aos="fade-up">Contacta con nosotros</h2>
      <form class="contact-form" data-aos="fade-up" data-aos-delay="200">
        <div class="form-group">
          <input type="text" class="form-control" id="name" placeholder="Nombre" required>
        </div>
        <div class="form-group">
          <input type="email" class="form-control" id="email" placeholder="Correo electrónico" required>
        </div>
        <div class="form-group">
          <textarea class="form-control" id="message" rows="5" placeholder="Mensaje" required></textarea>
        </div>
        <button type="submit" class="submit-btn">Enviar mensaje</button>
      </form>
    </div>
  </section>

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
