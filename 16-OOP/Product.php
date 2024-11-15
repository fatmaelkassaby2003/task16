<?php 

class Product 
{
    var $name;
    var $price;
    var $image;
    var $description;
    var $tax;
    var $brand;

    public function getname()
    {    
        return $this->name;
    }

    public function getprice_after_discount($number): int
    {
        $discount = $this->price * $number / 100;

        return $discount;
    }

    public function final_price($number): int
    {
       $discount = $this->price * $number * $this->tax / 100;

        return $this->price * $number - $discount;
    }
}