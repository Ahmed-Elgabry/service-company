<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\{SectionTitle, User,UserProfile};
use App\Http\Requests\User\UpdateUserProfileRequest;
use App\Http\Requests\User\EditProfileRequest;
use App\Http\Requests\User\StoreUserProfileRequest;
use Auth;
use Hash;
use App\Traties\{GetData,UploadFile};
class EditProfileController extends Controller
{

    use GetData;
    use UploadFile;

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userprofile=UserProfile::where('user_id',Auth::user()->id)->first();
        if($userprofile!=null){
            return redirect("profile/userprofiles/".Auth::user()->id."/edit");
        }else{
            return redirect("profile/userprofiles/create");
        }
    }

    public function create(){
        $userprofile=UserProfile::where('user_id',Auth::user()->id)->first();
        if($userprofile!=null){
            return redirect("profile/userprofiles/".Auth::user()->id."/edit");
        }else{
            return view("user.pages.profile.create");
        }
    }

    public function store(StoreUserProfileRequest $request){
        $request->validated();
        $userprofile=UserProfile::create($this->storeUserProfile($request));
        if($request->has("profile_image")&& $request->profile_image!=null){
            $userprofile->profile_image=$this->uploadFile($request->file('profile_image'),'/images/userprofile/');
            $userprofile->save();
        }
        Auth::user()->update([
            'firstname'=>$request->firstname,
            'lastname'=>$request->lastname,
        ]);
        return redirect("profile/userprofiles/create")->withSuccess(__("admin.added successfully"));
    }


    public function edit($user){
        $userprofile=UserProfile::where('user_id',$user)->first();
        return view("user.pages.profile.index",[
            'userprofile'=>$userprofile,
        ]);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUserProfileRequest  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserProfileRequest $request, UserProfile $userprofile)
    {
        $request->validated();
        if($request->has("profile_image")&& $request->profile_image!=null){
            $userprofile->profile_image=$this->uploadFileUpate($request->file('profile_image'),'/images/userprofile/',$userprofile->profile_image);
            $userprofile->save();
        }
        $userprofile->update($this->storeUserProfile($request));
        Auth::user()->update([
            'firstname'=>$request->firstname,
            'lastname'=>$request->lastname,
        ]);
        return redirect("profile/userprofiles/".Auth::user()->id."/edit")->withSuccess(__("admin.updated successfully"));
    }


    public function change(){
        return view("user.pages.profile.editPasswprd");
    }

    public function changePassword(EditProfileRequest $request){

        $request->validated();

        if (Hash::check($request->old_password, Auth::user()->password)) { 
            Auth::user()->fill([
             'password' => Hash::make($request->new_password)
             ])->save();  

             return redirect("profile/userprofiles/")->withSuccess(__("user.password_changed"));
         } else {
            return redirect("profile/userprofiles/")->withWarning(__("user.not_old_pass"));
         }
    }


}

