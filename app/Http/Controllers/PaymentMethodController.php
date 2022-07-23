<?php

namespace App\Http\Controllers;

use App\Models\PaymentMethod;
use Illuminate\Http\Request;

class PaymentMethodController extends Controller
{
    public function showall()
    {
        $payment_methods = array(
            array("id" => "1", "payment_method_name" => "Cash", "description" => "Cash Payment"),
            array("id" => "2", "payment_method_name" => "Card", "description" => "Card Payment"),
            array("id" => "3", "payment_method_name" => "Online", "description" => "Online Payment")
        );
        return view('pages.payment-method.payment-method-showall', compact('payment_methods'));
    }

    public function addProcess(Request $request)
    {
        return $request;
    }
}
