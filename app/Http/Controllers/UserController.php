<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index(){
		

        //return View::make('frontend.home.homeContent', ['banners' => $banners->info]);
		return view('frontend.home.userContent');
	}
	
}
