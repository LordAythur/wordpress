<?php

// |||||||||||||||||||||||||||||||||||||||
// *** Envoyer un mail a l'écriture d'un post ***
// |||||||||||||||||||||||||||||||||||||||

function postPublished(){
	wp_mail('ar.joris@laposte.net','test','test aussi','');
}

add_action('publish_post', 'postPublished', 10, 0);


// |||||||||||||||||||||||||||||||||||||||
// *** Ajouter du texte sous le footer ***
// |||||||||||||||||||||||||||||||||||||||

function footer_text(){
	echo '<p>Salut twa</p>';
}

add_action('wp_footer', 'footer_text');


// |||||||||||||||||||||||||||||||||||||||
// *** Ajouter le prénom devant les titres ***
// |||||||||||||||||||||||||||||||||||||||

// function ajouter_prenom($title){
// 	return "Arthur - ".$title;
// }

// add_filter('the_title', 'ajouter_prenom', 10, 1);


// |||||||||||||||||||||||||||||||||||||||
// *** Remplacer les a par des o ***
// |||||||||||||||||||||||||||||||||||||||

// function remplacer_lettre_content($content){
// 	$content = str_replace('a','o', $content);

// 	return $content;
// }

// add_filter('the_content', 'remplacer_lettre_content', 10, 1);