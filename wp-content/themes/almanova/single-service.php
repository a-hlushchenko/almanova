<?php
get_header(); 

$aboutPage = pll_get_post(1189);

$previous_post = get_previous_post();
$next_post = get_next_post();
?>

<link href="<?php echo get_template_directory_uri(); ?>/css/service.css" rel="stylesheet"/>

<div class="service-wrapper">
    <div class="service container">
        <div class="services-item wow fadeInUp">
            <img src="<?= get_field('image')?>" alt="image">
            <div class="services-item-content">
                <strong class="title"><?= get_field('title')?></strong>
                <span class="services-item-stick"></span>
                <p class="text default"><?= get_field('subtitle')?></p>
            </div>
        </div>
        <p class="text wow fadeInUp"><?= get_field('text')?></p>
    </div>  
</div>

<section class="subservice-wrapper">
    <div class="subservice-list container">
        <?php $list = get_field('list');
        foreach ($list as $item) { if (!empty($item['title']) || !empty($item['subtitle']) || !empty($item['text'])) {?> 
            <div class="subservice wow fadeInUp">
                <div class='subservice-heading'>
                    <strong class="subservice-title"><?=$item['title'];?></strong>
                    <span class="subservice-subtitle"><?=$item['subtitle'];?></span>
                </div>
                <pre class="text pre"><?=$item['text'];?></pre>
            </div>
        <? }} ?>
    </div>
</section>


<div class="service-buttons container">
    <div>
        <?php if ($next_post) {?>
            <a href="<?= get_permalink($next_post->ID); ?>" class="button prev">Previous page</a>
        <?php }?>
    </div>

    <div>
        <?php if ($previous_post) {?>
            <a href="<?= get_permalink($previous_post->ID); ?>" class="button next">Next page</a>
        <?php }?>
    </div>
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

    
<script src="<?php echo get_template_directory_uri(); ?>/js/service.js"></script>

<?php
get_footer();
