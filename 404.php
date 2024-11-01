<?php

/**
 * index.php - Le modèle par défaut de wordpress
 */
?>
<?php get_header() ?>

<main class="principal">
  <section class="global">
    <h2>Liste de cours -</h2><code>404.php</code>
    < class="principal__conteneur">
        <h1>Erreur  404</h1>
        <?php wp_nav_menu(array(
            "menu"=> "erreur404",
            "container"=> "nav"
        ))
        ?>

      <?php if (have_posts()): ?>
        <?php while (have_posts()) :  the_post(); ?>
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