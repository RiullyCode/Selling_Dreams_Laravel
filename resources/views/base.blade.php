<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>@yield('titulo')</title>
  <!-- favicon de la web -->
  <link rel="icon" href="https://cdn.discordapp.com/attachments/914613587715182622/1084148673883156511/favicon_selling_dreams.png" type="image/x-icon" />
  <!-- LINKS BOOTSTRAP -->
  <!-- CSS Bootrstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
  <!-- Javascript Bootrstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
  </script>
  <!-- link fuente Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto" />
  <!-- link font awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" />
  <!-- link a Typedjs-->
  <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12/lib/typed.min.js"></script>
  <!-- Link a la biblioteca AOS -->
  <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css">
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <!-- link al CSS -->
  <link rel="stylesheet" href="{{ url('css/base.css') }}">
  <!-- link al JS -->
  <script src="{{ url('js/base.js') }}"></script>
  @yield('head')
</head>

<body>
  <!-- menu -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{ route('inicio') }}">
        <img src="https://cdn.discordapp.com/attachments/914613587715182622/1084158119606759585/Logo_Proyecto.png" alt="Logo" height="40" />
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <!-- ... -->

        <ul class="navbar-nav me-auto mb-2 mb-lg-0 menu-centered">
          <li class="nav-item">
            <a class="nav-link {{ Route::currentRouteName() === 'inicio' ? 'active' : '' }}" aria-current="page" href="{{ route('inicio') }}">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Route::currentRouteName() === 'sobre_nosotros' ? 'active' : '' }}" href="{{ route('sobre_nosotros') }}">Sobre Nosotros</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Route::currentRouteName() === 'mapa' ? 'active' : '' }}" href="{{ route('mapa') }}">Mapa</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Route::currentRouteName() === 'administracion' ? 'active' : '' }}" href="{{ route('administracion') }}">Administración</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Route::currentRouteName() === 'premium' ? 'active' : '' }}" href="{{ route('premium') }}">Premium</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Route::currentRouteName() === 'contacto' ? 'active' : '' }}" href="{{ route('contacto') }}">Contacto</a>
          </li>
        </ul>

        <!-- ... -->

        <div class="d-flex" style="margin-right: 20px;">
          <div class="me-3 d-none" id="username">Nombre de usuario</div>
          <a href="#" class="text-white me-4" data-bs-toggle="modal" data-bs-target="#loginModal">
            <i class="fas fa-user"></i>
          </a>
          <a href="#" class="text-white" data-bs-toggle="modal" data-bs-target="#registerModal">
            <i class="fas fa-address-card"></i>
          </a>
        </div>
      </div>
    </div>
  </nav>
  <!--TODO Modal del formulario de inicio de sesión -->
  <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="loginModalLabel">Inicio de Sesión</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form>
            <div class="mb-3">
              <label for="loginEmail" class="form-label">Correo electrónico</label>
              <input type="email" class="form-control" id="loginEmail" aria-describedby="emailHelp" />
              <div id="emailHelp" class="form-text">
                Nunca compartiremos tu correo electrónico con nadie más.
              </div>
            </div>
            <div class="mb-3">
              <label for="loginPassword" class="form-label">Contraseña</label>
              <input type="password" class="form-control" id="loginPassword" />
            </div>
            <button type="submit" class="btn btn-success">
              Iniciar Sesión
            </button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!--TODO Modal del formulario de registro -->
  <div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="registerModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="registerModalLabel">
            Registro de usuario
          </h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form>
            <div class="mb-3">
              <label class="form-label">Formulario de registro</label>
              <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" id="registerTypeSwitch">
                <label class="form-check-label" for="registerTypeSwitch">¿Eres una empresa?</label>
              </div>
            </div>

            <div id="personaFisica">
              <div class="mb-3">
                <label for="registerName" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="registerName" aria-describedby="nameHelp" />
                <div id="nameHelp" class="form-text">
                  Introduce tu nombre de pila
                </div>
              </div>
              <div class="mb-3">
                <label for="surname" class="form-label">Apellidos</label>
                <input type="text" class="form-control" id="surname" aria-describedby="surnameHelp" />
                <div id="surnameHelp" class="form-text">
                  Introduce tu primer y segundo apellido
                </div>
              </div>
              <div class="mb-3">
                <label for="registerEmail" class="form-label">Email</label>
                <input type="email" class="form-control" id="registerEmail" aria-describedby="emailHelp" />
                <div id="emailHelp" class="form-text">
                  Introduce el email con el que te quieres registrar
                </div>
              </div>
              <div class="mb-3">
                <label for="registerPasswordCliente" class="form-label">Contraseña</label>
                <input type="password" class="form-control" id="registerPasswordCliente" aria-describedby="passwordConfirmHelpCliente" required pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$" />
                <div id="passwordConfirmHelpCliente" class="form-text">
                  Por favor, introduce de nuevo tu contraseña.
                </div>
              </div>
            </div>

            <div id="personaJuridica" style="display: none;">
              <div class="mb-3">
                <label for="companyType" class="form-label">Tipo de empresa</label>
                <select class="form-select" id="companyType" aria-describedby="companyTypeHelp">
                  <option value="sociedad_anonima">Sociedad Anónima</option>
                  <option value="sociedad_limitada">Sociedad Limitada</option>
                </select>
                <div id="companyTypeHelp" class="form-text">
                  Selecciona el tipo de empresa
                </div>
              </div>
              <div class="mb-3">
                <label for="nameEmpresa" class="form-label">Nombre de la empresa</label>
                <input type="text" class="form-control" id="nameEmpresa" aria-describedby="helpNameEmpresa" />
                <div id="helpNameEmpresa" class="form-text">
                  Introduce el nombre de la empresa
                </div>
              </div>
              <div class="mb-3">
                <label for="registerEmailEmpresa" class="form-label">Email Empresa</label>
                <input type="email" class="form-control" id="registerEmailEmpresa" aria-describedby="emailHelpEmpresa" />
                <div id="emailHelpEmpresa" class="form-text">
                  Introduce el email con el que te quieres registrar
                </div>
              </div>
              <div class="mb-3">
                <label for="registerPasswordEmpresa" class="form-label">Contraseña Empresa</label>
                <input type="password" class="form-control" id="registerPasswordEmpresa" aria-describedby="passwordHelpEmpresa" required pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$" />
                <div id="passwordHelpEmpresa" class="form-text">
                  Introduce la contraseña con la que te quieres registrar
                </div>
              </div>
            </div>

            <!-- Resto del formulario -->
            <div class="form-check mt-3">
              <input class="form-check-input" type="checkbox" id="termsAndConditions" required />
              <label class="form-check-label" for="termsAndConditions">
                Acepto los <a href="{{ route('terminosycondiciones') }}">términos y condiciones</a>.
              </label>
            </div>
            <div class="mt-3">
              <button type="submit" class="btn btn-primary">
                Registrarse
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  @yield('body')
  @yield('scripts')
  <!--TODO Footer-->
  <footer>
    <div class="footer-container">
      <div class="footer-logo">
        <a href="{{ route('inicio') }}"><img src="https://media.discordapp.net/attachments/914613587715182622/1084158119606759585/Logo_Proyecto.png?width=1112&height=582" alt="Logo" /></a>
      </div>
      <nav class="footer-navigation">
        <ul>
          <li><a href="{{ route('inicio') }}">Inicio</a></li>
          <li><a href="{{ route('sobre_nosotros') }}">Sobre Nosotros</a></li>
          <li><a href="{{ route('mapa') }}">Mapa</a></li>
          <li><a href="{{ route('administracion') }}">Administración</a></li>
          <li><a href="{{ route('premium') }}">Premium</a></li>
          <li><a href="{{ route('contacto') }}">Contacto</a></li>
        </ul>
      </nav>
      <div class="footer-social">
        <a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a>
        <a href="#" target="_blank"><i class="fab fa-twitter"></i></a>
        <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
        <a href="#" target="_blank"><i class="fab fa-linkedin"></i></a>
      </div>
    </div>
  </footer>
  @yield('footer')
</body>

</html>