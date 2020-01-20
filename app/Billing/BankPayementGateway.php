<?php

namespace App\Billing;


class BankPayementGateway implements PayementGatewayContract{


    private $currency;
    private $discount;

    public function __construct($currency){

        $this->currency = $currency;
        $this->discount = 0;
    }


    public function setDiscount($amount){


         $this->discount = $amount;
    }




    public function charge($amount){

       //charge the bank
        return [
            'amount'=> $amount - $this->discount,
            'confirmation_number'=> Str::random(),
            'currency'=> $this->currency,
            'currency'=> $this->discount,
        ];
    }




}
