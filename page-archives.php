<div class="row">
	<div class="col-xs-2">
		Archives//
	</div>
	<div class="col-xs-10">
		<ul>
			<?php $args = array(
				'type'            => 'monthly',
				'limit'           => '',
				'format'          => 'html', 
				'before'          => '',
				'after'           => '',
				'show_post_count' => false,
				'echo'            => 1,
				'order'           => 'DESC'
			); 
			wp_get_archives( $args ); ?>
		</ul> 
	</div>
</div>

<div class="row">
	<div class="col-xs-2">
		Tags//
	</div>
	<div class="col-xs-10">
		<?php 	
		$tags = get_tags();
		$html = '<ul class="post_tags">';
		foreach ( $tags as $tag ) {
			$tag_link = get_tag_link( $tag->term_id );

			$html .= "<li>";		
			$html .= "<a href='{$tag_link}' title='{$tag->name} Tag' class='{$tag->slug}'>";
			$html .= "{$tag->name}</a>";
			$html .= "</li>";
		}
		$html .= '</ul>';
		echo $html;
	 	?> 
	</div>
</div>