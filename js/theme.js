jQuery(document).ready(function($) {

	$.fn.slideMenu = function() {
	    var target = $(this).attr('data-target');
	    var direction = $(this).attr('data-direction');
	    var body = '#page-wrap';

	    $(target).addClass(direction);
	    
	    $(this).addClass(direction);
	    $(body).addClass(direction);

	    $(target).removeClass('load');

		$(this).click( function() {
	        $(target).toggleClass('move');
	        $(body).toggleClass('move');
	        return false;
		});
  	};

  	$('.slide-menu-toggle').slideMenu();



 /* google maps */
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

    /* end google maps */

});