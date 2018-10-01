<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Phone;
use App\Country;
class PostController extends Controller
{
	/**
	 * [index description]
	 * @return [type] [description]
	 */
    public function index()
    {
        $country = Country::find(1);    

 

dd($country->posts);
	$this->getPhoneData(1);
    }
    /**
     * [getPhoneData description]
     * @param  [type] $id [description]
     * @return [type]     [description]
     */
    public function getPhoneData($id)
    {
    	$phone = User::find($id)->phone->toArray();
		print_r($phone);
    }

}
