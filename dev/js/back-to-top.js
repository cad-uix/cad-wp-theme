
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



    
