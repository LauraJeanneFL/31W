<?php
/**
 * Template Name: Carrousel
 */
get_header(); ?>

<main class="principal">
  <section class="global">
    <h2>Carrousel de Voyages</h2>
    <div class="principal__conteneur">
      <?php if (have_posts()): ?>
        <?php while (have_posts()) :  the_post(); ?>
          <article class="principal__article">
              <p><?php the_content() ?></p>
          </article>
      <?php echo do_shortcode('[carrousel]'); ?>
      <?php endwhile; ?>
    </div>
    <?php endif ?>
  </section>
</main>

<?php get_footer(); ?>