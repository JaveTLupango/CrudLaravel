<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function contactus(){
        return view('contactus');
    }
    public function aboutus($value='')
    {
    	return view('aboutus');
    }
}
