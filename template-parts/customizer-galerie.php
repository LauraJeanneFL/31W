<?php
// Récupérer les URLs des images depuis le Customizer
$galerie_images = get_theme_mod('galerie_images', '');

// Vérifier si des images sont définies
if ($galerie_images) {
    $images = explode("\n", trim($galerie_images));
    echo '<div class="galerie-container">';
    foreach ($images as $image) {
        echo '<div class="galerie-item">';
        echo '<img src="' . esc_url($image) . '" alt="Galerie Image">';
        echo '</div>';
    }
    echo '</div>';
} else {
    echo '<p>Aucune image n\'a été ajoutée à la galerie pour le moment.</p>';
}
?>