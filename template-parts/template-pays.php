<?php
/*
Template Name: Pays
*/

get_header();
?>
<main class="principal">
    <section class="global">
        <h2>Destinations par Pays</h2>
        <div class="principal__conteneur">
            <!-- Section pour les champs personnalisés -->
            <div class="voyage-info">
                <p><strong>Participants :</strong> <?php echo get_post_meta(get_the_ID(), '_participants', true); ?></p>
                <p><strong>Date de départ :</strong> <?php echo get_post_meta(get_the_ID(), '_depart', true); ?></p>
                <p><strong>Date de retour :</strong> <?php echo get_post_meta(get_the_ID(), '_retour', true); ?></p>
            </div>

            <!-- Section pour la galerie -->
            <div class="galerie">
                <?php get_template_part('template-parts/customizer-galerie'); ?>
            </div>

            <!-- Section pour les boutons des pays -->
            <div class="filters">
                <h3>Choisissez un pays</h3>
                <div class="countries">
                    <?php
                    $pays = ["France", "États-Unis", "Canada", "Argentine", "Chili", "Belgique", "Maroc", "Mexique", "Japon", "Italie", "Islande", "Chine", "Grèce", "Suisse"];
                    foreach ($pays as $pays_nom) :
                        echo '<button class="pays-button" data-pays="' . esc_attr($pays_nom) . '">' . esc_html($pays_nom) . '</button>';
                    endforeach;
                    ?>
                </div>
            </div>
        </div>
    </section>

    <div class="template-pays">
        <header>
            <h1><?php the_title(); ?></h1>
            <p>Bienvenue sur la page des destinations par pays</p>
        </header>

        <section class="gallerie">
            <h2>Galerie d'images</h2>
            <div class="images">
                <!-- Galerie dynamique ici -->
            </div>
        </section>

        <section class="filtres">
            <h2>Choisissez un pays</h2>
            <div class="pays">
                <!-- Boutons pour les pays ici -->
            </div>
        </section>

        <div class="trip-info">
            <p><strong>Participants :</strong> <?php echo get_post_meta(get_the_ID(), '_participants', true); ?></p>
            <p><strong>Date de départ :</strong> <?php echo get_post_meta(get_the_ID(), '_depart', true); ?></p>
            <p><strong>Date de retour :</strong> <?php echo get_post_meta(get_the_ID(), '_retour', true); ?></p>
        </div>
    </div>

</main>


<?php
get_footer();
?>