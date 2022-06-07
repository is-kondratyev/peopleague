<?php 
  global $theme_path; 
?>

<section id="info" class="b-info">
  <div class="container d-flex justify-content-center align-items-end">
    <div class="b-info__left">
      <div class="b-title"><?php the_field('description_title'); ?></div>
      <?php the_field('description_text'); ?>
    </div>
    <div class="b-info__img"><img src="<?= $theme_path ?>/img/info-img.png" alt=""></div>
  </div>
</section>