<?php get_header(); ?>
<main id="primary" role="main">
	<?php
	while ( have_posts() ) :
		the_post();
		?>
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<header class="entry-header">
				<h1 class="entry-title"><?php the_title(); ?></h1>
				<div class="entry-meta">
					<time datetime="<?php echo esc_attr( get_the_date( 'c' ) ); ?>"><?php the_time( get_option( 'date_format' ) ); ?></time>
					<span class="cat-links"><?php the_category( ', ' ); ?></span>
				</div>
			</header>
			<?php if ( has_post_thumbnail() ) : ?>
				<div class="post-thumbnail"><?php the_post_thumbnail(); ?></div>
			<?php endif; ?>
			<div class="entry-content">
				<?php the_content(); ?>
				<?php
				wp_link_pages(
					array(
						'before' => '<nav class="page-links" aria-label="' . esc_attr__( 'Yazı sayfaları', 'accessible-super-classic' ) . '"><span class="page-links-title">' . esc_html__( 'Sayfalar:', 'accessible-super-classic' ) . '</span>',
						'after'  => '</nav>',
					)
				);
				?>
			</div>
		</article>
		<?php the_post_navigation( array( 'aria_label' => esc_attr__( 'Yazılar arasında gezinme', 'accessible-super-classic' ) ) ); ?>
	<?php endwhile; ?>
</main>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
