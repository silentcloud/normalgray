<?php get_header(); ?>
	<section id="main" class="fn-left">
		<?php while ( have_posts() ) : the_post(); ?>
			<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
				<h2><?php the_title(); ?></h2>
				<div id="post_content"><?php the_content(); ?></div>
			</article>
		<?php endwhile; ?>
		<?php comments_template(); ?>
	</section>
	<?php get_sidebar(); ?>
<?php get_footer(); ?>
