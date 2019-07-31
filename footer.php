<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package pelemeshka-ekb
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
      <div class="row justify-content-md-center text-center d-flex justify-content-center">

        <div class="col-md-3 col-sm-12 ">
            <h4>Кафе «ВремЯ есть»</h4>
            <img src="/wp-content/uploads/2018/11/foto-cafe-300x200.jpg" alt="">
        </div>

          <div class="col-md-3 col-sm-12 ">
              <h4>Как нас найти</h4>
              <img src="<?php echo carbon_get_theme_option('main_logo'); ?>" alt=""><p class="font-white">
                Мы находимся в Пионерском районе, по адресу: Екатеринбург, ул. Советская, 55
                Столик можно заказать по телефону: <br>
                <?php echo carbon_get_theme_option('phone'); ?>
            </p>
        </div>

        <div class="col-md-3 col-sm-12 links-footer">
            <h4>Наши услуги</h4>

                <a href="/biznes-lanch-v-nashem-kafe/">Бизнес ланч</a><br>
                <a href="/arenda-banketnogo-zala/">Аренда банкетного зала</a><br>
                <a href="/provedenie-korporativov/">Проведение корпоративов</a><br>
                <a href="/dostavka/">Доставка пельменей</a><br>
                <a href="/#zakazat">Забронировать столик</a><br>

        </div>
          <div class="col-md-3 col-sm-12 ">
              <h4>Следуйте за нами</h4>
              <i class="fab fa-instagram"></i> Instagramm
          </div>

		</div><!-- .end-row -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
