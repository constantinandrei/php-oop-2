<?php
trait Payment {
    public function isValid($expDate)
    {   
        $cardDate = DateTime::createFromFormat('m-y', $expDate);
        $dateNow = new DateTime('now');
        if($cardDate > $dateNow){
            return true;
        }

        return false;
    }    
}