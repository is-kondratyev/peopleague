<?php global $theme_path; ?>

<section id="desc" class="b-desc">
  <div class="container">
    <div class="b-title">ЧТО ГОВОРЯТ УЧАСТНИКИ ЛИГИ УСПЕШНЫХ ЛЮДЕЙ</div>
    <div class="b-slider__container">
      <div class="b-slider swiper mySwiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="b-slider__overlay">
              <button class="b-video__play playpause2">
                <i class="icon-i-play"></i>
              </button>
            </div>
            <video preload="none" class="video2" width="100%" poster="<?= $theme_path ?>/img/poster.png" height="auto">
              <source src="<?= $theme_path ?>/img/stiln.mp4" type="video/mp4">
            </video>
          </div>
          <div class="swiper-slide">
            <div class="b-slider__overlay">
              <button class="b-video__play playpause2">
                <i class="icon-i-play"></i>
              </button>
            </div>
            <video preload="none" class="video2" width="100%" poster="<?= $theme_path ?>/img/poster.png" height="auto">
              <source src="<?= $theme_path ?>/img/stiln.mp4" type="video/mp4">
            </video>
          </div>
          <div class="swiper-slide">
            <div class="b-slider__overlay">
              <button class="b-video__play playpause2">
                <i class="icon-i-play"></i>
              </button>
            </div>
            <video preload="none" class="video2" width="100%" poster="<?= $theme_path ?>/img/poster.png" height="auto">
              <source src="<?= $theme_path ?>/img/stiln.mp4" type="video/mp4">
            </video>
          </div>
        </div>
        <div class="swiper-pagination"></div>
      </div>
      <div class="b-slider__btn b-slider__btn-next icon-i-right-arrow"></div>
      <div class="b-slider__btn b-slider__btn-prev icon-i-left-arrow"></div>
    </div>
  </div>
</section>	