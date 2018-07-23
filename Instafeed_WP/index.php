<!-- ESSE É UM FALLBACK PARA FRONT-PAGE.PHP -->

<!-- HEADER LOOP -->
<?php get_header(); ?>

<!-- LOOP CONTEUDO DA PAGINA -->
  <?php
    if(have_posts()):
      while(have_posts()):
        the_post();
          the_content();
      endwhile;
    endif;
  ?>

<!-- FOOTER LOOP -->
<?php get_footer(); ?>