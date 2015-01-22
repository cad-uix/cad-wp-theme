<?php
/**
 * Adds Navigation Bootstrap Ready
 *
 * @package oracle
 * @author marcelbadua
 */

/*
 * Common Navigation Location
 */
register_nav_menus( array(
	'header-navigation' => __('Header Navigation'),
	'footer-navigation' => __('Footer Navigation'),
	'sidebar-navigation' => __('Sidebar Navigation'),
	'off-canvas-navigation' => __('Off-canvas Navigation'),
));

/*
 * Custom wp_nav_menu Function for CAD
 */
function menu($menu = '', $menuClass = '', $containerClass = '', $depth = '2'){

    $menuArgument = array(
	    'theme_location'  => $menu,
	    'menu'            => $menu,
	    'container'       => false,
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
