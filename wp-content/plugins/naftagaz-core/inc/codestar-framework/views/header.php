<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access directly.

  $demo    = get_option( 'csf_demo_mode', false );
  $text    = ( ! empty( $demo ) ) ? 'Deactivate' : 'Activate';
  $status  = ( ! empty( $demo ) ) ? 'deactivate' : 'activate';
  $class   = ( ! empty( $demo ) ) ? ' csf-warning-primary' : '';
  $section = ( ! empty( $_GET[ 'section' ] ) ) ? sanitize_text_field( wp_unslash( $_GET[ 'section' ] ) ) : 'about';
  $links   = array(
    'about'           => 'درباره افزونه',
    'quickstart'      => 'شروع سریع',
    'documentation'   => 'مستندات',
    'free-vs-premium' => 'رایگان و پولی',
    'support'         => 'پشتیبانی',
    'relnotes'        => 'نسخه جدید',
  );

?>
<div class="csf-welcome csf-welcome-wrap">

  <h1>به افزونه Codestar Framework v<?php echo esc_attr( CSF::$version ); ?> خوش آمدید</h1>

  <p class="csf-about-text">یک پلاگین آسان و سبک و حرفه ای برای ایجاد پنل تنظیمات برای محصولات وردپرسی</p>

  <p class="csf-demo-button"><a href="<?php echo esc_url( add_query_arg( array( 'csf-demo' => $status ) ) ); ?>" class="button button-primary<?php echo esc_attr( $class ); ?>"><?php echo esc_attr( $text ); ?> Demo</a></p>

  <div class="csf-logo">
    <div class="csf--effects"><i></i><i></i><i></i><i></i></div>
    <div class="csf--wp-logos">
      <div class="csf--wp-logo"></div>
      <div class="csf--wp-plugin-logo"></div>
    </div>
    <div class="csf--text">Codestar Framework</div>
    <div class="csf--text csf--version">v<?php echo esc_attr( CSF::$version ); ?></div>
  </div>

  <h2 class="nav-tab-wrapper wp-clearfix">
    <?php

      foreach ( $links as $key => $link ) {

        if ( CSF::$premium && $key === 'free-vs-premium' ) { continue; }

        $activate = ( $section === $key ) ? ' nav-tab-active' : '';

        echo '<a href="'. esc_url( add_query_arg( array( 'page' => 'csf-welcome', 'section' => $key ), admin_url( 'tools.php' ) ) ) .'" class="nav-tab'. esc_attr( $activate ) .'">'. esc_attr( $link ) .'</a>';

      }

    ?>
  </h2>
