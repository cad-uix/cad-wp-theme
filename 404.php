<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package oracle
 * @author marcelbadua
 */

get_header(); ?>

<div id="content-wrap">

<div class="error-template">

<h1>Oops!</h1>

<h2>404 Not Found</h2>

<div class="error-details">

Sorry, an error has occured, Requested page not found!

</div>

<div class="error-actions">

<a href="<?php bloginfo("url"); ?>" class="btn btn-primary btn-lg">
<span class="fa fa-home"></span>
Take Me Home
</a>
<a href="<?php bloginfo("url"); ?>" class="btn btn-default btn-lg">
<span class="fa fa-envelope"></span> 
Contact Support 
</a>

</div>

</div>

</div>

<?php get_footer(); ?>