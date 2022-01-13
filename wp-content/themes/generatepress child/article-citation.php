<?php
/*
Template Name: Citation
*/

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header(); ?>

<div class="container">
  	<div class="row">
		
			<?php

			$args = array(
				'post_type' => 'post',
				'meta_key' => '_afficher_citation',
				'meta_value' => 'oui'
			);

			$query = new WP_Query( $args );
 
			if ( $query->have_posts() ) {
				while ( $query->have_posts() ) {
					$query->the_post();
			?>
				<div class="col-xl-4" style="background-color:grey;">
					<h2><?php echo get_the_title() ?></h2>
					<p><?php echo get_field('_citation'); ?></p>
				</div>
			<?php	
				}
			
			}
			wp_reset_postdata();
			?>

		</div>
	</div>
</div>



<?php
get_footer();
