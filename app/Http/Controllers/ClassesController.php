<?php

namespace App\Http\Controllers;

use App\Models\Classes;
use Illuminate\Http\Request;

class ClassesController extends Controller
{
    public function showall()
    {
        $classes=array(
            array("id"=>"1","name"=>"11","description"=>"Ordinery Level"),
            array("id"=>"2","name"=>"12","description"=>"Advanced Level"),
            array("id"=>"3","name"=>"13","description"=>"Advanced Level")
        );
        return view('pages.class.class-showall',compact('classes'));
    }    

    public function addProcess(Request $request)
    {
        return $request;
    }
}
