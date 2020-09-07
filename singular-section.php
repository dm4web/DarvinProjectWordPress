<section class="post_section">
    <?php the_post_thumbnail() ?>
    <div class="post_section_text"><h1 class="post_container_text_title"><?php single_post_title() ?></h1>
        <span class="post_container_text_description"><?php the_content() ?></span>
    </div>
</section>