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
            <div class="entete__titre">
                <?php else : ?>
                    <h1 class="site-title">
                        <a href="<?php echo esc_url(home_url('/')); ?>"><?php echo get_bloginfo('name'); ?></a>
                    </h1>
                    <h2 class="site-description"><?php bloginfo('description'); ?></h2>
                <?php endif; ?>
            </div>
            <div class="entete__nav">
                <?php wp_nav_menu(
                    array(
                        "menu" => "principal",
                        "container" => "nav"
                    )
                );
                get_search_form();
                ?>
            </div>
        </section>
    </header>
