<?php

// |||||||||||||||||||||||||||||||||||||||
// *** Sidebar et Widget ***
// |||||||||||||||||||||||||||||||||||||||



$args = array(
	'name' => 'La sidebar MMI',
	'id' => 'sidebar_mmi_cours',
	'before_widget' => '<li id="sidebar_mmi" class="widget sidebar-mmi">',
	'after_widget' => '</li>',
	'before_title' => '<h2>',
	'after_title' => '</h2>'

);
register_sidebar($args);

class widget_test extends WP_Widget {

	public function __construct(){
		parent::__construct(
			'mmi_widget',
			'mon Widget',
			array(
				'classname' => 'mmi_widget',
				'description' => 'test widget'
			)
		);
	}

	public function form($instance) {
		?>
			<p>
				<label for="<?php echo $this->get_field_id('facebook'); ?>">Facebook :</label>
				<input class="widefat" id="<?php echo $this->get_field_id('facebook'); ?>"
					name="<?php echo $this->get_field_name('facebook'); ?>"
					type="text" value="<?php echo $instance['facebook']; ?>">
			</p>
			<p>
				<label for="<?php echo $this->get_field_id('twitter'); ?>">Twitter :</label>
				<input class="widefat" id="<?php echo $this->get_field_id('twitter'); ?>"
					name="<?php echo $this->get_field_name('twitter'); ?>"
					type="text" value="<?php echo $instance['twitter']; ?>">
			</p>
			<p>
				<label for="<?php echo $this->get_field_id('youtube'); ?>">Youtube :</label>
				<input class="widefat" id="<?php echo $this->get_field_id('youtube'); ?>"
					name="<?php echo $this->get_field_name('youtube'); ?>"
					type="text" value="<?php echo $instance['youtube']; ?>">
			</p>
			<p>
				<label for="<?php echo $this->get_field_id('pinterest'); ?>">Pinterest :</label>
				<input class="widefat" id="<?php echo $this->get_field_id('pinterest'); ?>"
					name="<?php echo $this->get_field_name('pinterest'); ?>"
					type="text" value="<?php echo $instance['pinterest']; ?>">
			</p>


		<?php
	}

	public function widget($args, $instance){
		echo $args['before_widget'];
		$socials = array(
			'Facebook' => 'facebook',
			'Twitter' => 'twitter',
			'Youtube' => 'youtube',
			'Pinterest' => 'pinterest'	);

		
		if(!empty($instance['title'] ) ) {
			echo $args['before_title'] . apply_filters('widget_title', $instance['title'] ). $args['after_title'];
		}
		
	
		foreach ($socials as $key => $value) {
			if (!empty($instance[$value])){
				echo '<a href="'.$instance[$value].'">'. $key .'</a><br>';
			}
		}
	
		echo $args['after_widget'];
	}
	
	public function update($new_instance, $old_instance){
		return $new_instance;
	}
}
	
add_action('widgets_init', 'rs_mmi_func');
	
function rs_mmi_func(){
	register_widget('widget_test');
}


