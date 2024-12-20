<?php

/**
 * index.php - Le modèle par défaut de wordpress
 */
?>
<?php get_header() ?>

<main class="principal">
  <section class="global">
    <h2>Single.php</h2>
    <div class="principal__conteneur">
      <?php if (have_posts()): ?>
        <?php while (have_posts()) :  the_post(); ?>
          <article class="principal__article">
            <?php if (has_post_thumbnail()): ?>
              <figure class="article__figure">
                <?php the_post_thumbnail('large'); ?>
                <figcaption> Expédition </figcaption>
                <?php
                  $temp_min = get_post_meta(get_the_ID(), '_temp_min', true);
                  $temp_max = get_post_meta(get_the_ID(), '_temp_max', true);
                  $dates_ideales = get_post_meta(get_the_ID(), '_dates_ideales', true);
                ?>
                <article class="destination">
                    <h1><?php the_title(); ?></h1>
                    <div class="description">
                        <?php the_content(); ?>
                    </div>
                    <div class="details-destination">
                        <p><strong>Température Minimum :</strong> <?php echo esc_html($temp_min); ?>°C</p>
                        <p><strong>Température Maximum :</strong> <?php echo esc_html($temp_max); ?>°C</p>
                        <p><strong>Dates Idéales :</strong> <?php echo esc_html($dates_ideales); ?></p>
                    </div>
                </article>
              </figure>
            <?php endif; ?>
            <h2><?php the_title() ?></h2>
            <?php the_content() ?>
          </article>
        <?php endwhile; ?>
    </div>
  <?php endif ?>
  </section>
</main>
<?php get_footer() ?>