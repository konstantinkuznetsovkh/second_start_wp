<?php
if (!defined('ABSPATH')) {
	die();
}

$loop= new WP_Query('post_type=logotypes&order=asc');
if($loop->have_posts()) :
?>

<div class="bg-color-sky-light">
    <div class="content-lg container">
        <div class="swiper-slider swiper-clients">
            <div class="swiper-wrapper">
                <?php while ($loop->have_posts()) : $loop->the_post(); ?>
                <div class="swiper-slide">
                    <img class="swiper-clients-img" src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>"
                        alt="<?php the_title(); ?>">
                </div>
                <?php
				endwhile;
				wp_reset_query();
				?>
            </div>
        </div>
    </div>
</div>
<?php endif;?>