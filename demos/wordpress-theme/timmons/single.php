<?php get_header(); ?>

	<main role="main">
	<!-- section -->
	<section>

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

            <!-- post header -->
            <div class="single-header">

                <!-- post title -->
                <h1>
                    <span class="headline-image">»</span>
                    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
                </h1>
                <!-- /post title -->

                <!-- post details -->
                <?php $cat_class = 'single-category'; if (get_the_date('Y') > 2013 && '' != get_the_post_thumbnail()) $cat_class = 'single-category-featured'; // Create the proper class for the category tag below. ?>
                <span class="date"><?php the_time('F j, Y'); ?> <?php the_time('g:i a'); ?></span>
                <p class="<?php echo $cat_class; ?> rotate"><?php _e( 'categorized in: ', 'html5blank' ); the_category(', '); // Separated by commas ?></p>
                <?php //<span class="author"><?php _e( 'Published by', 'html5blank' ); ?? <?php the_author_posts_link(); ??</span> ?>
                <?php //<span class="comments"><?php //comments_popup_link( __( 'Leave your thoughts', 'html5blank' ), __( '1 Comment', 'html5blank' ), __( '% Comments', 'html5blank' )); ??</span> ?>
                <!-- /post details -->

            </div>
            <!-- /post header -->

            <!-- post content -->
            <div class="single-content">
			    <?php the_content(); // Dynamic Content ?>
            </div>
            <!-- /post content -->

            <!-- post navigation -->
            <div class="posts-nav shadow">
                <h3>Other Thoughts</h3>
                <?php timmons_post_nav(); // Navigate to adjacent blog posts. ?>
            </div>
            <!-- /post navigation -->

			<?php the_tags( __( 'Tags: ', 'html5blank' ), ', ', '<br>'); // Separated by commas with a line break at the end ?>

			<?php //<p><?php _e( 'This post was written by ', 'html5blank' ); the_author(); ??</p> ?>

			<?php edit_post_link(); // Always handy to have Edit Post Links available ?>

			<?php comments_template(); ?>

		</article>
		<!-- /article -->

	<?php endwhile; ?>

	<?php else: ?>

		<!-- article -->
		<article>

			<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

		</article>
		<!-- /article -->

	<?php endif; ?>

	</section>
	<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
