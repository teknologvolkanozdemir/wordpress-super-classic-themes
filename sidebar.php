<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
	<aside id="secondary" class="sidebar" role="complementary" aria-label="<?php esc_attr_e( 'Kenar Çubuğu', 'accessible-super-classic' ); ?>">
		<?php dynamic_sidebar( 'sidebar-1' ); ?>
	</aside>
<?php endif; ?>
