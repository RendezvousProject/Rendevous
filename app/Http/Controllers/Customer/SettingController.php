<?php


namespace App\Http\Controllers\Customer;
use App\Models\City;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function edit($id)
    {
        $customer = Auth::guard(session('guardName'))->user($id);
        $cities = City::all();

        return view('customer.setting',compact('customer', 'cities'));

    }

    public function update(Request $request, $id)
    {

        $customer = User::where('id', Auth::user()->id)->findOrFail($id);

        $request->validate([
            'first_name' => ['required', 'min:3'],
            'last_name' => ['required', 'min:3'],
            'phone_number' => ['required', 'numeric', 'min:10'],
            // 'city' => ['required'],
            'email' => ['required', 'email'],
            'avatar' => ['nullable'],
        ]);

        $image = $customer->avatar;

        if ($request->hasFile('avatar')){
            $file = $request->file('avatar');

            $image = $file->store('/', [
                'disk' => 'avatar',
            ]);

            $request->merge([
                'avatar' => $image,
            ]);
        }else{
            $image = $customer->avatar;
        }

        $customer->update([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'phone_number' => $request->phone_number,
            // 'city_id' => $request->city,
            'email' => $request->email,
            'avatar' => $image,
        ]);

        toastr()->success('Updated Successfully');

        return redirect()->back();
    }

    // public function index(){
    //     $cities = City::all();

        // $onwer_id = Auth::guard( session('guardName') )->user()->id;
        // $workspaces = Workspace::where('owner_id', "=" , $onwer_id )->get();
    //     @Auth::check();
    //     $users = User::get();
    //     return view('customer.setting',compact('users'));
    // }
}
