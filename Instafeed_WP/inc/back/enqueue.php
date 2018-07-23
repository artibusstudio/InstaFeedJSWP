<?php
function artsmart_enqueue_setup(){
  add_theme_support('post-thumbnails');
  add_image_size('small-thumbnail', 250, 250, true);
  add_image_size('banner-image', 920, 210, true);
}
