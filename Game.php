<?php
require_once 'Product.php';

class Game extends Product {
    private $productType = 'game';
    private $weight;

    public function __construct($_name, $price, $weight){
        parent::__construct($_name, $price);
        $this->setWeight($weight);
    }

    public function getProductType()
    {
        return $this->productType;
    }

    public function getWeight()
    {
        return $this->weight;
    }

    public function setWeight($weight)
    {
        $this->weight = $weight;

        return $this;
    }
}

?>