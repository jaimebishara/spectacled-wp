<div class="row">
	<div class="col-xs-12">
		<?php
			$args=array(
				'exclude' => '1',
				'orderby' => 'name',
				'order' => 'ASC'
			);
			$categories=get_categories($args);
			foreach($categories as $category) :

				$randpost = get_posts(
					array(
						'numberposts' => 1,
						'category' => $category->cat_ID
					)
				);
				$randpostid = ($randpost[0]->ID);
		?>

						<li>
							<?php
								$images = rwmb_meta( 'spec_eyewear', 'type=image&size=square', $randpostid );
								foreach ( $images as $image ) {
								    echo '<a href="' . get_category_link( $category->term_id ) . '" title="' . sprintf( __( "View all posts in %s" ), $category->name ) . '" ' . '>
								    	<img src='.$image[url].' alt='.$image[alt].' />
								    </a>';
								}

							?>
							<?php echo '<h2><a href="' . get_category_link( $category->term_id ) . '" title="' . sprintf( __( "View all posts in %s" ), $category->name ) . '" ' . '>' . $category->name.'</a> </h2> '; ?>
						</li>

						<?php endforeach; ?>
					</ul>
		</div>
	</div>
