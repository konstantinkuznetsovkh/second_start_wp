<?php
if (!defined('ABSPATH')) {
	die();
};?>





<!-- Latest Products -->
<div class="content-lg container">
    <div class="row margin-b-40">
        <div class="col-sm-6">
            <h2><?php the_field('home_block_title', get_the_ID(), true); ?></h2>
            <p><?php the_field('home_block_description', get_the_ID(), true); ?></p>
        </div>
    </div>
    <!--// end row -->
    <?php
    // $args =[
    //     'cat' => 1
    // ];
    $loop = new WP_Query("cat=1&order=asc");

	if ($loop->have_posts()) :
	?>
    <div class="row">
        <?php while ($loop->have_posts()) : $loop->the_post(); ?>
        <div class="col-sm-4 sm-margin-b-50">
            <div class="margin-b-20">
                <div class="wow zoomIn" data-wow-duration=".3" data-wow-delay=".1s">
                    <img class="img-responsive" src="<?php echo get_the_post_thumbnail_url(get_the_ID(), '360'); ?>"
                        alt="<?php the_title(); ?>">
                </div>
            </div>
            <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                <span class="text-uppercase margin-l-20"><?php echo get_the_excerpt(); ?></span>
            </h4>
            <p><?php the_content(); ?></p>
            <a class="link" href="<?php the_permalink(); ?>"><?php esc_html_e('Read More', 'grimple'); ?></a>
        </div>
        <?php
		endwhile;
		wp_reset_query();
		?>
    </div>
    <?php endif; ?>
</div>
<!-- End Latest Products -->