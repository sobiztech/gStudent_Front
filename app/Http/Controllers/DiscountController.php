<?php

namespace App\Http\Controllers;

use App\Models\Discount;
use Illuminate\Http\Request;

class DiscountController extends Controller
{
    public function showall()
    {
        $discounts=array(
            array("id"=>"1","discount_code"=>"11","discount_name"=>"new year","date_from"=>"06/06/2022","date_to"=>"16/06/2022","description"=>"Ordinery Level"),
            array("id"=>"2","discount_code"=>"12","discount_name"=>"new year","date_from"=>"06/06/2022","date_to"=>"16/06/2022","description"=>"Advanced Level"),
            array("id"=>"3","discount_code"=>"13","discount_name"=>"new year","date_from"=>"06/06/2022","date_to"=>"16/06/2022","description"=>"Advanced Level")
        );
        return view('pages.discount.discount-showall',compact('discounts'));
    }    

    public function addProcess(Request $request)
    {
        return $request;
    }    
}
