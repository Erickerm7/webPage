jQuery(document).ready(function() {
    
    $('.suscribir form').submit(function() {

        var postdata = $('.suscribir form').serialize();
        
        $.ajax({
            type: 'POST',
            url: '././subscribe.php',
            data: postdata,
            dataType: 'json',
            success: function(json) {
                
                $('.suscribir form').fadeOut('fast', function() {
                    
                    $('.suscribir').append('<p><span class="violet">Gracias por suscribirse' + json + '.</p>');
                    
                }
            );
                
            }
        });
        return false;
    });
});