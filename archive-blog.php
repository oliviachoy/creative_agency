
  <div class="blogHeader">
     <?php get_header(); ?>
    <p><?php the_field('blog_header', 'option') ?></p>
 </div>

<section class="blog">
  <div class="container">
    <div class="content">
        <div class="blogTitle">
          <h2><?php the_field('blog_title', 'option') ?></h2>
          <p class="blogTag"><?php the_field('blog_tag', 'option') ?></p>
        </div>

      <?php
    	/* Since we called the_post() above, we need to
    	 * rewind the loop back to the beginning that way
    	 * we can run the loop properly, in full.
    	 */
    	rewind_posts();

    	/* Run the loop for the archives page to output the posts.
    	 * If you want to overload this in a child theme then include a file
    	 * called loop-archives.php and that will be used instead.
    	 */
      get_template_part( 'loop', 'archive' );
      ?>

    </div><!--/content-->
  </div> <!-- /.container -->
</section>

<?php get_footer(); ?>