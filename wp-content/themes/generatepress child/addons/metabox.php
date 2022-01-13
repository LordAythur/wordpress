<?php

// |||||||||||||||||||||||||||||||||||||||
// *** Méta box ***
// |||||||||||||||||||||||||||||||||||||||


add_action('add_meta_boxes','init_metabox');
function init_metabox(){
	add_meta_box('afficher_citation', 'Afficher la citation', 'afficher_citation', 'post', 'side');
}

function afficher_citation($post){
	$dispo = get_post_meta($post->ID,'_afficher_citation',true);
	$url = get_post_meta($post->ID,'_citation',true);

	echo '<label for="citation">Citation :</label>';
	echo '<br>';
	echo '<input id="citation" type="text" name="citation" value="'.$url.'" />';
	echo '<br>';
	echo '<br>';

	echo '<label for="afficher_citation">Afficher la citation sur la page ?</label>';
	echo '<br>';
	echo '<select name="afficher_citation">';
	echo '<option ' . selected( 'oui', $dispo, false ) . ' value="oui">Oui</option>';
	echo '<option ' . selected( 'non', $dispo, false ) . ' value="non">Non</option>';
	echo '</select>';
}

add_action('save_post','save_metabox');
function save_metabox($post_id){
	if(isset($_POST['afficher_citation'])){
		update_post_meta($post_id, '_afficher_citation', $_POST['afficher_citation']);
	}

	if(isset($_POST['citation'])){
		update_post_meta($post_id, '_citation', $_POST['citation']);
	}
}