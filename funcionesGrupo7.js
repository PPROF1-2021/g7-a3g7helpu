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
        } else {
          confirmEnvio()
          event.preventDefault()
          return;
        }
        form.classList.add('was-validated')
      }, false)
    })
}

function confirmEnvio() {
  Swal.fire({
    title: 'Se ha enviado su mensaje con éxito!!',
    icon: 'success',
    confirmButtonColor: '#CF372D'
  });
  myForm.reset()
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





