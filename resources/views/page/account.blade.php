@extends('layout.default')

@section('content')
<div class="container flex flex-col md:flex-row flex-wrap my-6 font-bold lg:mt-8 text-3xl">
    @if(session('status'))
    <div>
        {{ session('status') }}
    </div>
    @endif
</div>

<div class="columns">
    <div class="column main">
        <div id="customer-login-container" class="login-container">
            <div class="w-full md:w-1/2 mr-4">
                <h1 class="text-account-account page-title title-font font-miedu mb-8">
                    <span class="base" data-ui-id="page-title-wrapper">
                        Customer Login
                    </span>
                </h1>
                <div class="card">
                    <div aria-labelledby="block-customer-login-heading">
                        <form class="form form-login" action="{{ url('login') }}" method="post" id="customer-login-form">
                            @csrf

                            <!-- Login error -->
                            @error('email')
                            <div class="my-4 text-2xl">
                                {{ $message }}
                            </div>
                            @enderror
                            <fieldset class="fieldset login">
                                <legend class="mb-3">
                                    <h2 class="font-medium title-font text-primary">
                                        Login
                                    </h2>
                                </legend>
                                <div class="text-secondary-darker mb-8 text-base leading-base font-normal">
                                    If you have an account, sign in with your email address.
                                </div>
                                <div class="field">
                                    <label class="label" for="email">
                                        <span>Email</span>
                                    </label>
                                    <div class="control">
                                        <input data-test="login-email" name="email" class="form-input" required="" value="" autocomplete="off" id="email" type="email" title="Email">
                                    </div>
                                </div>
                                <div class="field">
                                    <label for="pass" class="label">
                                        <span>Password</span>
                                    </label>
                                    <div class="control flex items-center">
                                        <input data-test="login-password" name="password" class="form-input" required="" autocomplete="off" id="pass" title="Password" type="password">
                                    </div>
                                </div>
                                <div class="actions-toolbar flex justify-between pt-6 pb-2 items-center">
                                    <button data-test="login-submit" type="submit" class="btn btn-primary disabled:opacity-75" name="send">
                                        <span>Sign In</span>
                                    </button>
                                    <a class="underline text-secondary" href="#">
                                        <span>Forgot Your Password?</span>
                                    </a>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
            <div class="w-full md:w-1/2 my-8 md:my-0">
                <h1 class="text-gray-900 page-title title-font font-medium mb-8">
                    <span class="base" data-ui-id="page-title-wrapper">
                        Create New Customer Account
                    </span>
                </h1>
                <div class="card">
                    <form class="form form-create-user" method="post" id="customer-register-form" action="{{ url('register') }}">
                        @csrf
                        <fieldset class="fieldset create">
                            <legend class="mb-3">
                                <h2 class="title-font text-primary">
                                    Personal Information
                                </h2>
                            </legend>

                            <!-- First Name -->
                            <div class="field">
                                <label class="label" for="registerFirstName">
                                    <span>First Name</span>
                                </label>
                                <div class="control">
                                    <input type="text" data-test="register-firstName" name="firstname" class="form-input" id="registerFirstName" title="First Name" value="{{ old('firstname') }}" />
                                </div>
                                <div class=" field field-reserved field-error">
                                    @error('firstname')
                                    <ul class="messages">
                                        <li>
                                            {{ $message }}
                                        </li>
                                    </ul>
                                    @enderror
                                </div>
                            </div>

                            <!-- Last Name -->
                            <div class="field">
                                <label class="label" for="registerLastName">
                                    <span>Last Name</span>
                                </label>
                                <div class="control">
                                    <input type="text" data-test="register-lastName" name="lastname" class="form-input" id="registerLastName" title="Last Name" value="{{ old('lastname') }}" />
                                </div>
                                <div class="field field-reserved field-error">
                                    @error('lastname')
                                    <ul class="messages">
                                        <li>
                                            {{ $message }}
                                        </li>
                                    </ul>
                                    @enderror
                                </div>
                            </div>
                        </fieldset>
                        <fieldset>
                            <legend class="mb-3">
                                <h2 class="title-font text-primary">
                                    Sign-In Information
                                </h2>
                            </legend>

                            <!-- Email -->
                            <div class="field">
                                <label class="label" for="register_email">
                                    <span>Email</span>
                                </label>
                                <div class="control">
                                    <input type="email" data-test="register-email" name="register_email" class="form-input" id="register_email" title="Email" value="{{ old('register_email') }}" />
                                </div>
                                <div class="field field-reserved field-error">
                                    @error('register_email')
                                    <ul class="messages">
                                        <li>
                                            {{ $message }}
                                        </li>
                                    </ul>
                                    @enderror
                                </div>
                            </div>

                            <!-- Password -->
                            <div class="field">
                                <label class="label" for="register_password">
                                    <span>Password</span>
                                </label>
                                <div class="control">
                                    <input type="password" data-test="register-password" name="register_password" class="form-input" id="register_password" title="Password" />
                                </div>
                                <div class="field field-reserved field-error">
                                    @error('register_password')
                                    <ul class="messages">
                                        <li>
                                            {{ $message }}
                                        </li>
                                    </ul>
                                    @enderror
                                </div>
                            </div>

                            <!-- Password Confirm -->
                            <div class="field">
                                <label class="label" for="registerPasswordConfirm">
                                    <span>Confirm Password</span>
                                </label>
                                <div class="control">
                                    <input type="password" data-test="register-passwordConfirm" name="password_confirmation" class="form-input" id="registerPasswordConfirm" title="Password Confirm" />
                                </div>
                                <div class="field field-reserved field-error">
                                    @error('password_confirmation')
                                    <ul class="messages">
                                        <li>
                                            {{ $message }}
                                        </li>
                                    </ul>
                                    @enderror
                                </div>
                            </div>

                            <!-- Register newsletter -->
                            <div class="field choice">
                                <input type="checkbox" data-test="register-newsletter" class="form-checkbox" name="subscribed" id="registerNewsletter" title="Register for Newsletter" value="1" />
                                <label class="label" for="registerNewsletter">
                                    <span class="capitalize text-secondary-darker mb-8 text-base leading-base font-normal">Sign up for newsletter</span>
                                </label>
                            </div>
                        </fieldset>
                        <div class="actions-toolbar pt-6 pb-2 flex self-end">
                            <button type="submit" data-test="register-submit" class="btn btn-primary">
                                <span>Create an Account</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
