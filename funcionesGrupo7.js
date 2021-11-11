function validarFormulario() {
    'use strict'
    
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.querySelectorAll('.needs-validation')
  
    // Loop over them and prevent submission
    Array.prototype.slice.call(forms)
      .forEach(function (form) {
        form.addEventListener('submit', function (event) {
          if (!form.checkValidity()) {
            event.preventDefault()
            event.stopPropagation()
          } else{
            confirmEnvio()
            event.preventDefault()
            redirect()
            return;
          }
          form.classList.add('was-validated')
        }, false)
      })
      
  }
  
function validaRegistro() {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        } else {
          mostrarDatosDeRegistro()
        }
        form.classList.add('was-validated')
      }, false)
    })
    
    return false;
}

function validaLongitud(e) {
  if (e.value.length < 2) {
    alert("Escriba mas de 2 caracteres");
    e.focus();
    e.select();
  }
}
function confirmEnvio() {
  Swal.fire({
    title: 'Se ha enviado su mensaje con éxito!!',
    icon: 'success',
    footer: 'Aguarde un momento que será redireccionado al Inicio',
    timer: '4500',
    timerProgressBar: true,
    showConfirmButton: false,    
    html: '<a href="index.html">Presione aquí para ir al Inicio</a>'
  });
  
  myForm.reset()
  setTimeout(function redirect(){
    window.location.href='index.html', false;
}, 4500);
}

function mostrarDatosDeRegistro(){
  var className = "encabezado-datos";
  var nacCliente = new Date(document.getElementById('start').value);
  var fechaActual = new Date();
  var edad = fechaActual.getFullYear() - nacCliente.getFullYear();
  var nombreCliente = document.getElementById('username').value;
  var paisCliente = document.getElementById('country').value;
  var provinciaCliente = document.getElementById('province').value;
  var ciudadCliente = document.getElementById('city').value;
  var direccionCliente = document.getElementById('adress').value;
  var apellidoCliente =  document.getElementById('surname').value;
  var emailCliente = document.getElementById('email-registro').value;
  const formularioDeRegistro = document.getElementById('cont1');
  const contenedorDeDatos = document.getElementById('contenedor-datos');

  formularioDeRegistro.classList.add('borrar');
  contenedorDeDatos.classList.add('contenedorDatos');

  if(contenedorDeDatos.getElementsByClassName(className).length == 0){
    var encabezadoDatos = document.createElement("h4");
    encabezadoDatos.className = className;
    encabezadoDatos.textContent = "Felicidades " + nombreCliente + " " + apellidoCliente + "! ya sos parte de helpU. En breve recibiras informacion en tu correo electronico " + emailCliente + " con los pasos a seguir. En helpU buscamos ayudar a personas de todas las edades por lo que con tus " + edad + " años de edad sos mas que bienvenid@!." + " Según lo que ingresaste te encontrás en: " + direccionCliente + " " + ciudadCliente + ", " + provinciaCliente + ", " + paisCliente;
    contenedorDeDatos.appendChild(encabezadoDatos);
  }
  setTimeout(function redirect(){
    window.location.href='index.html', false;
}, 4500);
}