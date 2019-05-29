<?php
get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

            <section class="shop-container">
				<h1>Shop Stuff</h1>
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
                    <p>
                      <a href="<?php echo get_term_link( $term ); ?>">
                                    <?php echo $term->name; ?>
                      </a>
                    </p>
				</div>
				<?php
				 endforeach;
				 ?>
		    </div> 
			<!-- end of producte terms -->
		</section>

            <?php /* Start the Loop */ ?>
            
            <div class="article-container">
			<?php while ( have_posts() ) : the_post(); ?>

				
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                     
                    
                        <?php if ( has_post_thumbnail() ) : ?>
                            <?php the_post_thumbnail( 'large' ); ?>
                        <?php endif; ?>
                        
                        <div class="product-content">
                            <?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
                            <span class="entry-price"><?php echo CFS()->get( 'product_price' );?></span>
                        </div>

                        <?php if ( 'post' === get_post_type() ) : ?>
                        <div class="entry-meta">
                            <?php red_starter_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?> / <?php red_starter_posted_by(); ?>
                        </div><!-- .entry-meta -->
            

                        <?php endif; ?>
                

                </article><!-- #post-## -->
				

			<?php endwhile; ?>
            </div>
			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->
    <?php get_footer(); ?>