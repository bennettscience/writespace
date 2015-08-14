<?php get_header(); ?>
<div id="main">
  <div class="post-content">
    <?php if ( is_home() || is_archive() ) { // start home loop ?>

      <?php if (have_posts()): while (have_posts()) : the_post(); ?>

      <div class="the-post">
        <div class="the-post-thumbnail-home">
          <?php if (has_post_thumbnail() ) {
            the_post_thumbnail();
          } ?>
        </div>

      <div class="post-title">
        <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
        <p><?php the_time( 'F jS, Y') ?></p>
      </div> <!-- /post-title -->

      <div class="the-post-content"><!-- if on the home page, display excerpt-->
        <p>
          <?php the_excerpt(__('more...')); ?>
        </p>
      </div><!--/the-post-content"-->

      <div class="post-metadata">
        <p><?php the_category( ', ' ); ?></p>
        <?php the_tags( 'Tagged: '); ?></p>
      </div><!--/post-metadata-->

      <hr>

      <?php endwhile; else: ?><!-- If no posts available...-->
        <p>
          <?php _e('Sorry, no posts matched your criteria.'); ?>
        </p>
      <?php endif; ?>
    <?php } // end home loop ?>

    <?php if(is_single()) {  // start single loop ?>
        <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
          <div class="the-post">
            <div class="the-post-thumbnail">
              <?php if (has_post_thumbnail() ) {
                the_post_thumbnail();
              } ?>
            </div>

          <div class="post-title">
            <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
            <p><?php the_time( 'F jS, Y') ?></p>
          </div> <!-- /post-title -->

          <div class="the-post-content"><!-- if on the home page, display excerpt-->
            <p>
              <?php the_content(); ?>
            </p>
          </div><!--/the-post-content"-->

          <div class="post-metadata">
            <p><?php the_category( ', ' ); ?></p>
            <?php the_tags( 'Tagged: '); ?></p>
          </div><!--/post-metadata-->

        <?php endwhile; ?>
          <?php endif; ?>
        <?php } //end single loop ?>

        <?php if(is_page()) { // start page loop ?>
          <?php if(have_posts()) : ?>
            <?php while( have_posts()) : the_post(); ?>
            <div class="the-post">
              <div class="the-page-thumbnail">
                <?php if(has_post_thumbnail() ) {
                  the_post_thumbnail();
                } ?>
              </div>

              <div class="post-title">
                <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
              </div> <!-- /post-title -->

              <div class="the-post-content"><!-- if on the home page, display excerpt-->
                <p>
                  <?php the_content(); ?>
                </p>
              </div><!--/the-post-content for pages-->
            </div>
          <?php endwhile; ?>
        <?php endif; ?>
      <?php } //end page loop ?>
      </div>
      <div id = "delimiter"></div>
      <div id="footer">
        <div id="connect">
          <a href="<?php bloginfo('rss2_url'); ?>">RSS</a>
          <a href="<?php bloginfo('atom_url'); ?>">Atom</a>
        </div>
      </div>
    </div>
  </div>
</div> <!--/#main -->
</div> <!--/.wrapper -->
</body>
</html>
