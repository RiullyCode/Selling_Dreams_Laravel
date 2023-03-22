$(document).ready(function () { // Esta función se ejecuta cuando el DOM está completamente cargado
  // Función para igualar la altura de las tarjetas
  function equalizeCardHeights() {
    let maxHeight = 0; // variable para almacenar la altura máxima de las tarjetas

    $(".card").each(function () { // selecciona cada tarjeta y aplica una función
      $(this).height("auto"); // establece la altura de la tarjeta en "auto"
      maxHeight = Math.max(maxHeight, $(this).height()); // actualiza la altura máxima si la altura actual es mayor
    });

    $(".card").height(maxHeight); // establece la altura de todas las tarjetas en la altura máxima
  }

  equalizeCardHeights(); // llama a la función para igualar la altura de las tarjetas al cargar la página

  // Función para igualar la altura de las tarjetas al cambiar el tamaño de la ventana
  $(window).on("resize", function () {
    equalizeCardHeights(); // llama a la función para igualar la altura de las tarjetas al cambiar el tamaño de la ventana
  });

  AOS.init(); // Inicia la biblioteca AOS para animar elementos en la página
});
  