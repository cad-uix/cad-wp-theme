/* 
 *
 * Script for Back To Top
 *
 * @package oracle
 * @author marcelbadua
 */

jQuery(function($){

    var offset = 500;

    $(document).scroll(function() {
        
        scroll_pos = $(this).scrollTop();
        
        if (scroll_pos > offset) {
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
/* 
 *
 * Script for adding pretty photo rel to wp-image
 *
 * @package oracle
 * @author marcelbadua
 */

jQuery(function($){
  
  //$("img[class^='wp-image-']").parent().attr('rel', 'prettyPhoto[post-images]');

  $("#wp-entry").find("img").parent().attr("rel", "prettyPhoto");
  $("[rel^='prettyPhoto']").prettyPhoto();

});

/* 
 *
 * Script for off canvas navigation for mobile
 *
 * @package oracle
 * @author marcelbadua
 */

jQuery(function($){
    
    $.fn.slideMenu = function() {

    var target = $(this).attr('data-target');
    var direction = $(this).attr('data-direction');
    var body = '#page-wrap';

    $(target).addClass(direction);
    $(this).addClass(direction);
    $(body).addClass(direction);

    $(target).removeClass('load');

    $(this).click( function(event) {
      
      event.preventDefault();

      $(target).toggleClass('move');
      
      $(body).toggleClass('move');
      
      return false;
    
    });
  
  };

  $('.slide-menu-toggle').slideMenu();

});

