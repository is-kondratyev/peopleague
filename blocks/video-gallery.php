<?php 
  global $theme_path;
?>

<section id="gallery-video" class="b-gallery-video">
  <div class="container">
    <div class="b-title"><?php the_field('videogallery_title'); ?></div>
    <div class="b-slider__container">
      <div class="b-slider swiper mySwiper">
        <div class="swiper-wrapper">
          <?php 
            if( have_rows('videogallery') ) {
              while ( have_rows('videogallery') ) : the_row(); ?>
            <div class="swiper-slide">
              <div class="b-slider__overlay">
                <button class="b-video__play playpause2"><i class="icon-i-play"></i></button>
              </div>
              <video preload="none" class="video2" width="100%" poster="<?php echo the_sub_field('cover'); ?>" height="auto">
                <source src="<?php echo the_sub_field('video_link'); ?>" type="video/mp4">
              </video>
            </div>
            <?php 
              endwhile;
            }          
          ?>
        </div>
        <div class="swiper-pagination"></div>
      </div>
      <div class="b-slider__btn b-slider__btn-next icon-i-right-arrow"></div>
      <div class="b-slider__btn b-slider__btn-prev icon-i-left-arrow"></div>
    </div>
  </div>
</section>	