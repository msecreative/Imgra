<?php 
	class contact_info_widget extends WP_Widget{
		public function __construct(){
			parent::__construct('contact-info-widget', 'Contact Info Widget');
		}

		public function widget( $args, $instance ) {
		?>

				<div class="header-item">
					<p class="pl-0"><i class="fa fa-phone"></i> <span class="d-none d-md-inline-block">Phone:</span> <a href="<?php echo $instance['cell_one'];?>"><?php echo $instance['cell_one'];?></a> <span class="d-none d-xl-inline-block">;</span> <a href="<?php echo $instance['cell_2'];?>" class="d-none d-xl-inline-block"><?php echo $instance['cell_2'];?></a></p>
					<p class="d-none d-md-inline-block"><i class="fa fa-clock-o"></i> <span class="d-none d-sm-inline-block">We are open:</span> <?php echo $instance['opening_time'];?></p>
				</div>

		<?php
		}


				public function form( $instance ) {
			?>
				<p>
					<label for="<?php echo $this->get_field_id('title')?>">Contact One</label>

					<input id="<?php echo $this->get_field_id('cell_one')?>" class="widefat" type="text" name="<?php echo $this->get_field_name('cell_one'); ?>"  value="<?php echo $instance['cell_one']?>">
				</p>

				<p>
					<label for="<?php echo $this->get_field_id('title')?>">Contact Two</label>

					<input id="<?php echo $this->get_field_id('cell_2')?>" class="widefat" type="text" name="<?php echo $this->get_field_name('cell_2'); ?>"  value="<?php echo $instance['cell_2']?>">
				</p>
				<p>
					<label for="<?php echo $this->get_field_id('title')?>">Opening Time</label>

					<input id="<?php echo $this->get_field_id('opening_time')?>" class="widefat" type="text" name="<?php echo $this->get_field_name('opening_time'); ?>"  value="<?php echo $instance['opening_time']?>">
				</p>
				

			<?php
		}

	}

 ?>