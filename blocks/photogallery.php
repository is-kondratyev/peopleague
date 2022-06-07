<?php 
  global $theme_path; 
  $gallery = get_field('photogallery');
?>

<section id="gallery" class="b-gallery">
  <div class="container">
    <div class="b-title"><?php the_field('photogallery_title'); ?></div>
    <div class="row">
      <div class="b-gallery__col col-xl-6 col-lg-6 col-md-6">
        <a data-fancybox="images" href="<?= $gallery['photo_1']['img_min']; ?>">
          <img src="<?= $gallery['photo_1']['img_full']; ?>" alt="">
        </a>
      </div>
      <div class="b-gallery__col col-xl-6 col-lg-6 col-md-6">
        <div class="row">
          <div class="col-xl-6 col-lg-6 col-md-6">
            <a data-fancybox="images" href="<?= $gallery['photo_2']['img_min']; ?>">
              <img src="<?= $gallery['photo_2']['img_full']; ?>" alt="">
            </a>
          </div>
          <div class="col-xl-6 col-lg-6 col-md-6">
            <a href="" class="b-gallery__link ripple]]]]]]]]]]]]]]]]]]]]">
              Посмотреть<br>
              всю галерею
              <span>(в разработке)</span>
            </a>
            <?php //Убрать после ввода галереи ?>
            <script>
              document.querySelector('.b-gallery__link').addEventListener('click', function(event) {
                event.preventDefault();
                console.log("Раздел в разработке, поэтому ничего не происходит!");
              });
            </script>
            <style>
              .b-gallery__link {
                position: relative;
              }
              .b-gallery__link span {
                display: block;
                margin-top: 5px;
                position: absolute;
                bottom: 80px;
                font-size: 12px;
                font-weight: 300;
              }
            </style>
          </div>
        </div>
      </div>
      <div class="b-gallery__col col-xl-6 col-lg-6 col-md-6">
        <div class="row">
          <div class="col-xl-6 col-lg-6 col-md-6">
            <a data-fancybox="images" href="<?= $gallery['photo_3']['img_min']; ?>">
              <img src="<?= $gallery['photo_3']['img_full']; ?>" alt="">
            </a>
          </div>
          <div class="col-xl-6 col-lg-6 col-md-6">
            <a data-fancybox="images" href="<?= $gallery['photo_4']['img_min']; ?>">
              <img src="<?= $gallery['photo_4']['img_full']; ?>" alt="">
            </a>
          </div>
        </div>
      </div>
      <div class="b-gallery__col col-xl-6 col-lg-6 col-md-6">
        <a data-fancybox="images" href="<?= $gallery['photo_5']['img_min']; ?>">
          <img src="<?= $gallery['photo_5']['img_full']; ?>" alt="">
        </a>
      </div>
    </div>
  </div>
</section>