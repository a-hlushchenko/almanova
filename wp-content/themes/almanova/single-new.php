<?php
get_header(); 

$previous_post = get_previous_post();
$next_post = get_next_post();

$current_post_id = get_the_ID();

$news = get_posts([
    'post_type' => 'new',
    'post_status' => 'publish',
    'posts_per_page' => 4,
    'post__not_in' => array($current_post_id),
]);

?>

<link href="<?php echo get_template_directory_uri(); ?>/css/new.css" rel="stylesheet"/>

<main class="new-wrapper">
    <div class="container">
    <div class="new">
        <h1 class="new-title"><?= get_field('title')?></h1>
        <div class="new-content">
        <img src="<?= get_field('image')?>" alt="image" class="new-img">
        <div class="new-right">
            <strong class="new-subtitle"><?= get_field('subtitle')?></strong>
            <p class="new-text"><?= get_field('text')?></p>
        </div>  
        </div>
    </div>  
    </div>
    <div class="new-buttons container">
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

    <section class="news-wrapper wrapper">
        <h2 class="title-big"><?= get_field("news_title")?></h2>
        <div class="news-swiper-overflow">
            <div class="news container">
                <div id="news" class="news-list swiper-container">
                    <div class="swiper-wrapper">
                    <?php foreach ($news as $new) { ?> 
                        <a href="<?=get_permalink($new->ID);?>" class="news-item swiper-slide wow fadeInUp">
                            <img src="<?=get_field('image', $new->ID); ?>" alt="photo">
                            <div class="news-item-content">
                                <strong class="title-small"><?=$new->title;?></strong>
                                <span class="news-date"><?=$new->subtitle;?></span>
                            </div>
                        </a>
                    <? } ?> 
                    </div>
                </div>
            </div>
            <div class="swiper-pagination news"></div>
        </div>

        <div class="swiper-button-prev news"></div>
        <div class="swiper-button-next news"></div>
    </section>
</main>

<script src="<?php echo get_template_directory_uri(); ?>/js/new.js"></script>

<?php
get_footer();
