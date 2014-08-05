<?php while (have_posts()) : the_post(); $summary = get_post_custom_values('post_summary')[0]; ?>

<article <?php post_class("h-entry"); ?>>

<header>
<?php get_template_part('templates/entry-meta'); ?>
<h1 class="p-name entry-title"><?php the_title(); ?></h1>
</header>

<p class="p-summary entry-summary intro">
<?php echo $summary; ?>
</p>

<div class="e-content entry-content">
<?php the_content(); ?>
</div>

<footer>
<?php wp_link_pages(array('before' => '<nav class="page-nav"><p>' . __('Pages:', 'roots'), 'after' => '</p></nav>')); ?>
</footer>

<?php //comments_template('/templates/comments.php'); ?>
</article>

<?php endwhile; ?>
