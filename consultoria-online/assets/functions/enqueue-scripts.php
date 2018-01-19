<?php
function site_scripts() {
  global $wp_styles; // Call global $wp_styles variable to add conditional wrapper around ie stylesheet the WordPress way

    // Select which grid system you want to use (Foundation Grid by default)
    wp_enqueue_style( 'foundation-css', get_template_directory_uri() . '/vendor/foundation-sites/dist/css/foundation.min.css', array(), '', 'all' );

    // Register main stylesheet
    wp_enqueue_style( 'all-in-one', get_template_directory_uri() . '/assets/css/all-in-one.css', array(), '', 'all' );
    wp_enqueue_style( 'site-css', get_template_directory_uri() . '/assets/css/style.css', array(), '', 'all' );

    //FontaAwesome and Google Fonts
    wp_enqueue_style( 'font-awesome', '//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css', array(), 'all' );
    wp_enqueue_style( 'google-fonts', '//fonts.googleapis.com/css?family=Ubuntu', false );

    // Adding scripts file in the footer   
    wp_enqueue_script( 'all-js', get_template_directory_uri() . '/assets/js/all-in-one.js', array( 'jquery' ), '', true );
    wp_enqueue_script( 'site-js', get_template_directory_uri() . '/assets/js/scripts.js', array( 'jquery' ), '', true );  

	//HOME SCRIPTS
	if ( is_page ('8') ){
        wp_enqueue_script( 'home-js', get_template_directory_uri() . '/assets/js/home-js.js', array( 'jquery' ), '', true );
		wp_enqueue_script( 'home-scripts-js', get_template_directory_uri() . '/assets/js/home-scripts.js', array(), '', true );          
	}

    // Migracao
    if ( is_page ( array ('323','1857') ) ){        
        wp_enqueue_script( 'migracao-js', get_template_directory_uri() . '/assets/js/migracao.js', array( 'jquery' ), '', true );     
    } 
    
    // Carousel slider (BLOG)
    if ( is_page('514') ){        
        wp_enqueue_script( 'flexSlider-js', get_template_directory_uri() . '/assets/js/jquery.flexslider-min.js', array( 'jquery' ), '', true );
        wp_enqueue_style( 'flexslider-css', get_template_directory_uri() . '/vendor/flexslider/css/flexslider.css', array(), '', 'all' );
    }    

    // Comment reply script for threaded comments
    if ( is_singular() AND comments_open() AND (get_option('thread_comments') == 1)) {
      wp_enqueue_script( 'comment-reply' );
    }
}
add_action('wp_enqueue_scripts', 'site_scripts', 999);
