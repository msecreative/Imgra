<?php 

class opening_time_widget extends WP_Widget{
	public function __construct(){
		parent::__construct('opening-time-widget', 'Opening Time Widget');
	}

	public function widget( $args, $instance ) {
		?>
		<?php echo $args['before_widget'] ?>
			<?php echo $args['before_title']; ?><?php echo $instance['title']; ?><?php echo $args['after_title']; ?>

			<ul class="footer-widget-office-time">
				<li>
					<p>Opening Day:</p>
					<p>Monday - Friday: <?php echo $instance['monday_friday_time'];?>"></p>
					<p>Saturday: <?php echo $instance['saturday_time'];?></p>
				</li>
				<li>
					<p>Vacation:</p>
					<p>All Sunday Day</p>
					<p>All Vacation Holiday</p>
				</li>
			</ul>
		<?php echo $args['after_widget']; ?>


		<?php
	}



	public function form( $instance ) {
		?>
		<p>
			<label for="<?php echo $this->get_field_id('title')?>">Heading</label>

			<input id="<?php echo $this->get_field_id('title')?>" class="widefat" type="text" name="<?php echo $this->get_field_name('title'); ?>"  value="<?php echo $instance['title']?>">
		</p>
		<p>
			<label for="<?php echo $this->get_field_id('monday_friday_time')?>">Monday-Friday</label>

			<input id="<?php echo $this->get_field_id('monday_friday_time')?>" class="widefat" type="text" name="<?php echo $this->get_field_name('monday_friday_time'); ?>"  value="<?php echo $instance['monday_friday_time']?>">
		</p>

		<p>
			<label for="<?php echo $this->get_field_id('saturday_time')?>">Saturday</label>

			<input id="<?php echo $this->get_field_id('saturday_time')?>" class="widefat" type="text" name="<?php echo $this->get_field_name('saturday_time'); ?>"  value="<?php echo $instance['saturday_time']?>">
		</p>

		<?php
	}


}

 ?>