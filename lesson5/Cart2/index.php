<?php

require_once 'Product.php';
require_once 'Cart.php';

$tv = new Product('Телевизор', 1);

$prod1 = new Product('Системный блок', 1);


$mon1 = new Product('Экран', 1);
$mon2 = new Product('Корпус', 1);

$prod2 = new Product('Монитор', 1, [$mon1, $mon2]);

$computer = new Product('Компьютер', 1, [$prod1, $prod2]);

$cart = new Cart();

$cart->addProduct($tv);
$cart->addProduct($computer);



echo $computer->getPrice();


