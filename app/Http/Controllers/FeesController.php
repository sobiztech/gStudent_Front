<?php

namespace App\Http\Controllers;

use App\Models\Fees;
use Illuminate\Http\Request;

class FeesController extends Controller
{
    public function showall()
    {
        $feeses=array(
            array("id"=>"1","amount"=>"1100","class_id"=>"1","class_name"=>"ordinary","description"=>"fees - 001"),
            array("id"=>"2","amount"=>"1200","class_id"=>"2","class_name"=>"advanced","description"=>"fees - 002"),
            array("id"=>"3","amount"=>"1300","class_id"=>"3","class_name"=>"secondary","description"=>"fees - 003")
        );

        $classes=array(
            array("id"=>"1","class_name"=>"ordinary"),
            array("id"=>"2","class_name"=>"advanced"),
            array("id"=>"3","class_name"=>"secondary"),
        );
        return view('pages.fees.fees-showall',compact('feeses','classes'));
    }    

    public function addProcess(Request $request)
    {
        return $request;
    }
}
