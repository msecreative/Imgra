<?php 

add_shortcode( 'exprience_counter_box', 'exprience_counter_box_section_function' );
function exprience_counter_box_section_function( $atts ) {
	 $result = shortcode_atts( array(
		'title' => '',
		'desc' => '',
		'counter_box' => '',

	), $atts ) ;
	 extract($result);

ob_start();
  
?>


<section class="counter-3-part section-p">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <div class="section-head light">
                    <h2><?php echo esc_html($title); ?></h2>
                    <p><?php echo esc_html($desc); ?></p>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- Single Counter -->
    <?php $value = vc_param_group_parse_atts($atts['counter_box']);
				foreach ($value as $item): ?>
            <div class="col-md-3 col-6 text-center">
                <div class="counter-3-item">
                    <div class="number-box">
                        <i class="<?php echo esc_attr($item['icon']); ?>"></i>
                    </div>
                    <h2 class="white counter"><?php echo esc_html($item['counter_no']); ?></h2>
                    <h3 class="font-size-16"><?php echo esc_html($item['counter_title']); ?></h3>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>





<?php
return ob_get_clean();
}

add_action( 'vc_before_init', 'exprience_counter_box_section_el' );
function exprience_counter_box_section_el() {
	vc_map( array(
		"name" => esc_html( "Exprience Counter Box", "imgra" ),
		"base" => "exprience_counter_box",
		"category" => esc_html( "Imgra Helper", "imgra"),
		"params" => array(
			array(
				'type' => 'textfield',
				'heading' =>  esc_html( 'Enter Heading', 'imgra' ),
				'param_name' => 'title',
					),
			array(
				'type' => 'textarea',
				'heading' =>  esc_html( 'Enter Description', 'imgra' ),
				'param_name' => 'desc',
					),
			
			array(
				'type' => 'param_group',
				'param_name' => 'counter_box',
				'params' => array(
					array(
						'type' => 'iconpicker',
						'heading' =>  esc_html( 'Select Icon For Counter Box', 'imgra' ),
						'param_name' => 'icon',
					),

					array(
						'type' => 'textfield',
						'heading' =>  esc_html( 'Enter Counter Number', 'imgra' ),
						'param_name' => 'counter_no',
					),

					array(
						'type' => 'textfield',
						'heading' =>  esc_html( 'Enter Counter Title', 'imgra' ),
						'param_name' => 'counter_title',
					)
				)
			)
		)
	) 
);

}


 ?>