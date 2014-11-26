<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>
    <header>
      <h1 class="entry-title"><?php the_title(); ?></h1>
    </header>

      <underbar class="col-sm-3 hidden-xs" id="unpad"><?php get_template_part('templates/entry-meta'); ?>
                <?php include roots_sidebar_path(); ?>
          <?php get_template_part('templates/searchform'); ?>
</underbar>
    
    <div class="entry-content col-sm-9 col-md-7">
      <?php the_content(); ?>
    </div>
    <footer>
      <?php wp_link_pages(array('before' => '<nav class="page-nav"><p>' . __('Pages:', 'roots'), 'after' => '</p></nav>')); ?>
    </footer>
    <comments class="col-sm-offset-3 col-sm-9 col-md-7">
    <?php comments_template('/templates/comments.php'); ?>
    </comments>
  </article>
<?php endwhile; ?>
