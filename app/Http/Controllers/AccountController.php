<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;

class AccountController extends Controller
{

    /**
     * Display my account page
     *
     * @return Response
     */
    public function index(): Response
    {
        return response()->view('page.account');
    }

    /**
     * Login user in to the system
     *
     * @param LoginRequest $request
     */
    public function login(LoginRequest $request): RedirectResponse
    {
       if (!Auth::attempt($request->only('email', 'password'))) {
            return redirect('/')->withErrors([
                'email' => 'Password or e-mail is incorrect!',
            ]);
        }

        $request->session()->regenerate();

        return redirect(route('success'));
    }


    /**
     * Logout user from the system
     *
     */
    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

    /**
     * Register user in the system
     *
     * @param RegisterRequest $request
     */
    public function register(RegisterRequest $request): RedirectResponse
    {
        $user = User::create([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'email' => $request->register_email,
            'password' => Hash::make($request->register_password),
            'subscribed' => $request->subscribed ? true : false,
        ]);
        Auth::login($user);

        return redirect('/')
            ->with('status', "User registered successfully!");
    }

    /**
     * Display a success message for logged-in users
     *
     */
    public function success(Request $request)
    {
        if (Auth::check()) {
            return view('page.success')
                ->with([
                    'firstname' => $request->user()->firstname,
                    'lastname' => $request->user()->lastname
                ]);
        }

        return redirect('/');
    }
}
