<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Workspace;
use App\Models\Owner;
use App\Models\Tainant;
use App\Models\User;
use App\Providers\RouteServiceProvider;

class AdminController extends Controller
{
    //login
    /**
     * Display the login view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.login');
    }

    /**
     * Handle an incoming authentication request.
     *
     * @param  \App\Http\Requests\Auth\LoginRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(LoginRequest $request)
    {

        if ( Auth::guard('admin')->attempt([ 'email' => $request->email, 'password' => $request->password])) {

            Session::put('guardName', 'admin');


                return redirect()->intended(RouteServiceProvider::ADMIN);


        }else{
            toastr()->error('There Is An Error !');
            return redirect()->back();
        }

    }

    //
    public function index(){
        $workspaces = Workspace::get();
        $owners = Owner::get();
        $users = User::get();
        $tainants = Tainant::get();

        return view('admin.index' , compact('workspaces','owners','users', 'tainants'));
    }


    /**
     * Destroy an authenticated session.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request)
    {
        Auth::guard(session('guardName'))->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
