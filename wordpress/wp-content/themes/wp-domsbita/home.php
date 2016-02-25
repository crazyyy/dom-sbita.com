<?php get_header(); ?>


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
                <li class="cat-item">

                    <input class="filter-region-list-link" type="button" onclick="history.back()" value="Назад">

                </li>
<li>
<?php
if (is_category()) {
$this_category = get_category($cat);
if (get_category_children($this_category->cat_ID) != "") {
wp_list_categories('hide_empty=0&title_li=&child_of=' . $this_category->cat_ID);
}
else {
$parent = $this_category->category_parent;
wp_list_categories('hide_empty=0&title_li=&child_of=' . $parent);
}
}
?>
</li>
</ul>
</div>
</div>


  <div class="article_block">

      <?php get_template_part('loop'); ?>

  </div><!-- article_block -->
<?php get_footer(); ?>
