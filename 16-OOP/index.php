<?php
require_once 'Product.php';

$product1 = new Product();
$product1->name = "Laptop";
$product1->price = 2000;
$product1->description = "G-15";
$product1->tax = 10;
$product1->brand = "Asus";
$product1->image = "image/HP-14-FHD-Laptop-Computer-AMD-Ryzen-3-3250-4GB-RAM-128GB-SSD-Silver-Windows-11-S-mode-14-fq0110wm_c033a8e6-dc8d-4091-a46a-f77a1064b2a1.e5a472f5ae55644a87bfc0721926c9b6.webp";


$product2 = new Product();
$product2->name = "Laptop";
$product2->price = 1000;
$product2->description = "G-13";
$product2->tax = 10;
$product2->brand = "Lenovo";
$product2->image = "image/RW16TLT.avif";


$product3 = new Product();
$product3->name = "Mobile";
$product3->price = 6000;
$product3->description = "G-13";
$product3->tax = 10;
$product3->brand = "Realme15";
$product3->image = "image/vivo-mobile-phone.jpg";


?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Electronic Shop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <h1 class="text-center my-3">Welcome to Electronic Shop</h1>

    <div class="d-flex justify-content-center gap-3">
    <div class="card mb-3" style="width: 18rem;">
        <img src="<?php echo $product1->image; ?>" class="card-img-top" alt="..." style="height: 150px; object-fit: contain; background-color: #f8f9fa;">
        <div class="card-body text-center" style="min-height: 200px;">
            <h5 class="card-title"><?php echo "Name : ".$product1->getname(); ?></h5>
            <h6 class="card-text p-2"><?php echo "Price After Discount : ". $product1->getprice_after_discount(10); ?></h6>
            <h6 class="card-text p-2"><?php echo "Final Price : ". $product1->final_price(10); ?></h6>
            <p class="card-text"><?php echo "Description :". $product1->description; ?></p>
            <p class="card-text"><?php echo "Brand : ". $product1->brand; ?></p>
            <a href="#" class="btn btn-primary">Add To Cart</a>
        </div>
    </div>
    <div class="card mb-3" style="width: 18rem;">
        <img src="<?php echo $product2->image; ?>" class="card-img-top" alt="..." style="height: 150px; object-fit: contain; background-color: #f8f9fa;">
        <div class="card-body text-center" style="min-height: 200px;">
        <h5 class="card-title"><?php echo "Name : ".$product2->getname(); ?></h5>
            <h6 class="card-text p-2"><?php echo "Price After Discount : ". $product2->getprice_after_discount(10); ?></h6>
            <h6 class="card-text p-2"><?php echo "Final Price : ". $product2->final_price(10); ?></h6>
            <p class="card-text"><?php echo "Description :".$product2->description; ?></p>
            <p class="card-text"><?php echo "Brand : ". $product2->brand; ?></p>
            <a href="#" class="btn btn-primary">Add To Cart</a>
        </div>
    </div>
    <div class="card mb-3" style="width: 18rem;">
        <img src="<?php echo $product3->image; ?>" class="card-img-top" alt="..." style="height: 150px; object-fit: contain; background-color: #f8f9fa;">
        <div class="card-body text-center" style="min-height: 200px;">
        <h5 class="card-title"><?php echo "Name : ".$product3->getname(); ?></h5>
            <h6 class="card-text p-2"><?php echo "Price After Discount : ". $product3->getprice_after_discount(10); ?></h6>
            <h6 class="card-text p-2"><?php echo "Final Price : ". $product3->final_price(10); ?></h6>
            <p class="card-text"><?php echo "Description : ".$product3->description; ?></p>
            <p class="card-text"><?php echo "Brand : ". $product3->brand; ?></p>
            <a href="#" class="btn btn-primary">Add To Cart</a>
        </div>
    </div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>