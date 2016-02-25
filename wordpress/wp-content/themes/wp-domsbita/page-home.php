<?php /* Template Name: Home Page */ get_header(); ?>

    <div id="notify">Уважаемые покупатели. Наш сайт кратковременно, но часто отключается. Просто перезагружайте его, пока не заработает. Дольше чем 15 минут сайт не бывает в отключке. Спасибо за понимание. </div>

    <?php
      $kat = 0;
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




  <div style="margin:0 auto; text-align: center; max-width: 60%;">

    <div class="button-big selected">
      <span class="txt"><a href="http://dom-sbita.com/?city_id=5">Краснодар</a></span>
    </div>
    <div class="button-big ">
      <span class="txt"><a href="http://dom-sbita.com/?city_id=9">ОМСК</a></span>
    </div>
    <div class="button-big ">
      <span class="txt"><a href="http://dom-sbita.com/?city_id=11">Москва</a></span>
    </div>
    <div class="button-big ">
      <span class="txt"><a href="http://dom-sbita.com/?city_id=12">Ижевск</a></span>
    </div>
    <div class="button-big ">
      <span class="txt"><a href="http://dom-sbita.com/?city_id=14">Астрахань</a></span>
    </div>
    <div class="button-big ">
      <span class="txt"><a href="http://dom-sbita.com/?city_id=15">Иркутск</a></span>
    </div>
    <div class="button-big ">
      <span class="txt"><a href="http://dom-sbita.com/?city_id=16">Саратов</a></span>
    </div>
    <div class="button-big ">
      <span class="txt"><a href="http://dom-sbita.com/?city_id=17">Хабаровск</a></span>
    </div>
    <div class="button-big ">
      <span class="txt"><a href="http://dom-sbita.com/?city_id=18">Ростов-на-Дону</a></span>
    </div>
    <div class="button-big ">
      <span class="txt"><a href="http://dom-sbita.com/?city_id=20">Кемерово</a></span>
    </div>
    <div class="button-big ">
      <span class="txt"><a href="http://dom-sbita.com/?city_id=21">Анапа</a></span>
    </div>
    <div class="button-big ">
      <span class="txt"><a href="http://dom-sbita.com/?city_id=22">Ангарск</a></span>
    </div>
    <div class="button-big ">
      <span class="txt"><a href="http://dom-sbita.com/?city_id=23">ШЕЛЕХОВ</a></span>
    </div>
  </div>

  <div class="nav1">
    <div class="line1">
      <ul>
        <li><a class="w-nav-link item-district selected" href="http://dom-sbita.com/?city_id=5">Все</a></li>
        <li><a class="w-nav-link item-district " href="http://dom-sbita.com/?district_id=7">Центральный</a></li>
        <li><a class="w-nav-link item-district " href="http://dom-sbita.com/?district_id=8">Карсунский</a></li>
        <li><a class="w-nav-link item-district " href="http://dom-sbita.com/?district_id=9">Прикубанский</a></li>
        <li><a class="w-nav-link item-district " href="http://dom-sbita.com/?district_id=97">Фестивальный</a></li>
      </ul>
    </div>

  </div>
  <div class="clr"></div>

  <div class="article_block">
    <?php query_posts("cat=1"); ?>

      <?php get_template_part('loop'); ?>

    <?php wp_reset_query(); ?>
  </div><!-- article_block -->

<?php get_footer(); ?>
