<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        return view("front.pages.service",[
            'service'=>Service::where("status",'1')->orderBy("id","Desc")->get(),
        ]);
    }
    public function searchService(Request $request){
        $service=Service::where('name','LIKE', '%'.request()->input('name').'%')->get();
        return view("front.pages.service",[
            'service'=>$service,
        ]);
    }
}
