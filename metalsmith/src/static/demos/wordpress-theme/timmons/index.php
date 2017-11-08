<?php
    /* WordPress uses this template to display the blog feed, NOT the template assigned to the
     * blog page assigned as the blog feed under WordPress > Settings > Reading. */
    get_header();
?>

	<main role="main">
		<!-- section -->
		<section class="blog-feed">

			<h1><?php _e( 'Latest Thoughts', 'html5blank' ); ?></h1>

			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>

		</section>
		<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
