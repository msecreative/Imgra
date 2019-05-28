<?php 

add_shortcode( 'accordion', 'accordion_section_function' );
function accordion_section_function( $atts ) {
	 $result = shortcode_atts( array(
		'accordion' => ''

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


            <div id="accordion" class="about-accodian">
                <!-- Single Accordion -->

                <div class="accodian-item">
                    <div class="accodian-head active d-flex align-items-center" >
                        <h5><a class="" href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne" >Student Consultancy</a></h5>
                    </div>
                    <div id="collapseOne" class="accodian-result collapse show" data-parent="#accordion">
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
                        <p>Don't look even slightly believable. If you are going to assage of Lorem Ipsum, you need to be sure there isn't an embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat pred chunks as necessary.There are many variations of passages of Lorem Ipsum.</p>
                    </div>
                </div>

            </div>




<?php
return ob_get_clean();
}

add_action( 'vc_before_init', 'accordion_section_el' );
function accordion_section_el() {
	vc_map( array(
		"name" => esc_html( "Accordion", "imgra" ),
		"base" => "accordion",
		"category" => esc_html( "Imgra Helper", "imgra"),
		"params" => array(
			
			array(
				'type' => 'param_group',
				'param_name' => 'accordion',
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