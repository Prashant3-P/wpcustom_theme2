<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 */

get_header(); ?>

	<div class="inside-container">

		<div class="col unkonwn grid_12_of_12">

			<article id="post-0" class="post error404 no-results not-found">
				<header class="entry-header">
					<h1 class="entry-title"><?php esc_html_e( 'Uh Oh! This is somewhat embarrassing!', 'ekans' ); ?></h1>
				</header>
				<div class="entry-content">
					<p><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'ekans' ); ?></p>
					<?php get_search_form(); ?>
				</div><!-- /.entry-content -->
			</article><!-- /#post -->

		</div> <!-- /.col.grid_12_of_12 -->

	</div> <!-- /#primary.site-content.row -->

<?php get_footer(); ?>
