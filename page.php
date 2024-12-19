<?php

/**
 * index.php - Le modèle par défaut de wordpress
 */
?>
<?php get_header() ?>

<main class="principal">
  <section class="global">
    <h2>Contenu d'une page - page.php</h2>
    <div class="principal__conteneur">
      <?php if (have_posts()): ?>
        <?php while (have_posts()) :  the_post(); ?>
          <article class="principal__article">
            <h5><?php the_title() ?></h5>
            <p><?php the_content() ?></p>
            <div class="filters">
                <?php
                $pays = ["France", "États-Unis", "Canada", "Argentine", "Chili", "Belgique", "Maroc", "Mexique", "Japon", "Italie", "Islande", "Chine", "Grèce", "Suisse"];
                foreach ($pays as $pays_nom) {
                    echo '<button class="pays-button" data-pays="' . esc_attr($pays_nom) . '">' . esc_html($pays_nom) . '</button>';
                }
                ?>
            </div>
          </article>
        <?php endwhile; ?>
    </div>
  <?php endif ?>
  </section>
</main>
<?php get_footer() ?>