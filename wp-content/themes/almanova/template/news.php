<?php
/*Template Name: News*/
get_header(); 

$news = get_posts([
    'post_type' => 'new',
    'post_status' => 'publish',
    'posts_per_page' => 12,
    'paged' => get_query_var('paged') ? get_query_var('paged') : 1,
]);

$news_query = new WP_Query(array(
    'post_type'      => 'new',
    'post_status'    => 'publish',
    'posts_per_page' => 12,
    'paged'          => $paged,
));

$current_page = (get_query_var('paged')) ? get_query_var('paged') : 1;

$post_type_base = pll_current_language() == 'ru' ? '/ru/news-ru' : '/news';

$pagination = paginate_links( array(
    'base' => $post_type_base . '/%_%',
    'format' => '?paged=%#%',
    'current' => $current_page,
    'total' =>  $news_query->max_num_pages,
    'show_all' => false,
    'end_size' => 3,
    'mid_size' => 1,
    'prev_text' => __(''),
    'next_text' => __(''),
) );

?>

<link href="<?php echo get_template_directory_uri(); ?>/css/news.css" rel="stylesheet"/>

<section class="mains-wrapper">
    <div class="mains container">
        <h1 class="title-big"><?= get_field("main_title")?></h1>
        <p class="text"><?=get_field("main_text")?></p>
        <div class="mains-img">
            <img src="<?=get_field("main_image")?>" alt="image">
        </div>
    </div>
</section>

<section class="news-wrapper">
    <div class="news-list container">
        <?php foreach ($news as $new) { ?> 
            <a href="<?=get_permalink($new->ID);?>" class="news-item wow fadeInUp">
                <img src="<?=get_field('image', $new->ID); ?>" alt="photo">
                <div class="news-item-content">
                    <span class="news-date"><?=$new->subtitle;?></span>
                    <strong class="title-small"><?=$new->title;?></strong>
                </div>
            </a>
        <? } ?> 
    </div>
    <div class="pagination">
        <?php echo $pagination; ?>
    </div>
</section>

<script src="<?php echo get_template_directory_uri(); ?>/js/news.js"></script>

<?php
get_footer();
