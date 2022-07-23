<?php

namespace App\Http\Controllers;

use App\Models\Authentication;
use Illuminate\Http\Request;

class AuthenticationController extends Controller
{
    public function showall()
    {
        $data='';

        $roles=array(
            array('id'=>1,"role_name"=>"Super Admin"),
            array('id'=>2,"role_name"=>"Admin"),
            array('id'=>3,"role_name"=>"Teacher"),
            array('id'=>4,"role_name"=>"Student"),
        );

        $routes=array(
            array('id'=>1,"route"=>"role.add"),
            array('id'=>2,"route"=>"role.edit"),
            array('id'=>3,"route"=>"role.delete"),
            array('id'=>4,"route"=>"role.showall"),
        );

        return view('pages.authentication.authentication-showall', compact('roles','routes'));
    }

    public function addProcess(Request $request)
    {
        return $request;
    }
}
