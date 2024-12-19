<?php
/*
Template Name: Carrousel
*/

get_header();
?>

<main class="principal">
    <section class="galerie-container">
        <h2>Galerie d'images</h2>
        <div class="carrousel">
            <?php
            
            get_template_part('template-parts/customizer-galerie');
            ?>
        </div>
    </section>
</main>

<?php
get_footer();
?>