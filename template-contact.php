<?php
/* Template name: Xolboo Barix */
?>
<?php get_header(); ?>
<form action='#' method="GET">
<input type="text" name="xaix">
<input type="submit" value="Xaix">
</form>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php 
			if(isset($_GET['xaix']) && !empty($_GET['xaix'])):

				$args = array(
					'numberposts'	=> -1,
					'post_type'		=> 'post',
					'meta_key'		=> 'phone_number',
					'meta_value'	=> absint($_GET['xaix'])
				);
/* 2 custom field zereg xaix uyed

$args = array(
	'numberposts'	=> -1,
	'post_type'		=> 'post',
	'meta_query'	=> array(
		'relation'		=> 'AND',
		array(
			'key'		=> 'phone_number',
			'compare'	=> '=',
			'value'		=> absint($_GET['xaix']),
		),
		array(
			'key'		=> 'secret',
			'compare'	=> '=',
			'value'		=> absint($_GET['secret']),
		)
	)
);
*/

				// query
				$the_query = new WP_Query( $args );

				?>
					<?php if( $the_query->have_posts() ): ?>
						<ul>
						<?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
							<li>
								<a href="<?php the_permalink(); ?>">
									<?php the_title(); ?>
								</a>
								<?php the_content(); ?>
							</li>
						<?php endwhile; ?>
						</ul>
					<?php endif; ?>

				<?php wp_reset_query();	 // Restore global post data  ?>
			<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>
