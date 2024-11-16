<?php
/**
 * Template Name: Carrousel
 */
get_header(); ?>

<main class="principal">
  <section class="global">
    <h2>Carrousel de Voyages</h2>
    <?php echo do_shortcode('[carrousel]'); ?>
  </section>
</main>

<?php get_footer(); ?>