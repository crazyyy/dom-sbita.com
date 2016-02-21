<?php if (have_posts()): while (have_posts()) : the_post(); ?>

  <div class="elem">
    <div class="article">
      <div class="title">
        <span><?php the_title(); ?></span>
      </div>

      <div class="price">
        <span class="c"><?php the_field('price'); ?></span>
        <span class="t">р.</span>
      </div>
      <div class="ostatok">
        <span class="t1">В наличии: <span class="c1"><?php the_field('quantity'); ?> </span>шт.</span>
      </div>

      <div class="button_sale"><a class="button btn-in-stock" href="<?php the_permalink(); ?>">Купить</a></div>
    </div>
  </div>

<?php endwhile; endif; ?>
