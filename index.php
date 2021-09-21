<?php
require __DIR__ . '/vendor/autoload.php';

use Automattic\WooCommerce\Client;

$woocommerce = new Client(
    'https://ventasbaires.com.ar/', 
    'ck_X', 
    'cs_X',
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
