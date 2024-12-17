<?php
/*
Template Name: Template Événement
*/
?>
<?php get_header(); ?>

<main class="principal">
    <section class="global">
        <?php if (have_posts()) : ?>
            <div class="principal__conteneur">
                <?php while (have_posts()) : the_post(); ?>
                    <article class="principal__article">
                        <?php the_post_thumbnail('medium') ?>
                    <h1><?php the_title() ?></h1>
                    <p><?php the_content() ?></p>
                    <p><?php the_field('adresse')?></p>
                    <p><?php the_field('date_evenement')?></p>
                    </article>
                <?php endwhile;?>
            </div>
        <?php endif;?>
    </section>
</main>
<?php get_footer(); ?>