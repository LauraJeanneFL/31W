<?php
/*
Template Name: Pays
*/

get_header();
?>

<main class="principal">
    <section class="global">
        <?php the_title('<h1>', '</h1>'); ?>
        <h2>Destinations par Pays</h2>
        <p>Voici une liste de destinations par pays pour votre prochain séjour...</p>
        <div class="principal__conteneur">
            <article class="conteneur__centre">
                <?php the_content() ?>
                <p>
                    Voici une liste de destinations par pays pour votre prochain séjour Vous pouvez cliquer sur les boutons pour afficher les images correspondantes.
                    N'hésitez pas à contacter le service clientèle si vous avez besoin d'aide ou si vous avez des questions sur une destination spécifique.
                    Nous sommes là pour vous aider et vous orienter vers la destination la plus appropriée pour votre budget et vos préférences.
                    <p>
                        <a href="<?php echo esc_url(home_url('/contact'));?>">Contactez-nous</a>
                    </p>
                </p>
                
                <!-- Section pour les boutons des pays -->
                <div class="filters">
                    <h3>Choisissez un pays</h3>
                    <div class="countries">
                        <?php
                        $pays = ["France", "États-Unis", "Canada", "Argentine", "Chili", "Belgique", "Maroc", "Mexique", "Japon", "Italie", "Islande", "Chine", "Grèce", "Suisse"];
                        foreach ($pays as $pays_nom) :
                            echo '<button class="pays-button" data-pays="' . esc_attr($pays_nom) . '">' . esc_html($pays_nom) . '</button>';
                        endforeach;
                        ?>
                    </div>
                </div>
                <div id="resultats" class="resultats">
                    <p>Faites un choix. Les destinations s'afficheront ici après votre sélection.</p>
                </div>
                    <article>
                        <h6 class="destination-titre" data-id="1"></h6>
                            <div class="description" id="description-1" style="max-height: 0; overflow: hidden; transition: max-height 0.3s ease;">
                                
                            </div>
                    </article>
            
                <!-- Section pour la galerie -->
                <div class="galerie-container">
                    <h2>Galerie d'images</h2>
                    <div class="images">
                        <?php get_template_part('template-parts/customizer-galerie'); ?>
                    </div>
                </div>

                <div class="voyage-details">
                    <p><strong>Participants :</strong> <?php echo esc_html(get_post_meta(get_the_ID(), '_participants', true)); ?></p>
                    <p><strong>Date de départ :</strong> <?php echo esc_html(get_post_meta(get_the_ID(), '_depart', true)); ?></p>
                    <p><strong>Date de retour :</strong> <?php echo esc_html(get_post_meta(get_the_ID(), '_retour', true)); ?></p>
                </div>
            </article>

        </div>
    </section>
</main>

<?php
get_footer();
?>