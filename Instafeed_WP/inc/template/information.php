<?php
function mainInformation(){
  ?>
<div class="art-main-content-div">
      
      <div class="art-featured-content-img">

        <img src="<?php echo get_theme_file_uri('/assets/img/banner/kendy.jpeg'); ?>">

      </div>

      <div class="art-svg-content-icon">

        <svg width="24" height="24" viewBox="0 0 24 24"><path d="M12 0c-4.198 0-8 3.403-8 7.602 0 4.198 3.469 9.21 8 16.398 4.531-7.188 8-12.2 8-16.398 0-4.199-3.801-7.602-8-7.602zm0 11c-1.657 0-3-1.343-3-3s1.343-3 3-3 3 1.343 3 3-1.343 3-3 3z"/></svg>

      </div>


      <!-- LOOP CONTEUDO DA PAGINA -->
      <div class="art-main-content-text">

        <?php
          if(have_posts()):
            while(have_posts()):
              the_post();
                the_content();
            endwhile;
          endif;
        ?>

      </div>

<?php }