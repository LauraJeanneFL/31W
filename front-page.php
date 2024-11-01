
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
<<<<<<< HEAD
        <!--  requete de base qui est execute, extrait l'ensemble des articles par defaut, have_post = verifier qu'il y est un article -->
        <?php if (have_posts()): ?>
          <?php while (have_posts()): the_post(); ?>
            <?php 
            $chaine = get_the_title();
            $sigle = substr($chaine, 0, 7);
            $titre = substr($chaine, 8, strpos($chaine, "(")-8);
            $duree = '60h';

            ?>
=======
        <?php 
          if (have_posts()) :
          while (have_posts()) : the_post(); ?>

>>>>>>> 7718211 (Corrigé des bugs)
            <article class="principal__article">
                <h3><?php the_title(); ?></h3>
                <p><strong>Nombre d'heures : </strong><?php echo get_field('nombre_d_heures'); ?></p>
                <p><?php echo wp_trim_words(get_the_excerpt(), 20);  ?></p>
                <p><strong>Professeur : </strong><?php echo get_field('professeur'); ?></p>
                <a href="<?php the_permalink(); ?>">Voir le cours</a>
            </article>
             <?php endwhile;
             else : ?>
          <p>Aucun cours trouvé.</p>
        <?php endif;?>
      </div>
    </section>
  </main>

    <?php
    get_footer();
