<?php
/*Template Name: Team*/
get_header(); 

$team = get_posts([
    'post_type' => 'member',
    'post_status' => 'publish',
    'posts_per_page' => -1,
]);

?>

<link href="<?php echo get_template_directory_uri(); ?>/css/team.css" rel="stylesheet"/>

<section class="team-wrapper wrapper">
    <div class="team-heading container">
        <h2 class="title-big"><?= get_field("main_title")?></h2>
        <p class="text"><?= get_field("main_top_text")?></p>
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
    </div>
    <p class="text container"><?= get_field("main_text")?></p>
</section>

<script src="<?php echo get_template_directory_uri(); ?>/js/team.js"></script>

<?php
get_footer();
