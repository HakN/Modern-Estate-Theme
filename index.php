<?php
/*
 * This template is used for the display of single pages.
 */

get_header(); ?>

	<?php get_template_part( 'yoast', 'breadcrumbs' ); // Yoast Breadcrumbs ?>

	<section class="inner-content cf">
		<?php tha_content_before(); ?>
		<section class="home-content content-wrapper cf">
			<?php tha_content_top(); ?>

			<?php get_template_part( 'loop' ); // Loop ?>

			<?php tha_comments_before(); ?>
			<?php comments_template(); // Comments ?>
			<?php tha_comments_after(); ?>

			<?php tha_content_bottom(); ?>
		</section>
		<?php tha_content_after(); ?>

		<?php get_sidebar(); ?>
	</section>

<?php get_footer(); ?>