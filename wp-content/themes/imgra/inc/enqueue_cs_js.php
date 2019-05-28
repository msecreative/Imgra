<?php
if ( ! function_exists('imgra_enqueue_cs_js') ) { 
	function imgra_enqueue_cs_js(){
		wp_enqueue_style('bootstrap', get_template_directory_uri().'/assets/css/bootstrap.min.css', array(), '4.0.0', 'all');
		wp_enqueue_style('fontawesome', get_template_directory_uri().'/assets/css/font-awesome.min.css', array(), '4.7.0', 'all');
		wp_enqueue_style('swiper', get_template_directory_uri().'/assets/css/swiper.min.css', array(), '4.1.0', 'all');
		wp_enqueue_style('animate', get_template_directory_uri().'/assets/css/animate.min.css', array(), '3.5.2', 'all');
		wp_enqueue_style('vendor', get_template_directory_uri().'/assets/css/venobox.css', array(), '1.0.0', 'all');
		wp_enqueue_style('rateyo', get_template_directory_uri().'/assets/css/rateyo.min.css', array(), '1.0.0', 'all');
		wp_enqueue_style('flaticon', get_template_directory_uri().'/assets/css/flaticon.css', array(), '1.0.0', 'all');
		wp_enqueue_style('circle', get_template_directory_uri().'/assets/css/circle.css', array(), '1.0.0', 'all');
		wp_enqueue_style('style', get_template_directory_uri().'/assets/css/style.css', array(), '1.0.0', 'all');
		wp_enqueue_style( 'imgra-style', get_stylesheet_uri() );


		wp_enqueue_script( 'popper', get_template_directory_uri().'/assets/js/popper.min.js', array('jquery'), '1.0.0', true );
		wp_enqueue_script( 'bootstrap', get_template_directory_uri().'/assets/js/bootstrap.min.js', array('jquery'), '4.0.0', true );
		wp_enqueue_script( 'plugins', get_template_directory_uri().'/assets/js/plugins.js', array('jquery'), '1.0.0', true );
		wp_enqueue_script( 'gmap3', get_template_directory_uri().'/assets/js/gmap3.min.js', array('jquery'), '7.2.0', true );
		wp_enqueue_script( 'knob', get_template_directory_uri().'/assets/js/jquery.knob.min.js', array('jquery'), '1.0.0', true );
		wp_enqueue_script( 'appear', get_template_directory_uri().'/assets/js/jquery.appear.js', array('jquery'), '1.0.0', true );
		wp_enqueue_script( 'swiperRunner', get_template_directory_uri().'/assets/js/swiperRunner.min.js', array('jquery'), '1.0.0', true );
		wp_enqueue_script( 'googlemap', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyBsBrMPsyNtpwKXPPpG54XwJXnyobfMAIc', null, null, true );
		wp_enqueue_script( 'custom', get_template_directory_uri().'/assets/js/custom.js', array('jquery'), '1.0.0', true );

		wp_enqueue_script( 'imgra-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

		wp_enqueue_script( 'imgra-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	}

add_action('wp_enqueue_scripts', 'imgra_enqueue_cs_js');

}


 ?>