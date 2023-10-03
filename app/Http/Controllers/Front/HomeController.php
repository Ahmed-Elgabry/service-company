<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Package;
use App\Models\Service;
use App\Models\Slider;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view("front.pages.home",[
            'service'=>Service::where("status",'1')->orderBy("id","Desc")->take(4)->get(),
            'package'=>Package::orderBy("id","Desc")->get(),
            'package_services'=>Service::all(),
            'sliders'=>Slider::all(),
        ]);
    }
}
