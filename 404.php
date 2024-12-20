<?php

/**
 * index.php - Le modèle par défaut de wordpress
 */
?>
<?php get_header() ?>

<main class="principal">
  <section class="global">
    <h1>Erreur 404 : Page non trouvée</h1>
    <p>Désolé, la page que vous cherchez n'existe pas ou a été déplacée.</p>
    <a href="<?php echo home_url(); ?>" class="btn">Retour à l'accueil</a>
    <div class="principal__conteneur">
      <?php
            $args = array(
                'category_name' => 'cours',
                'orderby' => 'title',
                'order' => 'ASC'
            );
            $query = new WP_Query($args);
            if ($query->have_posts()) :
                while ($query->have_posts()) : $query->the_post(); 
                    $sigle = substr(get_the_title(), 0, 3);
            ?>
                <article>
                    <a href="<?php the_permalink(); ?>"><?php echo esc_html($sigle); ?></a>
                </article>
            <?php endwhile; wp_reset_postdata(); endif; ?>
    </div>
  </section>
</main>
<?php get_footer() ?>