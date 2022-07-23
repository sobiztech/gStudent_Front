<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    public function showall()
    {
        $properties=array(
            array("id"=>"1","property_name"=>"Tamil","property_code"=>"001","description"=>"srilankantamils"),
            array("id"=>"2","property_name"=>"English","property_code"=>"002","description"=>"srilankanenglish"),
            array("id"=>"3","property_name"=>"Singalam","property_code"=>"003","description"=>"srilankanenglish"),
        );
        return view('pages.property.property-showall',compact('properties'));
    }
    
    public function addProcess(Request $request)
    {
        return $request;
    }    
}
