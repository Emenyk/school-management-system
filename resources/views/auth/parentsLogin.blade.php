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
                    <h3>PARENTS LOGIN PAGE</h3>
                    <p>This is the best school ever!</p>
                </div>
                <div class="content-error">
                    <div class="hpanel">
                        <div class="panel-body">
                            <form action="#" id="loginForm">
                                <div class="form-group">
                                    <label class="control-label" for="username">Email</label>
                                    <input type="text" placeholder="example@gmail.com" title="Please enter you username" required="" value="" name="username" id="username" class="form-control">
                                    <span class="help-block small">Your unique username to app</span>
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="password">Password</label>
                                    <input type="password" title="Please enter your password" placeholder="******" required="" value="" name="password" id="password" class="form-control">
                                    <span class="help-block small">Yur strong password</span>
                                </div>
                                <div class="checkbox login-checkbox">
                                    <label>
                                            <input type="checkbox" class="i-checks"> Remember me </label>
                                    <p class="help-block small">(if this is a private computer)</p>
                                </div>
                                <button class="btn btn-success btn-block loginbtn">Login</button>
                                <a class="btn btn-default btn-block" href="#">Register</a>
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
