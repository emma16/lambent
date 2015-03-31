<?php get_header();
/*
Template Name: Search Page
*/
?>


<div class="shineOnContainer">

	<?php 

	if($_GET['query'] != "")
		$the_query = $_GET['query'];
	else
		$the_query=false;

	$shineon = new WP_Query(array('s' => $the_query, 'category_name' => 'shine on'));

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
			<img src="/lambent/lambent/wp-content/uploads/2015/03/horizontal-rule.png"/><!-- this is where the horzontal rule goes-->
		</div>

	<?php endwhile; else: ?>
	    <p>Sorry, there are no posts that match your criteria. Please try your search again.</p>
	<?php endif; ?>

	</div>
	<?php get_footer();?>