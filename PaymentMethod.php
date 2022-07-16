<?php
class PaymentMethod {
    protected $cardNumber;
    protected $expDate;

    public function __construct($_cardNumber, $_expDate){
        $this->setCardNumber($_cardNumber);
        $this->setExpDate($_expDate);
    }

    public function getCardNumber()
    {
        return $this->cardNumber;
    }

    public function setCardNumber($cardNumber)
    {
        $this->cardNumber = $cardNumber;

        return $this;
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