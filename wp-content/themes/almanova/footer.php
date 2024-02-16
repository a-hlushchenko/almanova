<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

$services = get_posts([
    'post_type' => 'service',
    'post_status' => 'publish',
    'posts_per_page' => -1,
]);

 $languages = pll_the_languages(['raw' => 1, 'echo' => 0]);
  $en_url = esc_url($languages['en']['url']);
  $ru_url = esc_url($languages['ru']['url']);
  $current_language = pll_current_language();
?>

<?php get_template_part( 'template-parts/footer/footer-widgets' ); ?>
<?php wp_footer(); ?>

<?if ($current_language === 'en') {?>
<?= do_shortcode('[contact-form-7 id="8da0db1" title="Contacts us"]')?>
<?= do_shortcode('[contact-form-7 id="32ecbe2" title="Consultation"]')?>

<div id="popup-thank" class="popup-form-wrapper">
    <div class="popup-thank">
        <img src="/wp-content/themes/almanova/img/thank.jpg" alt="thank you">
        <h3 class="popup-thank-title">Thank you</h3>
        <strong class="popup-thank-subtitle">Your application has been accepted</strong>
        <p class="text">Our specialists will contact you shortly.</p>
        <span class="popup-form-close"></span>
    </div>
</div>

<footer class="footer">
    <div class="footer-top-wrapper">
        <div class="footer-top container">
            <div class="footer-contacts-mob">
                <strong class="footer-title">Contact us</strong>
                <div class="footer-contacts-mob-list">
                    <a target="_blank" href="tel:+35726222145" class="footer-contact-link"><img src="/wp-content/themes/almanova/svg/phone.svg">+357 26 222145</a>
                    <a target="_blank" href="mailto:information@almanovalaw.cy" class="footer-contact-link"><img src="/wp-content/themes/almanova/svg/email.svg">information@almanovalaw.cy</a>
                    <a target="_blank" href="https://maps.app.goo.gl/C2aPmZCnakkx6BfT8?g_st=it" class="footer-contact-link"><img src="/wp-content/themes/almanova/svg/location.svg">Office 306, 3rd Floor, ABC Business Centre, 20, Charalampou Mouskou Street 8010, Cyprus</a>
                </div>
                <div class="footer-follow">Follow us:
                    <a target="_blank" href="https://www.instagram.com/almanovalaw/"><img src="/wp-content/themes/almanova/svg/instagram.svg"></a>
                    <a target="_blank" href="https://www.facebook.com/almanovalaw/"><img src="/wp-content/themes/almanova/svg/facebook.svg"></a>
                </div>
            </div>
            
            <nav class="footer-company-wrapper">
                <strong class="footer-title">Company</strong>
                <div class="footer-company">
                    <a href="/about" class="footer-nav-item-wrapper"><div class="footer-nav-item">About us</div></a>
                    <a href="/#services" class="footer-nav-item-wrapper"><div class="footer-nav-item">Services</div></a>
                    <a href="/reviews" class="footer-nav-item-wrapper"><div class="footer-nav-item">Reviews</div></a>
                    <a href="/team" class="footer-nav-item-wrapper"><div class="footer-nav-item">Team</div></a>
                    <a href="/news" class="footer-nav-item-wrapper"><div class="footer-nav-item">News</div></a>
                    <a href="/contacts" class="footer-nav-item-wrapper"><div class="footer-nav-item">Contacts</div></a>
                </div>
            </nav>
            <nav class="footer-services-wrapper">
                <strong class="footer-title">Services</strong>
                <div class="footer-services">
                    <?php foreach ($services as $service) { ?> 
                        <a href="<?=get_permalink($service->ID);?>" class="footer-services-item-wrapper"><div class="footer-nav-item"><?=$service->title;?></div></a>
                    <? } ?>
                </div>
            </nav>

            <div class="footer-contact-list">
            <div class="footer-left">
                <img class="footer-left-logo" src="/wp-content/themes/almanova/svg/footer-logo.svg">
                <div class="footer-left-content">
                    <div class="footer-follow">Follow us:
                    <a target="_blank" href="https://www.instagram.com/almanovalaw/"><img src="/wp-content/themes/almanova/svg/instagram.svg"></a>
                    <a target="_blank" href="https://www.facebook.com/almanovalaw/"><img src="/wp-content/themes/almanova/svg/facebook.svg"></a>
                    </div>
                </div>
            </div>
                <div class="footer-contact-item"> 
                    <div class="footer-title"><img src="/wp-content/themes/almanova/svg/location.svg">Location</div>
                    <a target="_blank" href="https://maps.app.goo.gl/C2aPmZCnakkx6BfT8?g_st=it" class="footer-contact-link">Office 306, 3rd Floor, ABC Business Centre, 20, Charalampou Mouskou Street 8010, Cyprus</a>
                </div>
                <div class="footer-contact-item">
                    <div class="footer-title"><img src="/wp-content/themes/almanova/svg/email.svg">EMAIL</div>
                    <a target="_blank" href="mailto:information@almanovalaw.cy" class="footer-contact-link">information@almanovalaw.cy</a>
                </div>
                <div class="footer-contact-item">
                    <div class="footer-title"><img src="/wp-content/themes/almanova/svg/phone.svg">PHONE</div>
                    <a target="_blank" href="tel:+35726222145" class="footer-contact-link">+357 26 222145</a>
                    <a target="_blank" href="tel:+35726950122" class="footer-contact-link">+357 26 950 122</a>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom-wrapper">
        <div class="footer-bottom container">
            <a href="/privacy-policy" class="footer-copyright">© 2024 ElinaAlmanova. Privacy policy</a>
            <a target="_blank" href="https://web-stork.nl/" class="footer-bottom-right"><span>Developed by webstork</span><img src="/wp-content/themes/almanova/img/webstork-logo.gif" /></a>
        </div>
    </div>
</footer>



<?} elseif ($current_language === 'ru') {?>
<?= do_shortcode('[contact-form-7 id="b9bc42a" title="Contacts us ru"]')?>
<?= do_shortcode('[contact-form-7 id="88c0572" title="Consultation ru"]')?>

<div id="popup-thank" class="popup-form-wrapper">
    <div class="popup-thank">
        <img src="/wp-content/themes/almanova/img/thank.jpg" alt="thank you">
        <h3 class="popup-thank-title">Спасибо</h3>
        <strong class="popup-thank-subtitle">Ваша заявка принята</strong>
        <p class="text">Наши специалисты свяжутся с вами в ближайшее время.</p>
        <span class="popup-form-close"></span>
    </div>
</div>

<footer class="footer">
    <div class="footer-top-wrapper">
        <div class="footer-top container">
            <div class="footer-contacts-mob">
                <strong class="footer-title">Связаться с нами</strong>
                <div class="footer-contacts-mob-list">
                    <a target="_blank" href="tel:+35726222145" class="footer-contact-link"><img src="/wp-content/themes/almanova/svg/phone.svg">+357 26 222145</a>
                    <a target="_blank" href="mailto:information@almanovalaw.cy" class="footer-contact-link"><img src="/wp-content/themes/almanova/svg/email.svg">information@almanovalaw.cy</a>
                    <a target="_blank" href="https://maps.app.goo.gl/C2aPmZCnakkx6BfT8?g_st=it" class="footer-contact-link"><img src="/wp-content/themes/almanova/svg/location.svg">Офис 306, 3-й этаж, Бизнес-центр ABC, улица Харалампу Муску, 20, 8010, Кипр</a>
                </div>
                <div class="footer-follow">Подписывайтесь на нас:
                    <a target="_blank" href="https://www.instagram.com/almanovalaw/"><img src="/wp-content/themes/almanova/svg/instagram.svg"></a>
                    <a target="_blank" href="https://www.facebook.com/almanovalaw/"><img src="/wp-content/themes/almanova/svg/facebook.svg"></a>
                </div>
            </div>
            
            <nav class="footer-company-wrapper">
                <strong class="footer-title">Компания</strong>
                <div class="footer-company">
                    <a href="/ru/about-ru" class="footer-nav-item-wrapper"><div class="footer-nav-item">О нас</div></a>
                    <a href="/ru/home-ru#services" class="footer-nav-item-wrapper"><div class="footer-nav-item">Услуги</div></a>
                    <a href="/ru/reviews-ru" class="footer-nav-item-wrapper"><div class="footer-nav-item">Отзывы</div></a>
                    <a href="/ru/team-ru" class="footer-nav-item-wrapper"><div class="footer-nav-item">Команда</div></a>
                    <a href="/ru/news-ru" class="footer-nav-item-wrapper"><div class="footer-nav-item">Блог</div></a>
                    <a href="/ru/contacts-ru" class="footer-nav-item-wrapper"><div class="footer-nav-item">Контакты</div></a>
                </div>
            </nav>
            <nav class="footer-services-wrapper">
                <strong class="footer-title">Услуги</strong>
                <div class="footer-services">
                    <?php foreach ($services as $service) { ?> 
                        <a href="<?=get_permalink($service->ID);?>" class="footer-services-item-wrapper"><div class="footer-nav-item"><?=$service->title;?></div></a>
                    <? } ?>
                </div>
            </nav>

            <div class="footer-contact-list">
            <div class="footer-left">
                <img class="footer-left-logo" src="/wp-content/themes/almanova/svg/footer-logo.svg">
                <div class="footer-left-content">
                    <div class="footer-follow">Подписывайтесь на нас:
                    <a target="_blank" href="https://www.instagram.com/almanovalaw/"><img src="/wp-content/themes/almanova/svg/instagram.svg"></a>
                    <a target="_blank" href="https://www.facebook.com/almanovalaw/"><img src="/wp-content/themes/almanova/svg/facebook.svg"></a>
                    </div>
                </div>
            </div>
                <div class="footer-contact-item"> 
                    <div class="footer-title"><img src="/wp-content/themes/almanova/svg/location.svg">Расположение</div>
                    <a target="_blank" href="https://maps.app.goo.gl/C2aPmZCnakkx6BfT8?g_st=it" class="footer-contact-link">Офис 306, 3-й этаж, Бизнес-центр ABC, улица Харалампу Муску, 20, 8010, Кипр</a>
                </div>
                <div class="footer-contact-item">
                    <div class="footer-title"><img src="/wp-content/themes/almanova/svg/email.svg">ПОЧТА</div>
                    <a target="_blank" href="mailto:information@almanovalaw.cy" class="footer-contact-link">information@almanovalaw.cy</a>
                </div>
                <div class="footer-contact-item">
                    <div class="footer-title"><img src="/wp-content/themes/almanova/svg/phone.svg">ТЕЛЕФОН</div>
                    <a target="_blank" href="tel:+35726222145" class="footer-contact-link">+357 26 222145</a>
                    <a target="_blank" href="tel:+35726950122" class="footer-contact-link">+357 26 950 122</a>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom-wrapper">
        <div class="footer-bottom container">
            <a href="/ru/privacy-policy-ru" class="footer-copyright">© 2024 Элина Алманова. Политика конфиденциальности</a>
            <a href="https://web-stork.nl/" target="_blank" class="footer-bottom-right"><span>Разработано компанией WebStork</span><img src="/wp-content/themes/almanova/img/webstork-logo.gif" /></a>
        </div>
    </div>
</footer>
<?}?>

</body>

<script src="<?php echo get_template_directory_uri(); ?>/js/wow.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/index.js"></script>
</html>
