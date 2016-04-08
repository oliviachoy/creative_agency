

<header style="background-image:url(<?php the_post_thumbnail_url('full')?>)" alt="">
	<?php get_header(); ?>
	<div class="headerTitle">
	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
	  <h2><?php the_content(); ?></h2>
	<?php endwhile; // end the loop?>
	</div>
</header>



<div class="main">
<!-- ABOUT SECTION -->
    <section class="about" id="about">
 	 	<div class="container">
   			<div class="content content2">
	    		<h2><?php the_field('about_title') ?></h2>
	    		<div class="yellowBoxImage">
	    			<div class="yellowBox">
	    			<img src="<?php the_field('about_image') ?>" alt="">
	    			</div>
	    		</div>
	    		<p><?php the_field('about_info') ?></p>
    		</div> <!-- /,content -->
    	</div>
    </section>
<!-- SKILLS SECTION -->
	<section class="skills" id="skills">
		<div class="container">	
			<div class="content">
				<div class="skillImage">
					<?php if( have_rows('skills')): ?>
						<?php while( have_rows('skills')): the_row(); ?>
						<div class="skillInfo">
							<h4><?php the_sub_field('skill_title') ?></h4>
							<img src="<?php the_sub_field('graph_image') ?>" alt="">
							<p class="percent"><?php the_sub_field('percentage') ?></p>
							<p class="skillDescription"><?php the_sub_field('description') ?></p>
						</div>
						<?php endwhile; ?>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</section>
<!-- SERVICE SECTION -->
	<section class="service">
		<div class="container">
			<div class="content">
				<h2><?php the_field('services_title') ?></h2>
				<p class="serviceTitle"><?php the_field('service_tag') ?></p>
				<div class="serviceInfo">
				<?php if( have_rows('service_options')): ?>
					<?php while( have_rows('service_options')): the_row(); ?>
							<div class="services">
								<div class="serviceImage">
									<img src="<?php the_sub_field('service_image') ?>" alt="">
								</div>
								<div class="serviceBox">
									<h4><?php the_sub_field('service_description') ?></h4>
									<p><?php the_sub_field('text') ?></p>
									<a href="#"><?php the_sub_field('learn_more') ?></a>
								</div>
							</div>
					<?php endwhile; ?>
				<?php endif; ?>
			</div>
			</div>
		</div>
	</section>
<!-- FACTS SECTION -->
	<section class="facts" style="background-image: url(<?php the_field('facts_image') ?>)">
		<div class="container">
			<div class="content factsContent">
				<div class="factSection">
					<h2><?php the_field('facts_title') ?></h2>
					<p class="factTag"><?php the_field('fact_tag') ?></p>
					<div class="factsBox">
					<?php if( have_rows('facts')): ?>
						<?php while( have_rows('facts')): the_row(); ?>
							<div class="factsInfo">
								<p class="factNumbers"><?php the_sub_field('number') ?></p>
								<p class="factDescription"><?php the_sub_field('caption') ?></p>
							</div>
						<?php endwhile; ?>
					<?php endif; ?>
					</div>
				</div>
			</div>
		</div>			
	</section>
<!-- CONTACT SECTION -->
	<section class="contact" id="contact">
		<div class="container">
			<div class="content clearfix">
				<h2><?php the_field('contact_us') ?></h2>
				<p class="contactTag"><?php the_field('contact_tag') ?></p>
				<div class="contactInfo">
					<p class="phoneNumber"><?php the_field('number') ?></p>
					<p class="address"><?php the_field('address') ?></p>
					<p class="email"><?php the_field('email') ?></p>
				</div>
				<div class="formContainer">
					
					<?php the_field('form') ?>
					
				</div>
			</div>
		</div>
	</section>
  </div> <!-- /.container -->
</div> <!-- /.main -->

<!-- FOOTER on other page -->
<?php get_footer(); ?>

