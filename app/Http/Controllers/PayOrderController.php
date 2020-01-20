<?php

namespace App\Http\Controllers;

use App\Billing\PayementGateway;
use App\Orders\OrderDetails;
use Illuminate\Http\Request;

class PayOrderController extends Controller
{
    public function store(OrderDetails $orderDetails, PayementGatewayContract $payementGateway ){

        $order = $orderDetails->all();


    }





}
