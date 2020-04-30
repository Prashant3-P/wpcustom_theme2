<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>
       <?php echo get_the_title(); ?> |
	   <?php bloginfo('name') ?>
    </title>
    <?php wp_head(); ?>
</head>
<body>



<!-- Navigation -->
  <nav class="navbar inside-container navbar-expand-lg">
     <?php the_custom_logo(); ?>
   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
    aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
	    <?php 
           wp_nav_menu( array(
               'menu'              => 'primary',
               'theme_location'    => 'primary',
               'container'         => 'div',
               'container_class'   => 'collapse navbar-collapse',
               'container_id'      => 'basicExampleNav',
               'menu_class'        => 'navbar-nav ml-auto',
               'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
               'walker'            => new wp_bootstrap_navwalker())
           );
        ?>
  </nav>










