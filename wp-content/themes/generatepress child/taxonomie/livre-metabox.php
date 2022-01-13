<?php

add_action('add_meta_boxes','init_metabox_livres');
function init_metabox_livres(){
    add_meta_box('livres-metabox','Les caractéristiques du livre','livres_metabox_func','normal');
}

function livres_metabox_func($post){
    $auteur = get_post_meta($post->ID,'_auteur',true);
    $editions = get_post_meta($post->ID,'_editions',true);


    echo '<label for="_auteur" style="width=100%">Indiquer l\'auteur :</label>';
    echo '<br>';
    echo '<textarea name="auteur">'.$auteur.'</textarea>';

    echo '<br>';
    echo '<br>';
    echo '<label for="_editions" style="width=100%">Indiquer l\'auteur :</label>';
    echo '<br>';
    echo '<textarea name="_editions">'.$editions.'</textarea>';
}

add_action('save_post','save_metabox_livres');
function save_metabox_livres($post_id){
    if(isset($_POST['auteur'])){
        update_post_meta($post_id,'_auteur',$_POST['auteur']);
    }

    if(isset($_POST['editions'])){
        update_post_meta($post_id,'_editions',$_POST['editions']);
    }
}