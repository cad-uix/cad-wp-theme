<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package oracle
 * @author marcelbadua
 */

get_header(); ?>

    <div id="content-wrap">

        <style>

            .error-template {
                padding: 40px 15px;
                text-align: center;}
            .error-actions {
                margin-top:15px;
                margin-bottom:15px;}
            .error-actions .btn { 
                margin-right:10px; 
            }

        </style>

       <div class="container">

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

    </div>

<?php get_footer(); ?>