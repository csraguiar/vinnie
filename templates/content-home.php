<?php while (have_posts()) : the_post(); $summary = get_post_custom_values('post_summary')[0]; ?>

<section class="welcome">
<div class="wrap">
<h1>Well hello!</h1>
<p class="intro"><?php echo $summary; ?></p>
</div>
</section>

<section class="about">
<div class="wrap">
<?php //the_content(); ?>

<h2>I can do these for you</h2>
<p class="about__intro intro"></p>
<ul class="about__skills">
	<li>
		<h3>Device Agnostic Web Apps &amp; Websites</h3>
		<p>A modern day approach for designing and building for the web that takes into account infinite combinations of environments where your info is consumed.</p>
	</li>
	<li>
		<h3>Content Management Made Easy</h3>
		<p>Because managing content should be easy and straightforward, I will build/customize the perfect tool for you.</p>
	</li>
	<li>
		<h3>Data Driven Design</h3>
		<p>I'll research and gather quantitative and qualitative data that will help make the design decisions that best meets your needs.</p>
	</li>
</ul>

<div class="clearfix"><a class="btn btn-large" href="mailto:hi@cesaraguiar.me?subject=Meeting">Schedule a meeting</a></div>
</div>


</section>

<section class="work">
</section>

<?php wp_link_pages(array('before' => '<nav class="pagination">', 'after' => '</nav>')); ?>
<?php endwhile; ?>
