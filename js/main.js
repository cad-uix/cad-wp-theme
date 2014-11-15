
	NProgress.configure({ showSpinner: true });
				NProgress.set(0.2);
				NProgress.set(0.4);
				NProgress.set(0.6); 
				NProgress.set(0.8); 
				NProgress.set(1.0);				
				
NProgress.start();

NProgress.done();

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



jQuery(function($){
    

    $.fn.slideMenu = function() {

    var target = $(this).attr('data-target');
    var direction = $(this).attr('data-direction');
    var body = '#page-wrap';

    $(target).addClass(direction);
    $(this).addClass(direction);
    $(body).addClass(direction);

    $(target).removeClass('load');

    $(this).click( function() {
      
      event.preventDefault();

      $(target).toggleClass('move');
      
      $(body).toggleClass('move');
      
      return false;
    
    });
  
  };

$('.slide-menu-toggle').slideMenu();

});

