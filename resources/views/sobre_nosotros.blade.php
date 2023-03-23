@extends('base')

@section('title', 'Sobre Nosotros Selling Dreams')

@section('head')
    <!-- Cualquier otra etiqueta meta, estilo o script que se necesite incluir en el head -->
    <!-- link al CSS -->
    <link rel="stylesheet" href="{{ url('css/sobre_nosotros.css') }}">
    <!-- link al Jquery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- link a JS -->
    <script src="{{ url('js/sobre_nosotros.js') }}"></script>
@endsection

@section('body')
    <section id="noscroll">
        <!-- Aquí va el contenido de la página, es decir, todo lo que va dentro de la etiqueta body -->
        <!-- resources/views/about.blade.php -->
        <div class="container mt-5">
            <!-- Sección de presentación -->
            <div class="row">
                <div class="col-md-6" data-aos="fade-right">
                    <img src="https://cdn.discordapp.com/attachments/914613587715182622/1088043345466626078/pexels-thisisengineering-3861969.jpg"
                        alt="Imagen de presentación" class="img-fluid img-responsive" />
                </div>
                <div class="col-md-6" data-aos="fade-left">
                    <h2>Quiénes Somos</h2>
                    <p>
                        En Selling Dreams, estamos comprometidos en brindar soluciones tecnológicas innovadoras para la
                        industria de las máquinas expendedoras. Nuestro equipo de profesionales altamente capacitados se
                        dedica a desarrollar productos y servicios que permiten a nuestros usuarios geolocalizar y
                        monitorear el stock de máquinas en tiempo real.
                    </p>
                    <p>
                        Desde nuestra fundación en 2023, hemos trabajado con dedicación y pasión para ser una referencia en
                        la industria de las máquinas expendedoras y de la tecnología en general. Nuestro objetivo es seguir
                        evolucionando y creciendo para brindar soluciones cada vez más avanzadas y efectivas a nuestros
                        clientes. ¡Un futuro de oportunidades está a solo un clic de distancia!
                    </p>
                    <p>
                        En Selling Dreams, no solo nos enfocamos en desarrollar soluciones tecnológicas avanzadas, sino
                        también en brindar un servicio excepcional a nuestros clientes. Nos aseguramos de entender sus
                        necesidades y trabajar en colaboración con ellos para crear soluciones personalizadas y efectivas.
                        Además, nuestro compromiso con la innovación nos mantiene en constante evolución y mejora, lo que
                        nos permite ofrecer productos y servicios de vanguardia en todo momento.
                    </p>
                </div>


                <!-- Sección del equipo -->
                <div class="row mt-5">
                    <div class="col-12">
                        <h2 class="text-center" data-aos="zoom-in">Nuestro Equipo</h2>
                    </div>
                </div>
                <div class="row mt-3 card-grid">
                  <div class="col-md-4 custom-col" data-aos="flip-left">
                        <div class="card">
                            <img src="https://cdn.discordapp.com/attachments/914613587715182622/1088054782138253372/IMG-20200828-WA0048.jpg"
                                class="card-img-top img-fluid" alt="Miembro del equipo" />
                            <div class="card-body">
                                <h5 class="card-title">Pablo Jiménez</h5>
                                <p class="card-text">CEO (Chief Executive Officer)</p>
                                <p class="card-text">Fundador y desarrollador de Selling Dreams.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4" data-aos="flip-left">
                        <div class="card">
                            <img src="https://cdn.discordapp.com/attachments/914613587715182622/1088059024982945802/PHOTO-2023-01-20-23-21-27.jpg"
                                class="card-img-top img-fluid" alt="Miembro del equipo" />
                            <div class="card-body">
                                <h5 class="card-title">Juan Bautista Rodriguez</h5>
                                <p class="card-text">Comercial</p>
                                <p class="card-text">Enlaza empresas de vending y oferta servicios.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4" data-aos="flip-left">
                        <div class="card">
                            <img src="https://cdn.discordapp.com/attachments/914613587715182622/1088064277048479795/IMG_0130_2.jpg"
                                class="card-img-top img-fluid" alt="Miembro del equipo" />
                            <div class="card-body">
                                <h5 class="card-title">David Jaquete</h5>
                                <p class="card-text">Marketing digital</p>
                                <p class="card-text">Gestor de redes sociales Selling Dreams.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sección de logros -->
        <div class="container">
          <div class="row mt-5">
              <div class="col-12">
                  <h2 class="text-center" data-aos="zoom-in">Nuestros Logros</h2>
              </div>
          </div>
            <div class="row mt-3 achievement-grid">
              <div class="col-md-3 custom-col" data-aos="fade-up">
                    <div class="achievement">
                        <i class="fas fa-award fa-2x"></i>
                        <h4>Eficiencia en la cadena de suministro</h4>
                        <p>Nuestra plataforma de geolocalización y monitoreo de stock en tiempo real ha logrado aumentar la
                            eficiencia en la cadena de suministro de nuestros clientes en un 25%. Al proporcionar
                            información
                            precisa y actualizada sobre el stock, nuestros usuarios pueden tomar decisiones informadas y
                            mejorar
                            la gestión del inventario, reduciendo así los costos y el tiempo de reposición, lleva tu empresa
                            al
                            siguiente nivel con nosotros</p>
                    </div>
                </div>
                <div class="col-md-3" data-aos="fade-up">
                    <div class="achievement">
                        <i class="fas fa-award fa-2x"></i>
                        <h4>Integración exitosa con plataformas líderes</h4>
                        <p>Hemos logrado integrar nuestra solución de geolocalización y muestreo de stock en tiempo real con
                            varias plataformas líderes de gestión de la cadena de suministro y sistemas de información
                            empresarial. Estas integraciones permiten a nuestros clientes acceder a información en tiempo
                            real
                            sobre sus inventarios y ubicaciones de productos a través de un único sistema unificado,
                            mejorando
                            la toma de decisiones y la eficiencia operativa.</p>
                    </div>
                </div>
                <div class="col-md-3" data-aos="fade-up">
                    <div class="achievement">
                        <i class="fas fa-award fa-2x"></i>
                        <h4>Reducción del tiempo de respuesta</h4>
                        <p>Gracias a nuestra plataforma de geolocalización y monitoreo de stock en tiempo real, nuestros
                            clientes han experimentado una reducción significativa en el tiempo de respuesta ante cambios en
                            la
                            demanda o incidencias en el inventario. Al proporcionar información actualizada y precisa, las
                            empresas pueden reaccionar rápidamente a las fluctuaciones del mercado y resolver problemas de
                            stock
                            de manera más eficiente.</p>
                    </div>
                </div>
                <div class="col-md-3" data-aos="fade-up">
                    <div class="achievement">
                        <i class="fas fa-award fa-2x"></i>
                        <h4>Satisfacción del cliente</h4>
                        <p>Nuestro compromiso con la excelencia y el soporte personalizado ha resultado en una alta satisfacción del cliente. Continuamente trabajamos para mejorar y adaptar nuestras soluciones a las necesidades específicas de cada cliente, garantizando un rendimiento óptimo y relaciones a largo plazo.</p>
                    </div>
                </div>
                
            </div>
        </div>
        </div>
    </section>

@endsection

@section('scripts')
    <!-- Cualquier script adicional que necesites incluir -->
@endsection

@section('footer')
    <!-- Cualquier elemento adicional que se quiera añadir al footer -->
@endsection
