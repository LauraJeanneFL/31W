
<?php

/**
 * index.php - Le modèle par défaut de wordpress
 */
?>
<?php get_header() ?>

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

  <main class="principal">
    <h2>Liste de cours - 3,2,1 colonnes </h2>
    <section class="global">

  <main class="principal">
    <h2>Liste de cours - 3,2,1 colonnes </h2>
    <section class="global">
      
      <div class="principal__conteneur">
        <!--  requete de base qui est execute, extrait l'ensemble des articles par defaut, have_post = verifier qu'il y est un article -->
        <?php if (have_posts()): ?>
          <?php while (have_posts()): the_post(); ?>

            <article class="principal__article">
              <h5> <?php the_title() ?> </h5>
              <h6> <?php the_content()?> </h6>

            <?php 
            $chaine = get_the_title();
            $sigle = substr($chaine, 0, 7);
            $titre = substr($chaine, 8, strpos($chaine, "(")-8);
            ?>
            <article class="principal__article">
              <h5> <?php echo $sigle ?> </h5>
              <h6> <?php echo $titre ?> </h6>
              <p> <?php echo wp_trim_words( get_the_excerpt(), 20, null)?> </p>

            </article>
          <?php endwhile; ?>
        <?php endif; ?>
      </div>

    </section>
  </main>
<?php get_footer(); ?>