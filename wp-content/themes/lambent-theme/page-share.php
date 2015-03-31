<?php get_header();
/*
Template Name: Share Page
*/
?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	 	<h3><?php the_content(); ?></h3>

<?php endwhile; else: ?>
	    <p>Sorry, no pages matched your criteria.</p>
	<?php endif; ?>

	<?php get_footer();?>