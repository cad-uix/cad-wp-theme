/* 
 *
 * Script for Back To Top
 *
 * @package cad-wp-theme
 * @author marcelbadua
 */

jQuery(function($){

    var offset = 400;

    $(document).scroll(function() {
                
        if ( $(this).scrollTop() > offset) {
            $('.back-to-top').addClass('show');
        } else {
            $('.back-to-top').removeClass('show');
        }
        
    });

    $('.back-to-top').click(function(event) {

        event.preventDefault();

        $('html, body').animate({

            scrollTop: 0

        }, 500);

        return false;

    });

});