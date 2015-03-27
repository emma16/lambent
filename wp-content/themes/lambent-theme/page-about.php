<?php get_header();
/*
Template Name: About Page
*/
?>

<div class="row">

<div class="col-xs-12 about">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	  	<h1><?php the_title(); ?></h1>
	 	<?php the_content(); ?>

	 	</div>
</div>


	  <?php endwhile; else: ?>
	    <p>error, not found</p>
	<?php endif; ?>



<?php get_footer(); ?>