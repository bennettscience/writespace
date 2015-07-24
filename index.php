<?php get_header(); ?>
<div id="main">
  <div ="content">
    <h1>Main area</h1>
    <?php if (have_posts()): while (have_posts()) : the_post(); ?>
      <?php if (has_post_thumbnail() ) {
        the_post_thumbnail();
      }
      ?>
      <h1><?php the_title(); ?></h1>
      <h4>Postd on <?php the_time( 'F jS, Y') ?></h4>
      <p>
        <?php the_content(__('(more...)')); ?>
      </p>
      <hr><?php endwhile; else: ?>
        <p>
          <?php _e('Sorry, no posts matched your criteria.'); ?>
        </p><?php endif; ?>
  </div>
  <div id = "delimiter">
  </div>
  <?php get_footer( ); ?>
</div>
