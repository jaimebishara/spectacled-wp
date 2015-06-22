<?php while (have_posts()) : the_post(); ?>
<?php endwhile; ?>
<div class="row">
	<div class="col-sm-6">
		<div class="contactPageContent">
			<?php the_content(); ?>
		</div>
	</div>
	<div class="col-sm-6 contactForm">
			<?php echo do_shortcode('[contact-form-7 id="5260" title="Contact form 1"]'); ?>
	</div>
</div>
