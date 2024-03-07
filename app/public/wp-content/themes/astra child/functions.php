<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() 
{
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/css/theme.css', array(), filemtime(get_stylesheet_directory() . '/css/theme.css'));
}



add_filter( 'wp_nav_menu_items', 'add_extra_item_to_nav_menu', 10, 2 );
function add_extra_item_to_nav_menu( $items, $args ) {
    
    if (is_user_logged_in() && $args->menu == 3) {
        $items .= 'menu == 3';
    }
      
    elseif (!is_user_logged_in() && $args->menu == 3) {
        $items .= '<li><a href="' . get_permalink( wc_get_page_id( 'Admin' ) ) . '"></a></li>';
    }
    return $items;
}
   