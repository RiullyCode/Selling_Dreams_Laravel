function initMap() {
    if (typeof google === 'undefined') {
        // la API de Google Maps no se ha cargado
        return;
    }
    geocoder = new google.maps.Geocoder();
    const center = { lat: 43.3600, lng: -5.8448 };
    map = new google.maps.Map(document.getElementById("map"), {
        zoom: 14,
        center: center,
        mapId: '663d3bd556eb5ea6',
    });
    map.addListener("click", function (e) {
        fillFormFields(e.latLng);
    });
}

function fillFormFields(latLng) {
    // Obtiene la dirección a partir de las coordenadas
    geocoder.geocode({ 'location': latLng }, function (results, status) {
        if (status === 'OK') {
            if (results[0]) {
                // Rellena los campos del formulario
                document.getElementById("latitud").value = latLng.lat();
                document.getElementById("longitud").value = latLng.lng();

                let street_number = '';
                let route = '';
                let postal_code = '';

                // Itera a través de los componentes de la dirección y extrae la información necesaria
                for (const component of results[0].address_components) {
                    if (component.types.includes("street_number")) {
                        street_number = component.long_name;
                    } else if (component.types.includes("route")) {
                        route = component.long_name;
                    } else if (component.types.includes("postal_code")) {
                        postal_code = component.long_name;
                    }
                }

                // Combina el número y la calle
                const street = `${street_number} ${route}`;
                document.getElementById("calle").value = street;
                document.getElementById("codigo_postal").value = postal_code;
            } else {
                window.alert('No se encontraron resultados');
            }
        } else {
            window.alert('Geocoder falló debido a: ' + status);
        }
    });
}



