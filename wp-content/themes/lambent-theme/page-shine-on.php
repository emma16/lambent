<?php get_header();
/*
Template Name: Shine On Page
*/
?>

<?php 
$shineon = new WP_Query(['post_type'=>'shine-on']);

if ($shineon->have_posts()) : while ($shineon->have_posts()) : $shineon->the_post(); ?>


	  	<div class="row">
	  		<div class="col-xs-12">
	 			<h1><?php the_title(); ?></h1>
	 		</div>
	  	</div>
	 	
		<div class="row">
			<div class="col-xs-12">
				<img src="<?php the_field('image'); ?>" class="postImage" />
				<div class="postContent">
					<?php the_content(); ?>
				</div>
			</div>
		</div>
	
	  <?php endwhile; else: ?>
	    <p>error, not found</p>
	<?php endif; ?>



	<?php get_footer();?>