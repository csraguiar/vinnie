<?php

$args = array(
	'category_name' => 'journal',
	'paged' 		=> $paged,
	'order' 		=> 'ASC',
	'orderby' 		=> 'name'
);

$journal = new WP_Query( $args ); ?>
<ul class="h-feed">
<?php while ( $journal->have_posts() ) : $journal->the_post(); $entry_summary = get_post_custom_values('post_summary')[0]; ?>	
<li>
<article class="h-entry hentry">
<h2 class="p-name entry-title"><a href="<?php echo get_the_permalink(); ?>"><?php the_title(); ?></a></h2>
<p class="p-summary entry-summary"><?php echo $entry_summary; ?></p>
<?php get_template_part('templates/entry-meta'); ?>
</article>
</li>
<?php wp_link_pages(array('before' => '<nav class="pagination">', 'after' => '</nav>')); endwhile; wp_reset_postdata(); ?>
</ul>
