<?php get_header();
/*
Template Name: About Page
*/
?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

  	<h1><?php the_title(); ?></h1>
 	<?php the_content(); ?>


  <?php endwhile; else: ?>
    <p>error, not found</p>
<?php endif; ?>


<?php get_footer(); ?>