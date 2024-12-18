<?php
// Récupèrer les URLs des images depuis le Customizer
$galerie_images = get_theme_mod('galerie_images', '');

// Vérifier si des images sont définies
if ($galerie_images) :
    // Convertir les URLs en tableau
    $images = array_filter(explode("\n", trim($galerie_images))); 
    ?>
    <div class="galerie-container">
        <?php foreach ($images as $image) : ?>
            <div class="galerie-item">
                <img src="<?php echo esc_url($image); ?>" alt="Galerie Image">
            </div>
        <?php endforeach; ?>
    </div>
<?php else : ?>
    <p>Aucune image n'a été ajoutée à la galerie pour le moment.</p>
<?php endif; ?>