<?php
/* Template name: About us */
?>
<?php get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php the_content(); ?>

            <?php
            $zurag = get_field('zurag');
            $zuragiin_tailbar = get_field('zuragiin_tailbar');
            ?>

            <img src="<?= $zurag; ?>">

            <?= $zuragiin_tailbar; ?>
            
		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>
