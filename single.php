
<?php

/**
 * index.php - Le modèle par défaut de wordpress
 */
?>
<?php get_header() ?>

  <main class="principal">
    <h2>Single.php </h2>
    <section class="global">
      <div class="principal__conteneur">
        <?php if (have_posts()): ?>
          <?php while (have_posts()): the_post(); ?>
            <article class="principal__article">
              <h3> <?php the_title() ?> </h3>
              <?php the_content()?>
            </article>
          <?php endwhile; ?>
        <?php endif; ?>
      </div>
    </section>
  </main>
<?php get_footer(); ?>