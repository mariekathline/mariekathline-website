<!DOCTYPE html>

<!--
                       _            _         _   _     _ _
  _ __ ___   __ _ _ __(_) ___      | | ____ _| |_| |__ | (_)_ __   ___
 | '_ ` _ \ / _` | '__| |/ _ \_____| |/ / _` | __| '_ \| | | '_ \ / _ \
 | | | | | | (_| | |  | |  __/_____|   < (_| | |_| | | | | | | | |  __/
 |_| |_| |_|\__,_|_|  |_|\___|     |_|\_\__,_|\__|_| |_|_|_|_| |_|\___|  _____
                                                                        |_____|

                                                                       			 -->
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title><?php bloginfo( 'name' ) ?></title>
    <meta name="description" content="<?php bloginfo( 'description' ) ?>">
    <link href="//fonts.googleapis.com/css?family=Open+Sans|Cookie|Major+Mono+Display" rel="stylesheet">
    <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/magnific-popup.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/vertical-rhythm.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/ionicons.min.css">
  </head>

  <body>

    <div id="pageLoader">
          <span></span>
          <span></span>
          <span></span>
          <span></span>
    </div>


		  <!--nav id="menu-1">
				<h2 class="icon icon-lab">Marie-Kathline</h2-->
				<!--php wp_nav_menu(array(
                'theme_location' => 'mainmenu',
              )); ?>
      </nav-->
      
      <!--button data-effect="st-effect-1">Slide in on top</button-->

      <!-- 1.1 - Header -->
      <header class="section d-flex justify-content-center align-items-center" id="header">
        <div class="container">
          <div class="col-md-12">
            <h1><a href="http://localhost/marie-kathline/index.php">Marie-kathline&nbsp;__</a></h1>
            <!--p>#graphisme #webdesign #webconception #developpement.front #identite.visuelle #ergonomie #illustrations #experience.utilisateur #UX #motion.design #animations #couleurs #print #digital #mise.en.page #typographie #photographie</p-->
          </div>
        </div>
        <div id="burger">
          <i class="fa fa-bars"></i>
        </div>
      </header>


      <section class="menu">
        <div class="container">
          <nav>
            <?php wp_nav_menu(array(
                'theme_location' => 'mainmenu',
            )); ?>
          </nav>
          <h3>Last post on Intagram</h3>
          <div id="instagram">
                <ul id="mk_instafeed"></ul>
          </div>
        </div>
      </section>