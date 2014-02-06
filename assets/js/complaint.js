
/*
    Complaint
*/

jQuery(document).ready(function() {
    $('.complaint form').submit(function() {

        $('.complaint form .NombresLabel').html('Nombres');
		$('.complaint form .ApellidosLabel').html('Apellidos');
		$('.complaint form .TelefonoLabel').html('Telefono');
        $('.complaint form .CorreoLabel').html('Correo');
        $('.complaint form .ProblemaLabel').html('Problema');

        var postdata = $('.complaint form').serialize();
        $.ajax({
            type: 'POST',
            url: 'assets/sendmailcomplaint.php',
            data: postdata,
            dataType: 'json',
            success: function(json) {
                if(json.NombresMessage != '') {
                    $('.complaint form .NombresLabel').append(' - <span class="violet" style="font-size: 13px; font-style: italic"> ' + json.NombresMessage + '</span>');
                }
				if(json.ApellidosMessage != '') {
                    $('.complaint form .ApellidosLabel').append(' - <span class="violet" style="font-size: 13px; font-style: italic"> ' + json.ApellidosMessage + '</span>');
                }
				if(json.TelefonoMessage != '') {
                    $('.complaint form .TelefonoLabel').append(' - <span class="violet" style="font-size: 13px; font-style: italic"> ' + json.TelefonoMessage + '</span>');
                }
                if(json.CorreoMessage != '') {
                    $('.complaint form .CorreoLabel').append(' - <span class="violet" style="font-size: 13px; font-style: italic"> ' + json.CorreoMessage + '</span>');
                }
                if(json.ProblemaMessage != '') {
                    $('.complaint form .ProblemaLabel').append(' - <span class="violet" style="font-size: 13px; font-style: italic"> ' + json.ProblemaMessage + '</span>');
                }
                if(json.NombresMessage == '' && json.ApellidosMessage == '' && json.TelefonoMessage == '' && json.CorreoMessage == '' && json.ProblemaMessage == '') {
                    $('.complaint form').fadeOut('fast', function() {
                        $('.complaint').append('<p><span class="violet">Gracias por tu mensaje!</span> Pronto nos comunicaremos contigo. <a href="complaint.php">Volver a cargar el formulario</a></p>');
                    });
                }
            }
        });
        return false;
    });
});

