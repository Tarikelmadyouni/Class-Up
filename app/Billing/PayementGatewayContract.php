<?php

namespace App\Billing;


interface PayementGatewayContract{

    public function setDiscount($amount);

    public function charge($amount);
    
}
