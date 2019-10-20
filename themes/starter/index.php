<?php get_header(); ?>
<main>
  <h1><?php the_title(); ?></h1>
  <?php while ( have_posts() ) : the_post(); ?>
    <?php the_content(); ?>
  <?php endwhile; ?>
</main>
<?php get_footer(); ?>