<?php
/**
 * Plugin Name: Unbreakable User Permalink
 * Plugin URI: https://github.com/dgnerlab
 * Description: Unbreakable User Permalink 💪🏻 is a snippet to better handle 'User Cache - WP Rocket' using Query string.
 * Version: 1.0
 * Author: dgner
 * Author URI: https://github.com/dgnerlab
 * License: GPL3
 */

add_action( 'init', 'dgner_online' );
add_filter( 'home_url', 'dgner_online' );
add_filter( 'page_link', 'dgner_online' );
add_filter( 'post_link', 'dgner_online' );
add_filter( 'post_type_link', 'dgner_online' );
// add_filter( 'category_link', 'dgner_online' );   // 17~22 Line = Add if necessary.
// add_filter( 'tag_link', 'dgner_online' );   
// add_filter( 'author_link', 'dgner_online' );
// add_filter( 'day_link', 'dgner_online' );
// add_filter( 'month_link', 'dgner_online' );
// add_filter( 'year_link', 'dgner_online' );
add_action( 'template_redirect', 'dgner_offline' );

function dgner_online( $permalink ) {
    if( is_user_logged_in() && is_page() ) {
        return add_query_arg( 'login', 'yes', trailingslashit( $permalink ) ); // trailingslashit() = Appends a trailing slash. Will remove trailing forward and backslashes if it exists already before adding a trailing forward slash.
    }
    else {
        return $permalink;
    }
}

function dgner_offline() {
    $entities = htmlentities( $_SERVER['REQUEST_URI'] );
    $loginyes = '/?login=yes';
    $online = strpos( $entities, $loginyes );
    if( ! is_user_logged_in() && is_page() && $online !== false ) {
        wp_safe_redirect( home_url(), 301 );
        exit;
    }
    else if ( is_user_logged_in() && is_page() && $online === false  ) {
        wp_safe_redirect( add_query_arg( 'login', 'yes', home_url() ), 301 );
        exit;
    }
}
?>
