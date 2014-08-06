<?php get_template_part('templates/head'); ?>
<body <?php body_class(); ?>>

<?php
do_action('get_header');
get_template_part('templates/header-top-navbar');
?>

<main role="main">
<?php include roots_template_path(); ?>
</main>

<?php get_template_part('templates/footer'); ?>

</body>
</html>