
<?php

/**
 * index.php - Le modèle par défaut de wordpress
 */
?>

<?php get_header() ?>

  <main class="principal">
    <section class="global">
      <h2>Liste de cours - category-cours.php </h2>
      <div class="principal__conteneur">
        <?php if (have_posts()): ?>
          <?php while (have_posts()): the_post(); ?>

          <?php 
            $chaine = get_the_title();
            $sigle = substr($chaine,0,7);
            $position_parenthese = strpos($chaine, '(');
            $titre = substr($chaine, 7,$position_parenthese-7);
            $duree = substr($chaine, $position_parenthese);
          ?>
            <article class="principal__article">
              <h5> <?php echo $sigle ?> </h5>
              <h5> <?php echo $titre?> </h5>
              <p> <?php echo wp_trim_words(get_the_excerpt(), 10, "suite...");?> </p>
              <h5>Durée:<?php echo $duree ?></h5>
              <h2>Enseignant: <?php the_field('commentaire')?></h2>
            </article>
          <?php endwhile; ?>
      </div>
      <?php endif; ?>
    </section>
  </main>
  <?php get_footer(); ?>
</body>
</html>
