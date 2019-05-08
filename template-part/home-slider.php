<?php 
if(!defined('ABSPATH')) {
    die();
}

//цикл для вывода инфы
$args =[
    //выводить из категории 3
'cat' => 3,
//сколько постов выводить
'showposts'=>2,
//игнорировать закрепленные записи-
//т.е если запись закрепленная то она будет во все циклы влезать
'ignore_sticky_posts'=>true, //игнорировать?-да true
//можно указать сортировку
// 'orderby'=>'title' //title date...
// 'order'=> 'desc'//и как именно desc-от я до а или asc-от а до я
//поумолчанию сортирует по дате от новой к старой
];
$loop = new WP_Query($args);
//если луп содержит посты то будем выводить след данные
if($loop->have_posts()):


;?>
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
    <div class="container">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        </ol>
    </div>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        <?php
        //вот тут будем циклить данные
        while($loop->have_posts()) :$loop->the_post()
        ;?>
        <div class="item">
            <img class="img-responsive" src="<?php echo get_the_post_thumbnail_url(get_the_ID());?>"
                alt="<?php the_title();?>">
            <div class="container">
                <div class="carousel-centered">
                    <div class="margin-b-40">
                        <h1 class="carousel-title"><?php the_title();?></h1>
                        <p><?php the_content();?></p>
                    </div>
                    <a href="<?php the_permalink();?>"
                        class="btn-theme btn-theme-sm btn-white-brd text-uppercase"><?php esc_html_e('Explore', 'lazy_coder');?></a>
                </div>
            </div>
        </div>
        <?php
      endwhile;
      wp_reset_query();//функция которая сбивает запросы если запросов 3-7-...то возможны ошибки без нее
      ?>
    </div>
</div>
<?php
endif;?>