<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>


	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<div class="hp-banner-container">
				<div class="hp-hero-banner">
					<img src="<?php echo get_template_directory_uri();?>/assets/images/home-hero.jpg" alt="#">
				</div>
				<div class="hp-banner-logo">
					<img src="<?php echo get_template_directory_uri();?>/assets/images/logos/inhabitent-logo-full.svg" alt="#">
				</div>
			</div>

		<section class="shop-container">
				<h2>Shop Stuff</h2>
			    <?php
				$terms = get_terms( 
					array(
					'taxonomy' => 'product-type', 
					'hide_empty' => 0
					)	
				 ); 
				 ?>
			<div class="product-terms">
					<?php	 
				 	foreach($terms as $term):
					?>
				<div class="shop-terms">
					<img src="<?php echo get_template_directory_uri() . '/assets/images/product-type-icons/' . $term->slug . '.svg' ?>" alt="" /> 

				    <p><?php echo $term->description; ?></p>
                    <p>
                      <a href="<?php echo get_term_link( $term ); ?>">
                                    <?php echo $term->name; ?> Stuff
                      </a>
                    </p>
				</div>
				<?php
				 endforeach;
				 ?>
		    </div> 
			<!-- end of producte terms -->
		</section>
		
		  <section class="fp-journal">
			<h2>Inhabitent Journal</h2>
			<article class="journal-entries">
				<?php 
				$args = array(  'post_type' => 'post',
								 'numberposts' => '3', 
				);
				$journal_posts = get_posts( $args );
				?>
				<?php foreach ( $journal_posts as $post ) : setup_postdata( $post ); ?>

				<div class="fp-journal-content">
				<?php if ( has_post_thumbnail() ) : ?>
    			<a class="journal-thumbnail" href="<?php the_permalink(); ?>" title="<?php the_title()?>">
        			<?php the_post_thumbnail('large'); ?>
				   </a>
				   
				<?php endif; ?>
				
				<!-- post author and date -->
				<div class="journal-title-btn">
				<div class = "fp-post-meta">
					<?php echo get_the_date(); ?>
					<?php echo get_comments_number(); ?> Comments
				</div>

				  <!-- post title -->
                
					<h3>
						<a href="<?php the_permalink(); ?>"><?php the_title()?></a>
					</h3>
					<div class="read-more-btn">
						<a href="<?php the_permalink(); ?>">Read Entry</a>
					</div>
			   </div>
				</div>
				  <?php endforeach; wp_reset_postdata(); ?>
				</article>				
			
		  </section>

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
		<p class="more-adventures">
			<a href="<?php echo get_post_type_archive_link( 'adventure' ); ?>">More Adventures</a>
		</p>
			 </section>
			 
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
