<?php
// Ajouter le style sur la page
// Ajouter le link css dans la page 
// Premier qui s'execute !
function ajouter_style()
{
    // pour etre capable d'ajouter une feuille de style -> nécessaire action 
    wp_enqueue_style(
        'mon_stlyle',
        get_template_directory_uri() . '/style.css',
        array(),
        filemtime(get_template_directory() . '/style.css')
    );
}

// Le hook 
// add_action= l'équivalent en JS add.event.listerner = écouteur de WordPress
// wp_enqueue_scripts = fonctin du script et ajouter_style = execute
add_action('wp_enqueue_scripts', 'ajouter_style');

function ajout_options () {

    // Activer le support des menus personnalisés
    add_theme_support('menus');
}

add_action("after_setup_theme", "ajout_options");