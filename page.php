<?php get_header();  ?>

  <section class="work">
    <div class="container">
      <div class="content">
        <h2><?php the_title(); ?></h2>
        <p class="workTag"> <?php the_field('work_tag') ?></p>
      </div> <!--content-->
    </div> <!-- container -->

    <div class="workHero" style="background-image: url(<?php the_post_thumbnail_url('full')?>)" alt=""></div>
     <div class="container">
        <div class="content">
          <div class="flexContainer">
          <?php // Start the loop ?>
          <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
            <div class="workDescription">
            <h4 ="workDescriptionTitle"><?php the_field('work_description_title') ?></h4>
              <?php the_content(); ?>
            </div>
          <?php endwhile; // end the loop?>
          <aside>
            <h4><?php the_field("project_title") ?></h4>
            <h5><?php the_field('client') ?></h5>
            <p><?php the_field('client_name') ?></p>
            <h5><?php the_field('date_title') ?></h5>
            <p><?php the_field('date') ?></p>
            <h5><?php the_field('what_we_do') ?></h5>
            <p><?php the_field('description') ?></p>
            <h5><?php the_field('tools_title_') ?></h5>
            <p><?php the_field('tools') ?></p>
            <h5><?php the_field('category') ?></h5>
            <p><?php the_field('category_options') ?></p>
            <h5><?php the_field('share_this_title') ?></h5>
            <img src="<?php the_field('share_icons') ?>" alt="social media icons">
            <a href="<?php the_field('website_link') ?>"><button>Vist Website</button></a>
          </aside>
        </div>
      </div> <!-- /,content -->
    </div> <!-- /.container -->
  </section>

<?php get_footer(); ?>