<footer class="pied">
    <section class="pied__global">
      
      <div class="pied__colonne">
        <h3>Informations du cours</h3>
        <p>Titre du travail : Création d'un thème WordPress</p>
        <p>Auteur: Laura-Jeanne Fournier Lanctôt</p>
        <p><a href="https://github.com/LauraJeanneFL/31W">Lien vers le dépôt GitHub</a></p>
      </div>

      <div class="pied__colonne">
        <h3>Objectif de l’exercice</h3>
        <p>Ce projet vise à développer un thème WordPress personnalisé en utilisant PHP, Sass, et des animations CSS pour un design dynamique et élégant.</p>
         <img src="<?php echo get_template_directory_uri();?>/screenshot.png" alt="screenshot">
      </div>

      <div class="pied__colonne">
        <h3>Recherche cours Web :</h3>
        <ul>
          <li><a href="<?php echo get_category_link(get_cat_ID('1w1')); ?>">1w1</a></li>
          <li><a href="<?php echo get_category_link(get_cat_ID('2w2')); ?>">2w2</a></li>
          <li><a href="<?php echo get_category_link(get_cat_ID('3w3')); ?>">3w3</a></li>
          <li><a href="<?php echo get_category_link(get_cat_ID('4w4')); ?>">4w4</a></li>
          <li><a href="<?php echo get_category_link(get_cat_ID('5w5')); ?>">5w5</a></li>
        </ul>
      </div>
    </section>
    <?php wp_footer(); ?>
  </footer>
</body>

</html>