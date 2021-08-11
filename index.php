<?php
require __DIR__ . '/vendor/autoload.php';

use Automattic\WooCommerce\Client;

$woocommerce = new Client(
    'https://ventasbaires.com.ar/', 
    'ck_8186e3bbe43b0a6f4bfdaa4d287ef2356b3a559c', 
    'cs_7516dbbddfbae49beb22152e796bae7312f8764f',
    [
        'version' => 'wc/v3',
    ]
);

////lista de productos

$productos = $woocommerce->get('orders');

echo '<pre>';

print_r($productos);

echo '</pre>'

?>