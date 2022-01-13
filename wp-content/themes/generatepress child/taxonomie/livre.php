<?php

add_action('init','my_custom_init');
function my_custom_init(){
    register_post_type(
        'livres',
        array(
            'label' => 'livre',
            'labels' => array(
                'name' => 'Livres',
                'singular_name' => 'Livre',
                'all_items' => 'Tous les livres',
                'add_new_item' => 'Ajouter un livre',
                'edit_item' => 'Editer le livre',
                'new_item' => 'Nouveau livre',
                'view_item' => 'Voir le livre',
                'search_items' => 'Rechercher parmis les livres',
                'not_found' => 'Pas de livre trouvé',
                'not_found_in_trash' => 'Pas de livre dans la corbeille'
            ),
            'public' => true,
            'menu_position' => 10,
            'menu_icon' => 'dashicons-book',
            'capability_type' => 'post',

            'supports' => array(
                'title',
                'editor',
                'thumbnail',
                'custom-fields'
            ),
        )
    );



    register_taxonomy(
        'Année',
        'livres',
        array(
            'label' => 'Année',
            'labels' => array(
                'name' => 'Années',
                'singular_name' => 'Année',
                'all_items' => 'Toutes les années',
                'add_new_item' => 'Ajouter une année',
                'edit_item' => 'Editer l\'année',
                'new_item' => 'Nouvelle année',
                'view_item' => 'Voir l\'année',
                'search_items' => 'Rechercher parmis les années',
                'popular_items' => 'Année la plus utilisée'
            ),
            'hierarchical' => true
        )
    );

    register_taxonomy(
        'Mot-clés',
        'livres',
        array(
            'label' => 'Mots-clés',
            'labels' => array(
                'name' => 'Mots-clés',
                'singular_name' => 'Mot-clé',
                'all_items' => 'Toutes les mots-clés',
                'add_new_item' => 'Ajouter un mot-clé',
                'edit_item' => 'Editer le mot-clé',
                'new_item' => 'Nouveau mot-clé',
                'view_item' => 'Voir le mot-clé',
                'search_items' => 'Rechercher parmis les mots-clés',
                'popular_items' => 'Mot-clé le plus utilisée'
            ),
            'hierarchical' => false
        )
    );

    register_taxonomy_for_object_type('annee','livres');
    register_taxonomy_for_object_type('mots_cles','livres');
}