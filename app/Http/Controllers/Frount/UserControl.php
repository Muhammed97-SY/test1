<?php

namespace App\Http\Controllers\Frount;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\VerifiesEmails;

class UserControl extends Controller
{

public function showAdminName(){
    $data=[];
$data['id']=2;
return view('welcome',$data);
}
}