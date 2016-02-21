<?php /* Template Name: Check Page */ get_header(); ?>

  <div class="content">
    <h2 class="page-headding">Проверка заказа</h2>
    <div class="buy-good instruction">
      <div id="paid">
        <div>
          <label>Номер заказа</label><input type="text" id="id"><br>
          <label>Комментарий к платежу</label><input type="text" id="comment"><br>
        </div>
        <br>
        <center>
          <img id="ajaxLoader" style="display: none;" src="<?php echo get_template_directory_uri(); ?>/img/ajax-loader.gif"></center>
        <div id="info">
          После оплаты нажмите кнопку, чтобы получить адрес
        </div>
        <div class="number">
          <input class="paidButton" name="yt0" type="button" value="Проверить оплату" id="yt0">
        </div>
        <div class="text-center text-muted">
          Проверить платеж по чеку можно <a target="_blank" href="https://qiwi.ru/support/check.action">тут</a>
          <br>
        </div>
      </div><!-- paid -->
    </div>
  </div>

  <script type="text/javascript">
  jQuery(function ($) {
    jQuery('body').on('click', '#yt0', function () {
      jQuery.ajax({
        'data': {
          'id': $("#id").val(),
          'comment': $("#comment").val()
        },
        'beforeSend': function () {
          $("#ajaxLoader").show();
        },
        // 'complete': function () {
        //   $("#ajaxLoader").hide();
        // },
        // 'url': '/check.htm',
        // 'cache': false,
        // 'success': function (html) {
        //   jQuery("#info").html(html)
        // }
      });
      return false;
    });
  });
  </script>


<?php get_footer(); ?>
