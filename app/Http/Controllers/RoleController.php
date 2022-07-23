<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function showall()
    {
        $data=(object) array(
            array("id"=>"1","role_name"=>"Super Admin","description"=>"All Access"),
            array("id"=>"2","role_name"=>"Admin","description"=>"All Access but not super admin"),
            array("id"=>"3","role_name"=>"Teacher","description"=>"manage student"),
        );
        return view('pages.role.role-showall',compact('data'));
    }
    
    public function addProcess(Request $request)
    {
        // id ? update function : add function
        // need check unique role
        return $request;
    }

    // public function add()
    // {
    // }


    // public function edit()
    // {   
    // }

    // public function updateProcess(Request $request)
    // {
    //     return $request;
    // }
}
