<?php
/**
 * Theme constants definition and functions.
 *
 * @since   1.0.0
 * @package Gecko
 */
add_filter( 'woocommerce_currencies', 'add_my_currency' );

function add_my_currency( $currencies ) {

    $currencies['UAH'] = __( 'Українська гривня', 'woocommerce' );

    return $currencies;

}

add_filter('woocommerce_currency_symbol', 'add_my_currency_symbol', 10, 2);

function add_my_currency_symbol( $currency_symbol, $currency ) {

    switch( $currency ) {

        case 'UAH': $currency_symbol = 'грн'; break;

    }

    return $currency_symbol;

}
// Constants definition
define( 'JAS_GECKO_PATH', get_template_directory()     );
define( 'JAS_GECKO_URL',  get_template_directory_uri() );
define( 'JAS_GECKO_VERSION', '1.6.8' );

// Initialize core file
require JAS_GECKO_PATH . '/core/init.php';
