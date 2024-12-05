
<?php

/**
 * index.php - Le modèle par défaut de wordpress
 */
?>
<?php get_header() ?>

<main class="principal">
  <?php
    // Récupérer les données du customizer
    get_template_part('template-parts/customizer', 'hero');
  ?>

  <section class="global nouveau">
    <h2>Nos destination populaires</h2>
    <div class="principal__conteneur">
      <?php if (have_posts()): ?>
        <?php while (have_posts()) :  the_post(); ?>
          <?php
          if(in_category('galerie')){
            get_template_part('template-parts/article', 'galerie');
          }else {
            get_template_part('template-parts/article', 'populaire');  
          } 
          ?>
        <?php endwhile; ?>
      <?php endif ?>
    </div>
  </section>

  <section class="global galerie">
    <?php get_template_part('template-parts/customizer', 'galerie'); ?>
  </section>

  <section id="filtre" class="global filtre">
    <h2>Les destinations par categorie</h2>
    <!-- Un appel à l'extension res api filtre -->
     <?php echo do_shortcode('[extraire_destination]');?>
  </section>

  </section>

</main>
<?php get_footer() ?>
