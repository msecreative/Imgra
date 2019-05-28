<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Imgra
 */

?>

<!doctype html>
<html <?php language_attributes(); ?>>


<!-- Mirrored from themeim.com/demo/imgra/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 13 Nov 2018 03:36:24 GMT -->
<head>
    <!-- Required meta tags -->
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="">
    <meta name="description" content="">
    <meta name="keyword" content="">
    
    <!-- Fav Icon -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/assets/images/fav-icons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/assets/images/fav-icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/assets/images/fav-icons/favicon-16x16.png">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="loader-wrapper">
    <div class="book">
  <div class="book__page"></div>
  <div class="book__page"></div>
  <div class="book__page"></div>
</div> 
</div>
   <!-- Header Part Start -->
    <header class="header-part">
        <div class="container">
            <div class="row d-flex align-items-center">
                
                    <?php dynamic_sidebar('header_left'); ?>
                    <!-- <div class="header-item">
                        <p class="pl-0"><i class="fa fa-phone"></i> <span class="d-none d-md-inline-block">Phone:</span> <a href="callto::124784-6532">(124) 784-6532</a> <span class="d-none d-xl-inline-block">;</span> <a href="callto::124784-6532" class="d-none d-xl-inline-block">(001) 854-6532</a></p>
                        <p class="d-none d-md-inline-block"><i class="fa fa-clock-o"></i> <span class="d-none d-sm-inline-block">We are open:</span> Mn-Fr: 10 am-8 pm</p>
                    </div> -->
                <!-- <div class="col-sm-5 col-6 text-left text-sm-right">
                    <div class="header-icon">
                        <a href="contact-2.html" class="btn-1 d-none d-md-inline-block">Get A Quote</a>
                        <ul class="flat-list social-icon d-inline-block">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                            <li><a href="#"><i class="fa fa-google"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div> -->
                <?php dynamic_sidebar('header_right'); ?>
            </div>
        </div>
    </header>
    <!-- Header Part End -->
