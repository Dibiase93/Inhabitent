<?php
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

<section class="fp-adventure">
			<h2>Latest Adventures</h2>
		<article class="adventure-entries">
				<?php 
				$args = array(  'post_type' => 'adventure',
								 'numberposts' => '4', 
				);
				$adventure_posts = get_posts( $args );
				?>
				<?php foreach ( $adventure_posts as $post ) : setup_postdata( $post ); ?>

			<div class="fp-adventure-content">
				
				<?php if ( has_post_thumbnail() ) : ?>
				<div class="adventure-thumbnail">
    				<a href="<?php the_permalink(); ?>" title="<?php the_title()?>">
        				<?php the_post_thumbnail('large'); ?>
			   		</a>
				</div>
				   
				<?php endif; ?>
			<div class="adventure-text">
                <h3><a href="<?php the_permalink(); ?>"><?php the_title()?></a></h3>
				
				<div class="read-more-btn">
					<a  href="<?php the_permalink(); ?>">Read More</a>
				</div>
			</div>

				
			</div>
				  <?php endforeach; wp_reset_postdata(); ?>
		</article>	

			 </section>
			 
		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
