<?php 
	/* Template name: Contact */
	get_header();
?>



<div id="site-container">
	<div class="container">
		<div class="row">
			<div class="content">

				<div class="col-md-12">
					<h2><?php the_title(); ?></h2>
				</div>

				<div class="col-md-7">
				 	<div id="site-contact" data-section="contact">
							

							<form action="#" method="post">
								<div class="row">
									<?php echo do_shortcode( '[contact-form-7 id="91" title="Contactformulier"]' ); ?>
								</div>
							</form>
					</div>
				</div>

				<div class="col-md-4 col-md-offset-1">
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
						<div class="entry">
					 		<?php the_content(); ?>
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