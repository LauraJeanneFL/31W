<?php
/**
 * front-page.php - Modèle de la page d'accueil de WordPress pour afficher les cours du département TIM
 */
?>
<?php get_header(); ?>

<main class="principal">
    <section class="global">
        <h2>Liste des cours - Département TIM</h2>
        <div class="principal__conteneur">

            <?php
            // Requête pour récupérer les articles de la catégorie "Cours" et limiter à 5 articles
            $query = new WP_Query(array(
                'category_name' => 'cours', // Slug de la catégorie "Cours"
                'posts_per_page' => 5       // Limite à 5 cours pour l'accueil
            ));

            if ($query->have_posts()) :
                while ($query->have_posts()) : $query->the_post();
                    $chaine = get_the_title();
                    $sigle = substr($chaine, 0, 7);
                    $position_parenthese = strpos($chaine, '(');
                    if ($position_parenthese !== false) {
                        $titre = substr($chaine, 8, $position_parenthese - 9);
                        $duree = substr($chaine, $position_parenthese);
                    } else {
                        $titre = $chaine;
                        $duree = "Durée inconnue";
                    }
                    ?>
                    <article class="principal__article">
                        <h5><?php echo esc_html($sigle); ?></h5>
                        <h6><?php echo esc_html($titre); ?></h6>
                        <p><?php echo wp_trim_words(get_the_excerpt(), 20, '...'); ?></p>
                        <p><code>Durée : <?php echo esc_html($duree); ?></code></p>
                        <a href="<?php the_permalink(); ?>">Voir le cours</a>
                    </article>
                <?php endwhile;
            else : ?>
                <p>Aucun cours trouvé dans la catégorie.</p>
            <?php endif;

            wp_reset_postdata();
            ?>
        </div>
    </section>
</main>

<?php get_footer(); ?>