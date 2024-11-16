<footer class="pied">
    <section class="pied__global">
        <div class="pied__conteneur">
            <div class="pied__colonne">
                <h5>Informations du cours</h5>
                <p>Titre du travail : Création d'un thème WordPress</p>
                <p>Auteur : Laura-Jeanne Fournier Lanctôt</p>
                <p><a href="https://github.com/LauraJeanneFL/31W" target="_blank">Lien vers le dépôt GitHub</a></p>
            </div>
            <div class="pied__colonne">
                <h5>Objectif de l’exercice</h5>
                <p>Ce projet vise à développer un thème WordPress personnalisé en utilisant PHP, Sass, et des animations CSS pour un design dynamique et élégant.</p>
            </div>
            <div class="pied__colonne">
                <h5>Recherche et Navigation</h5>
                <?php get_search_form(); ?>
                <nav class="menu-footer">
                    <?php wp_nav_menu(array('theme_location' => 'footer-menu', 'menu_class' => 'menu')); ?>
                </nav>
            </div>
        </div>
    </section>
    <?php wp_footer(); ?>
</footer>