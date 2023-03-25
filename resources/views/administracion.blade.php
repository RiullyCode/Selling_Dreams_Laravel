@extends('base')

@section('title', 'Administración Selling Dreams')

@section('head')
    <!-- Cualquier otra etiqueta meta, estilo o script que se necesite incluir en el head -->
    <!-- link al CSS -->
    <link rel="stylesheet" href="{{ url('css/administracion.css') }}">
    <!-- link a JS -->
    <script src="{{ url('js/administracion.js') }}"></script>
    {{-- link api google maps --}}
    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBc9uaA7-k7wHPanrwYdSY7sanbhSfKibk&callback=initMap"></script>


@endsection

@section('body')
    <!-- Aquí va el contenido de la página, es decir, todo lo que va dentro de la etiqueta body -->
    <h1>Administrar máquinas expendedoras</h1>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 full-height">
                <div id="admin-panel">
                    <h2>Añadir máquina expendedora</h2>
                    <form id="add-vending-machine-form" enctype="multipart/form-data">
                        <label for="nombre_empresa">Nombre de la empresa:</label>
                        <input type="text" id="nombre_empresa" name="nombre_empresa" readonly value="Mi empresa">
                        <label for="latitud">Latitud:</label>
                        <input type="text" id="latitud" name="latitud" required>
                        <label for="longitud">Longitud:</label>
                        <input type="text" id="longitud" name="longitud" required>
                        <label for="calle">Calle:</label>
                        <input type="text" id="calle" name="calle" required>
                        <label for="codigo_postal">Código postal:</label>
                        <input type="text" id="codigo_postal" name="codigo_postal" required>
                        <label for="foto_maquina">Foto de la máquina expendedora:</label>
                        <div class="custom-file-input">
                            <input type="file" id="foto_maquina" name="foto_maquina" accept="image/*" required>
                        </div>
                        <button type="submit">Añadir máquina expendedora</button>
                    </form>
                </div>
            </div>
            <div class="col-md-6">
                <div id="map-container">
                    <p id="map-message">Pulsa en una calle para autocompletar el formulario</p>
                    <div id="map"></div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <h2 class="section-title">Máquinas expendedoras existentes</h2>
                <div class="vending-machine-card">
                    <div class="vending-machine-data">
                        <p><strong>Nombre de la empresa:</strong> Soluciones S.A</p>
                        <p><strong>Latitud:</strong> 40.7128</p>
                        <p><strong>Longitud:</strong> -74.0060</p>
                        <p><strong>Calle:</strong> Calle Ejemplo 123</p>
                        <p><strong>Calle:</strong> código postal</p>
                        <button class="btn btn-warning modify-stock-button">Modificar estocaje</button>
                        <button class="btn btn-danger delete-button">Eliminar</button>
                    </div>
                    <div class="vending-machine-image">
                        <img src="" alt="Foto de la máquina expendedora">
                    </div>
                </div>
            </div>
        </div>


        <div id="stock-management-panel" style="display: none;">
            <h2>Añadir producto a la máquina</h2>
            <form id="add-product-form" enctype="multipart/form-data">
                <label for="nombre_producto">Nombre del producto:</label>
                <input type="text" id="nombre_producto" name="nombre_producto" required>
                <label for="unidades">Unidades disponibles:</label>
                <input type="number" id="unidades" name="unidades" required>
                <label for="foto_producto">Foto del producto:</label>
                <input type="file" id="foto_producto" name="foto_producto" accept="image/*" required>
                <button type="submit">Añadir producto</button>
            </form>
            <h3>Productos existentes</h3>
            <div class="product-list">
                <!-- Aquí se listarán los productos añadidos -->
            </div>
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
