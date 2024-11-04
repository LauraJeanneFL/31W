
<?php

/**
 * front-page.php - Modèle de la page d'accueil de WordPress pour afficher les cours du département TIM
 */
?>
<?php get_header() ?>

  <main class="principal">
    <section class="global">
      <h2>Liste de cours - Front page.php </h2>
      <div class="principal__conteneur">
        <!--  requete de base qui est execute, extrait l'ensemble des articles par defaut, have_post = verifier qu'il y est un article -->
        <?php if (have_posts()):?>
          <?php while (have_posts()): the_post();?>
            <?php 
            $chaine = get_the_title();
            $sigle = substr($chaine, 0, 7);
            $titre = substr($chaine, 8, strpos($chaine, "(") - 9);
            // Durée
            $position_parenthese = strpos($chaine, '(');
            $duree = substr($chaine, $position_parenthese);
            ?>
            <article class="principal__article">
                <h5><?php echo $sigle; ?></h5>
                <h6><?php echo $titre; ?></h6>
                <p><?php echo wp_trim_words(get_the_excerpt(), 20, null);  ?></p>
                <p><code>Durée : <?php echo $duree;?></code></p>
                <p><strong>Professeur : </strong><?php echo get_field('professeur'); ?></p>
                <a href="<?php the_permalink(); ?>">Voir le cours</a>
            </article>
          <?php endwhile; ?>
      </div>
      <?php endif;?>
    </section>
  </main>
  <?php get_footer(); ?>
