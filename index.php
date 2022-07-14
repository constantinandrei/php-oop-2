<?php
require_once 'Product.php';
require_once 'Food.php';
require_once 'User.php';
require_once 'Game.php';

$food1 = new Food('bocconcini', 7, '10/24');
$food2 = new Food('ravioli per gatti', 4.5, '01/23');

$game1 = new Game('palla', 13, 0.5);
$game2 = new Game('pallina', 3, 0.2);

$user1 = new User("andrei", "andrei@todi.gmail", true);


var_dump($food1);
var_dump($food2);
var_dump($game1);
var_dump($game2);

$user1->setCart($food2);
$user1->setCart($food1);

var_dump($user1);

?>