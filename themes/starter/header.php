<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="<?php bloginfo( 'description' ); ?>">
  <link rel="profile" href="https://gmpg.org/xfn/11" />
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <header>
    <h2>
      <a href="/">
        <?php echo get_bloginfo( 'name' ) ?>
      </a>
    </h2>
    <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
  </header>