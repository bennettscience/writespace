<?php get_header(); ?>
<div id="main">
  <div class="post-content">
    <!--- *********************) HOME LOOP ******************** -->
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
        <p>posted in: <?php the_category( ' ' ); ?></p>
        <p>tagged: <?php the_tags( ' ' ); ?></p>
      </div><!--/post-metadata-->

      <hr>

      <?php endwhile; else: ?><!-- If no posts available...-->
        <p>
          <?php _e('Sorry, no posts matched your criteria.'); ?>
        </p>
      <?php endif; ?>
    <?php } // end home loop ?>

    <!-- ***************** SINGLE LOOP ***************** -->
    <?php if(is_single()) { ?>
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
            <p>posted in: <?php the_category( ' ' ); ?></p>
            <p>tagged: <?php the_tags( ' ' ); ?></p>
            <div class="meta-img">
              <a onclick="window.open(this.href, 'twitter-share', 'width=550,height=255');return false;" href="http://twitter.com/share?text=<?php the_title(); ?>&url=<?php the_permalink(); ?>"><img src="<?php bloginfo('template_url'); ?>/img/twitter.png" /></a>
            </div>
          </div><!--/post-metadata-->

          <div class="delimiter"></div>

          <hr />

          <!-- Load post comments -->
          <?php comments_template(); ?>

        <?php endwhile; ?>
          <?php endif; ?>
        <?php } //end single loop ?>

        <!-- *********************** PAGE LOOP ********************* -->
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
        <div id="credits">
          <p>Powered by WordPress and writespace</p>
        </div>
      </div>
    </div>
  </div>
</div> <!--/#main -->
</div> <!--/.wrapper -->
</body>
</html>
