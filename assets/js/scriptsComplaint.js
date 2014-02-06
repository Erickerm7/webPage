
/*
    Complaint
*/

jQuery(document).ready(function() {
    $('.complaint form').submit(function() {

        $('.contact-form form .nombresLabel').html('nombres');
		$('.contact-form form .apellidosLabel').html('apellidos');
		$('.contact-form form .phoneLabel').html('phone');
        $('.contact-form form .emailLabel').html('email');
        $('.contact-form form .messageLabel').html('message');

        var postdata = $('.contact-form form').serialize();
        $.ajax({
            type: 'POST',
            url: 'assets/sendmailcomplaint.php',
            data: postdata,
            dataType: 'json',
            success: function(json) {
                if(json.nombresMessage != '') {
                    $('.contact-form form .nombresLabel').append(' - <span class="violet" style="font-size: 13px; font-style: italic"> ' + json.nombresMessage + '</span>');
                }
				if(json.apellidosMessage != '') {
                    $('.contact-form form .apellidosLabel').append(' - <span class="violet" style="font-size: 13px; font-style: italic"> ' + json.apellidosMessage + '</span>');
                }
				if(json.phoneMessage != '') {
                    $('.contact-form form .phoneLabel').append(' - <span class="violet" style="font-size: 13px; font-style: italic"> ' + json.phoneMessage + '</span>');
                }
                if(json.emailMessage != '') {
                    $('.contact-form form .emailLabel').append(' - <span class="violet" style="font-size: 13px; font-style: italic"> ' + json.emailMessage + '</span>');
                }
                if(json.messageMessage != '') {
                    $('.contact-form form .messageLabel').append(' - <span class="violet" style="font-size: 13px; font-style: italic"> ' + json.messageMessage + '</span>');
                }
                if(json.nombresMessage == '' && json.apellidosMessage == '' && json.phoneMessage == '' && json.emailMessage == '' && json.messageMessage == '') {
                    $('.contact-form form').fadeOut('fast', function() {
                        $('.contact-form').append('<p><span class="violet">Gracias por contactarnos!</span> Pronto nos comunicaremos contigo.</p>');
                    });
                }
            }
        });
        return false;
    });
});

