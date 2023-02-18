<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'gender' => ['required', 'string', 'max:255'],   
            'img_path' => ['image|mimes:jpg,png,jpeg,gif,svg|max:8192'],        
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'phone_number' => ['required', 'string', 'max:255'],
            'current_position' => ['required', 'string', 'max:255'],
            'user_type' => ['required', 'string', 'max:255'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        if($request->profile_img==null){
            $current_profile_img_path = null;
        }else {
            $file_name = $request->profile_img->getClientOriginalName();
            $current_profile_img_path = time().$file_name;
            $request->profile_img->move(public_path('images/user_profile_img'),$current_profile_img_path);
        }
        $user = User::create([
            'name' => $request->name,
            'gender' => $request->gender,
            'email' => $request->email,
            'phone' => $request->phone_number,
            'current_position' => $request->current_position,
            'user_type' => $request->user_type,
            'password' => Hash::make($request->password),
            'img_path' => $current_profile_img_path
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
