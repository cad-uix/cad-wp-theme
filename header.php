<?php
/**
 * The header for theme.
 *
 * Displays all of the <head> section and everything up till <div id="content-wrap">
 *
 * @package cad-wp-theme
 * @author marcelbadua
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
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>
        <?php
        if ( function_exists( 'is_tag' ) && is_tag() ) {
            single_tag_title( "Tag Archive for &quot;" ); echo '&quot; | '; }
        elseif ( is_archive() ) {
            wp_title(); echo ' Archive | '; }
        elseif ( is_search() ) {
            echo 'Search for &quot;'. $s .'&quot; | '; }
        elseif ( ! ( is_404() ) && ( is_single() ) || ( is_page() ) ) {
            wp_title(); echo ' | '; }
        elseif ( is_404() ) {
            echo 'Not Found | '; }
        if ( is_home() ) {
            bloginfo( 'name' ); echo ' | '; bloginfo( 'description' ); }
        else {
            bloginfo( 'name' ); }
        if ($paged>1) {
            echo ' | page '. $paged; }
        ?>
    </title>

    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" type="image/x-icon" />


    <!--[if lt IE 9]>
        <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <script>window.html5 || document.write('<script src="<?php echo get_template_directory(); ?>/js/vendor/html5shiv.js"><\/script>')</script>
    <![endif]-->

    
    <?php wp_head(); ?>
    
</head>

<body <?php body_class(); ?>>

    <!--[if lt IE 7]>
        <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <div id="page-wrap"> <!-- #page-wrap-->
    
        <a href="javascript:void(0);" class="back-to-top" data-toggle="tooltip" data-placement="left"  title="Back to Top">
            <span class="glyphicon glyphicon-chevron-up" aria-hidden="true"></span>
        </a>
        
        <?php get_template_part( 'content', 'header' ); ?>

        <div id="content-wrap">