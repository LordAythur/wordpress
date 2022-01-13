<?php

add_action('add_meta_boxes','init_metabox_livre');
function init_metabox_livre(){
    add_meta_box('livres_metabox', 'Les caractéristiques du livre', 'livres_metabox', 'post', 'side');
}

function livres_metabox($post){
    $auteur = get_post_meta($post->ID,'_auteur',true);
    $editions = get_post_meta($post->ID,'_editions',true);


    echo '<label for="auteur" style="width=100%">Indiquer l\'auteur :</label>';
    echo '<br>';
    echo '<input type="text" name="auteur" value='.$auteur.'></input>';

    echo '<br>';
    echo '<br>';
    echo '<label for="editions" style="width=100%">Indiquer l\'editeur :</label>';
    echo '<br>';
    echo '<input type="text" name="editions" value="'.$editions.'" ></input>';
}

add_action('save_post','save_metabox_livre');
function save_metabox_livre($post_id){
    if(isset($_POST['auteur'])){
        update_post_meta($post_id,'_auteur',$_POST['auteur']);
    }

    if(isset($_POST['editions'])){
        update_post_meta($post_id,'_editions',$_POST['editions']);
    }
}