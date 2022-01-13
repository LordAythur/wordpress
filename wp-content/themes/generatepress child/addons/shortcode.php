<?php

// |||||||||||||||||||||||||||||||||||||||
// *** Shortcode ***
// |||||||||||||||||||||||||||||||||||||||



function shortcode_num2($atts, $content = null){
	$params = shortcode_atts(
		array(
			'size_title'=>'h1',
			'image' => '',
			'titre' => '',
			'desc' => '',
			'link_text' => '',
			'link_redirect' => '',
		), $atts, 'Ceci est un test incroyable' );

	$HTML = "
	<".$params['size_title'].">".$params['titre']."</".$params['size_title'].">
	<img src='".$params['image']."'>
	<p>".$params['desc']."</p>
	<a href='".$params['link_redirect']."'>".$params['link_text']."</a>";

	// if(!is_null($content)){
	// 	$HTML = "<p>".$content."</p>";
	// }
	return $HTML;
}


add_shortcode('content','shortcode_num2');