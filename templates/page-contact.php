<?php
/**
 * Template Name: Contact Form Page
 *
 * The template for displaying Contact Form includes Google Map.
 *
 * @package oracle
 * @author marcelbadua
 */

get_header(); ?>

    <div id="content-wrap">

        <main class="container">

            <?php breadcrumb(); ?>

            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

            <article class="post" id="post-<?php the_ID(); ?>">

                <div class="page-header">

                    <?php the_title( '<h1>', '</h1>' ); ?>

                </div>

                <div class="row">

                    <div class="entry col-sm-6">

                        <?php the_content(); ?>

                    </div>

                    <div class="entry col-sm-6">

                        
                	<?php 
                	
                	$bool = call_data('address');
                
                	if(!empty($bool)) { ?>
                	
                	    <div id="google-map" style="width: 100%; height: 350px;">

                            <!-- CONTAINER FOR GOOGLE MAP -->

                        </div>
                        
                        <span id="map-address">
                        
                            <?php echo call_data('address'); ?> 
                        
                        </span>

                        <script src="http://maps.googleapis.com/maps/api/js?sensor=false&amp;extension=.js&amp;output=embed"></script>

                        <script>
                        /* google maps */

                        jQuery(function($){
                          
                        google.maps.visualRefresh = true;
                        
                        var map;
                        
                        function initialize() {
                          var geocoder = new google.maps.Geocoder();
                          var address = $('#map-address').text(); /* change the map-input to your address */
                          var mapOptions = {
                              zoom: 15,
                              mapTypeId: google.maps.MapTypeId.ROADMAP,
                              scrollwheel: false
                          };
                          map = new google.maps.Map(document.getElementById('google-map'),mapOptions);
                        
                          if (geocoder) {
                            geocoder.geocode( { 'address': address}, function(results, status) {
                              if (status == google.maps.GeocoderStatus.OK) {
                                if (status != google.maps.GeocoderStatus.ZERO_RESULTS) {
                                map.setCenter(results[0].geometry.location);
                        
                                  var infowindow = new google.maps.InfoWindow(
                                      {
                                        content: address,
                                        map: map,
                                        position: results[0].geometry.location,
                                      });
                        
                                  var marker = new google.maps.Marker({
                                      position: results[0].geometry.location,
                                      map: map, 
                                      title:address
                                  }); 
                        
                                } else {
                                  alert("No results found");
                                }
                              }
                            });
                          }
                        }
                        google.maps.event.addDomListener(window, 'load', initialize);
                        
                        });
                        /* end google maps */
                        </script>
                	
                	
                	<?php } ?>

                    </div>

                </div>

            </article>

            <?php endwhile; endif; ?>

        </main>

    </div>
    

<?php get_footer(); ?>