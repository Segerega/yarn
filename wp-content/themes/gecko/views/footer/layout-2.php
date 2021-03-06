<?php
/**
 * The footer layout 2.
 *
 * @since   1.0.0
 * @package Gecko
 */
?>
<footer id="jas-footer" class="footer-2 pr cw" <?php jas_gecko_schema_metadata( array( 'context' => 'footer' ) ); ?>>
	<?php if ( is_active_sidebar( 'footer-1' ) || is_active_sidebar( 'footer-2' ) || is_active_sidebar( 'footer-3' ) || is_active_sidebar( 'footer-4' ) ) : ?>
		<div class="footer__top pb__80 pt__80">
			<div class="jas-container pr">
				<div class="flex column center-xs">
					<?php
						if ( is_active_sidebar( 'footer-1' ) ) {
							dynamic_sidebar( 'footer-1' );
						}
						if ( is_active_sidebar( 'footer-2' ) ) {
							dynamic_sidebar( 'footer-2' );
						}
						if ( is_active_sidebar( 'footer-3' ) ) {
							dynamic_sidebar( 'footer-3' );
						}
						if ( is_active_sidebar( 'footer-4' ) ) {
							dynamic_sidebar( 'footer-4' );
						}
					?>
				</div><!-- .jas-row -->
			</div><!-- .jas-container -->
		</div><!-- .footer__top -->
	<?php endif; ?>
	<div class="footer__bot">
		<div class="jas-container pr tc">
			<?php if ( has_nav_menu( 'footer-menu' ) ) { echo '<div class="jas-row"><div class="jas-col-md-6 jas-col-sm-12 jas-col-xs-12 start-md center-sm center-xs">'; } ?>
				<?php echo cs_get_option( 'footer-copyright' ); ?>

			<?php if ( has_nav_menu( 'footer-menu' ) ) { echo '</div><div class="jas-col-md-6 jas-col-sm-12 jas-col-xs-12 end-md center-sm center-xs flex">'; } ?>
				<?php
					wp_nav_menu(
						array(
							'theme_location' => 'footer-menu',
							'menu_class'     => 'clearfix',
							'menu_id'        => 'jas-footer-menu',
							'container'      => false,
							'fallback_cb'    => NULL,
							'depth'          => 1
						)
					);
				?>
			<?php if ( has_nav_menu( 'footer-menu' ) ) { echo '</div></div>'; } ?>
		</div>
	</div><!-- .footer__bot -->
</footer><!-- #jas-footer -->