<?php

namespace App\Http\Controllers\User\Service;

use App\Http\Controllers\Controller;
use App\Models\Profile;
use App\Models\Service;
use Illuminate\Support\Facades\Auth;

class ServiceController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (session()->get('profile_id') == null) {
            $profile=Profile::where("user_id",Auth::user()->id)->first();
            session()->put('profile_id' , $profile->id);
        }
        return view("user.pages.service.index",[
            'service'=>Service::where("status",'1')->orderBy("id","Desc")->paginate(),
        ]);
    }

    
}
