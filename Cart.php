<?php

class Cart {
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
}