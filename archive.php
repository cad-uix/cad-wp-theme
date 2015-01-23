<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package oracle
 * @author marcelbadua
 */

get_header(); ?>
   
   <div id="content-wrap">

        <div class="container">
            <?php breadcrumb(); ?>
        </div>
	
        <div class="container">
            <?php if (have_posts()) : ?>

                <div class="page-header">

                    <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>

                    <?php /* If this is a category archive */ if (is_category()) { ?>
                    <h1>Archive for the &#8216;<?php single_cat_title(); ?>&#8217; Category</h1>

                    <?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
                    <h1>Posts Tagged &#8216;<?php single_tag_title(); ?>&#8217;</h1>

                    <?php /* If this is a daily archive */ } elseif (is_day()) { ?>
                    <h1>Archive for <?php the_time('F jS, Y'); ?></h1>

                    <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
                    <h1>Archive for <?php the_time('F, Y'); ?></h1>

                    <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
                    <h1>Archive for <?php the_time('Y'); ?></h1>

                    <?php /* If this is an author archive */ } elseif (is_author()) { ?>
                    <h1>Author Archive</h1>

                    <?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
                    <h1>Blog Archives</h1>

                    <?php } ?>

                </div>

                <?php while (have_posts()) : the_post(); ?>
<div class="row">
                    <?php include (TEMPLATEPATH . '/view/list.php' ); ?>
</div>
                <?php endwhile; ?>
                
                <?php pagination(); ?>
                
                <?php else : ?>

                <div class="page-header">
                
                    <h2>Nothing found</h2>

                </div>
                    
                <?php endif; ?>
        </div>

    </div>

<?php get_footer(); ?>