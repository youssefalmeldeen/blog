<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Acced Form Widget Template | Home :: w3layouts</title>
<!-- Custom Theme files -->
<link href="{{URL::asset('public/css/style.css')}}"l rel="stylesheet" type="text/css" media="all"/>
<!-- Custom Theme files -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<meta name="keywords" content="Login form web template, Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<!--Google Fonts-->
<link href='http://fonts.googleapis.com/css?family=Roboto:500,900italic,900,400italic,100,700italic,300,700,500italic,100italic,300italic,400' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
<!--Google Fonts-->
</head>
<body>
<div class="login">
	<h2>Wa<span class="zz">ZZ</span>afny &weierp;</h2>
	<div class="login-top">
		<h1>Register FORM</h1>
		<form method="post" action="{{url('/test')}}">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<input type="text" name="name" placeholder="Username" value="{{old('name')}}">
			@if($errors->has('name'))
			<span style="color: red; margin-left: 5%;">{{$errors->first('name')}}</span>
			@endif
            <input type="text" name="email" placeholder="Email">
            <input type="text" name="phone" placeholder="Phone">
            <input type="password" name="password" placeholder="Password">
			<input type="password" name="password_confirmation" placeholder="Confirm Password">
			
	    
		    <div class="forgot">
		    	<input type="submit" value="Register" >
		    	
		    </div>
		</form>
	</div>
	<div class="login-bottom">
		<h3>WaZZafny &weierp;</h3>
	</div>
</div>	
<div class="copyright">
	<p>Copyright &copy; Reserved For <a href=""> WaZZafny &weierp; </p>
</div>
</body>
</html>