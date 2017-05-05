<?php
/**
 * Created by PhpStorm.
 * User: felix
 * Date: 04.05.17
 * Time: 9:19
 */

class ShopProduct {
    public $title = "Стандартный товар";
    public $producerMainName = "Фамилия автора";
    public $producerFirstName = "Имя автора";
    public $price = 0;

    function getProducer() {
        return "{$this->producerFirstName} "
            ."{$this->producerMainName}";
    }
}

$product1 = new ShopProduct();
$product2 = new ShopProduct();

$product1->title = "Собачье сердце \n";
$product2->title = "Ревизор \n";

print $product1->title;
print $product2->title;

$product1->arbitraryAddition = "Дополнительный параметр \n";
print $product1->arbitraryAddition;

$product3 = new ShopProduct();
$product3->title = "Собачье сердце";
$product3->producerFirstName = "Михаил";
// $product3->producerMainName = "Булгаков";
$product3->producerSecondName = "Булгаков";
$product3->price = 5.99;

print "Автор: {$product3->producerFirstName} ".
    "{$product3->producerMainName}\n";

$product1->title = "Собачье сердце";
$product1->producerFirstName = "Михаил";
$product1->producerMainName = "Булгаков";
$product1->price = 6.99;

print " ... Автор: {$product1->getProducer()} \n";




// print "\n";

// print_r($product1);
// print_r($product2);

// var_dump($product1);
// var_dump($product2);