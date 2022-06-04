<section id="partners" class="b-partners">
  <div class="container">
    <div class="b-title"><?php the_field('partners_title'); ?></div>
    <div class="row">      
    <?php 
      if( have_rows('partners_list') ) {
        while ( have_rows('partners_list') ) : the_row(); ?>
          <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
            <div class="b-partners__item">
              <img src="<?php the_sub_field('partner_logo'); ?>" alt="">
            </div>
          </div>
        <?php 
        endwhile;
      } 
    ?>
    </div>
  </div>
</section>