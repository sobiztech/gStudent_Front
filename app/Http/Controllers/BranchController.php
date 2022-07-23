<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use Illuminate\Http\Request;

class BranchController extends Controller
{
    public function showall()
    {
        $branches=array(
            array("id"=>"1","branch_code"=>"11","branch_name"=>"PPD","property_id"=>"1","property_name"=>"AAA","description"=>"BRANCH - 005"),
            array("id"=>"2","branch_code"=>"12","branch_name"=>"PPD","property_id"=>"2","property_name"=>"BBB","description"=>"BRANCH - 005"),
            array("id"=>"3","branch_code"=>"13","branch_name"=>"PPD","property_id"=>"3","property_name"=>"CCC","description"=>"BRANCH - 005")
        );

        $properties=array(
            array("id"=>"1","property_name"=>"AAA"),
            array("id"=>"2","property_name"=>"BBB"),
            array("id"=>"3","property_name"=>"CCC"),
            array("id"=>"4","property_name"=>"DDD")
        );
        return view('pages.branch.branch-showall',compact('branches','properties'));
    }    

    public function addProcess(Request $request)
    {
        return $request;
    } 
}
