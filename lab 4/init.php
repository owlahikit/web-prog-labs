<?php
$products = array(
    array(
        'id'=>1,
        'name'=> 'Kaktus Plants',
        'price'=>  85000,
        'description'=>'Small cactus plants, already set in pot'
        ),
    array(
        'id'=>2,
        'name'=> 'Landak Plants',
        'price'=>  105000,
        'description'=>'Rare landak plant in small pot'
        ),
    array(
        'id'=>3,
        'name'=> 'Kecubung Plants',
        'price'=>  85000,
        'description'=>'A tiny piece of art and supremacy'
        ),
);

$xml = new DOMDocument('1.0','UTF-8');
$root = $xml->createElement('products');
$xml->appendChild($root);

foreach ($products as $value ){
    $product = $xml->createElement('product');
    foreach ($value as $key => $value){
        $node = $xml->createElement($key, $value);
        $product->appendChild($node);
    }
    $root->appendChild($product);
}
$xml->formatOutput = true;
$xml->save('files/data.xml')or die('Error');
?>