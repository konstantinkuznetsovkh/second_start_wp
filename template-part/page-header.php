<?php
if (!defined('ABSPATH')) {
	die();
}

$tumb = get_field('page_about_thumb', get_the_ID(), true);
?>
<div class="parallax-window" data-parallax="scroll"
    style="background:url(<?php echo (is_single() ? get_the_post_thumbnail_url(get_the_ID())  : $tumb); ?>) no-repeat center;background-size:cover;">
    <div class="parallax-content container">
        <h1 class="carousel-title"><?php the_title(); ?></h1>
        <p>
            <?php
                       //подредактируем для сингл,если это статья а не стр и тоже самое сверху
                       //для этого создаем tumb
            $desc = get_field('page_about_desc', get_the_ID(), true);
            echo (is_single()) ? get_the_excerpt() : $desc;
        ?>
        </p>
    </div>
</div>