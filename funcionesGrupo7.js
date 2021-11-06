function confirmEnvio() {

  Swal.fire({
            title: 'Se ha enviado su mensaje con éxito!!',
            icon: 'success',
            confirmButtonColor: '#CF372D',
            
        });       
}

  

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
            alert('Se ha enviado el mensaje con éxito')
          }
          form.classList.add('was-validated')
        }, false)
      })
  }







