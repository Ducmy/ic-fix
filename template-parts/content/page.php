<?php do_action( 'estar_entry_before' ); ?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
	<?php do_action( 'estar_entry_header_before' ); ?>

	<header class="entry-header">
		<?php get_template_part( 'template-parts/entry-thumbnail' ); ?>

		<div class="entry-header-text">
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		</div>
	</header>

	<?php do_action( 'estar_entry_header_after' ); ?>
	<?php if(is_front_page()): ?>
		<div class="system_area">
			<div class="col-4">
				<?php if ( is_active_sidebar( 'custom-side-bar-cot-1' ) ) : ?>
					<?php dynamic_sidebar( 'custom-side-bar-cot-1' ); ?>
				<?php endif; ?>
			</div>
			<div class="col-4">
				<?php if ( is_active_sidebar( 'custom-side-bar-cot-2' ) ) : ?>
					<?php dynamic_sidebar( 'custom-side-bar-cot-1' ); ?>
				<?php endif; ?>
			</div>
			<div class="col-4">
				<?php if ( is_active_sidebar( 'custom-side-bar-cot-3' ) ) : ?>
					<?php dynamic_sidebar( 'custom-side-bar-cot-1' ); ?>
				<?php endif; ?>
			</div>
		</div>
	<?php endif;?>

	<?php do_action( 'estar_entry_content_before' ); ?>

	<div class="entry-content">
		<?php
		the_content();
		wp_link_pages( [
			'before' => '<p class="page-links">' . esc_html__( 'Pages:', 'estar' ),
			'after'  => '</p>',
		] );
		?>
	</div>
	<?php do_action( 'estar_entry_content_after' ); ?>
</article>

<?php do_action( 'estar_entry_after' ); ?>