<?php
require_once 'Product.php';
require_once 'Food.php';
require_once 'Game.php';
require_once 'PaymentMethod.php';
require_once 'User.php';
require_once 'Cart.php';


$food1 = new Food('bocconcini', 7, '10/24');
$food2 = new Food('ravioli per gatti', 4.5, '01/23');
$food3 = new Food('crocchette', 3, '4/25');

$game1 = new Game('palla', 13, 0.5);
$game2 = new Game('pallina', 3, 0.2);
$game3 = new Game('puntina laser', 15, 1);

$user1 = new User("andrei", "andrei@todi.gmail", true);
$user2 = new User('mina', 'mina@libero.it', false);


$user1->cart->addProductToList($game2, 3);
$user1->cart->addProductToList($food2, 5);

$user2->cart->addProductToList($game3, 1);
$user2->cart->addProductToList($food3, 7);
$user2->cart->addProductToList($food1, 3);


var_dump($user1->cart->getProductList());
var_dump($user1->cart->getTotal($user1->getDicount()));

var_dump($user2->cart->getProductList());
var_dump($user2->cart->getTotal($user2->getDicount()));

?>