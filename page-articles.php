<?php $args = array(
	'posts_per_page'   => 5,
	'offset'           => 0,
	'category'         => '',
	'category_name'    => '',
	'orderby'          => 'date',
	'order'            => 'DESC',
	'include'          => '',
	'exclude'          => '',
	'meta_key'         => '',
	'meta_value'       => '',
	'post_type'        => array( 'article', 'get_to_know' ),
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
	if($post_type == 'get_to_know') {
		echo '<span class="post-type-label">Get to know:</span>';
	}
	?>
	<h2 class="articleTitle">
		<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
	</h2>
	<!-- Images  -->
		<div class="row articleImage" id="post-<?php the_ID(); ?>">
			<div class="col-xs-6">
				<div class="postImage">
					<a href="#" data-reveal-id="myModal-<?php the_ID(); ?>-a"><?php

						$images = rwmb_meta( 'spec_eyewear', 'type=image&size=main-image' );
						foreach ( $images as $image ) {
						    echo "<img src='{$image['url']}' alt='{$image['alt']}' />";
						}
	        ?>
	        		</a>
				</div>
			</div>
			<div class="col-xs-6">
				<div class="postImage">
					<a href="#" data-reveal-id="myModal-<?php the_ID(); ?>-b"><?php

						$images = rwmb_meta( 'spec_fashion', 'type=image&size=main-image' );
						foreach ( $images as $image ) {
						    echo "<img src='{$image['url']}' alt='{$image['alt']}' />";
						}

					?></a>
				</div>
			</div>

	<?php the_content(); ?>
	<div class="contentTags">
	  <p>
	    <?php the_tags( 'tags // ', ', ', '' ); ?> 
	  </p>
	</div>
<?php endforeach;
wp_reset_postdata(); ?>