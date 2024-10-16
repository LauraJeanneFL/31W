
<?php

/**
 * index.php - Le modèle par défaut de wordpress
 */
?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>31W</title>
  <?php wp_head(); ?>
</head>

<body>
  <header>
    <section class="global">
      <h1>31W</h1>
      <nav>
        <ul>
          <li><a href="#">Accueil</a></li>
          <li><a href="#">À propos</a></li>
          <li><a href="#">Contact</a></li>
        </ul>
      </nav>
      <form class="recherche">
        <input type="search" name="" id="" />
        <img
          src="https://s2.svgbox.net/hero-outline.svg?ic=search&color=000"
          width="20"
          height="20" />
      </form>
    </section>
  </header>
  <main>
    <section class="global">
      <h2>Accueil</h2>
      <p>
        Bienvenue sur 31W Lorem ipsum dolor sit, amet consectetur adipisicing
        elit. Magnam, quaerat eius aspernatur dolor veniam sit adipisci
        reiciendis totam natus temporibus. Saepe iste consectetur officia
        animi voluptatem laudantium ab hic inventore!
      </p>
    </section>
  </main>
  <footer>
    <section class="global">
      <div>1</div>
      <div>2</div>
      <div>3</div>
    </section>
  </footer>
  <?php wp_footer(); ?>
</body>

</html>
