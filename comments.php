<?php if ( post_password_required() ) : ?>
<?php _e( 'Enter your password to view comments.' ); ?>
<?php return; endif; ?>
<section id="comments">	
	<?php if ( have_comments() ) : ?>
		<article>
		<h3><?php comments_number(__('No Comments', '1 Comment', '% Comments' ));?></h3>
		<ol class="comment_list">
			<?php wp_list_comments( array ('avatar_size'=>24,'type'=>'comment'));?>
		</ol>
		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
			<div class="fn-mt10 fn-clear">	
    	    	<span class="fn-left"><?php previous_comments_link( __( '&laquo; Older Comments' ) ); ?></span>
        		<span class="fn-right"><?php next_comments_link( __( 'Newer Comments &raquo;' ) ); ?></span>
    		</div>
		<?php endif; ?>
	<?php elseif ( ! comments_open() && ! is_page() && post_type_supports( get_post_type(), 'comments' ) ) : ?>
		<p><?php _e( 'Comments are closed.' ); ?></p>
		</article>
	<?php endif; ?>
	<?php comment_form(); ?>
</section>
