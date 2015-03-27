<?php get_header();
/*
Template Name: Shine On Page
*/
?>

<?php 
$shineon = new WP_Query(['post_type'=>'shine-on']);

if ($shineon->have_posts()) : while ($shineon->have_posts()) : $shineon->the_post(); ?>


	  	<h1><?php the_title(); ?></h1>
	 	<?php the_content(); ?>



	  <?php endwhile; else: ?>
	    <p>error, not found</p>
	<?php endif; ?>



	<?php get_footer();?>