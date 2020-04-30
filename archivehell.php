<header class="inform">
	<?php if (is_category()) : ?>
		<h1><?php _e( 'Category archives'); ?> &laquo; <?php single_cat_title(''); ?> &raquo;</h1>
	<?php elseif (is_day()) : ?>
		<h1><?php _e( 'Day archives:'); ?> <?php the_time('F jS, Y'); ?></h1>
	<?php elseif (is_month()) : ?>
		<h1><?php _e( 'Monthly archives:'); ?> <?php the_time('F, Y'); ?></h1>
	<?php elseif (is_year()) : ?>
		<h1><?php _e( 'Year archives:'); ?> <?php the_time('Y'); ?></h1>
	<?php elseif (is_author()) : ?>
		<h1><?php _e( 'Author archives'); ?> &laquo; <?php echo get_the_author(); ?> &raquo;</h1>
 	<?php endif; ?>
</header>

