<?php 
	/* Template name: Nieuws */
	get_header();
?>



<div id="site-container">
	<div class="container">
		<div class="row">
			<div class="content">
				<div class="col-md-12">
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
						<h2>
				 			<?php the_title(); ?>
				 		</h2>

						<div class="entry">
					 		<?php the_content(); ?>
					 	</div>

					 	<div id="site-gallery">
							<div>
								<?php
									global $post;
									$args = array( 'posts_per_page' => -1, 'order'=> 'DSC', 'orderby' => 'date', 'category' => '18' );
									$postslist = get_posts( $args );

									foreach ( $postslist as $post ) :
									  setup_postdata( $post ); ?> 
										<a href="<?php the_permalink(); ?>" class="site-item" style="background-image: url('<?php the_post_thumbnail_url(); ?>')">
										<div class="site-overlay"></div>
										<div class="site-copy">
											<div class="site-copy-inner">
												<h2><?php the_title(); ?></h2>
												<h3><?php the_excerpt(); ?></h3>
											</div>
										</div>
									</a>
									<?php
									endforeach; 
									wp_reset_postdata();
								?>
							</div>
						</div>

					<?php endwhile; else : ?>
					 	<p>
					 		<?php _e( 'Helaas, deze pagina bestaat niet..' ); ?>
					 	</p>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</div>

<?php
	get_footer();
?>