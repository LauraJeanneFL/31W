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
</div>

<?php
get_footer();
?>