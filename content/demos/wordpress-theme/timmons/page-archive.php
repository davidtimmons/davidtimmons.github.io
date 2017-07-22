<?php /* Template Name: Site Map Page */ get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>

			<h1><?php _e( 'Site map', 'html5blank' ); ?></h1>

            <!-- article -->
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                <!-- site pages -->
                <div class="archive-group archive-pages">
                    <h2><?php _e( 'Pages:', 'html5blank' ); ?></h2>
                    <ul>
                        <?php wp_list_pages( 'title_li=' ); ?>
                    </ul>
                    <h2><?php _e( 'Categories:', 'html5blank' ); ?></h2>
                    <ul>
                        <?php wp_list_categories( 'sort_column=name&title_li=' ); ?>
                    </ul>
                    <h2><?php _e( 'Monthly:', 'html5blank' ); ?></h2>
                    <ul>
                        <?php wp_get_archives( 'type=monthly' ); ?>
                    </ul>
                </div>
                <!-- /site pages -->

                <!-- archived posts -->
                <div class="archive-group archive-posts">
                    <h2><?php _e( 'Recent Posts:', 'html5blank' ); ?></h2>
                    <ul>
                        <?php wp_get_archives( 'type=postbypost&limit=100' ); ?>
                    </ul>
                </div>
                <!-- /archived posts -->

            </article>
            <!-- /article -->

		</section>
		<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>


