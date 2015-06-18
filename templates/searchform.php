<form role="search" method="get" class="search-form form-inline" action="<?= esc_url(home_url('/')); ?>">
  <label class="sr-only"><?php _e('Search for:', 'sage'); ?></label>
  <div class="input-group">
    <input type="search" value="<?= get_search_query(); ?>" name="s" class="search-field form-control">
    <span class="input-group-btn">
      <button type="submit" class="search-submit btn btn-default"><i class="fa fa-search" class="searchbutton"></i></button>
    </span>
  </div>
</form>

<!-- <?php _e('Search', 'sage'); ?> -->