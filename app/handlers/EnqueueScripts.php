<?php

namespace lazy_coder\handlers;


class EnqueueScripts {

	public static function init()
	{
		//активация стилей
		add_action('wp_enqueue_scripts', [self::class, 'style_method']);
		//активация скриптов
		add_action('wp_enqueue_scripts', [self::class, 'script_method']);
	}
	//подключение стилей
	public static function style_method() {
			wp_enqueue_style('simple-line', get_template_directory_uri() . '/vendor/simple-line-icons/simple-line-icons.min.css');
			wp_enqueue_style('bootstrap', get_template_directory_uri() . '/vendor/bootstrap/css/bootstrap.min.css');
			wp_enqueue_style('animate', get_template_directory_uri() . '/css/animate.css');
			wp_enqueue_style('swiper', get_template_directory_uri() . '/vendor/swiper/css/swiper.min.css');
			wp_enqueue_style('layout', get_template_directory_uri() . '/css/layout.min.css');
			wp_enqueue_style('fonts-google', 'http://fonts.googleapis.com/css?family=Hind:300,400,500,600,700');		
	}
	//подключение скриптов
	public static function script_method() {

		if (!is_admin()) {
			wp_deregister_script('jquery');
			wp_register_script('jquery', get_template_directory_uri() . '/vendor/jquery.min.js', [], null, true);
			wp_enqueue_script('jquery');
		}

		wp_enqueue_script('migrate', get_template_directory_uri() . '/vendor/jquery-migrate.min.js', 'jquery', '', true);
		wp_enqueue_script('bootstrap', get_template_directory_uri() . '/vendor/bootstrap/js/bootstrap.min.js', 'jquery', '', true);

		wp_enqueue_script('easing', get_template_directory_uri() . '/vendor/jquery.easing.js', 'jquery', '', true);
		wp_enqueue_script('back-to-top', get_template_directory_uri() . '/vendor/jquery.back-to-top.js', 'jquery', '', true);
		wp_enqueue_script('smooth-scroll', get_template_directory_uri() . '/vendor/jquery.smooth-scroll.js', 'jquery', '', true);
		wp_enqueue_script('wow', get_template_directory_uri() . '/vendor/jquery.wow.min.js', 'jquery', '', true);
		wp_enqueue_script('swiper', get_template_directory_uri() . '/vendor/swiper/js/swiper.jquery.min.js', 'jquery', '', true);
		wp_enqueue_script('masonry', get_template_directory_uri() . '/vendor/masonry/jquery.masonry.pkgd.min.js', 'jquery', '', true);
		wp_enqueue_script('imagesloaded', get_template_directory_uri() . '/vendor/masonry/imagesloaded.pkgd.min.js', 'jquery', '', true);
		wp_enqueue_script('layout', get_template_directory_uri() . '/js/layout.min.js', 'jquery', '', true);
		wp_enqueue_script('component-wow', get_template_directory_uri() . '/js/components/wow.min.js', 'jquery', '', true);
		wp_enqueue_script('swiper', get_template_directory_uri() . '/js/components/swiper.min.js', 'jquery', '', true);
		wp_enqueue_script('masonry', get_template_directory_uri() . '/js/components/masonry.min.js', 'jquery', '', true);
		wp_enqueue_script('form-gmail', get_template_directory_uri() . '/js/form.js', 'jquery', '', true);

		if (is_singular() && comments_open() && get_option('thread_comments')) {
			wp_enqueue_script('comment-reply');
		}

		// Enqueue ajax url эта конструкция и подключает наш функционал с работой аджакс инам необходимо указать эту ссылку в post(myajax.url)
		wp_localize_script('form-gmail', 'myajax',
			array(
				'url' => admin_url('admin-ajax.php')
			)
		);
	}
}