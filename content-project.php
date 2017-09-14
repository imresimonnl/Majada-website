<?php get_header(); ?>

<div id="site-container">

	<div class="container">
		<div class="row">
			<div class="content">
				<div class="site-post-header" style="background: url('<?php the_post_thumbnail_url(); ?>') center center no-repeat;">
				</div>

				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<div class="col-md-8">
					 	<h2>
					 		<?php the_title(); ?>
					 	</h2>

					 	<div class="entry">
					 		<?php the_content(); ?>
					 	</div>
					</div>

					<div class="col-md-4 project-info">
						<div class="project-info-inner">
							<?php if ( get_field( 'opdrachtgever' ) ): ?>
								<h3>Aanvullende informatie</h3>
								<p>
									 <?php the_field('opdrachtgever'); ?>
								</p>
								<p>
									<a target="_blank" href="<?php the_field('samenwerking_link'); ?>">
										<?php the_field('samenwerking'); ?>
									</a>
								</p>
								<br/>
								
								<!-- Show kenmerken -->
								<?php if ( get_field( 'kenmerken' ) ): ?>
									<ul>
										<li><?php the_field('kenmerken'); ?></li>
									</ul>
								<?php else: ?>
									<!-- Empty -->
								<?php endif; ?>


								<!-- Show link -->
								<?php if ( get_field( 'link' ) ): ?>
									<i class="icon-arrow-right"></i>
									<a href="<?php the_field('link'); ?>" target="_blank">
										<?php the_field('link-titel'); ?>
									</a>
								<?php else: ?>
									<!-- Empty -->
								<?php endif; ?>
							<?php else: ?>
								<!-- Empty -->
							<?php endif; ?>
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