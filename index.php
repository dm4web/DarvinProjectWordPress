<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <?php wp_head() ?>
</head>
<body>

<?php get_header() ?>

<?php get_template_part('slider'); ?>

<?php
if (is_home()) {
    get_template_part('news-section');
}
?>

<?php
if (is_singular()) {
    get_template_part('singular-section');
}
?>

<?php
if (is_home()) {
    get_template_part('post-section');
}
?>

<?php get_template_part('clothes-section'); ?>

<?php get_footer() ?>

<?php wp_footer() ?>

</body>
</html>