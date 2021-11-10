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
        } 
        form.classList.add('was-validated')
      }, false)
    })
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
}, 4450);
}
