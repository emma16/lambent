<?php get_header();
/*
Template Name: Shine On Page
*/
?>

<?php 
$shineon = new WP_Query(['post_type'=>'shine-on']);

if ($shineon->have_posts()) : while ($shineon->have_posts()) : $shineon->the_post(); ?>

<?php
$date = DateTime::createFromFormat('Ymd', get_field('date_of_event'));

?>
	<div class="shineOnContainer">

	  	<div class="row">
	  		<div class="col-xs-12">
	 			<h1><?php the_title(); ?></h1>
	 		</div>
	  	</div>

	  	<div class="col-xs-12 eventDetails">
 			<div class="row">
				Location: <?php the_field('location'); ?>
			</div>

			<div class="row">
				Date of Event: <?php echo $date->format('m-d-Y'); ?>
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

		<div class="col-xs-12 rule">
			<img src="/lambent/lambent/wp-content/uploads/2015/03/horizontal-rule.png"/>
		</div>
		<!-- this is where the line separating posts will go -->
	
	
	  <?php endwhile; else: ?>
	    <p>error, not found</p>
	<?php endif; ?>

	</div>



	<?php get_footer();?>