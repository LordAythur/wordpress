<?php
/*
Template Name: Template licence MMI
*/

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header(); ?>

<div class="container">
  	<div class="row">
		  <div class="col-xl-8" style="background-color: blue;">CECI PROUVE QUE UN .JS ET UN .CSS EXTERIEUR ONT ETE MIS (BOOTSTRAP)</div>

		  <?php the_content() ?>

			<?php 

			function bonjour_func($atts, $content = null){
				$params = shortcode_atts(
					array(
						'nom' => 'JORIS',
						'prenom' => 'Arthur',
					), $atts, 'bonjour' );

				$HTML = "<p>Bonjour ".$params['nom']." ".$params['prenom']."</p>";

				if(!is_null($content)){
					$HTML = "<p>".$content."</p>";
				}
				return $HTML;
			}


			add_shortcode('bonjour','bonjour_func');

			// $shortcode = '[bonjour nom="Arthur" prenom="JORIS"]Le Contenu[/bonjour]';
			// echo do_shortcode($shortcode);



			

			?>
			




	</div>
</div>

<?php

get_footer();
