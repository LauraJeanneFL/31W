<footer class="pied">
    <section class="pied__global">
      <div class="pied__colonne">
        <h3>Informations du cours</h3>
        <p>Titre du travail : Création d'un thème WordPress</p>
        <p>Auteur : Laura-Jeanne Fournier Lanctôt</p>
        <p><a href="https://github.com/LauraJeanneFL/31W">Lien vers le dépôt GitHub</a></p>
      </div>
      <div class="pied__colonne">
        <h3>Objectif de l’exercice</h3>
        <p>Ce projet vise à développer un thème WordPress personnalisé en utilisant PHP, Sass, et des animations CSS pour un design dynamique et élégant.</p>
      </div>
      <div class="pied__colonne">
        <h3>Recherche:</h3>
        <?php get_search_form();  ?>
      </div>
      
    </section>
    <?php wp_footer(); ?>
  </footer>
</body>

</html>