<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
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
        $request->authenticate();

        $request->session()->regenerate();

        return redirect(route('success'));
    }


    /**
     * Logout user from the system
     *
     */
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

/**
 * Register user in the system
 *
 * @param Request $request
 */
public function register(Request $request)
{

    $validator = Validator::make($request->all(), [
        'firstname' => 'required|string|max:255',
        'lastname' => 'required|string|max:255',
        'register_email' => 'required|string|max:255|email|unique:' . User::class,
        'register_password' => [
            'required',
            Password::min(8)->letters()->numbers()
        ],
        'password_confirmation' => ['required', 'same:register_password'],
    ], [
        'password_confirmation.same' => 'The password confirmation does not match.',
    ]);

    $validator->validate();

    $validated = $validator->validated();

    $subscribed = $request->subscribed == 1;

    $user = User::create([
        'firstname' => $validated['firstname'],
        'lastname' => $validated['lastname'],
        'email' => $validated['register_email'],
        'password' => Hash::make($validated['register_password']),
        'subscribed' => $subscribed,
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