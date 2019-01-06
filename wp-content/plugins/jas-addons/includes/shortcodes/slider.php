<?php
/**
 * Slider shortcode.
 *
 * @package JASAddons
 * @since   1.5.2
 */

// Prevent loading this file directly
defined( 'ABSPATH' ) || exit;

if ( ! function_exists( 'jas_shortcode_slider' ) ) {
	function jas_shortcode_slider( $atts, $content = null ) {
		$output = $image = '';

		extract( shortcode_atts( array(
			'autoplay' => '',
			'arrows'   => '',
			'dots'     => '',
			'fade'     => '',
			'slide'    => '',
			'class'    => ''
		), $atts ) );

		$classes = array( 'jas-slider jas-carousel' );

		$values = array();

		if ( function_exists( 'vc_param_group_parse_atts' ) ) {
			$values = ( array ) vc_param_group_parse_atts( $slide );
		}

		if ( ! empty( $class ) ) {
			$classes[] = $class;
		}

		$output .= '<div class="' . esc_attr( implode( ' ', $classes ) ) . '" data-slick=\'{"slidesToShow": 1' . ( is_rtl() ? ',"rtl":true' : '' ) . ( $autoplay ? ',"autoplay":true' : '' ) . ( ! $arrows ? ',"arrows":false' : '' ) . ( $dots ? ',"dots":true' : '' ) . ( $fade ? ',"fade":true' : '' ) . '}\'>';
		
			foreach ( $values as $key => $value ) {
				// Get image link and image data
				if ( ! empty( $value['image'] ) ) {
					$image_id   = preg_replace( '/[^\d]/', '', $value['image'] );
					$image_link = wp_get_attachment_image_src( $image_id, 'full' );
				}

				// Get style of first text
				if ( ! empty( $value['big_text_font_size'] ) ) {
					$big_text_style[] = 'font-size:' . esc_attr( $value['big_text_font_size'] ) . 'px;';
				}
				if ( ! empty( $value['big_text_line_height'] ) ) {
					$big_text_style[] = 'line-height:' . esc_attr( $value['big_text_line_height'] ) . ';';
				}
				if ( ! empty( $value['big_text_color'] ) ) {
					$big_text_style[] = 'color:' . esc_attr( $value['big_text_color'] ) . ';';
				}
				if ( ! empty( $value['big_text_margin'] ) ) {
					$big_text_style[] = 'margin-bottom:' . esc_attr( $value['big_text_margin'] ) . 'px;';
				}

				// Get style of second text
				if ( ! empty( $value['small_text_font_size'] ) ) {
					$small_text_style[] = 'font-size:' . esc_attr( $value['small_text_font_size'] ) . 'px;';
				}
				if ( ! empty( $value['small_text_line_height'] ) ) {
					$small_text_style[] = 'line-height:' . esc_attr( $value['small_text_line_height'] ) . ';';
				}
				if ( ! empty( $value['small_text_color'] ) ) {
					$small_text_style[] = 'color:' . esc_attr( $value['small_text_color'] ) . ';';
				}
				if ( ! empty( $value['small_text_margin'] ) ) {
					$small_text_style[] = 'margin-bottom:' . esc_attr( $value['small_text_margin'] ) . 'px;';
				}

				$output .= '<div class="pr">';
					$output .= '<img class="w__100" src="' . esc_url( $image_link[0] ) . '" alt="" width="" height="" />';

					$output .= '<div class="jas-slider-caption pa ' . $value['v_align'] . ' ' . $value['h_align'] . '">';
						if ( $value['big_text'] ) {
							$output .= '<h3 class="mg__0" style="' . esc_attr( implode( ' ', $big_text_style ) ) . '">' . esc_html( $value['big_text'] ) . '</h3>';
						}

						if ( $value['small_text'] ) {
							$output .= '<h4 class="mg__0" style="' . esc_attr( implode( ' ', $small_text_style ) ) . '">' . esc_html( $value['small_text'] ) . '</h4>';
						}

						if ( $value['cta_text'] || ! empty( $value['cta_link'] ) ) {
							$links = vc_build_link( $value['cta_link'] );

							$output .= '<a class="button" href="' . esc_attr( $links['url'] ) . '"' . ( $links['target'] ? ' target="' . esc_attr( $links['target'] ) . '"' : '' ) . ( $links['rel'] ? ' rel="' . esc_attr( $links['rel'] ) . '"' : '' ) . ( $links['title'] ? ' title="' . esc_attr( $links['title'] ) . '"' : '' ) . '>' . $value['cta_text'] . '</a>';
						}
					$output .= '</div>';
				$output .= '</div>';
			}
		$output .= '</div>';

		// Return output
		return apply_filters( 'jas_shortcode_slider', force_balance_tags( $output ) );
	}
}