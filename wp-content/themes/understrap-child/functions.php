<?php
function understrap_remove_scripts() {
    wp_dequeue_style( 'understrap-styles' );
    wp_deregister_style( 'understrap-styles' );

    wp_dequeue_script( 'understrap-scripts' );
    wp_deregister_script( 'understrap-scripts' );

    // Removes the parent themes stylesheet and scripts from inc/enqueue.php
}
add_action( 'wp_enqueue_scripts', 'understrap_remove_scripts', 20 );

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {

	// Get the theme data
	$the_theme = wp_get_theme();
    wp_enqueue_style( 'child-understrap-styles', get_stylesheet_directory_uri() . '/css/child-theme.min.css', array(), $the_theme->get( 'Version' ) );
    wp_enqueue_script( 'jquery');
	wp_enqueue_script( 'popper-scripts', get_template_directory_uri() . '/js/popper.min.js', array(), false);
    wp_enqueue_script( 'child-understrap-scripts', get_stylesheet_directory_uri() . '/js/child-theme.min.js', array(), $the_theme->get( 'Version' ), true );
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}

function excerpt($limit) {
    global $post;
    // use default WP excerpt
    $excerpt = get_the_excerpt();

    // remove html
    $excerpt = strip_tags($excerpt);

    // remove Read More...
    $excerpt = trim(str_ireplace(array('[...]', 'Read More...'), '', $excerpt));
    
    // No excerpt content - use fallback
    if (trim($excerpt) == '') {
        // default WP content
        $content = get_the_content();
    
        // if no default WP content, use ACF "text-content"
        if ($content === '') {            
            $content = get_post_meta($post->ID, 'post-content_0_text-content', true);
        }

        // render shortcodes
        $content = do_shortcode($content);

        // strip html
        $excerpt = strip_tags($content);
    }

    $excerpt = explode(' ', $excerpt, $limit);    

    if (count($excerpt)>=$limit) {
      array_pop($excerpt);
      $excerpt = implode(" ",$excerpt).'...';
    } else {
      $excerpt = implode(" ",$excerpt);
    }	
    $excerpt = preg_replace('`[[^]]*]`','',$excerpt);
    return $excerpt;
  }
