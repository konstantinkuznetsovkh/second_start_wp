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
            <h2>Customer Reviews</h2>

            <!-- Swiper Testimonials -->
            <div class="swiper-slider swiper-testimonials">
                <!-- Swiper Wrapper -->
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <blockquote class="blockquote">
                            <div class="margin-b-20">
                                Lorem ipsum dolor sit amet consectetur adipiscing elit sed tempor incididunt ut
                                laboret
                                dolore magna aliqua. Ut enim minim veniam exercitation laboris ut siad consequat
                                siad
                                minim enum esqudiat dolore.
                            </div>
                            <div class="margin-b-20">
                                Lorem ipsum dolor sit amet consectetur adipiscing elit sed tempor incididunt ut
                                laboret
                                tempor incididunt dolore magna consequat siad minim aliqua.
                            </div>
                            <p><span class="fweight-700 color-link">Joh Milner</span>, Metronic Customer</p>
                        </blockquote>
                    </div>
                    <div class="swiper-slide">
                        <blockquote class="blockquote">
                            <div class="margin-b-20">
                                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                fugiat
                                nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                                officia deserunt mollit anim id est laborum.
                            </div>
                            <div class="margin-b-20">
                                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                                ex ea
                                commodo consequat.
                            </div>
                            <p><span class="fweight-700 color-link">Alex Clarson</span>, Metronic Customer</p>
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