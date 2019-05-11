<?php 
namespace lazy_coder\handlers;


//custom posttype


class Posttypes {
  public static function init() {
      add_action( 'init', [self::class, 'benefits_type'] );

      //из генератора https://www.wp-hasty.com/tools/wordpress-custom-post-type-generator/
      // add_action( 'init', 'create__cpt', 0 );//это нам не нужно

      add_action('init', [self::class, 'logotypes_type']);
  }
  public static function benefits_type() {
      
    //это ручной кастомный пост
          register_post_type( 'acme_product',//это имя которое мы видим в строке браузера
            array(
              'labels' => array(
                'name' => __( 'Products' ),
                'singular_name' => __( 'Product' )
              ),
              'public' => true,
              'has_archive' => true,
            )
          );     



          //из генератора https://www.wp-hasty.com/tools/wordpress-custom-post-type-generator/
          // Register Custom Post Type Преимущества

          $labels = array(
            //шото чего не будет можно удалить
            'name' => _x( 'Преимущества', 'Post Type General Name', 'lazy_coder' ),
            'singular_name' => _x( 'Преимущества', 'Post Type Singular Name', 'lazy_coder' ),
            'menu_name' => _x( 'Преимущества', 'Admin Menu text', 'lazy_coder' ),
            'name_admin_bar' => _x( 'Преимущества', 'Add New on Toolbar', 'lazy_coder' ),
            'archives' => __( 'Преимущества Archives', 'lazy_coder' ),
            'attributes' => __( 'Преимущества Attributes', 'lazy_coder' ),
            'parent_item_colon' => __( 'Родительское Преимущество:', 'lazy_coder' ),
            'all_items' => __( 'Все Преимущества', 'lazy_coder' ),
            'add_new_item' => __( 'Добавить новое Преимущество', 'lazy_coder' ),
            'add_new' => __( 'Добавить новое', 'lazy_coder' ),
            'new_item' => __( 'Новое', 'lazy_coder' ),
            'edit_item' => __( 'Редактить Преимущества', 'lazy_coder' ),
            'update_item' => __( 'Обновить Преимущества', 'lazy_coder' ),
            'view_item' => __( 'View Преимущества', 'lazy_coder' ),
            'view_items' => __( 'Посмотреть', 'lazy_coder' ),
            'search_items' => __( 'Поиск', 'lazy_coder' ),
            'not_found' => __( 'Не найдено', 'lazy_coder' ),
            'not_found_in_trash' => __( 'Корзина пуста', 'lazy_coder' ),
            'featured_image' => __( 'Featured Image', 'lazy_coder' ),
            'set_featured_image' => __( 'Set featured image', 'lazy_coder' ),
            'remove_featured_image' => __( 'Remove featured image', 'lazy_coder' ),
            'use_featured_image' => __( 'Use as featured image', 'lazy_coder' ),
            'insert_into_item' => __( 'Insert into Преимущества', 'lazy_coder' ),
            'uploaded_to_this_item' => __( 'Uploaded to this Преимущества', 'lazy_coder' ),
            'items_list' => __( 'Список преимуществ', 'lazy_coder' ),
            'items_list_navigation' => __( 'Навигация по списку', 'lazy_coder' ),
            'filter_items_list' => __( 'Фильтр', 'lazy_coder' ),
          );
          $args = array(
            'label' => __( 'Преимущества', 'lazy_coder' ),
            'description' => __( '', 'lazy_coder' ),
            'labels' => $labels,
            'menu_icon' => 'dashicons-megaphone',
            'supports' => array('title', 'editor'),
            'taxonomies' => array(),
            'public' => false,
            'show_ui' => true,
            'show_in_menu' => true,
            'menu_position' => 5,
            'show_in_admin_bar' => true,
            'show_in_nav_menus' => true,
            'can_export' => true,
            'has_archive' => false,
            'hierarchical' => false,
            'exclude_from_search' => false,
            'show_in_rest' => true,
            'publicly_queryable' => false,
            'capability_type' => 'post',
          );
          register_post_type( 'benefits', $args );
      }
      public static function logotypes_type()	{
		$labels = array(
			'name' => _x('Логотипы партнеров', 'Post Type General Name', 'lazy_coder'),
			'singular_name' => _x('Логотипы партнеров', 'Post Type Singular Name', 'lazy_coder'),
			'menu_name' => _x('Логотипы партнеров', 'Admin Menu text', 'lazy_coder'),
			'name_admin_bar' => _x('Логотип партнера', 'Add New on Toolbar', 'lazy_coder'),
			'archives' => __('Архивы', 'lazy_coder'),
			'attributes' => __('Атрибуты', 'lazy_coder'),
			'all_items' => __('Все логотипы', 'lazy_coder'),
			'add_new_item' => __('Добавить новый логотип', 'lazy_coder'),
			'add_new' => __('Добавить новый', 'lazy_coder'),
			'new_item' => __('Новый', 'lazy_coder'),
			'edit_item' => __('Редактировать логотип', 'lazy_coder'),
			'update_item' => __('Обновить логотип', 'lazy_coder'),
			'view_item' => __('Посмотреть', 'lazy_coder'),
			'view_items' => __('Посмотреть', 'lazy_coder'),
			'search_items' => __('Поиск', 'lazy_coder'),
			'not_found' => __('Не найдено', 'lazy_coder'),
			'not_found_in_trash' => __('Корзина пуста', 'lazy_coder'),
			'items_list' => __('Список преимуществ', 'lazy_coder'),
			'items_list_navigation' => __('Навигация по списку', 'lazy_coder'),
			'filter_items_list' => __('Фильтр', 'lazy_coder'),
		);
		$args = array(
			'label' => __('Логотипы партнеров', 'lazy_coder'),
			'description' => __('', 'lazy_coder'),
			'labels' => $labels,
			'menu_icon' => 'dashicons-image-filter',
			'supports' => array('title', 'thumbnail'),
			'taxonomies' => array(),
			'public' => false,
			'show_ui' => true,
			'show_in_menu' => true,
			'menu_position' => 5,
			'show_in_admin_bar' => true,
			'show_in_nav_menus' => true,
			'can_export' => true,
			'has_archive' => false,
			'hierarchical' => false,
			'exclude_from_search' => false,
			'show_in_rest' => true,
			'publicly_queryable' => false,
			'capability_type' => 'post',
		);
		register_post_type('logotypes', $args);
	}
}
;?>