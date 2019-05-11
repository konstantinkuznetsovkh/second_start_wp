<?php

/* Template name: Главная */

get_header();
get_template_part('template-part/home', 'slider');
get_template_part('template-part/home', 'benefits');
get_template_part('template-part/home', 'posts');
get_template_part('template-part/home', 'logos');
get_template_part('template-part/home', 'testimonials');
?>


<!--========== PAGE LAYOUT ==========-->






<!-- Pricing -->
<div class="bg-color-sky-light">
    <div class="content-lg container">
        <div class="row row-space-1">
            <div class="col-sm-4 sm-margin-b-2">
                <!-- Pricing -->
                <div class="pricing">
                    <div class="margin-b-30">
                        <i class="pricing-icon icon-chemistry"></i>
                        <h3>Starter Kit <span> - $</span> 49</h3>
                        <p>Lorem ipsum dolor amet consectetur ut consequat siad esqudiat dolor</p>
                    </div>
                    <ul class="list-unstyled pricing-list margin-b-50">
                        <li class="pricing-list-item">Basic Features</li>
                        <li class="pricing-list-item">Up to 5 products</li>
                        <li class="pricing-list-item">50 Users Panels</li>
                    </ul>
                    <a href="pricing.html" class="btn-theme btn-theme-sm btn-default-bg text-uppercase">Choose</a>
                </div>
                <!-- End Pricing -->
            </div>
            <div class="col-sm-4 sm-margin-b-2">
                <!-- Pricing -->
                <div class="pricing pricing-active">
                    <div class="margin-b-30">
                        <i class="pricing-icon icon-badge"></i>
                        <h3>Professional <span> - $</span> 149</h3>
                        <p>Lorem ipsum dolor amet consectetur ut consequat siad esqudiat dolor</p>
                    </div>
                    <ul class="list-unstyled pricing-list margin-b-50">
                        <li class="pricing-list-item">Basic Features</li>
                        <li class="pricing-list-item">Up to 100 products</li>
                        <li class="pricing-list-item">100 Users Panels</li>
                    </ul>
                    <a href="pricing.html" class="btn-theme btn-theme-sm btn-default-bg text-uppercase">Choose</a>
                </div>
                <!-- End Pricing -->
            </div>
            <div class="col-sm-4">
                <!-- Pricing -->
                <div class="pricing">
                    <div class="margin-b-30">
                        <i class="pricing-icon icon-shield"></i>
                        <h3>Advanced <span> - $</span> 249</h3>
                        <p>Lorem ipsum dolor amet consectetur ut consequat siad esqudiat dolor</p>
                    </div>
                    <ul class="list-unstyled pricing-list margin-b-50">
                        <li class="pricing-list-item">Extended Features</li>
                        <li class="pricing-list-item">Unlimited products</li>
                        <li class="pricing-list-item">Unlimited Users Panels</li>
                    </ul>
                    <a href="pricing.html" class="btn-theme btn-theme-sm btn-default-bg text-uppercase">Choose</a>
                </div>
                <!-- End Pricing -->
            </div>
        </div>
        <!--// end row -->
    </div>
</div>
<!-- End Pricing -->

<!-- Promo Section -->
<div class="promo-section overflow-h">
    <div class="container">
        <div class="clearfix">
            <div class="ver-center">
                <div class="ver-center-aligned">
                    <div class="promo-section-col">
                        <h2>Our Clients</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed tempor incididunt ut laboret
                            dolore magna aliqua enim minim veniam exercitation ipsum dolor sit amet consectetur
                            adipiscing elit sed tempor incididunt ut laboret dolore magna aliqua enim minim veniam
                            exercitation</p>
                        <p>Ipsum dolor sit amet consectetur adipiscing elit sed tempor incididut ut sead laboret
                            dolore
                            magna aliqua enim minim veniam exercitation ipsum dolor sit amet consectetur adipiscing
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="promo-section-img-right">
        <img class="img-responsive" src="<?php echo get_template_directory_uri();?>/img/970x970/01.jpg"
            alt="Content Image">
    </div>
</div>
<!-- End Promo Section -->

