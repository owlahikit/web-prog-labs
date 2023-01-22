<?php
$dom = new DOMDocument();
$dom->load('files/data.xml');
$products = $dom->getElementsByTagName('products')->item(0);
$product = $products->getElementsByTagName('product');
$index = $product->length;
$id = $product[$index - 1]->getElementsByTagName('id')->item(0)->nodeValue + 1;

/**
 * @param DOMDocument $dom
 * @param $id
 * @return DOMElement|false
 * @throws DOMException
 */

function getF(DOMDocument $dom, $id)
{
    $name = $_POST['name'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    $new_product = $dom->createElement('product');

    $new_id = $dom->createElement('id', $id);
    $new_product->appendChild($new_id);

    $new_name = $dom->createElement('name', $name);
    $new_product->appendChild($new_name);

    $new_price = $dom->createElement('price', $price);
    $new_product->appendChild($new_price);

    $new_description = $dom->createElement('description', $description);
    $new_product->appendChild($new_description);

    return $new_product;
}

if (isset($_POST['go'])) {
    $new_product = getF($dom, $id);
    $products->appendChild($new_product);
    $dom->formatOutput = true;
    $dom->save('files/data.xml') or die('Error');
    header('location: index.php?page_layout=list');
}
?>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
            content="width=device-width">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <link rel="stylesheet" href="styleform.css">
    </head>
    <body>
        <div class="container">
            <div>
                <h1>Add new product information</h1>
            </div>
            <div>
            <form method="POST" enctype="multipart/form-data">
                <div class="form-item">
                    <label for="name">Product name</label>
                    <input type="text" name="name" class="form-control" required placeholder="Enter the name">
                </div>
                <div class="form-item">
                    <label id="price" for="price">Product price</label>
                    <input type="number" name="price" class="form-control" required placeholder="Number must be valid">
                </div>
                <div class="form-item">
                    <label id="description" for="description">Product description</label>
                    <input type="text" name="description" class="form-control" required placeholder="Enter the description">
                </div>
                <button name="go" class="btn btn-success" type="submit">Confirm</button><br>or<br>
                <a class="btn" href="index.php?page_layout=list">Return to menu</a>
            </form>
            </div>
        </div>
    </body>
</html>