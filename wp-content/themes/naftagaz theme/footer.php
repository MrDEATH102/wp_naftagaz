    <footer>
      <div class="footer__detail footer__detail-one">
        <div class="footer__detail-contact">
          <!-- start social icons dynamyc  -->
          <?php
          $footer_details = naftagaz_get_option('footer_detail_items');

          // آرایه پیش‌فرض:
          $default_footer_details = array(
            array('detail_url' => '#', 'detail_icon' => 'fas fa-paper-plane'),
            array('detail_url' => '#', 'detail_icon' => 'fas fa-paper-plane'),
            array('detail_url' => '#', 'detail_icon' => 'fas fa-paper-plane'),
          );

          if (empty($footer_details)) {
            $footer_details = $default_footer_details;
          }
          ?>

          <div class="footer__detail-items">
            <div class="footer__detail-icons">
              <?php foreach ($footer_details as $item) : ?>
                <a href="<?php echo esc_url($item['detail_url']); ?>" class="footer__detail-icon">
                  <i class="<?php echo esc_attr($item['detail_icon']); ?>"></i>
                </a>
              <?php endforeach; ?>
            </div>
            <span class="footer__detail-button footer__detail-buttonSm">
              <i class="fas fa-chevron-down"></i>
            </span>
          </div>
          <!-- end social icons dynamic  -->
          <!-- start footer phone number dynamic  -->
          <?php
          $phone_number = naftagaz_get_option('footer_phone_number');
          if (empty($phone_number)) {
            $phone_number = '+7 495 589 12 00';
          }
          ?>
          <p><?php echo esc_html($phone_number); ?></p>

          <!-- end footer phone number dynamic -->
        </div>
        <!-- start dynamic footer links  -->
        <ul class="footer__detail-list">
          <?php
          $footer_links = naftagaz_get_option('fr_links');

          $default_links = array(
            array('fr_links_titles' => 'درباره شرکت', 'fr_links_url' => '#'),
            array('fr_links_titles' => 'توسعه پایدار', 'fr_links_url' => '#'),
            array('fr_links_titles' => 'حفاری', 'fr_links_url' => '#'),
            array('fr_links_titles' => 'خدمات', 'fr_links_url' => '#'),
            array('fr_links_titles' => 'مرکز مطبوعات', 'fr_links_url' => '#'),
            array('fr_links_titles' => 'فرصت‌های شغلی', 'fr_links_url' => '#'),
            array('fr_links_titles' => 'تدارکات', 'fr_links_url' => '#'),
            array('fr_links_titles' => 'مخاطبین', 'fr_links_url' => '#')
          );

          if (empty($footer_links)) {
            $footer_links = $default_links;
          }

          foreach ($footer_links as $link) {
            echo '<a href="' . esc_url($link['fr_links_url']) . '">';
            echo '<li>' . esc_html($link['fr_links_titles']) . '</li>';
            echo '</a>';
          }
          ?>
        </ul>
        <!-- // end dynamic footer links -->
        <p class="footer__detail-titleSm">© ۲۰۲۵ شرکت سهامی نفتاگاز</p>
        <span class="footer__detail-button">
          <svg class="icons">
            <use href="#chevron-down"></use>
          </svg>
        </span>
      </div>
      <div class="footer__detail footer__detail-second">
        <a href="#" class="footer__detail-title footer__detail-tag">
          سایت توسط VIDE INFRA
        </a>
        <a href="#" class="footer__detail-title footer__detail-tag">
          سیاست حفظ حریم خصوصی
        </a>
        <p class="footer__detail-title footer__detail-titleLast">
          © ۲۰۲۵ شرکت سهامی نفتاگاز
        </p>
      </div>
    </footer>
    <?php wp_footer(); ?>
    </body>

    </html>