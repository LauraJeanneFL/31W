<?php

/**
 * index.php - Le modèle par défaut de wordpress
 */
?>
<?php get_header() ?>

<main class="principal">
  <section class="global">
    <h2>Liste de cours - Département TIM - index.php</h2>
    <div class="principal__conteneur">
        <?php
            // Définir la requête pour récupérer les articles de la catégorie "Cours"
            $query = new WP_Query(array(
                'category_name' => 'cours', // Remplacez 'cours' par le slug de votre catégorie
                'posts_per_page' => -1      // Récupère tous les articles sans limite
            )); 
            // Boucle WordPress pour afficher les cours
            if ($query->have_posts()) :
                while ($query->have_posts()) : $query->the_post(); ?>
                  <article class="principal__article">
                    <h5><?php the_title() ?></h5>
                    <p><?php the_content() ?></p>
                  </article>
        <?php endwhile; ?>
    </div>
  <?php endif ?>
  </section>
</main>
<?php get_footer() ?>
