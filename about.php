<?php 
if (!defined('ABSPATH')) {
	die();
};


get_header();
// get_template_part('wp-content/themes/lazy_coder/template-part/page-header.php');
	get_template_part('template-part/page', 'header');
	?>
<div class="section-seperator">
    <div class="content-lg container">
        <div class="row">
            <div class="col-sm-4 sm-margin-b-50">
                <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".3s">
                    <h3>Art Of Coding</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed tempor incididunt ut laboret dolore
                        magna ut consequat siad esqudiat dolor</p>
                    <a class="link" href="#">Read More</a>
                </div>
            </div>
            <div class="col-sm-4 sm-margin-b-50">
                <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".2s">
                    <h3>Clean Design</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed tempor incididunt ut laboret dolore
                        magna ut consequat siad esqudiat dolor</p>
                    <a class="link" href="#">Read More</a>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".1s">
                    <h3>Amazing Support</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed tempor incididunt ut laboret dolore
                        magna ut consequat siad esqudiat dolor</p>
                    <a class="link" href="#">Read More</a>
                </div>
            </div>
        </div>
        <!--// end row -->
    </div>
</div>

<div class="content-lg container">
    <div class="row margin-b-20">
        <div class="col-sm-6">
            <h2><?php the_title(); ?></h2>
        </div>
    </div>
    <!--// end row -->

    <div class="row">
        <div class="col-sm-7 sm-margin-b-50">
            <?php
				if (have_posts()) :

					while (have_posts()) : the_post();

						the_content();

					endwhile;
					wp_reset_query();

				endif;
				?>
        </div>
        <div class="col-sm-4 col-sm-offset-1">
            <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/640x380/01.jpg"
                alt="Our Office">
        </div>
    </div>
    <!--// end row -->
</div>
<?php
get_footer();