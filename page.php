<?php get_header(); ?>
<main id="primary" role="main">
	<?php
	while ( have_posts() ) :
		the_post();
		?>
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<header class="entry-header">
				<h1 class="entry-title"><?php the_title(); ?></h1>
			</header>
			<?php if ( has_post_thumbnail() ) : ?>
				<div class="post-thumbnail"><?php the_post_thumbnail(); ?></div>
			<?php endif; ?>
			<div class="entry-content">
				<?php the_content(); ?>
				<?php
				wp_link_pages(
					array(
						'before' => '<nav class="page-links" aria-label="' . esc_attr__( 'Sayfa bölümleri', 'accessible-super-classic' ) . '"><span class="page-links-title">' . esc_html__( 'Sayfalar:', 'accessible-super-classic' ) . '</span>',
						'after'  => '</nav>',
					)
				);
				?>
			</div>
		</article>
	<?php endwhile; ?>
</main>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
