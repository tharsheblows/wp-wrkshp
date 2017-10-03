<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Child_Of_Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); // The header is in header.php. I haven't included it in this child theme, so it picks it up from twentyseventeen. https://developer.wordpress.org/reference/functions/get_header/ ?>

<div class="wrap">

	<header class="page-header">
		<?php
			the_archive_title(); // We know we're on an archive page. What is the title? https://developer.wordpress.org/reference/functions/the_archive_title/
			the_archive_description(); // The description? https://developer.wordpress.org/reference/functions/the_archive_description/
		?>
	</header><!-- .page-header -->

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
		// We're getting ready to start the Loop! Here's a good explanation of it: https://codex.wordpress.org/The_Loop_in_Action
		// Let's only loop through the posts if there are any. :)
		if ( have_posts() ) : ?>
			<?php
			// Loop through each post the query returned
			while ( have_posts() ) : the_post();

				// Usually this would be in its own file but I'm including here so it's easier to see
				// All of these functions know which post they're on, so there is no need to pass through the id when you're using them in the loop ?>
				<article>
					
					<header class="entry-header">
						<div class="entry-meta">
							<?php
							echo twentyseventeen_time_link(); // This shows the time posted. In twentyseventeen, they've made a custom function for it.
							twentyseventeen_edit_link();	// If a user has permission to edit the post, the edit link will show up. In twentyseventeen, they've made a custom function for it.
							// There are core functions you can use but these look nicer with the theme so I've left them. :)
							?>
						</div><!-- .entry-meta -->
				
						<?php
						// This prints the title to the page, surrounded by its args which make it a link: https://developer.wordpress.org/reference/functions/the_title/
						the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
						?>
					</header><!-- .entry-header -->
				
					<div class="entry-content">
						<?php
						// https://developer.wordpress.org/reference/functions/the_content/
						the_content(); // This is the post content itself! If there is a "more" link, it will only show the part of the content above the more link.
						?>
					</div><!-- .entry-content -->

					<!-- <img src="/wp-content/themes/twentyseventeen/assets/images/sandwich.jpg" alt="decorative image added to the loop" /> -->
				
				</article><!-- #post-## -->

			<?php

			endwhile; // Are there more posts to loop through? If so, keep looping. If not, we're done.

			the_posts_pagination(); // We're not in the loop anymore, but we still know what query we did. Are there more posts to show? This is the pagination.

		else : // If there are no posts from the query, let people know.
			// This template basically just says "No posts, sorry!"
			get_template_part( 'template-parts/post/content', 'none' );

		endif;
		// And we're done with the entire loop bit from checking whether to loop to looping to being all done.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

	<?php get_sidebar(); // This is the sidebar on the page. https://developer.wordpress.org/reference/functions/get_sidebar/ ?>
</div><!-- .wrap -->

<?php get_footer(); // The footer is here in the child theme so that one is used. https://developer.wordpress.org/reference/functions/get_footer/
