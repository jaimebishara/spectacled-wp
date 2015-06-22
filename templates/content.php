<article <?php post_class(); ?>>
  <div class="col-xs-12">
  	<div class="row" id="post-<?php the_ID(); ?>">
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

  <header>
      <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
<!--       <?php get_template_part('templates/entry-meta'); ?> -->
  </header>

  <div class="contentCategory">
    <p>
      Eyewear: <?php the_category(', '); ?>
    </p>
  </div>

  <div class="entry-summary">
    <?php the_excerpt(); ?>
  </div>
  
  <div class="contentTags">
    <p>
      <?php the_tags( 'tags // ', ', ', '' ); ?> 
    </p>
  </div>

</article>
