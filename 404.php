<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package cad-wp-theme
 * @author marcelbadua
 */

get_header(); ?>



	<div class="container">
		
		<div class="row">

			<div class="col-sm-12">
			
				<div class="alert alert-info">
			
					<h1>Opps! <small>We are really sorry but the page you requested cannot be found.</small></h1>

					<p>It seems that the page you were trying to reach doesn't exist, or maybe it has just moved. We think that the best thing to do is to start again from the home page. Feel free to contact us if the problem persist or if you definitely can't find what you are looking for. Thank you very much.</p>
					
					<div class="clearfix">&nbsp;</div>
					
					<a href="<?php bloginfo( "url" ); ?>" class="btn btn-info">Return to home page</a>

					<div class="clearfix">&nbsp;</div>

				</div>
		
			</div>

		</div>
		
	</div>


<div class="clearfix">&nbsp;</div>

<?php get_footer(); ?>