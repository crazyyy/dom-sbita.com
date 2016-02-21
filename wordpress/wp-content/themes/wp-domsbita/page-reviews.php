<?php /* Template Name: Reviews Page */ get_header(); ?>

<div class="content">
  <h2 class="page-headding"><?php the_title(); ?></h2>
  <center>
    <div class="button-big">
      <span class="txt"><a class="button btn-in-stock" href="<?php echo home_url(); ?>/dobavit-otzyv.htm">Добавить отзыв</a></span>
    </div>
  </center>

  <?php if( have_rows('reviews') ): while ( have_rows('reviews') ) : the_row(); ?>
    <div class="review">
      <div class="rheader irate5">
        <div class="pull-right">
          Оценка <i><?php the_sub_field('rating'); ?></i>
        </div>
        <b><?php the_sub_field('name'); ?></b> оставил отзыв о магазине [<?php $dateformatstring = "d.m.Y"; $unixtimestamp = strtotime(get_sub_field('date')); echo date_i18n($dateformatstring, $unixtimestamp); ?>]
      </div>
      <div class="text">
        <em><?php the_sub_field('content'); ?></em>
      </div>
      <div class="rate"></div>
    </div>
  <?php endwhile; endif; ?>

</div><!-- content -->
<?php get_footer(); ?>
