<?php
/**
 * index.php - Le modèle par défaut de wordpress
 */
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>31W</title>
    <?php wp_head(); ?>
</head>
<body>
    <header class="entete" style="background-image: url('<?php echo esc_url($hero_background); ?>');">
        <section class="global entete__global">
            <?php if (function_exists('the_custom_logo')) : ?>
                    <?php the_custom_logo(); ?>

            <div class="entete__nav">
                <!-- Bouton Burger -->
                <div class="burger-menu">
                    <button class="burger" aria-label="Menu">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                </div>

                <!-- Menu principal -->
                <nav class="menu-principal-container">
                    <?php
                    if (has_nav_menu('principal')) {
                        wp_nav_menu([
                            'theme_location' => 'principal',
                            'container'      => false,
                            'menu_class'     => 'menu',
                        ]);
                    } else {
                        echo '<p style="color:red;">Le menu "principal" n\'est pas configuré. Veuillez l\'assigner dans Apparence > Menus.</p>';
                    }
                    ?>  
                </nav>

                <!-- Formulaire de recherche -->
                <?php get_search_form(); ?>
            </div>
            <div class="entete__titre">
                <?php else : ?>
                    <h1 class="site-title">
                        <a href="<?php echo esc_url(home_url('/')); ?>"><?php echo get_bloginfo('name'); ?></a>
                    </h1>
                    <h2 class="site-description"><?php bloginfo('description'); ?></h2>
                <?php endif; ?>
            </div>
        </section>
    </header>
