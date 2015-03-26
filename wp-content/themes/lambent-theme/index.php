<?php get_header(); ?>

<?php if(have_posts()): while (have_posts()) : the_post(); ?>

      <h2>
      	<a href="<?php the_permalink() ?>">
      		<?php the_title(); ?>
      	</a>
      </h2>

<?php endwhile; endif; ?>

<h1>hello</h1>
<h1>hello</h1>
<h1>hello</h1>

<?php get_footer(); ?>