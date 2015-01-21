/* 
 *
 * Script for adding pretty photo rel to wp-image
 *
 * @package oracle
 * @author marcelbadua
 */

jQuery(function($){
  
   $( "a" ).find( "img" ).parent().attr('rel', 'prettyPhoto');

  $("[rel^='prettyPhoto']").prettyPhoto();

});
