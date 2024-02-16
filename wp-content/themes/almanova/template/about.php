<?php
/*Template Name: About us*/
get_header(); 

$services = get_posts([
    'post_type' => 'service',
    'post_status' => 'publish',
    'posts_per_page' => 7,
]);

$team = get_posts([
    'post_type' => 'member',
    'post_status' => 'publish',
    'posts_per_page' => 7,
]);

?>

<link href="<?php echo get_template_directory_uri(); ?>/css/about.css" rel="stylesheet"/>

<main class="">

    <section class="mains-wrapper">
        <div class="mains container">
            <h1 class="title-big"><?= get_field("main_title")?></h1>
            <p class="text"><?=get_field("main_text")?></p>
            <div class="mains-img">
                <img src="<?=get_field("main_image")?>" alt="image">
            </div>
        </div>
    </section>
    
<div class="team-services-bg">

    <section class="info-wrapper container">
        <div class="info">
            <p class="info-item"><?= get_field("info_text1")?></p>
            <p class="info-item"><?= get_field("info_text2")?></p>
            <p class="info-item"><?= get_field("info_text3")?></p>
        </div>
    </section>

    <section class="team-wrapper wrapper">
        <div class="team-heading container">
            <h2 class="title-big"><?= get_field("team_title")?></h2>
            <p class="text"><?= get_field("team_text")?></p>
        </div>
        <div class="grid container">
            <div class="team-list grid-list">
            <?php foreach ($team as $member) { ?> 
                    <a href="<?=get_permalink($member->ID);?>" class="team-item grid-item wow fadeInUp">
                        <img src="<?=get_field('image', $member->ID); ?>" alt="image">
                        <strong class="title"><?=$member->title;?></strong>
                        <span class="team-item-subtitle"><?=$member->subtitle;?></span>
                    </a>
                <? } ?>
            </div>
            <a href="<?= get_field("team_link")?>" class="button"><?= get_field("team_button")?></a>
        </div>
    </section>

    <section class="services-wrapper wrapper">
        <h2 class="title-big"><?= get_field("services_title")?></h2>
        <div class="services grid container">
            <div class="services-list grid-list">
                <?php foreach ($services as $service) { ?> 
                    <a href="<?=get_permalink($service->ID);?>" class="services-item grid-item wow fadeInUp">
                        <img src="<?=get_field('image', $service->ID); ?>" alt="image">
                        <div class="services-item-content">
                            <strong class="title"><?=$service->title;?></strong>
                            <span class="services-item-stick"></span>
                            <p class="text default"><?=$service->subtitle;?></p>
                            <p class="text hover"><?=$service->text;?></p>
                        </div>
                    </a>
                <? } ?>
            </div>
        </div>
    </section>
</div>

    <section class="faq-wrapper">
        <div class="faq container">
            <div class="faq-heading">
                <h2 class="title-big"><?= get_field("faq_title")?></h2>
                <p class="text"><?= get_field("faq_text")?></p>
            </div>
            <div class="faq-list">
                <? if (!empty(get_field("faq_list_item1_title"))) {?>
                    <div class="faq-item">
                        <div class="faq-item-heading">
                            <strong class="faq-item-title"><?= get_field("faq_list_item1_title")?></strong>
                            <img src="/wp-content/themes/almanova/svg/faq.svg" alt="^" class="faq-item-arrow">
                        </div>
                        <p class="text"><?= get_field("faq_list_item1_text")?></p>
                    </div>
                <? }?>
                <? if (!empty(get_field("faq_list_item2_title"))) {?>
                    <div class="faq-item">
                        <div class="faq-item-heading">
                            <strong class="faq-item-title"><?= get_field("faq_list_item2_title")?></strong>
                            <img src="/wp-content/themes/almanova/svg/faq.svg" alt="^" class="faq-item-arrow">
                        </div>
                        <p class="text"><?= get_field("faq_list_item2_text")?></p>
                    </div>
                    <? }?>
                <? if (!empty(get_field("faq_list_item3_title"))) {?>
                    <div class="faq-item">
                        <div class="faq-item-heading">
                            <strong class="faq-item-title"><?= get_field("faq_list_item3_title")?></strong>
                            <img src="/wp-content/themes/almanova/svg/faq.svg" alt="^" class="faq-item-arrow">
                        </div>
                        <p class="text"><?= get_field("faq_list_item3_text")?></p>
                    </div>
                    <? }?>
                    <? if (!empty(get_field("faq_list_item4_title"))) {?>
                    <div class="faq-item">
                        <div class="faq-item-heading">
                            <strong class="faq-item-title"><?= get_field("faq_list_item4_title")?></strong>
                            <img src="/wp-content/themes/almanova/svg/faq.svg" alt="^" class="faq-item-arrow">
                        </div>
                        <p class="text"><?= get_field("faq_list_item4_text")?></p>
                    </div>
                    <? }?>
                <? if (!empty(get_field("faq_list_item5_title"))) {?>
                    <div class="faq-item">
                        <div class="faq-item-heading">
                            <strong class="faq-item-title"><?= get_field("faq_list_item5_title")?></strong>
                            <img src="/wp-content/themes/almanova/svg/faq.svg" alt="^" class="faq-item-arrow">
                        </div>
                        <p class="text"><?= get_field("faq_list_item5_text")?></p>
                    </div>
                    <? }?>
                <? if (!empty(get_field("faq_list_item6_title"))) {?>
                    <div class="faq-item">
                        <div class="faq-item-heading">
                            <strong class="faq-item-title"><?= get_field("faq_list_item6_title")?></strong>
                            <img src="/wp-content/themes/almanova/svg/faq.svg" alt="^" class="faq-item-arrow">
                        </div>
                        <p class="text"><?= get_field("faq_list_item6_text")?></p>
                    </div>
                    <? }?>
            </div>
        </div>
    </section>



</main>

<script src="<?php echo get_template_directory_uri(); ?>/js/about.js"></script>

<?php
get_footer();
