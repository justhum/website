<?php global $wp_query; $total_pages = $wp_query->max_num_pages; if ( $total_pages > 1 ) { ?>
<div id="nav-below" class="navigation">
<div class="nav-next"><?php previous_posts_link(sprintf(__( '%s Newer Articles', 'blankslate' ),'<span class="meta-nav">&larr;</span>')) ?></div>
<div class="nav-previous"><?php next_posts_link(sprintf(__( 'Older Articles %s', 'blankslate' ),'<span class="meta-nav">&rarr;</span>')) ?></div>

</div>
<?php } ?>