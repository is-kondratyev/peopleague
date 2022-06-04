<?php get_header(); ?>

<section>
  <div class="container">
    <div class="main-heading">
      <h1 class="b-title"><?php the_title(); ?></h1>
    </div>
    <?php if (have_posts()): while (have_posts()): the_post(); ?>
      <?php the_content(); ?>
    <?php endwhile; endif; ?>
  </div>
</section>

<?php get_footer(); ?>