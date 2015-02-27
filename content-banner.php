<?php
/**
 * Content for Banner (bootstrap)
 *
 * @package cad-wp-theme
 * @author marcelbadua
 */

$banner_args = array(

    'post_type' => 'banner'

);

$banner_query = new WP_Query( $banner_args );
    
if ( $banner_query->have_posts() ) : ?>

    <div id="main-banner" class="carousel slide" data-ride="carousel">

        <ol class="carousel-indicators">

            <?php

            $count_posts = wp_count_posts( 'banner' ); 

            $counter = 0;

            while ( $counter < $count_posts->publish): ?>
            
            <li data-target="#main-banner" data-slide-to="<?php echo $counter ; ?>" class=""></li>
            
            <?php  

                $counter++;

            endwhile;
            
            ?>
        
        </ol>

        <div class="carousel-inner">
        
            <?php while ( $banner_query->have_posts() ) : $banner_query->the_post(); ?>
        
            <div class="item">
                
                <?php if ( has_post_thumbnail() ) the_post_thumbnail( 'full' ); ?>
                
                <div class="carousel-caption">
                    
                    <?php the_title("<h2>", "</h2>"); ?>
                    
                    <p>
                        <p> <?php the_content(); ?></p>
                    </p>
                    
                </div>
                
            </div>
            
            <?php endwhile; ?>
            
        </div>
        
        <a class="left carousel-control" href="#main-banner" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
        <a class="right carousel-control" href="#main-banner" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>

    </div>
    
    <script>
        jQuery( 'document' ).ready(function($) {
           $('#main-banner .carousel-inner > .item:first-child').addClass( 'active' );
           $('#main-banner .carousel-indicators > li:first-child').addClass( 'active' ); 
        });
    </script>

<?php endif; ?>