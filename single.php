<?php get_header(); ?>
	<section id="main" class="fn-left">
		<?php while ( have_posts() ) : the_post(); ?>
			<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
				<h2><?php the_title(); ?></h2>
				<div id="post_content"><?php the_content(); ?></div>
				<div class="meta"><time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y-m-d'); ?> </time>|<address> <?php _e("Author:"); ?><?php the_author(); ?> </address>| <?php _e("Categories:"); ?><?php the_category('、') ?> | <?php _e("Tags:"); ?><?php the_tags(__(' '), '、'); ?></div>
			</article>
		<?php endwhile; ?>
		<?php comments_template(); ?>
	</section>
	<?php get_sidebar('single'); ?>
<?php get_footer(); ?>
