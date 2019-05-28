<?php 

class custom_subscribe_widget extends WP_Widget{
	public function __construct(){
		parent::__construct('imgra-subscribe', 'Imgra Subscriber');
	}

	public function widget( $args, $instance ) {
		?>

		<?php echo $args['before_widget'] ?>
			<?php echo $args['before_title']; ?><?php echo $instance['title']; ?><?php echo $args['after_title']; ?>
			<p>Enter  your email and get latest updates and offers subscribe us</p>
			<form id="subscribe-form" action="#" method="POST">
				<input placeholder="Your Email ..." type="text">
				<button><i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>
			</form>
		<?php echo $args['after_widget']; ?>
		<?php

		if (isset($_POST['custom_subscribe_widget'])) {
			$email = $_POST['email'];
			if(wp_mail($instance['email'],'One Subscribe Added','Email : '.$email)){
				echo '<div class="alert alert-success">Your email added to the subscribe list</div>';
			}
		}
	}



	public function form( $instance ) {
		?>
		<p>
			<label for="<?php echo $this->get_field_id('title')?>">Heading</label>

			<input id="<?php echo $this->get_field_id('title')?>" class="widefat" type="text" name="<?php echo $this->get_field_name('title'); ?>"  value="<?php echo $instance['title']?>">
		</p>
		<p>
			<label for="<?php echo $this->get_field_id('email')?>">Mail To</label>

			<input id="<?php echo $this->get_field_id('email')?>" class="widefat" type="text" name="<?php echo $this->get_field_name('email'); ?>"  value="<?php echo $instance['email']?>">
		</p>

		<?php
	}


}

	add_action('phpmailer_init','mail_setup');

	function mail_setup($mailer){
		$mailer->isSMTP();                                      
		$mailer->Host = 'smtp.gmail.com';   
		$mailer->SMTPAuth = true;                               
		$mailer->Username = 'mhbcreative2018@gmail.com';                 
		$mailer->Password = '01914848896';                           
		$mailer->SMTPSecure = 'tls';
		$mailer->Port = 587;                                    
	}
 ?>