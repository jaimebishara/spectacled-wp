<?php
/**
 * Registering meta boxes
 *
 * All the definitions of meta boxes are listed below with comments.
 * Please read them CAREFULLY.
 *
 * You also should read the changelog to know what has been changed before updating.
 *
 * For more information, please visit:
 * @link http://www.deluxeblogtips.com/meta-box/
 */

/********************* META BOX DEFINITIONS ***********************/

/**
 * Prefix of meta keys (optional)
 * Use underscore (_) at the beginning to make keys hidden
 * Alt.: You also can make prefix empty to disable it
 */
// Better has an underscore as last sign
$prefix = 'spec_';

global $meta_boxes;

$meta_boxes = array();

// 2nd meta box
$meta_boxes[] = array(
	'title' => 'Post Images',
	'pages' => array( 'post', 'article', 'get_to_know'),
	'fields' => array(
		// PLUPLOAD IMAGE UPLOAD (WP 3.3+)
		array(
			'name'             => 'Eyewear Image',
			'id'               => "{$prefix}eyewear",
			'type'             => 'plupload_image',
			'max_file_uploads' => 1,
		),
		array(
			'name'             => 'Fashion Image',
			'id'               => "{$prefix}fashion",
			'type'             => 'plupload_image',
			'max_file_uploads' => 1,
		)
	)
);

/********************* META BOX REGISTERING ***********************/

/**
 * Register meta boxes
 *
 * @return void
 */
function YOUR_PREFIX_register_meta_boxes()
{
	// Make sure there's no errors when the plugin is deactivated or during upgrade
	if ( !class_exists( 'RW_Meta_Box' ) )
		return;

	global $meta_boxes;
	foreach ( $meta_boxes as $meta_box )
	{
		new RW_Meta_Box( $meta_box );
	}
}
// Hook to 'admin_init' to make sure the meta box class is loaded before
// (in case using the meta box class in another plugin)
// This is also helpful for some conditionals like checking page template, categories, etc.
add_action( 'admin_init', 'YOUR_PREFIX_register_meta_boxes' );