<?php get_header(); ?>

	<?php get_template_part( 'nav', 'above' ); ?>
		<?php while ( have_posts() ) : the_post() ?>
			<?php get_template_part( 'entry' ); ?>
		<?php endwhile; ?>
	<?php get_template_part( 'nav', 'below' ); ?>

<?php get_footer(); ?>