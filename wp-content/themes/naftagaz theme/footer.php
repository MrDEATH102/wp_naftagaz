    <footer>
      <div class="footer__detail footer__detail-one">
        <div class="footer__detail-contact">
          <div class="footer__detail-items">
            <div class="footer__detail-icons">
              <span class="footer__detail-icon">
                <svg class="icons">
                  <use href="#paper-airplane"></use>
                </svg>
              </span>
              <span class="footer__detail-icon">
                <svg class="icons">
                  <use href="#paper-airplane"></use>
                </svg>
              </span>
              <span class="footer__detail-icon">
                <svg class="icons">
                  <use href="#paper-airplane"></use>
                </svg>
              </span>
            </div>
            <span class="footer__detail-button footer__detail-buttonSm">
              <svg class="icons">
                <use href="#chevron-down"></use>
              </svg>
            </span>
          </div>
          <p>+7 495 589 12 00</p>
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