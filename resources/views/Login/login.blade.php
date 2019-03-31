<!DOCTYPE html>
<html>	
<head>
<title> login </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta name="keywords" content="League Coming Soon Responsive, Signup form web template, Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" media="all">
<link href="{{asset('css/style1.css')}}" rel='stylesheet' type='text/css' />
<link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" media="all">
<link href="{{asset('css/style1.css')}}" rel='stylesheet' type='text/css' />
<!--webfonts-->
<link href='//fonts.googleapis.com/css?family=Ubuntu+Condensed' rel='stylesheet' type='text/css'>
<!--//webfonts-->

</head>
<body>
 <!--SIGN UP-->
 <h1>MIGRATION LOGIN FORM</h1>
		<div class="login-form">
				<h2>Login Form</h2>
					
					
				<ul class="form">
				<form action="authenticate" method="post">
					@csrf
					<li>
					<input type="text" class="email" placeholder="Username" required=""/><a href="#" class=" icon user"></a>
					</li>
					<li>
						<input type="password" class="password" placeholder="Password" required=""/><a href="#" class=" icon lock"></a>
					</li>
						<div class="but-bottom">
					
								<input type="checkbox" name="checkbox"><span>Remember Me</span>
					
							<a href="#">Forgot Password ?</a>
							
							<div class="clear"> </div>
						</div>
								<div class="w3_log">
								<input type="submit" value="LOGIN">
								</div>
								<div class="w3_log">
								<a href="regist"><input type="button" value="Regist"></a>
								</div>
							<div class="clear"> </div>
					
					</form>
				</ul>
				<div class="social-icons">
						
							<h3>Login with your facebook or twitter account.</h3>
								<ul class="bottom-sc-icons">
								<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i><span>Login with facebook</span></a></li>
								<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i><span>Login with twitter</span></a></li>
							</ul>
							<div class="clear"> </div>
				</div>
				

					<div class="clear"> </div>
				</div>
 <!--/SIGN UP-->
  	<div class="copyrights">
			<p>&copy; 2018 Migration Login Form. All rights reserved | Design by <a href="http://w3layouts.com">w3layouts</a></p>
		</div>
<!---728x90--->
</body>
</html>