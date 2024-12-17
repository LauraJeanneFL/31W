<?php
/* Formulaire de recherche personnalisée */
?>
<form class="recherche" role="search" method="get" action="<?php echo esc_url(home_url('/')); ?>">
    <label for="search-field" class="screen-reader-text">Rechercher :</label>
    <input id="search-field" class="recherche__input" type="search" placeholder="Recherche :" value="<?php echo get_search_query(); ?>" name="s" />
    <button class="recherche__bouton" type="submit">
        <img src="https://s2.svgbox.net/hero-outline.svg?ic=search&color=000" width="20" height="20" alt="Icône de recherche">
    </button>
</form>