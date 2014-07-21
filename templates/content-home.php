<?php while (have_posts()) : the_post(); $summary = get_post_custom_values('post_summary')[0]; ?>
	<header>
	<div class="single-collumn">
	<h1>Well hello!</h1>
	<p class="lead"><?php echo $summary; ?></p>
	</header>
	</div>
	<?php wp_link_pages(array('before' => '<nav class="pagination">', 'after' => '</nav>')); ?>
<?php endwhile; ?>
