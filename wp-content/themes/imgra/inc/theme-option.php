<?php 
define( 'CS_ACTIVE_FRAMEWORK',   true  ); // default true
define( 'CS_ACTIVE_METABOX',     false ); // default true
define( 'CS_ACTIVE_TAXONOMY',    false ); // default true
define( 'CS_ACTIVE_SHORTCODE',   false ); // default true
define( 'CS_ACTIVE_CUSTOMIZE',   false ); // default true

add_filter('cs_framework_settings', 'imgra_theme_options_setting');

function imgra_theme_options_setting(){
$settings           = array(
  'menu_title'      => 'Imgra Framework',
  'menu_type'       => 'menu', // menu, submenu, options, theme, etc.
  'menu_slug'       => 'imgra-framework',
  'ajax_save'       => false,
  'show_reset_all'  => false,
  'framework_title' => 'Codestar Framework <small>by Codestar</small>',
);

return $settings;


}