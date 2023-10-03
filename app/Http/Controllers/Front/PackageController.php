<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Package;
use App\Models\Service;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    public function index()
    {
        return view("front.pages.package",[
            'package'=>Package::orderBy("id","Desc")->get(),
            'service'=>Service::all(),
        ]);
    }
    public function searchPackage(Request $request){
        $package=Package::where('name','LIKE', '%'.request()->input('name').'%')->orderBy("id","Desc")->get();
        return view("front.pages.package",[
            'package'=>$package,
            'service'=>Service::all(),
        ]);
    }
}
