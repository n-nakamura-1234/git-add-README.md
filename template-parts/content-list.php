<?php

/**
 * @package BusinessPress
 */
?>

<div class="post-list">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<div class="post-list-content">
			<header class="entry-header">
				<?php businesspress_entry_meta(); ?>
				<h3 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h3>
			</header><!-- .entry-header -->
		</div><!-- .post-list-content -->
		<?php if (has_post_thumbnail() && !get_theme_mod('businesspress_hide_featured_image_on_list')) : ?>
			<div class="post-thumbnail">
				<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('businesspress-post-thumbnail-list'); ?></a>
			</div><!-- .post-thumbnail -->
		<?php endif; ?>
	</article><!-- #post-## -->
</div><!-- .post-list -->