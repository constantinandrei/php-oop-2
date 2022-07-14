<?php
require_once 'Product.php';

class Food extends Product {
    private $productType = 'food';
    private $expDate;

    public function __construct($_name, $price, $_expDate){
        parent::__construct($_name, $price);
        $this->setExpDate($_expDate);
    }

    public function getProductType()
    {
        return $this->productType;
    }

    public function getExpDate()
    {
        return $this->expDate;
    }

    public function setExpDate($expDate)
    {
        $this->expDate = $expDate;

        return $this;
    }
}

?>