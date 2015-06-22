<?php $args=array(
	'exclude' => '1',
	'orderby' => 'name',
	'order' => 'ASC'
);

$categories=get_categories($args);
?>

<div class="row">
<?php  
foreach($categories as $category) :
	$randpost = get_posts(
	array(
		'numberposts' => 1,
		'category' => $category->cat_ID
		)
	);
	$randpostid = ($randpost[0]->ID);
		?>
<div class="col-md-2 col-sm-3 col-xs-4">
	<?php $images = rwmb_meta( 'spec_eyewear', 'type=image&size=square', $randpostid );
		foreach ( $images as $image ) {
		echo '<a href="' . get_category_link( $category->term_id ) . '" title="' . sprintf( __( "View all posts in %s" ), $category->name ) . '" ' . '>
				<img src='.$image['url'].' alt='.$image['alt'].' />
					</a>';
								}
	?>
	
	<?php echo '<p><a href="' . get_category_link( $category->term_id ) . '" title="' . sprintf( __( "View all posts in %s" ), $category->name ) . '" ' . '>' . $category->name.'</a> </p> '; ?>
</div>

	<?php endforeach; ?>
</div>


