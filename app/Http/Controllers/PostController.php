<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Phone;
class PostController extends Controller
{
    public function index()
    {
	$this->getPhoneData(1);
    }

    public function getPhoneData($id)
    {
    	$phone = User::find($id)->phone->toArray();
		print_r($phone);
    }

}
