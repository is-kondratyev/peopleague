<section id="sect-video" class="b-video">
  <div class="container">
    <div class="b-title"><?php the_field('video_message_title'); ?></div>
    <div class="b-video__content">
      <video preload="none" class="video" width="100%" preload="none" poster="<?php the_field('video_message_cover'); ?>" height="auto">
        <source src="<?php the_field('video_message_file'); ?>" type="video/mp4">
      </video>
      <button class="b-video__play playpause"><i class="icon-i-play"></i></button>
    </div>
  </div>
</section>