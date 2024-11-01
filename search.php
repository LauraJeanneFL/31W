<?php

/**
 * index.php - Le modèle par défaut de wordpress
 */
?>
<?php get_header() ?>

<<<<<<< HEAD
  <main class="principal">
    <h2>Liste de cours -Résultat de la recherche </h2>
    <section class="global">
      
      <div class="principal__recherche">
        <?php if (have_posts()): ?>
          <?php while (have_posts()): the_post(); ?>
            
            <article class="principal__article">
              <h5> <a href="<?php the_permalink()?>"> <?php the_title() ?></a> </h5>
              <h5> <?php the_title() ?> </h5>
              <h6> <?php echo $titre ?> </h6>
              <p> <?php echo wp_trim_words( get_the_excerpt(), 20, null)?> </p>
            </article>
=======
<main class="principal">
  <section class="global">
    <div class="principal__recherche">
      <h2>Résultats de recherche pour : "<?php echo get_search_query(); ?>"</h2>
      <?php if (have_posts()) : ?>
          <?php while (have_posts()) : the_post(); ?>
              <article class="principal__article">
                  <h2><?php the_title(); ?></h2>
                  <p><?php echo wp_trim_words(get_the_excerpt(), 20); ?></p>
                  <a href="<?php the_permalink(); ?>">Lire plus</a>
              </article>
>>>>>>> 7718211 (Corrigé des bugs)
          <?php endwhile; ?>
        <?php else : ?>
          <p>Aucun résultat trouvé.</p>
        <?php endif; ?>
    </div>
  </section>
</main>
<?php get_footer() ?>