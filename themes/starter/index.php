<?php get_header(); ?>

<h1><?php the_title(); ?></h1>

<?php while ( have_posts() ) : the_post(); ?>

  <?php the_content(); ?>

<?php endwhile; ?>

<?php get_footer(); ?>