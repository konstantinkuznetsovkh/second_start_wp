<?php
if (!defined('ABSPATH')) {
	die();
}
// $args = [
//     'post_type' => 'benefits', //по умолчанию пост тайп=>пост
// ];
// $loop =new Wp_Query($args) ;
//$loop =new WP_query('post_type=benefits); м ожно и так без верхнего $args
// $loop = new WP_Query('post_type=benefits&order=asc&order=asc');
// post_type=benefits а дальше сортировка по алфавиту от а до я а нам надо по дате &order=asc

// if ($loop->have_posts()) :
    ?>
<!-- Testimonials -->
<div class="content-lg container">
    <div class="row">
        <div class="col-sm-9">
            <h2><?php the_field('home_testimonials_block_heading',get_the_ID(), true);?></h2>

            <!-- Swiper Testimonials -->
            <div class="swiper-slider swiper-testimonials">
                <!-- Swiper Wrapper -->
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <blockquote class="blockquote">
                            <div class="margin-b-20">
                                <?php the_field('home_block_description',get_the_ID(), true);?>
                            </div>
                            <div class="margin-b-20">
                                <?php the_field('home_block_description_too',get_the_ID(), true);?>
                            </div>
                            <p><span
                                    class="fweight-700 color-link"><?php the_field('home_testimonials_block_autor',get_the_ID(), true);?></span>,
                                <?php the_field('home_testimonials_block_spec',get_the_ID(), true);?></p>
                        </blockquote>
                    </div>

                </div>
                <!-- End Swiper Wrapper -->

                <!-- Pagination -->
                <div class="swiper-testimonials-pagination"></div>
            </div>
            <!-- End Swiper Testimonials -->
        </div>
    </div>
    <!--// end row -->
</div>
<!-- End Testimonials -->