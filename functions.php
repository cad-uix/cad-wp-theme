<?php

define('DISALLOW_FILE_EDIT', TRUE);

// disables wordpress bar on front end
add_filter( 'show_admin_bar', '__return_false' );

//require_once('functions/administration.php');
require_once('functions/slideshow.php');
require_once ('functions/theme-options.php' );
require_once ('functions/comments.php' );

// include navwalker for bootstrap
require_once('vendor/wp_bootstrap_navwalker.php');

// Add RSS links to <head> section
add_theme_support( 'automatic-feed-links' );

// Clean up the <head>
function removeHeadLinks() {
  remove_action('wp_head', 'rsd_link');
  remove_action('wp_head', 'wlwmanifest_link');
}
add_action('init', 'removeHeadLinks');
remove_action('wp_head', 'wp_generator');

if ( function_exists( 'add_theme_support' ) ) {
	
    update_option('thumbnail_size_w', 360);
    update_option('thumbnail_size_h', 200);

    update_option('medium_size_w', 360);
    update_option('medium_size_h', 360);

}

// common navigation location
register_nav_menus( array(
  'header-navigation' => __('Header Navigation'),
  'footer-navigation' => __('Footer Navigation'),
  'sidebar-navigation' => __('Sidebar Navigation')
));

// general enqueue sciprts and styles
function cad_scripts_and_styles() {
    wp_register_script( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js', array( 'jquery' ), 1.0, true );
    wp_register_script( 'theme', get_template_directory_uri() . '/js/theme.js', array( 'jquery' ), 1.0, true );

    wp_register_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.css', null, 1.0, 'screen' );
    wp_register_style( 'theme', get_template_directory_uri() . '/css/theme.css', null, 1.0, 'screen' );

    wp_enqueue_script( 'bootstrap' );
    wp_enqueue_script( 'theme' );

    wp_enqueue_style( 'bootstrap' );
    wp_enqueue_style( 'theme' );
}

add_action( 'wp_enqueue_scripts', 'cad_scripts_and_styles' );

// function as short-cut for wp_nav_menu
function cad_get_menu($menu = '', $menuClass = '', $containerClass = '', $depth = '2'){
  $menuArgument = array(
    'theme_location'  => $menu,
    'menu'            => $menu,
    'container'       => 'nav',
    'container_class' => $containerClass,
    'container_id'    => '',
    'menu_class'      => $menuClass,
    'menu_id'         => '',
    'echo'            => true,
    'fallback_cb'     => 'wp_page_menu',
    'before'          => '',
    'after'           => '',
    'link_before'     => '',
    'link_after'      => '',
    'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
    'depth'           => $depth,
    'walker'          => new wp_bootstrap_navwalker()
  );
  return wp_nav_menu( $menuArgument );
}

// function for pagination bootstrap 3 ready
function cad_pagination($pages = '', $range = 2)
{
     $showitems = ($range * 2)+1;
     global $paged;
     if(empty($paged)) $paged = 1;
     if($pages == '')
     {
         global $wp_query;
         $pages = $wp_query->max_num_pages;
         if(!$pages)
         {
             $pages = 1;
         }
     }
     if(1 != $pages)
     {
          echo '<ul class="pagination">';
         if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<li><a href='".get_pagenum_link(1)."'>&laquo;</a></li>";
         if($paged > 1 && $showitems < $pages) echo "<li><a href='".get_pagenum_link($paged - 1)."'>&lsaquo;</a></li>";

         for ($i=1; $i <= $pages; $i++)
         {
             if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
             {
                 echo ($paged == $i)? "<li class='active'><a href='#'>".$i."</a></li>":"<li><a href='".get_pagenum_link($i)."' class='inactive' >".$i."</a></li>";
             }
         }

         if ($paged < $pages && $showitems < $pages) echo "<li><a href='".get_pagenum_link($paged + 1)."'>&rsaquo;</a></li>";
         if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<li><a href='".get_pagenum_link($pages)."'>&raquo;</a></li>";
          echo '</ul>';
     }
}

function cad_breadcrumb() {
    global $post;
    echo '<ul class="breadcrumb">';
    if (!is_home()) {
        echo '<li><a href="';
        echo get_option('home');
        echo '">';
        echo 'Home';
        echo '</a></li>';
        if (is_category() || is_single()) {
            echo '<li>';
            the_category(' </li><li> ');
            if (is_single()) {
                echo '</li><li>';
                the_title();
                echo '</li>';
            }
        } elseif (is_page()) {
            if($post->post_parent){
                $anc = get_post_ancestors( $post->ID );
                $title = get_the_title();
                foreach ( $anc as $ancestor ) {
                    $output = '<li><a href="'.get_permalink($ancestor).'" title="'.get_the_title($ancestor).'">'.get_the_title($ancestor).'</a></li>';
                }
                echo $output;
                echo '<li><strong title="'.$title.'"> '.$title.'</strong></li>';
            } else {
                echo '<li><strong> '.get_the_title().'</strong></li>';
            }
        }
    }
    elseif (is_tag()) {single_tag_title();}
    elseif (is_day()) {echo"<li>Archive for "; the_time('F jS, Y'); echo'</li>';}
    elseif (is_month()) {echo"<li>Archive for "; the_time('F, Y'); echo'</li>';}
    elseif (is_year()) {echo"<li>Archive for "; the_time('Y'); echo'</li>';}
    elseif (is_author()) {echo"<li>Author Archive"; echo'</li>';}
    elseif (isset($_GET['paged']) && !empty($_GET['paged'])) {echo "<li>Blog Archives"; echo'</li>';}
    elseif (is_search()) {echo"<li>Search Results"; echo'</li>';}
    echo '</ul>';
}