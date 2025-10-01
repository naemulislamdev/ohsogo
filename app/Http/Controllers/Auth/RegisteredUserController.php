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
        $request->validate(
            [
                'f_name' => ['required', 'regex:/^[a-zA-Z\s\-\.\:]+$/u', 'max:255'],
                'l_name' => ['required', 'regex:/^[a-zA-Z\s\-\.\:]+$/u', 'max:255'],
                'phone' => [
                    'required',
                    'regex:/^[0-9+\-\s()]{7,20}$/',
                    'unique:users,phone',
                ],
                'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . User::class],
                'password' => ['required', 'confirmed', Rules\Password::defaults()],
            ],
            [
                // custom messages
                'f_name.regex' => 'First Name may only contain letters, spaces, hyphen (-), dot (.) and colon (:).',
                'l_name.regex' => 'Last Name may only contain letters, spaces, hyphen (-), dot (.) and colon (:).',
                'phone.required' => 'The Phone number Field is required.',
                'phone.regex'    => 'Please enter a valid phone number.',
                'phone.unique'   => 'This phone number is already registered.',

            ],
            [
                // custom attribute names
                'f_name' => 'First Name',
                'l_name' => 'Last Name',
                'phone' => 'Phone Number',
                'email' => 'Email',
                'password' => 'Password',
                'confirm_password' => 'Confirm Password',
            ]
        );

        $user = User::create([
            'f_name' => $request->f_name,
            'l_name' => $request->l_name,
            'phone' => $request->phone,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        // dd($request->all());
        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
