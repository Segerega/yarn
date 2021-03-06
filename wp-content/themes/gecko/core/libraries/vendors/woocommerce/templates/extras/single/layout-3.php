<?php
/**
 * Single product layout 3
 */

// Get page options
$options = get_post_meta( get_the_ID(), '_custom_wc_options', true );

// Get image to display size guide
$size_guide = ( isset( $options['wc-single-size-guide'] ) && $options['wc-single-size-guide'] ) ? $options['wc-single-size-guide'] : cs_get_option( 'wc-single-size-guide' );

// Shipping & return popup
$message = cs_get_option( 'wc-single-shipping-return' );

?>
<div class="jas-wc-single wc-single-3 mb__60">
	<?php
		/**
		 * woocommerce_before_single_product hook.
		 *
		 * @hooked wc_print_notices - 10
		 */
		 do_action( 'woocommerce_before_single_product' );

		 if ( post_password_required() ) {
		 	echo get_the_password_form();
		 	return;
		 }
	?>
	<div id="product-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="jas-row middle-xs">
			<div class="jas-col-md-6 jas-col-sm-6 jas-col-xs-12 pr">
				<?php
					/**
					 * woocommerce_before_single_product_summary hook.
					 *
					 * @hooked woocommerce_show_product_sale_flash - 10
					 * @hooked woocommerce_show_product_images - 20
					 */
					do_action( 'woocommerce_before_single_product_summary' );
				?>
			</div>
			
			<div class="jas-col-md-6 jas-col-sm-6 jas-col-xs-12">
				<div class="summary entry-summary mb__80">

					<?php
						/**
						 * woocommerce_single_product_summary hook.
						 *
						 * @hooked woocommerce_template_single_title - 5
						 * @hooked woocommerce_template_single_rating - 10
						 * @hooked woocommerce_template_single_price - 10
						 * @hooked woocommerce_template_single_excerpt - 20
						 * @hooked woocommerce_template_single_add_to_cart - 30
						 * @hooked woocommerce_template_single_meta - 40
						 * @hooked woocommerce_template_single_sharing - 50
						 */
						do_action( 'woocommerce_single_product_summary' );
					?>

					<div class="extra-link f__libre mt__30">
						<?php if ( ! empty( $size_guide ) ) : ?>
							<a class="cd chp jas-magnific-image" href="<?php echo esc_url( $size_guide ); ?>"><?php echo esc_html__( 'Size Guide', 'gecko' ); ?></a>
						<?php endif; ?>
						<?php if ( ! empty( $message ) ) : ?>
							<a data-type="shipping-return" class="jas-wc-help cd chp" href="#"><?php echo esc_html__( 'Delivery & Return', 'gecko' ); ?></a>
						<?php endif; ?>
					</div>

				</div><!-- .summary -->
			</div>
		</div>

		<?php
			/**
			 * woocommerce_after_single_product_summary hook.
			 *
			 * @hooked woocommerce_output_product_data_tabs - 10
			 * @hooked woocommerce_upsell_display - 15
			 * @hooked woocommerce_output_related_products - 20
			 */
			do_action( 'woocommerce_after_single_product_summary' );
		?>
	</div><!-- #product-<?php the_ID(); ?> -->
	<?php jas_gecko_sticky_add_to_cart(); ?>
</div>
<?php do_action( 'woocommerce_after_single_product' ); ?>
