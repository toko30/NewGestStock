var positionElementInPage = $('#menu_fixed').offset().top;

if ($(window).scrollTop() >= positionElementInPage) 
{
	$('#menu_fixed').addClass("floatable");
}
		
$(window).on('scroll', function() {

       if ($(window).scrollTop() >= positionElementInPage) {
            $('#menu_fixed').addClass("floatable");
        }
		else{
			$('#menu_fixed').removeClass("floatable");
		}

    }
);
