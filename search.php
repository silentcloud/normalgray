<?php get_header(); ?>
	<section id="main" class="fn-left">
		<h1><?php _e("Search"); ?>: <?php the_search_query(); ?></h1>
		<ul id="post_list" class="search_list">
			<?php while ( have_posts() ) : the_post(); ?>
			<li <?php post_class(); ?>>
				<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
				<div class="meta"><time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y-m-d'); ?></time> |<address> <?php _e("Author:"); ?><?php the_author(); ?></address> | <?php _e("Categories:"); ?><?php the_category('、') ?> | <?php _e("Tags:"); ?><?php the_tags(__(' '), '、'); ?></div>
			</li>
			<?php endwhile; ?>
		</ul>
		<div class="navigation">
			<?php wp_pagenavi() ?>
		</div>
	</section>
	<?php get_sidebar(); ?>
<?php get_footer(); ?>
