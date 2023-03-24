document.addEventListener('DOMContentLoaded', function() {
    var switchElement = document.getElementById('registerTypeSwitch');
  
    if (switchElement) {
      switchElement.addEventListener('change', function() {
        if (this.checked) {
          document.getElementById('personaFisica').style.display = 'none';
          document.getElementById('personaJuridica').style.display = 'block';
        } else {
          document.getElementById('personaFisica').style.display = 'block';
          document.getElementById('personaJuridica').style.display = 'none';
        }
      });
    } else {
      console.error('El elemento con el ID "registerTypeSwitch" no se encontró.');
    }
  });
  