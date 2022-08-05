<?php

namespace App\Http\Controllers\Owner;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Owner;
use App\Models\City;

use App\Models\Workspace;

use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Auth;

class SettingOwnerController extends Controller
{
    // public $owner;

    // public function __construct(){
    //     $this->owner = Auth::guard(session('guardName'))->user()->first();
    // }
    // $owner = Owner::Where('id', $this->owner->id)->first();


    public function edit($id)
    {
        $owner = Auth::guard(session('guardName'))->user($id);
        $cities = City::all();

        return view('owner.settings.index',compact('owner','cities'));

    }

    public function update(Request $request, $id)
    {
        $owner = Owner::findOrFail($id);


        // $request->validate([
        //     'first_name' => ['required', 'min:3'],
        //     'last_name' => ['required', 'min:3'],
        //     'phone_number' => ['required', 'numeric', 'min:10'],
        //     'city' => ['required'],
        //     'company_name' => ['required', 'min:3'],
        //     'email' => ['required', 'email'],
        //     'avatar' => ['nullable'],
        // ]);

        // Uploads Avatar For user/avatar folder
        $img_path = null;

        if ($request->hasFile('photo')) {
            $files = $request->file('photo'); // Uploaded File Objects

                $img_path = $files->store('/', [
                    'disk' => 'avatar',
                ]);

                $image = $img_path;


        }else{
            $img_path = null;
        }
        $owner->update([
            'first_name' => $request->fname,
            'last_name' => $request->lname,
            'phone_number' => $request->mobile,
            // 'city_id' => $request->city,
            'company_name' => $request->company_name,
            'email' => $request->email,
            'avatar' => $image,
        ]);

        // $owner = Auth::guard(session('guardName'))->user($id);
        // $owner->first_name  =$request->fname;
        // $owner->last_name = $request->lname;
        // $owner->phone_number =$request->mobile;
        // $owner->company_name =$request->company_name;
        // $owner->email =$request->email  ;
        // $owner->avatar =$image;
        // $owner->save();

        toastr()->success('Updated Successfully');

        return redirect()->back();
        //

    }
}
