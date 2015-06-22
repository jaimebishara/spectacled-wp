<?php $args = array(
	'posts_per_page'   => 9,
	'offset'           => 0,
	'category'         => '',
	'category_name'    => '',
	'orderby'          => 'date',
	'order'            => 'DESC',
	'include'          => '',
	'exclude'          => '',
	'meta_key'         => '',
	'meta_value'       => '',
	'post_type'        => 'post',
	'post_mime_type'   => '',
	'post_parent'      => '',
	'post_status'      => 'publish',
	'suppress_filters' => true 
);

$posts_array = get_posts( $args ); ?>
<!-- For debugging -->
<!-- <?php var_dump($posts_array); ?> -->

<div class="row">
	<?php 

	foreach ($posts_array as $post ) : setup_postdata( $post );
		?>
		<div class="col-sm-4 col-xs-6">
  			<div class="homepageImage">
  				<a href="#" data-reveal-id="myModal-<?php the_ID(); ?>-a"><?php

  					$images = rwmb_meta( 'spec_eyewear', 'type=image&size=main-image' );
  					foreach ( $images as $image ) {
  					    echo "<img src='{$image['url']}' alt='{$image['alt']}' />";
  					}

  				?></a>
  			</div>

			<?php the_title(); ?> // <?php echo the_category(); ?>
			<a href="<?php the_permalink(); ?>">Read more</a>
			
		</div>
	<?php endforeach;
	wp_reset_postdata(); ?>
</div>