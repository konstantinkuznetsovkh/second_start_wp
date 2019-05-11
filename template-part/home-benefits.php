<?php
if (!defined('ABSPATH')) {
	die();
}
// $args = [
//     'post_type' => 'benefits', //по умолчанию пост тайп=>пост
// ];
// $loop =new Wp_Query($args) ;
//$loop =new WP_query('post_type=benefits); м ожно и так без верхнего $args
$loop = new WP_Query('post_type=benefits&order=asc&order=asc');
// post_type=benefits а дальше сортировка по алфавиту от а до я а нам надо по дате &order=asc

if ($loop->have_posts()) :
	?>
<div class="bg-color-sky-light" data-auto-height="true">
    <div class="content-lg container">
        <?php
			$i = 0; //при каждом цикле i будет увеличиваться на1
			while ($loop->have_posts()) : $loop->the_post();
				$i++;

				echo ($i == 1) ? '<div class="row row-space-1 margin-b-2">' : '';
				echo ($i == 4) ? '</div><div class="row row-space-1">' : ''; ?>
        <div class="col-sm-4<?php echo ($i <= 2) ? ' sm-margin-b-2' : ''; ?>">
            <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".3s">
                <div class="service" data-height="height">
                    <div class="service-element">
                        <i class="service-icon icon-<?php the_field('benefits_icon_name', get_the_ID(), true); ?>"></i>
                        <!-- если используем acf то the_fireld -это от плагина в скобках  имя группы полей,ид поста-get_the_ID  и в конце тру-выводить строчно -->
                    </div>
                    <div class="service-info">
                        <h3><?php the_title(); ?></h3>
                        <p class="margin-b-5"><?php the_content(); ?></p>
                    </div>
                    <!-- <a href="#" class="content-wrapper-link"></a> -->
                </div>
            </div>
        </div>
        <?php
                echo ($i == 6) ? '</div>' : '';

			endwhile;
			wp_reset_query();
			?>
    </div>
</div>
<?php
endif;
?>
<!-- говорит что закрысать пшп тег дурной тоон? -->