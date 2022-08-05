<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Owner;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Session;


class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create($type = 'customer')
    {
        return view('auth.register',compact('type'));
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
            if ($request->type == 'customer') {
                $guardName = 'web';
                $request->validate([
                    'first_name' => ['required', 'string', 'max:255'],
                    'last_name' => ['required', 'string', 'max:255'],
                    'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                    'phone_number' => ['required', 'string', 'max:255', 'unique:users'],
                    'password' => ['required', 'confirmed', Rules\Password::defaults()],
                    // 'avatar' => ['nullable'],

                    // 'avatar' => ['required', 'string', 'max:255'],
                ]);
                // Uploads avata For avata folder
        // $img_path = null;

        // if ($request->hasFile('avatar')) {
        //     $files = $request->file('user/avatar'); // Uploaded File Objects
        //     foreach ($files as $file) {

        //         $img_path = $file->store('/', [
        //             'disk' => 'avatar',
        //         ]);

        //         $image[] = $img_path;
        //     }
        // }else{
        //     $img_path = null;
        // }


                // start avta
                // $path ='user/avatar/';
                // // $fontPath = public_path('/Oliciy.ttf');
                // $char = strtoupper($request->name[0]);
                // $newAvatarName =rand(12,34353).time().'_avatar.png';
                // $dest =$path.$newAvatarName;

                // $createAvatar = makeAvatar($dest,$char);
                // $picture =$createAvatar == true ? $newAvatarName: '';

                //last

                $user = User::create([
                    'first_name' => $request->first_name,
                    'last_name' => $request->last_name,
                    'email' => $request->email,
                    'phone_number' => $request->phone_number,
                    'password' => Hash::make($request->password),
                    // 'avatar' => $image,
                ]);
                event(new Registered($user));
                Session::put('guardName', $guardName);

                Auth::guard(session('guardName'))->login($user);
                 return redirect(RouteServiceProvider::CUSTOMER);


            } elseif ($request->type == 'owner') {
                $guardName = 'owner';
                $request->validate([
                    'first_name' => ['required', 'string', 'max:255'],
                    'last_name' => ['required', 'string', 'max:255'],
                    'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                    'phone_number' => ['required', 'string', 'max:255'],
                    'company_name' => ['required', 'string', 'max:255'],
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
                Session::put('guardName', $guardName);

                event(new Registered($owner));

                 Auth::guard(session('guardName'))->login($owner);
                 return redirect(RouteServiceProvider::OWNER);


            }
    }


  }

