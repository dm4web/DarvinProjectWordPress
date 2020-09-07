<?php
$posts = get_posts(array(
    'numberposts' => 3,
    'category' => 0,
    'orderby' => 'date',
    'order' => 'DESC',
    'include' => array(),
    'exclude' => array(),
    'meta_key' => '',
    'meta_value' => '',
    'post_type' => 'post',
    'suppress_filters' => true,
)); ?>


<section class="clothes_section clothes_section__post">
    <div class="clothes_section_container"><span class="clothes_section_title">Последние новости</span>
        <div class="clothes_section_three_carts">
            <?php foreach ($posts as $post) {
                setup_postdata($post); ?>
                <div class="clothes_section_cart">
                    <div class="clothes_section_img_container clothes_section_img_container__post"><a href="<?php the_permalink(); ?>"><img class="clothes_section_img"
                                                                                src="<?php the_post_thumbnail_url(); ?>"
                                                                                alt=""></a></div>
                    <span class="clothes_section_cart_title clothes_section_cart_title__post"><a href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a></span>
                </div>
            <?php }

            wp_reset_postdata(); ?>
        </div>
    </div>
</section>