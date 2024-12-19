<?php
/*
Template Name: Pays
*/

get_header();
?>

<main class="principal">
    <section class="global">
        <h2>Destinations par Pays</h2>
        <div class="principal__conteneur">
            <p>
                Voici une liste de destinations par pays pour votre prochain séjour Vous pouvez cliquer sur les boutons pour afficher les images correspondantes.
                N'hésitez pas à contacter le service clientèle si vous avez besoin d'aide ou si vous avez des questions sur une destination spécifique.
                <br>
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

            <!-- Section pour la galerie -->
            <div class="galerie-container">
                <h2>Galerie d'images</h2>
                <div class="images">
                    <?php get_template_part('template-parts/customizer-galerie'); ?>
                </div>
            </div>

            <!-- Conteneur pour afficher les résultats -->
            <div id="resultats" class="resultats">
                <p>Faites un choix. Les destinations s'afficheront ici après votre sélection.</p>
            </div>

        </div>
    </section>
</main>

<?php
get_footer();
?>