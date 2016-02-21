<?php get_header(); ?>
  <?php if (have_posts()): while (have_posts()) : the_post(); ?>

    <div class="content">
      <div class="buy-good instruction">
        <div class="desc">Вы приобретаете</div>
        <div class="name"><?php the_title(); ?></div>

        <div class="price">
          Стоимость <span><?php the_field('price'); ?> руб.</span>
        </div>
        <div>
          <br>
          <div class="payment qiwi">
            Для приобретения выбранного товара, оплатите <b style="color:red"><?php the_field('price'); ?> рублей</b> на номер
            <div class="number">
              <?php
                $terms = get_the_terms( $post->ID, 'topics' );
                foreach($terms as $term) {
                  echo $term->name;
                }
              ?>
            </div><!-- number -->
            комментарий к платежу
            <div class="number">
              <?php
                $posttags = get_the_tags();
                if ($posttags) {
                  foreach($posttags as $tag) {
                    echo $tag->name;
                  }
                }
              ?>
            </div>

            <p class="text-warning">
              Внимание! Обязательно укажите этот комментарий при оплате, иначе оплата не будет засчитана в автоматическом режиме.
            </p>

            <div class="number number-content">
              <?php the_content(); ?>
            </div><!-- number -->

            Это номер вашего заказа, запомните его.
            По номеру заказа и комментарию вы сможете узнать статус заказа (получить адрес) в любой момент и с любого устройства
            на странице <a href="<?php echo home_url(); ?>/check.htm">проверка заказа</a>
          </div>
        </div>
        <div id="paid">
          <center><img id="ajaxLoader" style="display: none;" src="<?php echo get_template_directory_uri(); ?>/img/ajax-loader.gif"></center>
            <div id="info">
                После оплаты нажмите кнопку, чтобы получить адрес
            </div>

            <div class="number">
              <input class="paidButton" name="yt0" type="button" value="Проверить оплату" id="yt0">
            </div>

            <div class="text-center text-muted">
                Проверить платеж по чеку можно <a target="_blank" href="https://qiwi.ru/support/check.action">тут</a>
                <br>
                <?php edit_post_link(); ?>
            </div>
        </div>

      </div>
    </div>

<?php endwhile; endif; ?>

<?php get_footer(); ?>
