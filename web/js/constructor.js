$(document).foundation({
//Instanciamos el slider de Foundation
    orbit: {
        animation: 'fade',
        resume_on_mouseout: true,
        bullets: false,
        slide_number: false,
        timer_show_progress_bar: true,
        timer: true,
        timer_speed: 4000, //4000
        //before_slide_change: alert('antes'), // Execute a function before the slide changes
        //after_slide_change: alert('despues') // Execute a function after the slide changes
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