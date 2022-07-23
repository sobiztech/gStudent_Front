<?php

namespace App\Http\Controllers;

use App\Models\GuardianType;
use Illuminate\Http\Request;

class GuardianTypeController extends Controller
{
    public function showall()
    {
        $guardian_types=array(
            array("id"=>"1","guardian_type_name"=>"Father","description"=>"Father"),
            array("id"=>"2","guardian_type_name"=>"Mother","description"=>"Mother"),
            array("id"=>"3","guardian_type_name"=>"Gurdian","description"=>"GUrdian"),
        );
        return view('pages.guardian-type.guardian-type-showall',compact('guardian_types'));
    }
    
    public function addProcess(Request $request)
    {
        // id ? update function : add function
        // need check unique role
        return $request;
    }
}