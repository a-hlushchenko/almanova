<?php
/*Template Name: Reviews*/
get_header(); 

$languages = pll_the_languages(['raw' => 1, 'echo' => 0]);
$en_url = esc_url($languages['en']['url']);
$ru_url = esc_url($languages['ru']['url']);
$current_language = pll_current_language();

$reviews = get_posts([
    'post_type' => 'review',
    'post_status' => 'publish',
    'posts_per_page' => 5,
    'paged' => get_query_var('paged') ? get_query_var('paged') : 1,
]);

$reviews_query = new WP_Query(array(
    'post_type'      => 'review',
    'post_status'    => 'publish',
    'posts_per_page' => 5,
    'paged'          => $paged,
));

$current_page = (get_query_var('paged')) ? get_query_var('paged') : 1;

$post_type_base = pll_current_language() == 'ru' ? '/ru/reviews-ru' : '/reviews';

$pagination = paginate_links( array(
    'base' => $post_type_base . '/%_%',
    'format' => '?paged=%#%',
    'current' => $current_page,
    'total' =>  $reviews_query->max_num_pages,
    'show_all' => false,
    'end_size' => 3,
    'mid_size' => 1,
    'prev_text' => __(''),
    'next_text' => __(''),
) );

?>

<link href="<?php echo get_template_directory_uri(); ?>/css/reviews.css" rel="stylesheet"/>

<section class="mains-wrapper">
    <div class="mains container">
        <h1 class="title-big"><?= get_field("main_title")?></h1>
        <p class="text"><?=get_field("main_text")?></p>
        <div class="mains-img">
            <img src="<?=get_field("main_image")?>" alt="image">
        </div>
    </div>
</section>

<div class="reviews-wrapper">
    <div class="reviews-list container">
        <?php foreach ($reviews as $review) { ?> 
            <a href="https://maps.app.goo.gl/C2aPmZCnakkx6BfT8?g_st=it" class="reviews-item wow fadeInUp">
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
    <div class="pagination">
        <?php echo $pagination; ?>
    </div>
</div>

<?if ($current_language === 'en') {?>
    <?= do_shortcode('[contact-form-7 id="38f3568" title="Leave a review"]')?>
<?} elseif ($current_language === 'ru') {?>
    <?= do_shortcode('[contact-form-7 id="faccf7d" title="Leave a review ru"]')?>
<?}?>

<script src="<?php echo get_template_directory_uri(); ?>/js/reviews.js"></script>

<?php
get_footer();
