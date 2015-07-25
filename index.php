<?php get_header(); ?>
<div id="main">
  <div ="post-content">
    <?php if (have_posts()): while (have_posts()) : the_post(); ?>
      <div class="the-post">
      <?php if (has_post_thumbnail() ) {
        the_post_thumbnail();
      }
      ?>
      <div class="post-title">
        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> :: <p><?php the_time( 'F jS, Y') ?></p>
      </div>
      <div class="the-post-content">
        <p>
          <?php the_content(__('(more...)')); ?>
        </p>
      </div>
      <div class="post-metadata">
        <p><?php the_category( ', ' ); ?></p>
        <?php the_tags( 'Tagged: '); ?></p>
      </div>
      <hr>
      <?php endwhile; else: ?>
        <p>
          <?php _e('Sorry, no posts matched your criteria.'); ?>
        </p><?php endif; ?>
  </div>
  <div id = "delimiter">
  </div>
  <?php get_footer( ); ?>
</div>
