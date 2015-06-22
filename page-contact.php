<?php while (have_posts()) : the_post(); ?>
<?php endwhile; ?>
<div class="row">
	<div class="col-s-6">
		<div class="pageContent">
			<?php the_content(); ?>
		</div>
	</div>
	<div class="col-s-6">
		<div class="twelve columns postinfo">
			<?php echo do_shortcode('[contact-form-7 id="5260" title="Contact form 1"]'); ?>
		</div>
	</div>
</div>
