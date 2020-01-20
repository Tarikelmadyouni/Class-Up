<?php

namespace App\Orders;

use App\Billing\BankPayementGateway;
use App\Billing\PayementGatewayContract;

class OrderDetails{

    private $payementGateway;

    public function __construct(PayementGatewayContract $payementGateway)
    {

        $this->payementGateway = $payementGateway;
    }


    public function all(){

        $this->payementgateway->setDiscount(500);

        return [
            'name'=>'victor',
            'address'=> 'rue lulu',
        ]
    }




}
