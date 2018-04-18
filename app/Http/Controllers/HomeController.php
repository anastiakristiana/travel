<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Illuminate\Support\Facades\DB;
use App\Banner;
use App\City;

class HomeController extends Controller
{
    public function index(){
		//$banners = DB::table('banners')->first();
		$banners = Banner::all()->toArray();
		$cities = City::all()->toArray();
		
		/* foreach ($banners as $banner) {
			echo $banner->image;
		} */
		//$users = DB::table('users')->get();

        //return View::make('frontend.home.homeContent', ['banners' => $banners->info]);
		return view('frontend.home.homeContent', compact('banners','cities'));
	}
	
	/* public function showBanner(){
		return view('frontend.home.homeContent');
	} */
}
