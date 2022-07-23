<?php

namespace App\Http\Controllers;

use App\Models\AuthenticationKey;
use Illuminate\Http\Request;

class AuthenticationKeyController extends Controller
{
    public function showall()
    {
        $data=(object) array(
            array("id"=>"1","name"=>"role-showall","route"=>"role.showall","description"=>"show all data"),
            array("id"=>"2","name"=>"role-add","route"=>"role.add","description"=>"create new role"),
            array("id"=>"3","name"=>"role-edit","route"=>"role.edit","description"=>"old role edit"),
        );
        return view('pages.authentication-key.authentication-key-showall',compact('data'));
    }    

    public function addProcess(Request $request)
    {
        return $request;
    }
}
