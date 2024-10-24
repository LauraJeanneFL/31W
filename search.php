
<?php

/**
 * index.php - Le modèle par défaut de wordpress
 */
?>
<?php get_header() ?>

  <main class="principal">
    <h2>Liste de cours -Résultat de la recherche </h2>
    <section class="global">
      
      <div class="principal__recherche">
        <?php if (have_posts()): ?>
          <?php while (have_posts()): the_post(); ?>
            
            <article class="principal__article">
              <h5> <?php the_title() ?> </h5>
              <h6> <?php echo $titre ?> </h6>
              <p> <?php echo wp_trim_words( get_the_excerpt(), 20, null)?> </p>
            </article>
          <?php endwhile; ?>
        <?php endif; ?>
      </div>
    </section>
  </main>
<?php get_footer(); ?>