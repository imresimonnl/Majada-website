<?php
    /*
        Template Name: content
    */
?>

<div id="site-container">
		<div id="site-home" class="js-fullheight-home" data-section="home" style="background-image: url(http://www.majada.nl/wp-content/themes/Majada-website/images/hero_bg1.jpg);"data-stellar-background-ratio="0.5">
			<div class="container">
				<div class="col-md-6 col-md-offset-3 text-center">
					<div class="js-fullheight-home site-copy">
						<div class="js-fullheight-home site-copy-inner">
							<h1>Majada Projectmanagement</h1>
							<p>We zijn momenteel hard bezig om een nieuwe huisstijl en website te ontwikkelen.<br />
Maar we zijn natuurlijk wel bereikbaar!</p>

							<p>
								<!-- <a href="#" data-nav-section="contact" class="btn btn-primary">
									Neem contact op<i class="icon-arrow-right"></i>
								</a> -->
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div id="site-contact" data-section="contact">
			<div class="container">
				<div class="col-md-6 col-md-offset-3 text-center site-heading">
					<h2>Contact</h2>
					<!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet nam itaque ipsam iste provident quo ipsam iste provident.</p> -->
				</div>
				<form action="#" method="post">
					<div class="row">

						<?php echo do_shortcode( '[contact-form-7 id="91" title="Contactformulier"]' ); ?>

						<!-- <div class="col-md-6">
							<div class="form-group">
								<input type="text" name="name" class="form-control" placeholder="Your name">
							</div>		
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<input type="email" name="email" class="form-control" placeholder="Your email">
							</div>		
						</div>
						<div class="col-md-12">
							<div class="form-group">
								<textarea name="message" id="" cols="30" rows="7" class="form-control" placeholder="Your message"></textarea>
							</div>		
						</div>
						<div class="col-md-12">
							<div class="form-group">
								<input type="submit" name="submit" value="Send message" class="btn btn-primary btn-outline">
							</div>
						</div> -->
					</div>
					
				</form>
			</div>
		</div>