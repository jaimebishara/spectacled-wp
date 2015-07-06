<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>
  <div class="col-xs-12 styleposts">
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
      <h2 class="entry-title"><?php the_title(); ?></h2>
    </header>
    <div class="contentCategory">
      <p>
        Eyewear: <?php the_category(', '); ?>
      </p>
    </div>
    <div class="entry-content">
      <?php the_content(); ?>
    </div>
    <div class="contentTags">
      <p>
        <?php the_tags( 'tags // ', ', ', '' ); ?> 
      </p>
    </div>
    <footer>
      <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
    </footer>
  </article>
<?php endwhile; ?>
