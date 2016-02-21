<?php get_header(); ?>
  <?php if (have_posts()): while (have_posts()) : the_post(); ?>

    <div class="content">
      <h2 class="page-headding"><?php the_title(); ?></h2>
      <?php the_content(); ?>
    </div>

  <?php endwhile; endif; ?>

<?php get_footer(); ?>
