<?php
/**
 * Menus
 *
 * This file handles the registration of custom navigation menus in WordPress.
 * It includes the use of a navwalker for the main menu and registers menus for
 * the main navigation and footer column(s).
 *
 * Usage: Include this file in functions.php to register and customize navigation menus.
 *
 * @package WordPress
 * @subpackage GL_WP
 * @author Josh Forrester <josh@onefortyfivedesign.com>
 * @version 1.0.0
 */

// This is the code to include the navwalker. If you aren't going to use the menu you'll need to get rid of this line.
// If you are going to use the navwalker, leave it alone. She's sensitive.
require_once("nav_walker.php");


/*
 * So, in order for WP Admin to even know menus exist, we have to create them here.
 * This theme ships with the navbar and 2 footer columns.
 * If for some reason you need more than this, you can copy and paste one of the code blocks below and modify it.
 * https://www.wpbeginner.com/wp-themes/how-to-add-custom-navigation-menus-in-wordpress-3-0-themes/
*/

//*********** Navbar ***********
function register_my_menu() {
    register_nav_menu('header-menu', ( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );


//*********** Footer Col 1 ***********
function register_col_1() {
    register_nav_menu('footer-column-1', ( 'Footer Column 1' ));
}
add_action( 'init', 'register_col_1' );

//*********** Footer Col 2 ***********
function register_col_2() {
    register_nav_menu('footer-column-2', ( 'Footer Column 2' ));
}
add_action( 'init', 'register_col_2' );

