<?php


function create_posttype() {
  /*register_post_type( 'event',
    array(
      'labels' => array(
        'name' => __( 'Parcours' ),
        'singular_name' => __( 'Parcours' ),
        'add_new_item' => 'Ajouter une étape',
        'edit_item' => "Modifier l'étape",
        'menu_name' => 'Parcours'
      ),
      'public' => true,
      'has_archive' => true,
      'rewrite' => array('slug' => 'parcours'),
      'menu_position' => 3,
      'menu_icon' => 'dashicons-exerpt-view',
    )
  );*/

  /*register_post_type( 'skills',
    array(
      'labels' => array(
        'name' => __( 'Compétences' ),
        'singular_name' => __( 'Compétence' ),
        'add_new_item' => 'Ajouter une compétence',
        'edit_item' => "Modifier la compétence",
        'menu_name' => 'Compétences'
      ),
      'public' => true,
      'has_archive' => true,
      'rewrite' => array('slug' => 'compétence'),
      'menu_position' => 4,
      'menu_icon' => 'dashicons-universal-access',
    )
  );*/

  /*register_post_type( 'hobbies',
    array(
      'labels' => array(
        'name' => __( 'Loisirs' ),
        'singular_name' => __( 'Loisir' ),
        'add_new_item' => 'Ajouter un loisir',
        'edit_item' => "Modifier le loisir",
        'menu_name' => 'Loisirs'
      ),
      'public' => true,
      'has_archive' => true,
      'rewrite' => array('slug' => 'loisir'),
      'menu_position' => 5,
      'menu_icon' => 'dashicons-heart',
    )
  );*/

  register_post_type( 'project',
    array(
      'labels' => array(
        'name' => __( 'Projets' ),
        'singular_name' => __( 'Projet' ),
        'add_new_item' => 'Ajouter un projet',
        'edit_item' => "Modifier le projet",
        'menu_name' => 'Projets',
        'new_item' => __('Nouveau projet'),
        'all_items' => __('Tous les travaux'),
        'view_item' => __('Voir le projet'),
        'search_items' => __('Rechercher un projet'),
        'not_found' =>  __('Aucun projet trouvé'),
        'not_found_in_trash' => __('Aucun projet trouvé dans la corbeille'), 
        'parent_item_colon' => '',

      ),
      'public' => true,
      'has_archive' => true,
      'rewrite' => array('slug' => 'projets'),
      'menu_position' => 2,
      'menu_icon' => 'dashicons-admin-customizer',
      'taxonomies' => array('category'/*, 'post_tag'*/),
      'supports' => array( 'title', 'thumbnail', 'permalink' )
    )
  );

}
add_action( 'init', 'create_posttype' );


register_nav_menus( array(
  'mainmenu'    => __( 'Menu Principal' ),
) );

register_sidebars(2, array('name'=>'Espace de widget %d'));
add_theme_support( 'post-thumbnails' );
