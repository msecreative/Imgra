<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Imgra
 */

?>

<!-- Footer Part Start -->
<footer class="footer-part footer-bg-dark">
    <div class="footer-widget">
        <div class="container">
            <div class="row">
                <!-- Single widget-->
                <div class="col-12 col-sm-6 col-lg-3">
                    <?php dynamic_sidebar('single-widget'); ?>
                </div>
               
            </div>
        <!-- Footer contact info -->
        <div class="row footer-icon-area">
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
                <?php dynamic_sidebar('contact-widget'); ?>
            </div>
            
            
        </div>
    </div>
</div>


<!-- Copy right Start -->
<div class="footer-copyright">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <p>Copyright ©<span> 2018</span> | All rights reserved | Imgra by <a href="http://themeim.com/">ThemeIM</a></p>
            </div>
        </div>
    </div>
</div>
</footer>
<!-- Footer Part End -->

<div class="backtotop">
    <i class="fa fa-angle-up backtotop_btn"></i>
</div>
<?php wp_footer(); ?>
</body>


<!-- Mirrored from themeim.com/demo/imgra/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 13 Nov 2018 03:36:44 GMT -->
</html>
