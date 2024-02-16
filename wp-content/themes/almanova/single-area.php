<?php
get_header(); 

$previous_post = get_previous_post();
$next_post = get_next_post();

$category = get_category_by_slug(get_field('category_name'));
$category_id = $category->term_id;

$services = get_posts([
    'post_type' => 'service',
    'post_status' => 'publish',
    'posts_per_page' => -1,
    'category' => $category_id,
]);
?>

<link href="<?php echo get_template_directory_uri(); ?>/css/area.css" rel="stylesheet"/>

<section class="mains-wrapper">
    <div class="mains container">
        <h1 class="title-big"><?= get_field("main_title")?></h1>
        <!-- <p class="text"><?//=get_field("main_text")?></p>
        <div class="mains-img">
            <img src="<?//=get_field("main_image")?>" alt="image">
        </div> -->
    </div>
</section>

<main class="area-wrapper">
    <div class="area container">
        <div class="advantage-item wow fadeInUp">
            <img src="<?= get_field('image')?>" alt="image">
            <div class="advantage-item-content">
                <strong class="title"><?= get_field('title')?></strong>
                <span class="advantage-item-stick"></span>
                <p class="text"><?= get_field('text')?></p>
            </div>
        </div>
        <p class="text"><?= get_field('text2')?></p>
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
        <div class="services container">
            <div class="services-list">
                <?php foreach ($services as $service) { ?> 
                    <a href="<?=get_permalink($service->ID);?>" class="services-item wow fadeInUp">
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
    <div class="area-buttons container">
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
</main>

<script src="<?php echo get_template_directory_uri(); ?>/js/area.js"></script>

<?php
get_footer();
