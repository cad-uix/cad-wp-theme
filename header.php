<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content-wrap">
 *
 * @package cad
 */
?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?> > <!--<![endif]-->

<head>

    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>
        <?php
        if (function_exists('is_tag') && is_tag()) {
            single_tag_title("Tag Archive for &quot;"); echo '&quot; | '; }
        elseif (is_archive()) {
            wp_title(''); echo ' Archive | '; }
        elseif (is_search()) {
            echo 'Search for &quot;'.wp_specialchars($s).'&quot; | '; }
        elseif (!(is_404()) && (is_single()) || (is_page())) {
            wp_title(''); echo ' | '; }
        elseif (is_404()) {
            echo 'Not Found | '; }
        if (is_home()) {
            bloginfo('name'); echo ' | '; bloginfo('description'); }
        else {
            bloginfo('name'); }
        if ($paged>1) {
            echo ' | page '. $paged; }
        ?>
    </title>

    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <link rel="shortcut icon" href="<?php bloginfo("template_url"); ?>/favicon.ico" type="image/x-icon" />

    <!--[if lt IE 9]><script src="<?php bloginfo("template_url"); ?>/js/html5-3.6-respond-1.1.0.min.js"></script><![endif]-->
    
    <?php wp_head(); ?>
    
    <script> 
        var $buoop = {c:2}; 
        function $buo_f(){ 
         var e = document.createElement("script"); 
         e.src = "//browser-update.org/update.js"; 
         document.body.appendChild(e);
        };
        try {document.addEventListener("DOMContentLoaded", $buo_f,false)}
        catch(e){window.attachEvent("onload", $buo_f)}
    </script> 

</head>

<body <?php body_class(); ?>>

    <div id="slide-menu" class="load">
        <?php cad_get_menu( 'off-canvas-navigation', 'nav'); ?>
    </div>

    <div id="page-wrap"> <!-- PAGE-WRAP CLOSES AT THE END OF FOOTER.PHP-->
    
        <a href="#" class="back-to-top">
            <i class="fa fa-angle-up fa-2x"></i>
        </a>
        
        <button type="button" class="slide-menu-toggle" data-direction="right" data-target="#slide-menu">
            <i class="fa fa-reorder"></i>
        </button>
        
        <?php get_template_part( 'content', 'header' ); ?>
