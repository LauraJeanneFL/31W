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
    $wp_customize->add_setting('footer_social', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control('footer_social', array(
        'label' => __('Liens des réseaux sociaux (HTML)', 'votre_theme'),
        'section' => 'footer_section',
        'type' => 'textarea',
    ));
    
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

/////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////


function pays_meta_boxes() {
    add_meta_box(
        'pays_meta',
        'Informations sur le voyage',
        'render_pays_meta_boxes',
        'page',
        'side',
        'default'
    );
}
add_action('add_meta_boxes', 'pays_meta_boxes');

function render_pays_meta_boxes($post) {
    $participants = get_post_meta($post->ID, '_participants', true);
    $depart = get_post_meta($post->ID, '_depart', true);
    $retour = get_post_meta($post->ID, '_retour', true);
    ?>
    <label for="participants">Nombre de participants :</label>
    <input type="number" id="participants" name="participants" value="<?php echo esc_attr($participants); ?>" />

    <label for="depart">Date de départ :</label>
    <input type="date" id="depart" name="depart" value="<?php echo esc_attr($depart); ?>" />

    <label for="retour">Date de retour :</label>
    <input type="date" id="retour" name="retour" value="<?php echo esc_attr($retour); ?>" />
    <?php
}

function save_pays_meta_boxes($post_id) {
    if (array_key_exists('participants', $_POST)) {
        update_post_meta($post_id, '_participants', $_POST['participants']);
    }
    if (array_key_exists('depart', $_POST)) {
        update_post_meta($post_id, '_depart', $_POST['depart']);
    }
    if (array_key_exists('retour', $_POST)) {
        update_post_meta($post_id, '_retour', $_POST['retour']);
    }
}
add_action('save_post', 'save_pays_meta_boxes');
