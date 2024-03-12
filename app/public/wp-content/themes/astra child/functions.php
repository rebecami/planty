<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() 
{
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/css/theme.css', array(), filemtime(get_stylesheet_directory() . '/css/theme.css'));
}

/*
add_filter( 'wp_nav_menu_items', 'add_extra_item_to_nav_menu', 10, 2 );
function add_extra_item_to_nav_menu( $items, $args ) {
   // var_dump($args->menu->term_id);exit; 
    if (is_user_logged_in() && $args->menu->term_id== 5) {
       $items .= '<li><a href="' . get_admin_url(). '">Admin</a></li>';
    }
    return $items;
}

*/

add_filter( 'wp_nav_menu_items', 'add_extra_item_to_nav_menu', 10, 2 );
 //add_filter( 'wp_nav_menu_primary-menu_items', 'prefix_add_menu_item', 10, 2 );
/**
 * Add Menu Item to a specific place in the menu
 */

function add_extra_item_to_nav_menu ( $items, $args ) {
    if (is_user_logged_in() && $args->menu->term_id== 5) 
    {
        $items .= '<li><a href="' . get_admin_url(). '">Admin</a></li>';
     
$items_array = array();
        while ( false !== ( $item_pos = strpos ( $items, '<li', 1) ) ) // Add the position where the menu item is placed
        {
            $items_array[] = substr($items, 0, $item_pos);
            $items = substr($items, $item_pos);
        }
        $items_array[] = $items;
        array_splice($items_array, 9, 1, '<li class="menu-item">...</li>'); // insert custom item after 9th item one

        $items = implode('', $items_array);
        
       return $items;
    }   
}
