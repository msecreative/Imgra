<?php
/**
* Imgra Title shortcode
*
* @package Imgra_Helper
* @author Smart Coder <smartcoderbd@gmail.com>
*/
class imgra_title_section extends Imgra_Shortcode {
/**
* Set shortcode tag
* @var string
*/
protected $tag = 'Imgra_Title_Section';
/**
* Set shortcode directory
* @return string Directory path
*/
protected function set_dir() {
    return __DIR__;
}
/**
* Map this shortcode with visual composer
* @return array
*/

// protected function map() {
//     return array(
    add_action( 'vc_before_init', 'imgra_shortcode_el' );
        function imgra_shortcode_el(){
             vc_map( array(
              "name" => __( "Imgra Title", "imgra" ),
              "base" => "Imgra_Shortcode",
              "category" => __( "Content", "imgra"),
              "params" => array(
             array(
              "type" => "textfield",
              "heading" => __( "Text", "imgra" ),
              "param_name" => "foo",
              "description" => __( "Description for foo param.", "imgra" )
             )
        )
    ) );
    }



    //}
/**
* render this shortcode
* @param  array $atts
* @param  string $content
* @return string
*/
public function render( $atts, $content = null ) {
    $defaults = array(       
        'title'               => '',
        'desc'                => '',
    );

    $title_section_atts = shortcode_atts( $defaults, $atts );
    $view = $this->get_view( 'main' );
    extract($title_section_atts);


//custom class
    $wrap_class = apply_filters( 'kc-el-class', $atts );
    if( !empty( $custom_css_class ) ):
        $wrap_class[] = $custom_css_class;
    endif;
    $extra_class = implode( ' ', $wrap_class );
    ob_start();
    if (file_exists( $view ) ) {
        include( $view );
    }
    return ob_get_clean();
}
}
new imgra_title_section;