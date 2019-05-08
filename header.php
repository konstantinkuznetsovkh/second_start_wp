<!DOCTYPE html>
<html lang="en" class="no-js">
<!-- BEGIN HEAD -->

<head>
    <meta charset="utf-8" />
    <title>Metronic "Asentus" Frontend Freebie</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />

    <!-- GLOBAL MANDATORY STYLES -->
    <!-- <link href="http://fonts.googleapis.com/css?family=Hind:300,400,500,600,700" rel="stylesheet" type="text/css">
    <link href="<?php //echo get_template_directory_uri();?>/vendor/simple-line-icons/simple-line-icons.min.css"
        rel="stylesheet" type="text/css" /> -->
    <!-- <link href="<?php //echo get_template_directory_uri();?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"
        type="text/css" /> -->

    <!-- PAGE LEVEL PLUGIN STYLES -->
    <!-- <link href="<?php //echo get_template_directory_uri();?>/css/animate.css" rel="stylesheet"> -->
    <!-- <link href="<?php //echo get_template_directory_uri();?>/vendor/swiper/css/swiper.min.css" rel="stylesheet" -->
    <!-- type="text/css" /> -->

    <!-- THEME STYLES -->
    <!-- <link href="<?php //echo get_template_directory_uri();?>/css/layout.min.css" rel="stylesheet" type="text/css" /> -->

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri();?>/favicon.ico" />
    <?php wp_head();?>
</head>
<!-- END HEAD -->

<!-- BODY -->

<body>

    <!--========== HEADER ==========-->
    <header class="header navbar-fixed-top">
        <!-- Navbar -->
        <nav class="navbar" role="navigation">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="menu-container">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="toggle-icon"></span>
                    </button>

                    <!-- Logo -->
                    <div class="logo">
                        <a class="logo-wrap" href="index.html">
                            <img class="logo-img logo-img-main"
                                src="<?php echo get_template_directory_uri();?>/img/logo.png" alt="Asentus Logo">
                            <img class="logo-img logo-img-active"
                                src="<?php echo get_template_directory_uri();?>/img/logo-dark.png" alt="Asentus Logo">
                        </a>
                    </div>
                    <!-- End Logo -->
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse nav-collapse">
                    <!-- <div class="menu-container"> -->
                    <?php
                $args = [
                                        //на всяк [] тоже самое что array()
                     'menu'            => '[$menu-menu]', 
       //menuTop это чтоб меню отображалось как в админке,по-ум по-алф
                  'theme_location' => 'menu-menu',
                //   'menu' => '',
                  'container' => 'div',
                   //если пустые кавычти то вп ничего не выводит
       // 'items_wrap' => '%3$s',-не работает
                  'container_class' => 'menu-container',
                //   'container_id' => '',
                  'menu_class' => 'navbar-nav navbar-nav-right',
                  'menu_id' => '',
                  'echo' => true,
                  'fallback_cb' => '',
                  'before' => '',
                  'after' => '',
                  'link_before' => '',
                  'link_after' => '',
                  'items_wrap' => '<ul id = "%1$s" data-type="navbar" class = "%2$s">%3$s</ul>',
                ];

                wp_nav_menu( $args ); 

                ?>
                    <!-- <ul class="navbar-nav navbar-nav-right">
                            <li class="nav-item"><a class="nav-item-child nav-item-hover active"
                                    href="index.html">Home</a></li>
                            <li class="nav-item"><a class="nav-item-child nav-item-hover"
                                    href="pricing.html">Pricing</a></li>
                            <li class="nav-item"><a class="nav-item-child nav-item-hover" href="about.html">About</a>
                            </li>
                            <li class="nav-item"><a class="nav-item-child nav-item-hover"
                                    href="products.html">Products</a></li>
                            <li class="nav-item"><a class="nav-item-child nav-item-hover" href="faq.html">FAQ</a></li>
                            <li class="nav-item"><a class="nav-item-child nav-item-hover"
                                    href="contact.html">Contact</a></li>
                        </ul> -->
                    <!-- </div> -->
                </div>
                <!-- End Navbar Collapse -->
            </div>
        </nav>
        <!-- Navbar -->
    </header>
    <!--========== END HEADER ==========-->