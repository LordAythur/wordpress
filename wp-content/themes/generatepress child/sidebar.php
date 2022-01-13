<?php
/*
Template Name: Sidebar
*/


if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();

$sidebar = get_post_meta(get_the_ID(), 'sidebar_mmi_cours',true);


	?>
	<ul id="sidebar">
		<?php dynamic_sidebar('sidebar_mmi_cours') ?>
	</ul>
	<?php

?>

<?php

get_footer();
