<?php
/**
* Template Name: Direct Order
*/
?>
<?php get_header();?>
<div id="main-content">
	<div class="container">
		<div class="row">
			<div class="col-sm-8"><?php the_content(); ?>
				<div style="clear: both"></div>
				<?php if(get_field('enroll_default_image') && get_field('enroll_hover_image') ): ?>
					<div class="enroll">
						<a href="<?php the_field('enroll_link') ?>" target="_blank">
							<img src="<?php the_field('enroll_default_image') ?>" alt="Enroll Image" class="img-responsive center-block"
							onmouseover="this.src='<?php the_field('enroll_hover_image') ?>'"
							onmouseout="this.src='<?php the_field('enroll_link') ?>'"
							>
						</a>
					</div>
				<?php endif; ?>
			</div>
			<div class="col-sm-4" id='sidebar'>
				<?php if(get_field('sidebar_image')): ?>
					<?php if(get_field('sidebar_image_link')): ?>
						<a target="_blank" href="<?php the_field('sidebar_image_link'); ?>">
					<?php endif; ?>
					<img src="<?php the_field('sidebar_image') ?>" alt="" class="img-responsive center-block" onmouseover="this.src='<?php the_field('sidebar_image_hover') ?>';"
						onmouseout="this.src='<?php the_field('sidebar_image') ?>';">
					<?php if(get_field('sidebar_image_link')): ?>
							</a>
					<?php endif; ?>
				<?php endif; ?>
				<div id="sign-up" class="text-center">
					<?php //echo do_shortcode('[contact-form-7 id="7" title="News & Savings"]' ); ?>
					<h2>News &amp; Savings</h2>
					<p>Get news and special offers on Chromagen™ and other Avion products.</p>
					<!-- Begin MailChimp Signup Form -->
					<div id="mc_embed_signup">
						<form action="//avionrx.us8.list-manage.com/subscribe/post?u=d3319b5f2135339162b92bcaf&amp;id=33b2a88a00" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
							<div id="mc_embed_signup_scroll">
							<div class="mc-field-group form-group">
								<input type="text" value="" name="FNAME" class="required form-control" placeholder="First Name" id="mce-FNAME">
							</div>
							<div class="mc-field-group form-group">
							<input type="text" value="" name="LNAME" class="required form-control" placeholder="Last Name" id="mce-LNAME">
						</div>
						<div class="mc-field-group form-group">
						<input type="email" value="" name="EMAIL" class="required email form-control" placeholder="Email Address" id="mce-EMAIL">
					</div>
					<div id="mce-responses" class="clear">
						<div class="response" id="mce-error-response" style="display:none"></div>
						<div class="response" id="mce-success-response" style="display:none"></div>
						</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
						<div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_d3319b5f2135339162b92bcaf_33b2a88a00" tabindex="-1" value=""></div>
						<div class="clear"><input type="submit" value="SIGN UP NOW" name="subscribe" id="mc-embedded-subscribe" class="button signup btn btn-primary"></div>
						</div>
					</div>
				</form>
			</div>
			<!--End mc_embed_signup-->
		</div>
	</div>
</div>
</div>
</div>
<?php get_footer() ?>