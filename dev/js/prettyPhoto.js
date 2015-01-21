/* 
 *
 * Script for adding pretty photo rel to wp-image
 *
 * @package oracle
 * @author marcelbadua
 */

jQuery(function($){
  
   $( "#wp-entry" ).find( "img" ).parent().attr('rel', 'prettyPhoto');

  $("[rel^='prettyPhoto']").prettyPhoto();

});
