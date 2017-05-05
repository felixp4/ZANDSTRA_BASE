<?php
/**
 * Created by PhpStorm.
 * User: felix
 * Date: 05.05.17
 * Time: 10:46
 */

class ShopProduct {
    public $title = "Стандартный товар";
    public $producerMainName = "Фамилия автора";
    public $producerFirstName = "Имя автора";
    public $price = 0;

    function __construct($title, $firstName, $mainName, $price) {
        $this->title = $title;
        $this->producerFirstName = $firstName;
        $this->producerMainName = $mainName;
        $this->price = $price;
    }

    function getProducer() {
        return "{$this->producerFirstName} "
            ."{$this->producerMainName}";
    }
}

$product4 = new ShopProduct(
    "  PHP Объекты, шаблоны и методики программирования",
    "Мэтт",
    "Зандстра",
    400);

print " ... Автор: {$product4->getProducer()} \n";