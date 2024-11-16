<?php
/*
Plugin name: Carrousel
Description: Carrousel permettant d'afficher le contenu d'une galerie
Author: Laura-Jeanne Fournier L.
Author uri: http://referenced.ca
*/
function enfile_css_js()
{
    $version_css = filemtime(plugin_dir_path(__FILE__). "style.css");
    $version_js = filemtime(plugin_dir_path(__FILE__). "js/carrousel.js");

    wp_enqueue_style(
        "carrousel",
        plugin_dir_url(__FILE__) . "style.css",
        array(),
        $version_css
    );

    wp_enqueue_script(
        "carrousel",
        plugin_dir_url(__FILE__) . "js/carrousel.js",
        array(),
        $version_js,
        true
    );
}
add_action("wp_enqueue_scripts", "enfile_css_js");


function genere_carrousel() {
    $args = array(
        'post_type'      => 'attachment',
        'posts_per_page' => -1,
        'post_status'    => 'inherit',
        'post_mime_type' => 'image',
    );
    $images = get_posts($args);

    if (!$images) {
        return '<p>Aucune image disponible pour le carrousel.</p>';
    }

    $chaine = '<div class="galerie">';
    foreach ($images as $index => $image) {
        $url = wp_get_attachment_url($image->ID);
        $chaine .= '<img src="' . esc_url($url) . '" class="galerie__img" data-index="' . $index . '" alt="Image ' . ($index + 1) . '">';
    }
    $chaine .= '</div>';

    $chaine .= '
    <div class="carrousel">
        <button class="carrousel__x">X</button>
        <button class="carrousel__gauche">Précédent</button>
        <button class="carrousel__droite">Suivant</button>
        <figure class="carrousel__figure"></figure>
        <div class="carrousel__indicateurs">';
    foreach ($images as $index => $image) {
        $chaine .= '<input type="radio" name="carrousel-radio" class="carrousel__indicateur" data-index="' . $index . '">';
    }
    $chaine .= '</div>
    </div>';

    return $chaine;
}
add_shortcode("carrousel", "genere_carrousel");

