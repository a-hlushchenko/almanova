<?php
/*Template Name: Privacy*/
get_header(); 

?>

<link href="<?php echo get_template_directory_uri(); ?>/css/privacy.css" rel="stylesheet"/>

<section class="mains-wrapper">
    <div class="mains container">
        <h1 class="title-big"><?= get_field("main_title")?></h1>
        <p class="text"><?=get_field("main_text")?></p>
        <div class="mains-img">
            <img src="<?=get_field("main_image")?>" alt="image">
        </div>
    </div>
</section>

<section class="container wrapper">
    <?php $privacy = get_field('privacy');
    foreach ($privacy as $pr) { if (!empty($pr['title']) || !empty($pr['text'])) {?> 
        <div class="privacy-wrapper">
            <h2 class="title"><?=$pr['title'];?></h2>
            <p class="text"><?=$pr['text'];?></p>
        </div>
    <? }} ?>
</section>

<?php
get_footer();
