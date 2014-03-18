<?php get_header(); ?>
	<section id="main" class="fn-left">
		<?php if ( is_day() ) : ?>
			<h2><?php printf( __( 'Daily Archives: %s' ), '<span>' . get_the_date() . '</span>' ); ?></h2>
		<?php elseif ( is_month() ) : ?>
			<h2><?php printf( __( 'Monthly Archives: %s' ), '<span>' . get_the_date( 'F Y' ) . '</span>' ); ?></h2>
		<?php elseif ( is_year() ) : ?>
			<h2><?php printf( __( 'Yearly Archives: %s' ), '<span>' . get_the_date( 'Y' ) . '</span>' ); ?></h2>
		<?php elseif ( is_tag() ) : ?>
			<h2><?php printf( __( 'Tag Archives: %s' ), '<span>' . single_tag_title( '', false ) . '</span>' ); ?></h2>
		<?php else : ?>
			<h2><?php _e( 'Blog Archives' ); ?></h2>
		<?php endif; ?>
		<ul id="post_list" class="archive_list">
			<?php while ( have_posts() ) : the_post(); ?>
			<li <?php post_class(); ?>>
				<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
				<div class="meta"><time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y-m-d'); ?></time> | <address><?php _e("Author:"); ?><?php the_author(); ?></address> | <?php _e("Categories:"); ?><?php the_category('、') ?> | <?php _e("Tags:"); ?><?php the_tags(__(' '), '、'); ?></div>
			</li>
			<?php endwhile; ?>
		</ul>
		<div class="navigation">
			<?php wp_pagenavi() ?>
		</div>
	</section>
	<?php get_sidebar(); ?>
<?php get_footer(); ?>
