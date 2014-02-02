/*
    Slider
*/
$(window).load(function() {
    $('.flexslider').flexslider({
        animation: "slide",
        controlNav: "thumbnails"
    });
});


/*
    Filterable portfolio
*/
jQuery(document).ready(function() {
    $clientsHolder = $('ul.portfolio-img');
    $clientsClone = $clientsHolder.clone(); 
 
    $('.filter-portfolio a').click(function(e) {
        e.preventDefault();
        $filterClass = $(this).attr('class');
 
        $('.filter-portfolio a').attr('id', '');
        $(this).attr('id', 'active-imgs');
 
        if($filterClass == 'all'){
            $filters = $clientsClone.find('li');
        }
        else {
            $filters = $clientsClone.find('li[data-type~='+ $filterClass +']');
        }
 
        $clientsHolder.quicksand($filters, {duration: 700}, function() {
            $("a[rel^='prettyPhoto']").prettyPhoto({social_tools: false});
        });
    });
});


/*
    Pretty Photo
*/
jQuery(document).ready(function() {
    $("a[rel^='prettyPhoto']").prettyPhoto({social_tools: false});
});


/*
    Show latest tweets
*/
jQuery(function($) {
    $(".show-tweets").tweet({
        username: "aceiba",
        page: 1,
        count: 10,
        loading_text: "loading ..."
    }).bind("loaded", function() {
        var ul = $(this).find(".tweet_list");
        var ticker = function() {
            setTimeout(function() {
                ul.find('li:first').animate( {marginTop: '-4em'}, 500, function() {
                    $(this).detach().appendTo(ul).removeAttr('style');
                });
                ticker();
            }, 5000);
        };
        ticker();
    });
});


/*
    Flickr feed
*/
$(document).ready(function() {
    $('.flickr-feed').jflickrfeed({
        limit: 8,
        qstrings: {
            id: '52617155@N08'
        },
        itemTemplate: '<li><a href="{{link}}" target="_blank"><img src="{{image_s}}" alt="{{title}}" /></a></li>'
    });
});


/*
    Google maps
*/
jQuery(document).ready(function() {
    var position = new google.maps.LatLng(14.576455, -90.525085);
    $('.map').gmap({'center': position,'zoom': 16, 'disableDefaultUI':true, 'callback': function() {
            var self = this;
            self.addMarker({'position': this.get('map').getCenter() });	
        }
    }); 
});


/*
    Contact form
*/

jQuery(document).ready(function() {
    $('.contact-form form').submit(function() {

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

