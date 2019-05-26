<!doctype html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
    <!-- Icon FontAwesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    
    <!-- Google Fonts Playfair Display -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Sintony&display=swap" rel="stylesheet">

    <!-- Favicon -->
    <link rel="shortcut icon" href="./imgs/favicon.ico" />

    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
      <header>
        <div class="menus">
          <div class="menu-institucional container-fluid">
            <nav class="navbar navbar-expand-lg background-menu-institucional">
              <button class="navbar-toggler nav-icon-toggle" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-gopuram"></i>
              </button>
              <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                <?php wp_nav_menu( [
                                      'theme_location'  => 'menu_institucional',
                                      'depth'           => 1, // 1 = no dropdowns, 2 = with dropdowns.
                                      'container'       => 'div',
                                      'container_class' => 'collapse navbar-collapse',
                                      'container_id'    => 'bs-example-navbar-collapse-1',
                                      'menu_class'      => 'navbar-nav mr-auto',
                                      'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                                      'walker'          => new WP_Bootstrap_Navwalker(),
                                   ]
                                );  
                ?>
              </div>
            </nav>
          </div>
          <div class="menu-principal container">
                     
              <?php the_custom_logo(); ?>
           
            <nav class="navbar navbar-expand-lg" >
              <button class="navbar-toggler nav-icon-toggle" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-grip-lines"></i><i class="fas fa-grip-lines"></i>
              </button>
                <?php wp_nav_menu( [
                                      'theme_location'  => 'menu_principal',
                                      'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
                                      'container'       => 'div',
                                      'container_class' => 'collapse navbar-collapse',
                                      'container_id'    => 'bs-example-navbar-collapse-1',
                                      'menu_class'      => 'navbar-nav mr-auto',
                                      'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                                      'walker'          => new WP_Bootstrap_Navwalker(),
                                  ]
                                );
                ?>
            </nav>
          </div>
        </div>
      </header>