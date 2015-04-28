<!DOCTYPE html>
<html>
<head>
  <title><?php wp_title( '' ); ?></title>
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/normalize.css">
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css">
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/responsive.css">
  <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/slick/slick.css"/>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.3/themes/smoothness/jquery-ui.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.3/jquery-ui.min.js"></script>
  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/function.js"></script>
<link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic|Fjalla+One' rel='stylesheet' type='text/css'>
  <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/images/favicon.png" />
  <meta name="viewport" content="width=device-width">
  <?php wp_head(); ?>
</head>
<body class="col-wrap">
  <div class="big-container">
    <header>
      <div class="big-container dark-wrap">
        <div class="column third">
          <a href="<?php echo get_site_url(); ?>"><h1 class="logo"><img src="<?php echo get_template_directory_uri(); ?>/images/header-logo.png"></h1></a>
        </div>
        <div class="column two-thirds talignright">
          <nav>
            <?php if (is_home()) { ?>
            <div class="story-menu">
              <ul>
                <li><a href="#testimonials">Testimonials</a></li>
                <li><a href="#feeds">Fitness Feeds</a></li>
                <li><a href="#about">About Me</a></li>
              </ul>
            </div>
            <div class="nav-menu">
              <?php wp_nav_menu(array('theme_location' => 'Header_Nav',)); ?>
            </div>
            <div class="switch-menu">
              <ul>
                <li class="toggle-menu"><a>Pages</a></li>
              </ul>
            </div>
            <?php } else { ?>
            <?php wp_nav_menu(array('theme_location' => 'Header_Nav',)); } ?>
          </nav>
        </div>
      </div>
    </header>
    <header class="resp-menu">
      <div class="big-container dark-wrap">
        <div class="column third">
          <a href="<?php echo get_site_url(); ?>"><h1 class="logo"><img src="<?php echo get_template_directory_uri(); ?>/images/header-logo.png"></h1></a>
        </div>
        <div class="column two-thirds talignright">
          <i class="fa fa-bars"></i>
        </div>
        <nav>
         <?php wp_nav_menu(array('theme_location' => 'Header_Nav',)); ?>
       </nav>
     </div>
   </header>