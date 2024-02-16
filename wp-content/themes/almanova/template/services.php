<?php
/*Template Name: Services*/
get_header(); 

$services = get_posts([
    'post_type' => 'service',
    'post_status' => 'publish',
    'posts_per_page' => -1  ,
]);

?>

<link href="<?php echo get_template_directory_uri(); ?>/css/services.css" rel="stylesheet"/>

<section class="services-wrapper wrapper">
    <h2 class="title-big"><?= get_field("main_title")?></h2>
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
        <p class="text"><?= get_field("main_text")?></p>
    </div>
</section>

<script src="<?php echo get_template_directory_uri(); ?>/js/services.js"></script>

<?php
get_footer();
