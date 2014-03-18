<?php get_header(); ?>
	<section id="main" class="fn-left">
		<ul id="post_list">
			<?php while ( have_posts() ) : the_post(); ?>
			<li <?php post_class(); ?>>
				<article>
					<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
					<div class="excerpt">
						<?php if (has_post_thumbnail()) { ?>
							<div class="thumbnail"><a href="<?php the_permalink() ?>"><?php the_post_thumbnail(); ?></a></div>
						<?php } ?>
						<?php the_content(__('Read More &raquo;')); ?>
						<footer class="fn-clear">
							<div class="meta fn-left"><time datetime="<?php the_time('Y-m-d'); ?>"><?php _e("发表时间:"); ?><?php the_time('Y-m-d'); ?> </time>| <address><?php _e("Author:"); ?><?php the_author(); ?> </address>| <?php _e("Categories:"); ?><?php the_category('、') ?> | <?php _e("Tags:"); ?><?php the_tags(__(' '), '、'); ?></div>
							<div class="comments_num fn-right"><?php comments_popup_link(__('No Comments'), __('1 Comment'), __('% Comments')); ?></div>
						</footer>
					</div>
				</article>
			</li>
			<?php endwhile; ?>
		</ul>
		<section class="ui-page fn-clear">
			<?php wp_pagenavi() ?>
		</section>
	</section>
	<?php get_sidebar(); ?>
<?php get_footer(); ?>
