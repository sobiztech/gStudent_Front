<?php

namespace App\Http\Controllers;

use App\Models\Medium;
use Illuminate\Http\Request;

class MediumController extends Controller
{
    public function showall()
    {
        $mediums=array(
            array("id"=>"1","medium_name"=>"Tamil","description"=>"srilankantamils"),
            array("id"=>"2","medium_name"=>"English","description"=>"srilankanenglish"),
            array("id"=>"3","medium_name"=>"Singalam","description"=>"srilankanenglish"),
        );
        return view('pages.medium.medium-showall',compact('mediums'));
    }
    
    public function addProcess(Request $request)
    {
        return $request;
    }
}