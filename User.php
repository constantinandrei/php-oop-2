<?php

require_once 'Product.php';

class User {
    protected $username;
    protected $email;
    protected $cart = [];
    protected $registered;
    private $dicount;
    private $paymentMethod;

    public function __construct ($_username, $_email, $_registered){
        $this->setRegistered($_registered);
        $this->setEmail($_email);
        $this->setUsername($_username);
        $this->setDicount($_registered);
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    public function getRegistered()
    {
        return $this->registered;
    }

    public function setRegistered($registered)
    {
        $this->registered = $registered;

        return $this;
    }

    public function getCart()
    {
        return $this->cart;
    }

    public function setCart($product)
    {
        if ($product instanceof Product)
        $this->cart[] = $product;

        return $this;
    }

    public function getDicount()
    {
        return $this->dicount;
    }

    public function setDicount($_registered)
    {
        if ($_registered === true) {
            $this->dicount = 0.2;
        } else {
            $this->discount = 0;
        }

        return $this;
    }

    public function setPaymentMethod($paymentMethod)
    {
        if ($paymentMethod instanceof PaymentMethod){
            $this->paymentMethod = $paymentMethod;
        }

        return $this;
    }
}

?>