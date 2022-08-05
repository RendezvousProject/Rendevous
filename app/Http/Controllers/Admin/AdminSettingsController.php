<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminSettingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        // where('user_type' , "=" , '1')
        // if(Auth::guard(session('guardName'))->user('user_type' == '1'))
        $auth_user = Auth::guard(session('guardName'))->user()->id;

        $user = User::where('id', $auth_user)->first();
        $cities = City::all();
        // dd($auth_user);

        return view('admin.setting.index', compact('user','cities'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return void
     */
    public function store(Request $request)
    {
        dd($request);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param  int  $id
     * @return RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $request->validate([
            'first_name' => ['required', 'min:3'],
            'last_name' => ['required', 'min:3'],
            'phone_number' => ['required', 'numeric', 'min:10'],
            'city' => ['required'],
            'email' => ['required', 'email'],
            'avatar' => ['nullable'],
        ]);

        $image = null;

        if ($request->hasFile('avatar')){
            $file = $request->file('avatar');

            $image = $file->store('/', [
                'disk' => 'avatar',
            ]);
        }else{
            $image = $user->avatar;
        }

        $user->update([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'phone_number' => $request->phone_number,
            'city_id' => $request->city,
            'email' => $request->email,
            'avatar' => $image,
        ]);

        toastr()->success('Updated Successfully');

        return redirect()->back();
    }

}
