<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package Inhabitent_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function inhabitent_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter( 'body_class', 'inhabitent_body_classes' );

/**
 * Custom functions that change the login page logo.
 */
function inhabitent_login_logo() { ?>
    <style type="text/css">
        #login h1 a, .login h1 a {
					background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/inhabitent-logo-text-dark.svg);
					height: 65px;
					width: 320px;
					background-size: 320px 65px;
        }
    </style>
<?php }
add_action( 'login_head', 'inhabitent_login_logo' );

/**
 * Custom functions that change the login logo link values.
 */
function inhabitent_login_logo_url() {
    return home_url();
}
add_filter( 'login_headerurl', 'inhabitent_login_logo_url' );

/**
 * Custom the title attribute for the login logo title.
 * @return string
 */
function inhabitent_login_title(){
	return 'Inhabitent';
}
add_filter( 'login_headertitle', 'inhabitent_login_title' );




