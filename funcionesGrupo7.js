function ConfirmEnvio(){

    var name= $('#nombre').val();
    var surname=$('#apellido').val();
    if(name!= null && surname!=null)
    {
        Swal.fire({
            title:'Se ha enviado su mensaje con éxito!!',
            icon:'success',
            confirmButtonColor: '#CF372D'
        });
    }
    
}

function SoloLetras(e){
    key= e.keyCode || e.which;
    tecla = String.fromCharCode(key).toString();
    letras = "ABCDEFGHIJKLMNÑOPQRSTUVWXYZÁÉÍÓÚabcdefghijklmnopqáéíóú";
    
    especiales= [0,13]:
    tecla_especial = false
    for(var i in especiales){
        if (key == especiales[i]){
            tecla_especial=true;
            break;
        }
    }
    if (letras.indexOf(tecla) == -1 && !tecla_especial)
    {
        alert("ingrese solo letras");
        return false;
    }
}