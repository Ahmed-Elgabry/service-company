<?php

namespace App\Http\Controllers\User\Package;

use App\Http\Controllers\Controller;
use App\Models\{Package, Profile, Service};
use App\RepositoryInterface\{PackageInterface};
use Illuminate\Support\Facades\Auth;

class PackageController extends Controller
{

    private $repositoryPackage;

    public function __construct(PackageInterface $repositoryPackage)
    {
        $this->repositoryPackage=$repositoryPackage;
    }

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
        return view("user.pages.package.index",[
            'package'=>$this->repositoryPackage->all(),
            'service'=>Service::all(),
        ]);
    }

}
