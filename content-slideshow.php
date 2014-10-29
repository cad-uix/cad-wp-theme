<?php 
    $slideshow_args = array(
        'post_type' => 'slideshow'
    );
    $slideshow_query = new WP_Query( $slideshow_args );
    
    if ( $slideshow_query->have_posts() ) : ?>

    <div id="cadCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
        <?php
        $count_posts = wp_count_posts('slideshow'); 
        $counter = 0;
        while ( $counter < $count_posts->publish) { ?>
            <li data-target="#cadCarousel" data-slide-to="<?php echo $counter ; ?>" class=""></li>
            <?php
            $counter++;
            } ?>
        </ol>

        <div class="carousel-inner">
        
            <?php while ( $slideshow_query->have_posts() ) : $slideshow_query->the_post(); ?>
        
            <div class="item">
                <?php 
                if ( has_post_thumbnail() ) {
                    the_post_thumbnail('slideshow');
                } ?>
                <div class="carousel-caption">
                    <?php 
                    if ($show_title == 'true') {
                        echo the_title("<h2>", "</h2>");
                    }
                    echo "<p>" . get_post_meta(get_the_ID(),'slideshow_text',true) . "</p>";
                    ?>
                </div>
            </div>
            <?php endwhile; ?>
        </div>
    <a class="left carousel-control" href="#cadCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
    <a class="right carousel-control" href="#cadCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
</div>
<?php endif; ?>

<script>
    jQuery('#cadCarousel .carousel-inner > .item:first-child').addClass('active');
    jQuery('#cadCarousel .carousel-indicators > li:first-child').addClass('active');
</script>