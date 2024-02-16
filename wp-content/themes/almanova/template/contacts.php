<?php
/*Template Name: Contacts*/
get_header(); 

$languages = pll_the_languages(['raw' => 1, 'echo' => 0]);
$en_url = esc_url($languages['en']['url']);
$ru_url = esc_url($languages['ru']['url']);
$current_language = pll_current_language();

?>

<link href="<?php echo get_template_directory_uri(); ?>/css/contacts.css" rel="stylesheet"/>

<section class="contacts-wrapper">
    <h1 class="title-big"><?= get_field("main_title")?></h1>
    <div class="contacts container">
        <div class="contacts-left">
            <h1 class="contacts-title"><?=get_field("contacts_title")?></h1>
            <h2 class="contacts-subtitle"><?=get_field("contacts_subtitle")?></h2>
            <p class="contacts-text"><?=get_field("contacts_text")?></p>
            <div class="contacts-list">
                <a target="_blank" href="tel:<?=get_field("contacts_phone1")?>" class="footer-contact-item contacts-item"><img src="/wp-content/themes/almanova/svg/phone.svg"><?=get_field("contacts_phone1")?></a>
                <a target="_blank" href="tel:<?=get_field("contacts_phone2")?>" class="footer-contact-item contacts-item"><img src="/wp-content/themes/almanova/svg/phone2.svg"><?=get_field("contacts_phone2")?></a>
                <a target="_blank" href="mailto:ElinaAlmanova@gmail.com" class="footer-contact-item  contacts-item"><img src="/wp-content/themes/almanova/svg/email.svg"><?=get_field("contacts_email")?></a>
                <span class="footer-contact-item contacts-item"><img src="/wp-content/themes/almanova/svg/location.svg"><?=get_field("contacts_address")?></span>     
            </div>
            <div class="footer-follow contacts-follow"><?=get_field("contacts_follow")?>
                <a target="_blank" href="https://www.instagram.com/almanovalaw/"><img src="/wp-content/themes/almanova/svg/instagram.svg"></a>
                <a target="_blank" href="https://www.facebook.com/almanovalaw/"><img src="/wp-content/themes/almanova/svg/facebook.svg"></a>
            </div>
        </div>

        <?if ($current_language === 'en') {?>
            <?= do_shortcode('[contact-form-7 id="45965bf" title="Contacts"]')?>
            <?} elseif ($current_language === 'ru') {?>
                <?= do_shortcode('[contact-form-7 id="035ae00" title="Contacts ru"]')?>
            <?}?>
        
        
    </div>
</section>

<script src="<?php echo get_template_directory_uri(); ?>/js/contacts.js"></script>

<?php
get_footer();
