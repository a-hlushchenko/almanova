<?php
/*Template Name: Home*/
get_header(); 

$services = get_posts([
    'post_type' => 'service',
    'post_status' => 'publish',
    'posts_per_page' => 7,
]);

$team = get_posts([
    'post_type' => 'member',
    'post_status' => 'publish',
    'posts_per_page' => 3,
]);

$reviews = get_posts([
    'post_type' => 'review',
    'post_status' => 'publish',
    'posts_per_page' => 3,
]);

$news = get_posts([
    'post_type' => 'new',
    'post_status' => 'publish',
    'posts_per_page' => 4,
]);

$areas = get_posts([
    'post_type' => 'area',
    'post_status' => 'publish',
    'posts_per_page' => -1,
]);

?>

<link href="<?php echo get_template_directory_uri(); ?>/css/home.css" rel="stylesheet"/>

<main>
    <section class="main-wrapper">
        <div class="container main">
            <h1 class="main-title"><?= get_field("main_title")?></h1>
            <strong class="main-subtitle"><?= get_field("main_subtitle")?></strong>
            <button class="button main-button popup-form-open"><?= get_field("main_button")?></button>
        </div>

        <div class="main-left-img">
            <img src="<?= get_field('main_left_img')?>" alt="image">
        </div>
        <div class="main-right-img">
            <img src="<?= get_field('main_right_img')?>" alt="image">
        </div>
        <a href="#about" class="main-next">
            <span></span>
        </a>
    </section>

    <section id="about" class="about-wrapper">
        <div class="about container">
            <img src="/wp-content/themes/almanova/img/home-about.jpg" alt="image" class="wow fadeInUp">
            <div class="about-content  wow fadeInUp">
                <h2 class="title-big"><?= get_field("about_title")?></h2>
                <div class="about-list">
                    <p class="text"><?= get_field("about_text")?></p>
                </div>
                <a href="<?= get_field("about_link")?>" class="button"><?= get_field("about_button")?></a>
            </div>
        </div>
    </section>

    <section class="advantage-wrapper wrapper">
        <h2 class="title-big"><?= get_field("advantage_title")?></h2>
        <div class="advantage container slider-advantage">
            <?php foreach ($areas as $area) { ?> 
                <a href="<?=get_permalink($area->ID);?>" class="advantage-item slide-advantage wow fadeInUp">
                    <img src="<?=get_field('image', $area->ID); ?>" alt="image">
                    <div class="advantage-item-content">
                        <strong class="title"><?=$area->title;?></strong>
                        <span class="advantage-item-stick"></span>
                        <p class="text"><?=$area->text;?></p>
                    </div>
                </a>
            <? } ?>
        </div>
    </section>

    <section id="services" class="services-wrapper wrapper">
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

    <section class="team-wrapper wrapper">
        <h2 class="title-big"><?= get_field("team_title")?></h2>
        <div class="team container">
            <div class="team-list">
                <?php foreach ($team as $member) { ?> 
                    <a href="<?=get_permalink($member->ID);?>" class="team-item wow fadeInUp">
                        <img src="<?=get_field('image', $member->ID); ?>" alt="image">
                        <strong class="title"><?=$member->title;?></strong>
                        <span class="team-item-subtitle"><?=$member->subtitle;?></span>
                    </a>
                <? } ?> 
            </div>
            <a href="<?= get_field("team_link")?>" class="button"><?= get_field("team_button")?></a>
        </div>
        <img src="/wp-content/themes/almanova/svg/home-team-bg.svg" class="pattern">
    </section>

    <section class="reviews-wrapper wrapper">
        <h2 class="title-big"><?= get_field("reviews_title")?></h2>
        <div class="reviews container" style="position: relative;">
            <div id="reviews" class="reviews-list swiper-container">
                <div class="swiper-wrapper">
                    <?php foreach ($reviews as $review) { ?> 
                        <a href="https://maps.app.goo.gl/C2aPmZCnakkx6BfT8?g_st=it" class="reviews-item swiper-slide wow fadeInUp">
                            <div class="reviews-item-heading">
                                <img src="<?=get_field('image', $review->ID); ?>" alt="photo">
                                <div class="reviews-item-heading-content">
                                    <strong class="title-small"><?=$review->title;?></strong>
                                    <span class="reviews-date"><?=$review->subtitle;?></span>
                                </div>
                            </div>
                            <p class="reviews-text"><?=$review->text;?></p>
                    </a>
                    <? } ?> 
                </div>
            </div>
            <div class="swiper-button-prev reviews"></div>
            <div class="swiper-button-next reviews"></div>
        </div>
        <div class="swiper-pagination reviews"></div>
        <a href="<?= get_field("reviews_link")?>" class="button"><?= get_field("reviews_button")?></a>

        
    </section>

    <section class="news-wrapper wrapper">
        <h2 class="title-big"><?= get_field("news_title")?></h2>
        <div class="news container" style="position: relative;">
            <div id="news" class="news-list swiper-container">
                <div class="swiper-wrapper">
                <?php foreach ($news as $new) { ?> 
                    <a href="<?=get_permalink($new->ID);?>" class="news-item swiper-slide wow fadeInUp">
                        <img src="<?=get_field('image', $new->ID); ?>" alt="photo">
                        <div class="news-item-content">
                            <span class="news-date"><?=$new->subtitle;?></span>
                            <strong class="title-small"><?=$new->title;?></strong>
                        </div>
                    </a>
                <? } ?> 
                </div>
            </div>
            <div class="swiper-button-prev news"></div>
            <div class="swiper-button-next news"></div>
        </div>
        <div class="swiper-pagination news"></div>
        <a href="<?= get_field("news_link")?>" class="button"><?= get_field("news_button")?></a>
    </section>
</main>



<script src="<?php echo get_template_directory_uri(); ?>/js/home.js"></script>

<?php
get_footer();
