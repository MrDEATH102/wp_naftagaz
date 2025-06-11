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
      <!-- start footer bottom links  -->
<?php
// لینک اول
$link1_title = naftagaz_get_option('footer_second_link_1_title');
$link1_url = naftagaz_get_option('footer_second_link_1_url');

// لینک دوم
$link2_title = naftagaz_get_option('footer_second_link_2_title');
$link2_url = naftagaz_get_option('footer_second_link_2_url');

// کپی‌رایت
$footer_copyright = naftagaz_get_option('footer_copyright');

// مقادیر پیش‌فرض:
if (empty($link1_title)) { $link1_title = 'سایت توسط VIDE INFRA'; }
if (empty($link1_url)) { $link1_url = '#'; }
if (empty($link2_title)) { $link2_title = 'سیاست حفظ حریم خصوصی'; }
if (empty($link2_url)) { $link2_url = '#'; }
if (empty($footer_copyright)) { $footer_copyright = '© ۲۰۲۵ شرکت سهامی نفتاگاز'; }
?>

<div class="footer__detail footer__detail-second">
    <a href="<?php echo esc_url($link1_url); ?>" class="footer__detail-title footer__detail-tag">
        <?php echo esc_html($link1_title); ?>
    </a>
    <a href="<?php echo esc_url($link2_url); ?>" class="footer__detail-title footer__detail-tag">
        <?php echo esc_html($link2_title); ?>
    </a>
    <p class="footer__detail-title footer__detail-titleLast">
        <?php echo esc_html($footer_copyright); ?>
    </p>
</div>


      <!-- end footer bottom links  -->
    </footer>
    <?php wp_footer(); ?>
    </body>

    </html>