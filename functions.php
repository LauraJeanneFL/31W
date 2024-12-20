<?php

/////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////

function theme_31w_customize_register($wp_customize)
{
    // Section Footer
    $wp_customize->add_section('footer_section', array(
        'title' => __('Pied de page', 'votre_theme'),
        'priority' => 130,
    ));
    // Adresse
    $wp_customize->add_setting('footer_address', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('footer_address', array(
        'label' => __('Adresse', 'votre_theme'),
        'section' => 'footer_section',
        'type' => 'text',
    ));
    // Téléphone
    $wp_customize->add_setting('footer_phone', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('footer_phone', array(
        'label' => __('Téléphone', 'votre_theme'),
        'section' => 'footer_section',
        'type' => 'text',
    ));
    // Courriel
    $wp_customize->add_setting('footer_email', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_email',
    ));
    $wp_customize->add_control('footer_email', array(
        'label' => __('Courriel', 'votre_theme'),
        'section' => 'footer_section',
        'type' => 'email',
    ));

    // Réseaux sociaux
    $social_networks = ['Facebook', 'Twitter', 'Instagram', 'LinkedIn'];
    foreach ($social_networks as $network) {
        $key = strtolower($network);
        $wp_customize->add_setting("footer_social_$key", array(
            'default' => '',
            'sanitize_callback' => 'esc_url_raw',
        ));
        $wp_customize->add_control("footer_social_$key", array(
            'label' => __("Lien $network", 'votre_theme'),
            'section' => 'footer_section',
            'type' => 'url',
        ));
    }
    
    // Section pour la zone Hero
    $wp_customize->add_section('hero_section', array(
        'title' => __('Hero Section', 'theme_31w'),
        'priority' => 30,
    )); 
    // Option : Titre principal
    $wp_customize->add_setting('hero_title', array(
        'default' => __('Bienvenue au Club de Voyage', 'theme_31w'),
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('hero_title', array(
        'label' => __('Hero Title', 'theme_31w'),
        'section' => 'hero_section',
        'type' => 'text',
    ));
    // Option : Sous-titre
    $wp_customize->add_setting('hero_subtitle', array(
        'default' => __('Your success starts here.', 'theme_31w'),
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('hero_subtitle', array(
        'label' => __('Hero Subtitle', 'theme_31w'),
        'section' => 'hero_section',
        'type' => 'text',
    ));
    // Option : Réseaux sociaux (HTML)
    $wp_customize->add_setting('hero_social_icons', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control('hero_social_icons', array(
        'label' => __('Icônes des réseaux sociaux (HTML)', 'theme_31w'),
        'section' => 'hero_section',
        'type' => 'textarea',
    ));
    // Option : Image d'arrière-plan
    $wp_customize->add_setting('hero_background', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $hero_background = get_theme_mod('hero_background', '');

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'hero_background', array(
        'label' => __('Hero Background Image', 'theme_31w'),
        'section' => 'hero_section',
    )));
    // Option : Texte du bouton CTA
    $wp_customize->add_setting('hero_cta_text', array(
        'default' => __('Learn More', 'theme_31w'),
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('hero_cta_text', array(
        'label' => __('CTA Button Text', 'theme_31w'),
        'section' => 'hero_section',
        'type' => 'text',
    ));
    // Option : Lien du bouton CTA
    $wp_customize->add_setting('hero_cta_link', array(
        'default' => '#',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control('hero_cta_link', array(
        'label' => __('CTA Button Link', 'theme_31w'),
        'section' => 'hero_section',
        'type' => 'url',
    ));

    // Section pour la Galerie
    $wp_customize->add_section('galerie_section', array(
        'title'    => __('Galerie d\'images', 'theme_31w'),
        'priority' => 40, // Ajuste la priorité pour placer cette section
    ));

    // Option : Champ pour les URLs des images
    $wp_customize->add_setting('galerie_images', array(
        'default'           => '',
        'sanitize_callback' => 'wp_kses_post',
    ));

    $wp_customize->add_control('galerie_images', array(
        'label'       => __('Galerie d\'images (une URL par ligne)', 'theme_31w'),
        'description' => __('Ajoutez les URLs des images de votre galerie, une URL par ligne.', 'theme_31w'),
        'section'     => 'galerie_section',
        'type'        => 'textarea',
    ));
}
add_action('customize_register', 'theme_31w_customize_register');


/////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////

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

function enqueue_scripts() {
    wp_enqueue_script(
        'burger-menu',
        get_template_directory_uri() . '/js/menu-burger.js',
        array(), 
        null, 
        true);
}
add_action('wp_enqueue_scripts', 'enqueue_scripts');

// Activer le support des menus personnalisés
function ajout_options() {
    // Activer le support des menus personnalisés
    add_theme_support('menus');
    add_theme_support('custom-logo', array(
        'height'      => 100,
        'width'      => 250,
        'flex-height' => true,
        'flex-width'  => true,
    ));
    add_theme_support('post-thumbnails');
}

add_action("after_setup_theme", "ajout_options");

/** --------------------- Modifier la requete principale
 * 
 * Modifie la requete principale de WordPress avant qu'elle soit exécuté
 * le hook « pre_get_posts » se manifeste juste avant d'exécuter la requête principal
 * Dépendant de la condition initiale on peut filtrer un type particulier de requête
 * Dans ce cas ci nous filtrons la requête de la page d'accueil
 * @param WP_query  $query la requête principal de WP
 */
function modifie_requete_principal($query) 
{
  if ($query->is_home() && $query->is_main_query() && ! is_admin() ) {
  $query->set( 'category_name', 'favorite' );
  $query->set( 'orderby', 'title' );
  $query->set( 'order', 'ASC' );
  }
}
add_action( 'pre_get_posts', 'modifie_requete_principal' );

function theme_setup() {
    // Activer les menus personnalisés
    add_theme_support('menus');

    // Enregistrer les emplacements de menu
    register_nav_menus(array(
    'principal'   => __('Menu Principal', '31W'),
    'footer-menu' => __('Footer Menu', '31w'),
    ));

}
add_action('after_setup_theme', 'theme_setup'); 

/////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////


function enqueue_theme_carousel_scripts()  {
    if (is_page('galerie-dimages-nos-destinations')) { //Slug de ma page 
        wp_enqueue_script(
            'carrousel-js', 
            get_template_directory_uri() . '/js/carrousel.js', 
            array('jquery'), 
            '1.0', true);
        
        wp_enqueue_style(
            'carrousel-style', 
            get_template_directory_uri() . '/css/carrousel.css');
    }
}
add_action('wp_enqueue_scripts', 'enqueue_carousel_scripts');

/////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////

// Intégrer bibliothèque d’icônes:  Font Awesome
function enqueue_font_awesome() {
    wp_enqueue_style(
        'font-awesome', 
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css',
        array(), 
          '6.0.0');
}
add_action('wp_enqueue_scripts', 'enqueue_font_awesome');


function ajouter_metabox_destinations() {
    add_meta_box(
        'details_destination', // ID unique de la métabox
        'Détails de la Destination', // Titre de la métabox
        'afficher_metabox_destination', // Fonction d'affichage
        'post', // Type de contenu : post ou custom post type
        'normal', // Emplacement
        'default' // Priorité
    );
}
add_action('add_meta_boxes', 'ajouter_metabox_destinations');

/////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////

// Zone de menu spécifique pour ces liens externes
function enregistrer_menus_tourisme() {
    register_nav_menus(array(
        'menu_tourisme' => __('Liens Tourisme', 'theme_31w'),
    ));
}
add_action('after_setup_theme', 'enregistrer_menus_tourisme');


/////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////

// Ajouter les champs personnalisés via le métabox
function afficher_metabox_destination($post) {
    // Récupérer les valeurs actuelles
    $temp_min = get_post_meta($post->ID, '_temp_min', true);
    $temp_max = get_post_meta($post->ID, '_temp_max', true);
    $dates_ideales = get_post_meta($post->ID, '_dates_ideales', true);

    // Afficher les champs
    echo '<label for="temp_min">Température Minimum :</label>';
    echo '<input type="number" id="temp_min" name="temp_min" value="' . esc_attr($temp_min) . '" placeholder="Exemple : -5">';

    echo '<label for="temp_max">Température Maximum :</label>';
    echo '<input type="number" id="temp_max" name="temp_max" value="' . esc_attr($temp_max) . '" placeholder="Exemple : 25">';

    echo '<label for="dates_ideales">Dates Idéales :</label>';
    echo '<input type="text" id="dates_ideales" name="dates_ideales" value="' . esc_attr($dates_ideales) . '" placeholder="Exemple : Juin - Août">';
}

function sauvegarder_metabox_destinations($post_id) {
    // Vérifier que ce n'est pas une sauvegarde automatique
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }

    // Vérifier les permissions
    if (!current_user_can('edit_post', $post_id)) {
        return;
    }

    // Sauvegarder les valeurs
    if (isset($_POST['temp_min'])) {
        update_post_meta($post_id, '_temp_min', sanitize_text_field($_POST['temp_min']));
    }
    if (isset($_POST['temp_max'])) {
        update_post_meta($post_id, '_temp_max', sanitize_text_field($_POST['temp_max']));
    }
    if (isset($_POST['dates_ideales'])) {
        update_post_meta($post_id, '_dates_ideales', sanitize_text_field($_POST['dates_ideales']));
    }
}
add_action('save_post', 'sauvegarder_metabox_destinations');