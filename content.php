<div id="site-container">
	<div class="container">
		<div class="row">
			<div class="content">

				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				 	<div class="site-post-header" style="background: url('<?php the_post_thumbnail_url(); ?>') center center no-repeat;">
					 </div>
					
					<div class="col-md-12">
					 	<h2><?php the_title(); ?></h2>

					 	<div class="entry">
					 		<?php the_content(); ?>
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