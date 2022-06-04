<?php global $theme_path; ?>

<section id="gallery" class="b-gallery">
  <div class="container">
    <div class="b-title"><?php the_field('photogallery_title'); ?></div>
    <div class="row">
      <div class="b-gallery__col col-xl-6 col-lg-6 col-md-6">
        <a data-fancybox="images" href="<?= $theme_path ?>/img/img1.png">
          <img src="<?= $theme_path ?>/img/img1.png" alt="">
        </a>
      </div>
      <div class="b-gallery__col col-xl-6 col-lg-6 col-md-6">
        <div class="row">
          <div class="col-xl-6 col-lg-6 col-md-6">
            <a data-fancybox="images" href="<?= $theme_path ?>/img/img2.png">
              <img src="<?= $theme_path ?>/img/img2.png" alt="">
            </a>
          </div>
          <div class="col-xl-6 col-lg-6 col-md-6">
            <a href="" class="b-gallery__link ripple]]]]]]]]]]]]]]]]]]]]">Посмотреть<br />
              всю галерею</a>
          </div>
        </div>
      </div>
      <div class="b-gallery__col col-xl-6 col-lg-6 col-md-6">
        <div class="row">
          <div class="col-xl-6 col-lg-6 col-md-6">
            <a data-fancybox="images" href="<?= $theme_path ?>/img/img3.png">
              <img src="<?= $theme_path ?>/img/img3.png" alt="">
            </a>
          </div>
          <div class="col-xl-6 col-lg-6 col-md-6">
            <a data-fancybox="images" href="<?= $theme_path ?>/img/img4.png">
              <img src="<?= $theme_path ?>/img/img4.png" alt="">
            </a>
          </div>
        </div>
      </div>
      <div class="b-gallery__col col-xl-6 col-lg-6 col-md-6">
        <a data-fancybox="images" href="<?= $theme_path ?>/img/img5.png">
          <img src="<?= $theme_path ?>/img/img5.png" alt="">
        </a>
      </div>
    </div>
  </div>
</section>