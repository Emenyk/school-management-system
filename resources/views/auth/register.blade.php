
<!DOCTYPE html>
<html class="no-js"  lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>SMS</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <x-head_links/>
    </head>
    <body>
        <div class="error-pagewrap">
            <div class="error-page-int">
                <div class="text-center m-b-md custom-login">
                    <h3>ADMIN REGISTRATION PAGE</h3>
                    <p>This is the best school ever!</p>
                </div>
                <div class="content-error">
                    <div class="hpanel">
                        <div class="panel-body">
                            <form action="{{ route('register') }}" method="POST" id="loginForm">
                                @csrf
                                <div class="form-group">
                                    <label class="control-label" for="name">Name</label>
                                    <input id="name" type="name" placeholder="example@gmail.com" title="Please enter you name" required name="name" id="name" class="form-control">
                                    <span class="help-block small">Your Name</span>
                                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="email">Email</label>
                                    <input id="email" type="email" placeholder="example@gmail.com" title="Please enter you email" required name="email" id="email" class="form-control">
                                    <span class="help-block small">Your unique email to app</span>
                                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="password">Password</label>
                                    <input id="password" type="password" title="Please enter your password" placeholder="******" required name="password" id="password" class="form-control">
                                    <span class="help-block small">Yur strong password</span>
                                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="password_confirmation">Password confirmation</label>
                                    <input id="password_confirmation" type="password" title="Please enter your password_confirmation" placeholder="******" required name="password_confirmation" id="password_confirmation" class="form-control">
                                    <span class="help-block small">confirm password</span>
                                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                                </div>

                                <button class="btn btn-success btn-block loginbtn">Register</button>
                                <a class="btn btn-default btn-block" href="{{ route('login') }}">Login</a>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="text-center login-footer">
                    <p>Copyright © 2023. All rights reserved. Contact us <a href="#">SMSN</a></p>
                </div>
            </div>
        </div>
        <x-javascript_links/>
    </body>
</html>
