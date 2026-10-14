<?php get_header(); ?>
<main id="primary" role="main">
	<?php if ( have_posts() ) : ?>
		<header class="page-header">
			<?php if ( is_home() ) : ?>
				<h1 class="page-title"><?php esc_html_e( 'Son Yazılar', 'accessible-super-classic' ); ?></h1>
			<?php elseif ( is_search() ) : ?>
				<h1 class="page-title">
					<?php
					printf(
						esc_html__( '“%s” için arama sonuçları', 'accessible-super-classic' ),
						esc_html( get_search_query() )
					);
					?>
				</h1>
			<?php elseif ( is_archive() ) : ?>
				<h1 class="page-title"><?php the_archive_title(); ?></h1>
			<?php else : ?>
				<h1 class="page-title"><?php esc_html_e( 'İçerikler', 'accessible-super-classic' ); ?></h1>
			<?php endif; ?>
		</header>
		<?php
		while ( have_posts() ) :
			the_post();
			?>
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<header class="entry-header">
					<h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					<div class="entry-meta">
						<time datetime="<?php echo esc_attr( get_the_date( 'c' ) ); ?>"><?php the_time( get_option( 'date_format' ) ); ?></time>
						<span class="cat-links"><?php the_category( ', ' ); ?></span>
					</div>
				</header>
				<div class="entry-content">
					<?php the_content(); ?>
				</div>
			</article>
		<?php endwhile; ?>
		<?php the_posts_pagination( array( 'aria_label' => esc_attr__( 'Yazılar arasında gezinme', 'accessible-super-classic' ) ) ); ?>
	<?php else : ?>
		<header class="page-header">
			<h1 class="page-title"><?php esc_html_e( 'İçerik bulunamadı', 'accessible-super-classic' ); ?></h1>
		</header>
		<p><?php esc_html_e( 'Aradığınız içerik bulunamadı.', 'accessible-super-classic' ); ?></p>
	<?php endif; ?>
</main>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
