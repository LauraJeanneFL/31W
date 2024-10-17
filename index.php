
<?php

/**
 * index.php - Le modèle par défaut de wordpress
 */
?>
<?php get_header() ?>

  <main class="principal">
    <h2>Liste de cours</h2>
    <section class="global">
      
      <div class="principal__conteneur">
        <!--  requete de base qui est execute, extrait l'ensemble des articles par defaut, have_post = verifier qu'il y est un article -->
        <?php if (have_posts()): ?>
          <?php while (have_posts()): the_post(); ?>
            <?php 
            $chaine = get_the_title();
            $sigle = substr($chaine, 0, 7);
            $titre = substr($chaine, 8, strpos($chaine, "(")-8);
            ?>
            <article class="principal__article">
              <h5> <?php echo $sigle ?> </h5>
              <h6> <?php echo $titre ?> </h6>
              <p> <?php echo wp_trim_words( get_the_excerpt(), 20, null)?> </p>
            </article>
          <?php endwhile; ?>
        <?php endif; ?>
      </div>
    </section>
  </main>
  <footer class="pied">
    <section class="global">
      <div>1</div>
      <div>2</div>
      <div>3</div>
    </section>
  </footer>
  <?php wp_footer(); ?>
</body>

</html>