<!-- Work -->
<div class="bg-color-sky-light overflow-h">
    <div class="content-lg container">
        <div class="row margin-b-40">
            <div class="col-sm-6">
                <h2>Showcase</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed tempor incididunt ut laboret dolore
                    magna
                    aliqua enim minim veniam exercitation</p>
            </div>
        </div>
        <!--// end row -->

        <!-- Masonry Grid -->
        <div class="masonry-grid">
            <div class="masonry-grid-sizer col-xs-6 col-sm-6 col-md-1"></div>
            <div class="masonry-grid-item col-xs-12 col-sm-6 col-md-8">
                <!-- Work -->
                <div class="work wow fadeInUp" data-wow-duration=".3" data-wow-delay=".1s">
                    <div class="work-overlay">
                        <img class="full-width img-responsive"
                            src="<?php echo get_template_directory_uri();?>/img/800x400/01.jpg" alt="Portfolio Image">
                    </div>
                    <div class="work-content">
                        <h3 class="color-white margin-b-5">Art Of Coding</h3>
                        <p class="color-white margin-b-0">Lorem ipsum dolor sit amet consectetur adipiscing</p>
                    </div>
                    <a class="content-wrapper-link" href="#"></a>
                </div>
                <!-- End Work -->
            </div>
            <div class="masonry-grid-item col-xs-6 col-sm-6 col-md-4">
                <!-- Work -->
                <div class="work wow fadeInUp" data-wow-duration=".3" data-wow-delay=".2s">
                    <div class="work-overlay">
                        <img class="full-width img-responsive"
                            src="<?php echo get_template_directory_uri();?>/img/397x400/01.jpg" alt="Portfolio Image">
                    </div>
                    <div class="work-content">
                        <h3 class="color-white margin-b-5">Clean Design</h3>
                        <p class="color-white margin-b-0">Lorem ipsum dolor sit amet consectetur adipiscing</p>
                    </div>
                    <a class="content-wrapper-link" href="#"></a>
                </div>
                <!-- End Work -->
            </div>
            <div class="masonry-grid-item col-xs-6 col-sm-6 col-md-4">
                <!-- Work -->
                <div class="work wow fadeInUp" data-wow-duration=".3" data-wow-delay=".3s">
                    <div class="work-overlay">
                        <img class="full-width img-responsive"
                            src="<?php echo get_template_directory_uri();?>/img/397x300/01.jpg" alt="Portfolio Image">
                    </div>
                    <div class="work-content">
                        <h3 class="color-white margin-b-5">Clean Design</h3>
                        <p class="color-white margin-b-0">Lorem ipsum dolor sit amet consectetur adipiscing</p>
                    </div>
                    <a class="content-wrapper-link" href="#"></a>
                </div>
                <!-- End Work -->
            </div>
            <div class="masonry-grid-item col-xs-6 col-sm-6 col-md-4">
                <!-- Work -->
                <div class="work wow fadeInUp" data-wow-duration=".3" data-wow-delay=".4s">
                    <div class="work-overlay">
                        <img class="full-width img-responsive"
                            src="<?php echo get_template_directory_uri();?>/img/397x300/02.jpg" alt="Portfolio Image">
                    </div>
                    <div class="work-content">
                        <h3 class="color-white margin-b-5">Clean Design</h3>
                        <p class="color-white margin-b-0">Lorem ipsum dolor sit amet consectetur adipiscing</p>
                    </div>
                    <a class="content-wrapper-link" href="#"></a>
                </div>
                <!-- End Work -->
            </div>
            <div class="masonry-grid-item col-xs-6 col-sm-6 col-md-4">
                <!-- Work -->
                <div class="work wow fadeInUp" data-wow-duration=".3" data-wow-delay=".5s">
                    <div class="work-overlay">
                        <img class="full-width img-responsive"
                            src="<?php echo get_template_directory_uri();?>/img/397x300/03.jpg" alt="Portfolio Image">
                    </div>
                    <div class="work-content">
                        <h3 class="color-white margin-b-5">Clean Design</h3>
                        <p class="color-white margin-b-0">Lorem ipsum dolor sit amet consectetur adipiscing</p>
                    </div>
                    <a class="content-wrapper-link" href="#"></a>
                </div>
                <!-- End Work -->
            </div>
        </div>
        <!-- End Masonry Grid -->
    </div>
</div>
<!-- End Work -->
<!--========== END PAGE LAYOUT ==========-->

<?php
get_footer();
;?>