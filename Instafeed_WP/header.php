<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <?php wp_head(); ?>
  <meta charset="UTF-8">
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body <?php body_class(); ?>>

<header>

 <nav class="art-navbar-slide-menu">

    <span class="art-open-slide">

      <a href="#" onclick="openSlideMenu()">

        <svg width="30" height="30">
            <path d="M0,5 30,5" stroke="#fff" stroke-width="5"/>
            <path d="M0,14 30,14" stroke="#fff" stroke-width="5"/>
            <path d="M0,23 30,23" stroke="#fff" stroke-width="5"/>
        </svg>

      </a>

    </span>

  </nav>

</header>

  <div id="art-side-menu" class="art-side-nav">
    <a href="#" class="art-btn-close" onclick="closeSlideMenu()">&times;</a>
    
    <ul>

      <li><a href="#">Lorem ipsum dolor.</a></li>
      <li><a href="#">Lorem ipsum dolor.</a></li>
      <li><a href="#">Lorem ipsum dolor.</a></li>
      <li><a href="#">Lorem ipsum dolor.</a></li>
      <li><a href="#">Lorem ipsum dolor.</a></li>
      <li><a href="#">Lorem ipsum dolor.</a></li>

    </ul>
  </div>