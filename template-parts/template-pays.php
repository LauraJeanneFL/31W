<?php
/*
Template Name: Pays
*/

get_header();
?>

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

<?php
get_footer();
?>