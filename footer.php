<footer class="footer">
    <!-- Links -->
    <div class="footer-seperator">
        <div class="content-lg container">
            <div class="row">

                <?php
                $menu_footer_1 = [                  
                    //  'menu'            => '[$footer-menu-1]',      
                  'theme_location' => 'footer-menu-1',            
                  'container' => 'div',        
                  'container_class' => 'col-sm-2 sm-margin-b-50',           
                  'menu_class' => 'list-unstyled footer-list',
                  'menu_id' => '',
                  'echo' => true,
                  'fallback_cb' => '',
                  'before' => '',
                  'after' => '',
                  'link_before' => '',
                  'link_after' => '',
                  'items_wrap' => '<ul id = "%1$s" data-type="navbar" class = "%2$s">%3$s</ul>',
                ];

                wp_nav_menu( $menu_footer_1 ); 

                ?>
                <?php
                $menu_footer_2 = [                  
                    //  'menu'            => '[$footer-menu-2]',      
                  'theme_location' => 'footer-menu-2',            
                  'container' => 'div',        
                  'container_class' => 'col-sm-2 sm-margin-b-30',           
                  'menu_class' => 'list-unstyled footer-list',
                  'menu_id' => '',
                  'echo' => true,
                  'fallback_cb' => '',
                  'before' => '',
                  'after' => '',
                  'link_before' => '',
                  'link_after' => '',
                  'items_wrap' => '<ul id = "%1$s" data-type="navbar" class = "%2$s">%3$s</ul>',
                ];

                wp_nav_menu( $menu_footer_2 ); 

                ?>
                <?php get_template_part('template-part/footer', 'form');?>
            </div>
            <!--// end row -->
        </div>
    </div>
    <!-- End Links -->

    <!-- Copyright -->
    <div class="content container">
        <div class="row">
            <div class="col-xs-6">
                <img class="footer-logo" src="<?php echo get_template_directory_uri();?>/img/logo.png"
                    alt="Asentus Logo">
            </div>
            <div class="col-xs-6 text-right">
                <p class="margin-b-0"><a class="color-base fweight-700"
                        href="http://keenthemes.com/preview/asentus/">Asentus</a> Theme Powered by: <a
                        class="color-base fweight-700" href="http://www.keenthemes.com/">KeenThemes.com</a></p>
            </div>
        </div>
        <!--// end row -->
    </div>
    <!-- End Copyright -->
</footer>
<!--========== END FOOTER ==========-->

<!-- Back To Top -->
<a href="javascript:void(0);" class="js-back-to-top back-to-top">Top</a>

<!-- JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- CORE PLUGINS -->
<!-- <script src="<?php //echo get_template_directory_uri();?>/vendor/jquery.min.js" type="text/javascript"></script>
<script src="<?php //echo get_template_directory_uri();?>/vendor/jquery-migrate.min.js" type="text/javascript"></script>
<script src="<?php //echo get_template_directory_uri();?>/vendor/bootstrap/js/bootstrap.min.js" type="text/javascript">
</script> -->

<!-- PAGE LEVEL PLUGINS -->
<!-- <script src="<?php //echo get_template_directory_uri();?>/vendor/jquery.easing.js" type="text/javascript"></script>
<script src="<?php //echo get_template_directory_uri();?>/vendor/jquery.back-to-top.js" type="text/javascript"></script>
<script src="<?php //echo get_template_directory_uri();?>/vendor/jquery.smooth-scroll.js" type="text/javascript"></script>
<script src="<?php //echo get_template_directory_uri();?>/vendor/jquery.wow.min.js" type="text/javascript"></script>
<script src="<?php //echo get_template_directory_uri();?>/vendor/swiper/js/swiper.jquery.min.js" type="text/javascript">
</script> -->
<!-- <script src="<?php //echo get_template_directory_uri();?>/vendor/masonry/jquery.masonry.pkgd.min.js"
    type="text/javascript"></script>
<script src="<?php //echo get_template_directory_uri();?>/vendor/masonry/imagesloaded.pkgd.min.js" type="text/javascript">
</script> -->

<!-- PAGE LEVEL SCRIPTS -->
<!-- <script src="<?php //echo get_template_directory_uri();?>/js/layout.min.js" type="text/javascript"></script>
<script src="<?php //echo get_template_directory_uri();?>/js/components/wow.min.js" type="text/javascript"></script>
<script src="<?php //echo get_template_directory_uri();?>/js/components/swiper.min.js" type="text/javascript"></script>
<script src="<?php //echo get_template_directory_uri();?>/js/components/masonry.min.js" type="text/javascript"></script> -->
<?php wp_footer();?>
</body>
<!-- END BODY -->

</html>