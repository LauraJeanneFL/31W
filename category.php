
<?php

/**
 * index.php - Le modèle par défaut de wordpress
 */
?>
<?php get_header() ?>
  <main class="principal">
    <section class="global">
      <h2>Liste de cours - 3,2,1 colonnes : category.php </h2>
      <div class="principal__conteneur">
        <?php if (have_posts()): ?>
          <?php while (have_posts()): the_post(); ?>
            <article class="principal__article">
              <h5> <?php the_title() ?> </h5>
              <h6> <?php the_content()?> </h6>
            </article>
          <?php endwhile; ?>
        <?php endif; ?>
      </div>
    </section>
  </main>
  <?php get_footer(); ?>
</body>
</html>
