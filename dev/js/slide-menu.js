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

    $(this).click( function() {
      
      event.preventDefault();

      $(target).toggleClass('move');
      
      $(body).toggleClass('move');
      
      return false;
    
    });
  
  };

  $('.slide-menu-toggle').slideMenu();

});

