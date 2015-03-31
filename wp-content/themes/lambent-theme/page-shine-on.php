<?php get_header();
/*
Template Name: Shine On Page
*/
?>


<div class="shineOnContainer">



	<?php 
	$shineon = new WP_Query(['post_type'=>'post']);

	if ($shineon->have_posts()) : while ($shineon->have_posts()) : $shineon->the_post(); ?>

	  	<div class="row">
	  		<div class="col-xs-12">
	 			<h1><?php the_title(); ?></h1>
	 		</div>
	  	</div>
	 	
		<div class="row">
			<div class="col-xs-12">
				<!-- <img src="php the_field('image'); ?>" class="postImage" /> -->
				<div class="postContent">
					<?php the_content(); ?>
				</div>
			</div>
		</div>

		<div class="col-xs-12 rule">
			<img src="<?php bloginfo('url'); ?>/wp-content/uploads/2015/03/horizontal-rule.png"/><!-- this is where the horzontal rule goes-->
		</div>

	<?php endwhile; else: ?>
	    <p>Sorry, there are no posts that match your criteria. Please try your search again.</p>
	<?php endif; ?>

	</div>
	<?php get_footer();?>


