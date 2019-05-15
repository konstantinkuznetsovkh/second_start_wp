<?php
if (!defined('ABSPATH')) {
	die();
}

get_header();

$cat = get_the_category()[0];
//получение ид текущей рубрики
// print_r($cat);
$cat_id = $cat->term_id;
?>
<div class="parallax-window" data-parallax="scroll"
    style="background:url(<?php the_field('page_about_thumb', 'category_' . $cat_id, true);
	//если выводим произвольные поля таксономии надо писать через 'category_' а пото м ид самой рубрики ?>) no-repeat center;background-size:cover;">
    <div class="parallax-content container">
        <h1 class="carousel-title"><?php single_cat_title();
		//название рубрики выводится не the_title() ?></h1>
        <p><?php the_field('page_about_desc', 'category_' . $cat_id, true); ?></p>
    </div>
</div>

<div class="content-lg container">
    <?php
	//выводим тогда когда не пусто
	if (!empty(category_description())) : ?>
    <div class="row margin-b-40">
        <div class="col-sm-6">
            <?php echo category_description(); ?>
        </div>
    </div>
    <?php endif; ?>
    <?php
if (have_posts()) :
	echo '<div class="row margin-b-50">';
	while (have_posts()) : the_post();
		?>
    <div class="col-sm-4 sm-margin-b-50">
        <div class="margin-b-20">
            <div class="wow zoomIn" data-wow-duration=".3" data-wow-delay=".1s">
                <img class="img-responsive" src="<?php echo get_the_post_thumbnail_url(get_the_ID(), '360'); ?>"
                    alt="<?php the_title(); ?>">
            </div>
        </div>
        <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            <span class="text-uppercase margin-l-20"><?php the_field('article_type', get_the_ID(), true); ?></span>
        </h4>
        <p><?php the_excerpt(); ?></p>
        <a class="link" href="<?php the_permalink(); ?>"><?php esc_html_e('Read More', 'lazy_coder'); ?></a>
    </div>
    <?php
	endwhile;
	wp_reset_query();
	echo '</div>';
endif;
?>
</div>
<?php
get_footer();