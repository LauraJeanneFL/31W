<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>31W</title>
  <?php wp_head(); ?>
</head>

<body>
  <header class="entete">
    <section class="global entete__global">
      <div class="entete__titre">
      <h1><a href="<?php bloginfo('url') ?>"></a><?php bloginfo('name') ?> </h1>
      <h2> <?php bloginfo('description') ?></h2>
      <div>wrapper les liens </div>
      </div>
      <div class="entete__nav">
        <?php wp_nav_menu(
            array(
                  "menu" => "principal",
                  "container" => "nav" 
                  ) 
              );
              get_search_form() 
              ?>
      </div>
        
    </section>
  </header>
