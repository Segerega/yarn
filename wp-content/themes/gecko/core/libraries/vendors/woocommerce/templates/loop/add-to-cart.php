<?php
/**
 * Loop Add to Cart
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/loop/add-to-cart.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     3.3.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

global $product, $jassc;

// Get product hover style
$hover_style = $jassc ? $jassc['hover-style'] : cs_get_option( 'wc-hover-style' );

// Catalog mode
$catalog_mode = cs_get_option( 'wc-catalog' );

if ( $catalog_mode ) return;

if ( $hover_style == 1 ) {
	echo apply_filters( 'woocommerce_loop_add_to_cart_link',
		sprintf( '<a rel="nofollow" href="%s" data-quantity="%s" data-product_id="%s" data-product_sku="%s" class="%s pr br-36 mb__10"><i class="fa fa-shopping-cart mr__10"></i>%s</a>',
			esc_url( $product->add_to_cart_url() ),
			esc_attr( isset( $args['quantity'] ) ? $args['quantity'] : 1 ),
			esc_attr( $product->get_id() ),
			esc_attr( $product->get_sku() ),
			esc_attr( isset( $args['class'] ) ? $args['class'] : 'button' ),
			esc_html( $product->add_to_cart_text() )
		),
	$product );
} elseif ( $hover_style == 2 ) {
	echo apply_filters( 'woocommerce_loop_add_to_cart_link',
		sprintf( '<a rel="nofollow" href="%s" data-quantity="%s" data-product_id="%s" data-product_sku="%s" class="%s pr bs-36"><i class="fa fa-shopping-cart"></i><span class="tooltip pa cw fs__12 ts__03">%s</span></a>',
			esc_url( $product->add_to_cart_url() ),
			esc_attr( isset( $args['quantity'] ) ? $args['quantity'] : 1 ),
			esc_attr( $product->get_id() ),
			esc_attr( $product->get_sku() ),
			esc_attr( isset( $args['class'] ) ? $args['class'] : 'button' ),
			esc_html( $product->add_to_cart_text() )
		),
	$product );
}