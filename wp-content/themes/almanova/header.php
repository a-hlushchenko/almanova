<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

  $languages = pll_the_languages(['raw' => 1, 'echo' => 0]);
  $en_url = esc_url($languages['en']['url']);
  $ru_url = esc_url($languages['ru']['url']);
  $current_language = pll_current_language();
?>
<!doctype html>
<html <?php language_attributes(); ?> >
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<?php wp_head(); ?>

	<title>Almanova</title>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta
    name="viewport"
    content="viewport-fit=cover, width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"
  />

  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"
  />

  <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.6/jquery.inputmask.min.js"></script>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@300;400;500;600&family=Roboto+Slab&display=swap" rel="stylesheet">

  <link
    href="<?php echo get_template_directory_uri(); ?>/css/normalize.css"
    rel="stylesheet"
  />
  <link href="/wp-content/themes/almanova/css/normalize.css" rel="stylesheet" />
  <link
    href="<?php echo get_template_directory_uri(); ?>/css/index.css"
    rel="stylesheet"
  />
  <link
    href="<?php echo get_template_directory_uri(); ?>/css/wow.css"
    rel="stylesheet"
  />

  <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<?if ($current_language === 'en') {?>
  <div class="header-wrapper">
<header class="header container">
  <a href="/" class="header-logo">
    <img src="/wp-content/themes/almanova/svg/header-logo.svg" alt="ELINA ALMANOVA">
  </a>

  <div class="header-content">
    <nav class="header-nav">
      <a href="/about" class="header-nav-item">ABOUT US</a>
      <a href="/#services" class="header-nav-item">Services</a>
      <a href="/reviews" class="header-nav-item">Reviews</a>
      <a href="/team" class="header-nav-item">Team</a>
      <a href="/news" class="header-nav-item">News</a>
      <a href="/contacts" class="header-nav-item">Contacts</a>
    </nav>

    <div id="lang-list" class="header-lang-list">
      <a href="<?php echo $en_url; ?>" class="header-lang <?php echo ($current_language === 'en') ? 'active' : ''; ?>">Eng</a>
      <span class="header-lang-stick"></span>
      <a href="<?php echo $ru_url; ?>" class="header-lang <?php echo ($current_language === 'ru') ? 'active' : ''; ?>">Ru</a>
    </div>

    <button id="open-menu" class="menu-button"></button>
  </div>
</header>
</div>
<div id="menu" class="menu">
  <nav class="menu-nav">
    <a href="/about" class="menu-nav-item">ABOUT US</a>
    <a href="/#services" class="menu-nav-item">Services</a>
    <a href="/reviews" class="menu-nav-item">Reviews</a>
    <a href="/team" class="menu-nav-item">Team</a>
    <a href="/news" class="menu-nav-item">News</a>
    <a href="/contacts" class="menu-nav-item">Contacts</a>
  </nav>
  <div class="menu-bottom">
    <div class="footer-follow menu-follow">Follow us:
      <a target="_blank" href="https://www.instagram.com/almanovalaw/"><img src="/wp-content/themes/almanova/svg/instagram.svg"></a>
      <a target="_blank" href="https://www.facebook.com/almanovalaw/"><img src="/wp-content/themes/almanova/svg/facebook.svg"></a>
    </div>
    <!-- <p class="text">Morbi ut nibh ac mi ullamcorper pellentesque at in felis. Proin a feug turpis, ac varius turpis. Aliquam lectus tortor, malesuada at sodales ac, condim</p> -->
  </div>
</div>

<?} elseif ($current_language === 'ru') {?>
<div class="header-wrapper">
  <header class="header container">
  <a href="/ru/home-ru" class="header-logo">
    <img src="/wp-content/themes/almanova/svg/header-logo.svg" alt="ELINA ALMANOVA">
  </a>

  <div class="header-content">
    <nav class="header-nav">
      <a href="/ru/about-ru" class="header-nav-item">О НАС</a>
      <a href="/ru/home-ru/#services" class="header-nav-item">Услуги</a>
      <a href="/ru/reviews-ru" class="header-nav-item">Отзывы</a>
      <a href="/ru/team-ru" class="header-nav-item">Команда</a>
      <a href="/ru/news-ru" class="header-nav-item">Блог</a>
      <a href="/ru/contacts-ru" class="header-nav-item">Контакты</a>
    </nav>

    <div id="lang-list" class="header-lang-list">
      <a href="<?php echo $en_url; ?>" class="header-lang <?php echo ($current_language === 'en') ? 'active' : ''; ?>">Eng</a>
      <span class="header-lang-stick"></span>
      <a href="<?php echo $ru_url; ?>" class="header-lang <?php echo ($current_language === 'ru') ? 'active' : ''; ?>">Ru</a>
    </div>

    <button id="open-menu" class="menu-button"></button>
  </div>
</header>
</div>

<div id="menu" class="menu">
  <nav class="menu-nav">
    <a href="/ru/about-ru" class="menu-nav-item">О НАС</a>
    <a href="/ru/home-ru/#services" class="menu-nav-item">Услуги</a>
    <a href="/ru/reviews-ru" class="menu-nav-item">Отзывы</a>
    <a href="/ru/team-ru" class="menu-nav-item">Команда</a>
    <a href="/ru/news-ru" class="menu-nav-item">Блог</a>
    <a href="/ru/contacts-ru" class="menu-nav-item">Контакты</a>
  </nav>
  <div class="menu-bottom">
    <div class="footer-follow menu-follow">Подписывайтесь на нас:
      <a target="_blank" href="https://www.instagram.com/almanovalaw/"><img src="/wp-content/themes/almanova/svg/instagram.svg"></a>
      <a target="_blank" href="https://www.facebook.com/almanovalaw/"><img src="/wp-content/themes/almanova/svg/facebook.svg"></a>
    </div>
    <!-- <p class="text">Morbi ut nibh ac mi ullamcorper pellentesque at in felis. Proin a feug turpis, ac varius turpis. Aliquam lectus tortor, malesuada at sodales ac, condim</p> -->
  </div>
</div>
<?}?>

<div id="fixed">
  <button class="consultation-button popup-form-open"></button>
  <button class="scroll-top"></button>
</div>

