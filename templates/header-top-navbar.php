<header role="banner">

<h1 class="logo">
<a href="<?php echo home_url(); ?>/"><?php bloginfo('name'); ?></a>
</h1>

<nav role="navigation">
<?php
if (has_nav_menu('primary_navigation')) :
wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav'));
endif;
?>
</nav>

</header>
