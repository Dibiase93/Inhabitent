<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>


	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="fp-journal">
				<h2>Inhabitent Journal</h2>
				<?php 
				$args = array(  'post_type' => 'post',
								 'numberposts' => '3', 
				);
				$journal_posts = get_posts( $args );
				?>
				<?php foreach ( $journal_posts as $post ) : setup_postdata( $post ); ?>
				
				<?php if ( has_post_thumbnail() ) : ?>
    			<a class="journal-thumbnail" href="<?php the_permalink(); ?>" title="<?php the_title()?>">
        			<?php the_post_thumbnail('large'); ?>
   				</a>
				<?php endif; ?>

				<!-- post author and date -->
					<div class = "fp-post-meta">
						<?php echo get_the_date(); ?>
						<?php echo get_comments_number(); ?> Comments
					</div>

				  <!-- post title -->
                	<h3>
						<a href="<?php the_permalink(); ?>"><h2><?php the_title()?></h2></a>
						<a class="read-more-btn" href="<?php the_permalink(); ?>">Read More</a>
					</h3>
				
				  <?php endforeach; wp_reset_postdata(); ?>
				
				
			</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
