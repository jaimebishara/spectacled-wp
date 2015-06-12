<div>
	<!-- <?php dynamic_sidebar('sidebar-primary'); ?> -->

	<a href="http://www.facebook.com/TheSpectacled" title="Facebook" target="_blank"><fa class="fa fa-facebook-official"></fa></a>

	<a href="http://twitter.com/thespectacled/" title="Twitter" target="_blank"><fa class="fa fa-twitter"></fa></a>

	<a href="http://www.instagram.com/thespectacled/" title="Instagram" target="_blank"><fa class="fa fa-instagram"></fa></a>

	<?php get_search_form(); ?>

	<h3>On Instagram</h3>

	<?php echo do_shortcode('[instagram-feed num=2 cols=2]'); ?>

	<h3>Latest Articles</h3>

	<?php $args = array(
		'posts_per_page'   => 2,
		'offset'           => 0,
		'category'         => '',
		'category_name'    => '',
		'orderby'          => 'date',
		'order'            => 'DESC',
		'include'          => '',
		'exclude'          => '',
		'meta_key'         => '',
		'meta_value'       => '',
		'post_type'        => array( 'articles', 'get_to_know' ),
		'post_mime_type'   => '',
		'post_parent'      => '',
		'post_status'      => 'publish',
		'suppress_filters' => true 
	);

	$posts_array = get_posts( $args ); ?>
	<!-- For debugging -->
	<!-- <?php var_dump($posts_array); ?> -->

	<?php 

	foreach ($posts_array as $post ) : setup_postdata( $post );
		$post_type =  get_post_type(get_the_ID());
		$images = rwmb_meta( 'spec_fashion', 'type=image&size=main-image' );
			foreach ( $images as $image ) {
				$image_url = $image['url'];
			} ?>

		<div class="article-sidebar" style="background-image: url('<?php echo $image_url; ?>');">
			<?php if($post_type == 'get_to_know') {
				echo '<span class="post-type-label">Get to know:</span>';
			}
			?>
			<a href="<?php the_permalink(); ?>"><h2 class="secondary"><?php the_title(); ?></h2></a>
		</div>
		<?php endforeach; ?>
	<?php wp_reset_postdata(); ?>
</div>
