<?php
/**
 * Header template
 *
 * @package Leecharr
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/favicon.svg" type="image/svg+xml">
  <link rel="apple-touch-icon" href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/favicon.svg">
  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-86X994W6SL"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'G-86X994W6SL', { send_page_view: true });
  </script>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?> data-spy="scroll" data-target=".header-navbar" data-offset="70">
<?php wp_body_open(); ?>

<!-- ═══════════════════════════════ NAVBAR ═══════════════════════════════ -->
<nav class="navbar navbar-inverse navbar-fixed-top header-navbar" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <button
        type="button"
        class="navbar-toggle"
        data-toggle="collapse"
        data-target=".navbar-ex1-collapse"
      >
        <span class="sr-only"><?php esc_html_e('Toggle navigation', 'leecharr'); ?></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a href="<?php echo esc_url(home_url('/#hero')); ?>" class="navbar-brand">
        <img class="brand-icon" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/favicon.svg" alt="" />
        <img class="brand-text" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/leecharr-text.svg" alt="<?php bloginfo('name'); ?>" />
      </a>
    </div>
    <div class="collapse navbar-collapse navbar-ex1-collapse">
      <ul class="nav navbar-nav navbar-right">
        <li>
          <a href="<?php echo esc_url(home_url('/#hero')); ?>"><i class="fas fa-home"></i> Home</a>
        </li>
        <li>
          <a href="<?php echo esc_url(home_url('/#screenshots')); ?>"><i class="fas fa-images"></i> Screenshots</a>
        </li>
        <li>
          <a href="<?php echo esc_url(home_url('/#features')); ?>"><i class="fas fa-star"></i> Features</a>
        </li>
        <li>
          <a href="<?php echo esc_url(home_url('/#integration')); ?>"><i class="fas fa-cubes"></i> Integration</a>
        </li>
        <li>
          <a href="<?php echo esc_url(home_url('/#compare')); ?>"><i class="fas fa-balance-scale"></i> Comparison</a>
        </li>
        <li>
          <a href="<?php echo esc_url(home_url('/#download')); ?>"><i class="fas fa-download"></i> Download</a>
        </li>
        <li>
          <a href="https://wiki.servarr.com/" target="_blank" rel="noopener"
            ><i class="fas fa-question-circle"></i> Support</a
          >
        </li>
        <li>
          <a href="https://github.com/dmzoneill/Leecharr" target="_blank" rel="noopener"
            ><i class="fab fa-github-alt"></i> GitHub</a
          >
        </li>
      </ul>
    </div>
  </div>
</nav>
