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
<link href="{{asset('public/css/style.css')}}" rel="stylesheet" type="text/css" media="all"/>
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
<form method="post" action= "{{url('/login/home')}}">    
    <div class="login">
        <h2>Wa<span class="zz">ZZ</span>afny &weierp;</h2>
        <div class="login-top">
            <h1>LOGIN FORM</h1>
                
                <input type="text" name="email" placeholder="Email">

                @if($errors->any())
                <span style="color: red; margin-left: 5%;">{{$errors->first('email')}}</span>
                @endif
                <input type="password" name="password" placeholder="Password">

                @if($errors->any())
                <span style="color: red; margin-left: 5%;">{{$errors->first('password')}}</span>
                @endif




            </form>
            <div class="forgot">
                <a href="{{URL('/reset')}}">forgot Password</a>
                <input type="submit" value="Login" >
            </div>
        </div>
        <div class="login-bottom">
            <h3>New User &nbsp;<a href="{{URL('/reg')}}">Register</a>&nbsp Here</h3>
        </div>
    </div>	
</form>
<div class="copyright">
	<p>Copyright &copy; Reserved For <a href="">WaZZafny &weierp;</a></p>
</div>
</body>
</html>