<?php 

use lazy_coder\App;

    if(!defined('ABSPATH') ) {
        die();
    }

add_action('after_setup_theme', 'theme_setup');
if(!function_exists('twentynineteen_setup')) :
    function theme_setup() {
//если хотим использовать класс App то :
//require_once get_template_directory() . '/app/app.php';
// echo \lazy_coder\App::get_hello();
//но если у нас более сложный проект где в папке app больше директорий разных
//и там может быть множество классов и чтоб не делать длинную ленту мы подключаем composer
//и настраивать автозагрузку классов и мы сможем писать только одну строчку=> echo \lazy_coder\App::get_hello();

//подключаем файл автозагрузки композера
require_once get_template_directory() . '/vendor/autoload.php';
// echo \lazy_coder\App::get_hello();
App::init();
        //Path languages
        load_theme_textdomain('lazy_coder',get_template_directory() . '/languages');

        //Thumbs
        add_theme_support('post-thumbnails');
        add_image_size( '360', 360,260);
        add_image_size( '759', 759,380);
        add_image_size( '377', 377,380);
        
        //register menu
        register_nav_menus(
            array(
                'menu-menu'    => __( 'Главное меню', 'lazy_coder' ),
                'footer-menu' => __( 'Меню в подвале', 'twentyseventeen' ),
            )
        );
    }
endif;
//функция по добавлению класса в li
function atg_menu_classes($classes, $item, $args) {
    if($args->theme_location == 'menu-menu') {
      $classes[] = 'nav-item';
    }
    return $classes;
  }
  add_filter('nav_menu_css_class', 'atg_menu_classes', 1, 3);
  //функция которая добавляет класс к ссылкам в меню
  function add_class_to_all_menu_anchors( $atts ) {
    $atts['class'] = 'nav-item-child nav-item-hover';
 
    return $atts;
}
add_filter( 'nav_menu_link_attributes', 'add_class_to_all_menu_anchors', 10 );
//фильтр and function для присвоения класса активноу ли
// function artbt_filter_current_item_menu_header($classes) {
//     if ( in_array('current-menu-item', $classes) ) {
//         $classes[] = 'active';
//     }
//     return $classes;
//     }
//     add_filter('nav_menu_css_class', ' artbt_filter_current_item_menu_header' );

;?>