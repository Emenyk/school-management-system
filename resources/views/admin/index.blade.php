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
    <!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
	<div class="error-pagewrap">
		<div class="error-page-int">
			<div class="hpanel">
				<div class="panel-body text-center lock-inner">
					<i class="fa fa-lock" aria-hidden="true"></i>
					<br/>
					<h4><span class="text-success"><p>{{ now()->format('H:i:s') }}</p></span> <strong>{{ now()->format('l, F j, Y') }}</strong></h4>
					<p>please this page is for administration purpose. If you are an adminstrator you can go ahead and lock. if you not, please the page is not for you. THANKS</p>
					<form action="{{ route('login') }}" method="GET" class="m-t">
                        @csrf
						<div class="form-group">
							
						</div>
						<button class="btn btn-primary block full-width" type="submit">Unlock</button>
					</form>
				</div>
			</div>
			<div class="text-center login-footer">
				<p>Copyright © 2023. All rights reserved. University of Nigeria secondary school <a href="">UNSS</a></p>
			</div>
		</div>
	</div>
    <x-javascript_links/>
</body>
</html>
