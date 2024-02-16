<?php
get_header(); 

$previous_post = get_previous_post();
$next_post = get_next_post();
?>

<link href="<?php echo get_template_directory_uri(); ?>/css/member.css" rel="stylesheet"/>

<section class="mains-wrapper">
    <div class="mains container">
        <h1 class="title-big"><?= get_field("main_title")?></h1>
        <p class="text"><?=get_field("main_text")?></p>
        <div class="mains-img">
            <img src="<?=get_field("main_image")?>" alt="image">
        </div>
    </div>
</section>

<main class="member-wrapper">
    <div class="member container">
        <img src="<?= get_field('image')?>" alt="image" class="member-img">
        <div class="member-content">
            <h1 class="member-title"><?= get_field('title')?></h1>
            <strong class="member-subtitle"><?= get_field('subtitle')?></strong>
            <span class="member-stick"></span>
            <p class="member-text"><?= get_field('text')?></p>
        </div>  
    </div>  
    <div class="member-buttons container">
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

<script src="<?php echo get_template_directory_uri(); ?>/js/member.js"></script>

<?php
get_footer();
