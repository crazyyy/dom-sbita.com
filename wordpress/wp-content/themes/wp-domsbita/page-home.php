<?php /* Template Name: Home Page */ get_header(); ?>

    <div id="notify">Уважаемые покупатели. Наш сайт кратковременно, но часто отключается. Просто перезагружайте его, пока не заработает. Дольше чем 15 минут сайт не бывает в отключке. Спасибо за понимание. </div>

    <?php
      $kat = 75;
      $na_akran = '<div style="margin:0 auto; text-align: center; max-width: 60%;">' . "\n";
      $dochernii_kategorii = get_categories('child_of=' . $kat . '&hide_empty=0');
      foreach ($dochernii_kategorii as $dochernaya_kategoria) :
          if ($kat == $dochernaya_kategoria->category_parent) :
              $na_akran .= "\t" . '<div class="button-big"><span class="txt"><a href="' .
                  get_category_link($dochernaya_kategoria->cat_ID) . '" title="' .
                  $dochernaya_kategoria->category_description . '">';
              $na_akran .= $dochernaya_kategoria->cat_name . '</a></span>';
              $na_akran .= '</div>' . "\n";
          endif;
      endforeach;
      $na_akran .= '</div>' . "\n";
      print $na_akran;
    ?>



<div class="nav1">
<div class="line1">
<ul>
                <li class="cat-item" style="display:none">

                </style>>

                    <input class="filter-region-list-link" type="button" onclick="history.back()" value="Назад">

                </li>
<li>

<?php wp_list_categories('hide_empty=0&title_li=0&child_of=47'); ?>


</li>
</ul>
</div>
</div>


  <div class="article_block">



<?php
// Запрос. $args - параметры запроса
query_posts('cat=47');

// Цикл WordPress
if( have_posts() ){
    while( have_posts() ){
       the_post(); ?>

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

<?php    }
    wp_reset_query();
} else {
   // текст/код, если постов нет
}
?>

  </div><!-- article_block -->
<?php get_footer(); ?>

