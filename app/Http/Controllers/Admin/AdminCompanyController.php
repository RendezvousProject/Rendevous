<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use App\Http\Controllers\Controller;
use App\Models\Owner;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;

class AdminCompanyController extends Controller
{
    public function index(){
        $owners = Owner::get();

        return view('admin.company.index' , compact('owners'));
    }
    public function create(){
        $owners = Owner::get();
        // dd($owners);
        return view('admin.company.create' , compact('owners'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'first_name' => ['required'],
            'last_name' => ['required'],
            'email' => ['required'],
            'company_name' => ['required'],
            'phone_number' => ['required'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $owner = Owner::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'company_name' => $request->company_name,
            'password' => Hash::make($request->password),
        ]);
        //
        // $owner =Owner::create([
        //     'first_name' => $request->name,
        //     'email' => $request->email,
        //     'company_name' => $request->company_name,
        //     'phone_number' => $request->phone_number,
        //     'password' => Hash::make($request->password),
        // ]);


        event(new Registered($owner));
        toastr()->success('Owner Successfully added');
        // dd($owner);
        return redirect()->route('company.index');

    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $owner = Owner::findOrFail($id);
        return view('admin.company.edit', compact('owner'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $owner = Owner::findOrFail($id);

        $request->validate([
            'first_name' => ['required'],
            'last_name' => ['required'],
            'email' => ['required'],
            'company_name' => ['required'],
            'phone_number' => ['required'],
        ]);


        $owner->update([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'company_name' => $request->company_name,
            'phone_number' => $request->phone_number,
        ]);

        toastr()->success('Owner Successfully Updated !');

        return redirect()->route('company.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $owner = Owner::find($id);

        $owner->delete();

        toastr()->success('Owner Successfully Deleted !');

        return redirect()->route('company.index');

    }


}
