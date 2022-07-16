<?php
require_once 'traits.php';

class Cart {
    use Payment;
    private $productList = [];

    public function getProductList()
    {
        return $this->productList;
    }

    public function addProductToList($product, $quantity)
    {
        if ($product instanceof Product && $quantity > 0) 
        $this->productList[] = ['product'=>$product, 'quantity'=>$quantity];

        return $this;
    }

    public function getTotal ($discount = 0){
        $total = 0;
        foreach ($this->productList as $product){
            $total += $product['product']->getPrice() * $product['quantity'];
            echo 'Prodotto: ' . $product['product']->getName() . ' | ' . 'Quantità: ' . $product['quantity'] . '<br>';
        }

        echo "Totale: " . $total . '<br>';
        echo "Sconto: " . $discount . '% | (' . $total*$discount . ' €)<br>';
        echo "Da Pagare: " . ($total - $total * $discount);
        return $total - $total * $discount;
    }
}