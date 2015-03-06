<?php while (have_posts()) : the_post(); ?>
<article class="project">

<header>
<div class="single-collumn">
<h1><?php the_title(); ?></h1>
<p class="lead"><?php echo simple_fields_value("strapline"); ?></p>
</div>
</header>

<div class="project-description">
<?php the_content(); ?>
</div><!-- /project-description -->
    
</article>

<?php endwhile; ?>