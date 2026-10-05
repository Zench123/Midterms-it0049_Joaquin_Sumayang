<?php

namespace App\Controllers;
use App\Models\UserModel;
class Profile extends BaseController
{
    public function index()
    {


$userModel = new UserModel();
$profile  =$userModel ->find(1);




        return view('profile',['profile' =>$profile]);







    }
}
