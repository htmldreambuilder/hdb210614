$(document).foundation({
//Instanciamos el slider de Foundation
    orbit: {
        bullets: false,
        slide_number: false,
        timer_show_progress_bar: true,
        timer: true,
        timer_speed: 4000 //4000
    }
});

$(document).ready(function() {
    //Para todas las páginas
    $('#captcha').keyup(function(){
        valor=$(this).val();
        if (valor=='4'){
            $('#nombreContactoRapido_cuentanosloContactoRapido').removeAttr('disabled');
        }
    });
    
    // Scripts para sección servicios
    //Mostrar contácto rápido
    $('#mostrarCuentanos').click(function() {
        $('#formulario').toggle('fast');
    });
});