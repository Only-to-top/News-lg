<section class="latest-news">

<div class="container">

  <div class="title">Последние новости</div>

  <div class="carousel-news">

    <div class="post-item">
<?php
$mypost_Query = new WP_Query( array(
'post_type'     => 'post',    /* тип записи - пост */
'post_status'   => 'publish', /* статус записи */
'category_name' => 'news'  /* рубрика */
) );

if ($mypost_Query->have_posts() ) :
/* начало цикла */
while ( $mypost_Query->have_posts() ) : $mypost_Query->the_post();
/* для отображения каждой записи берем шаблон loop-myposts.php */
get_template_part('loop-myposts'); 
endwhile;
/* конец цикла */
/* "сброс данных" */
wp_reset_postdata();
else : ?>
<p><?php echo('Извините, пока нет Новостей.'); ?></p>
<?php endif;
?>
    </div>

  </div>
</div>

</section>