<!DOCTYPE html>
<html>
<head>
<title>regist</title>
<!-- metatags-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="keywords" content="Transitive register form a Flat Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Meta tag Keywords -->
<link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css" media="all"/>
<link rel="stylesheet" href="{{asset('css/font-awesome.css')}}"><!--font_wesome_icons-->
<link href="//fonts.googleapis.com/css?family=Exo+2" rel="stylesheet"><!--online fonts-->
<link href="//fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet"><!--online fonts-->
</head>
<body>
	<div class="w3ls-headding">
		<h1><span>t</span>ransitive <span>r</span>egister <span>f</span>orm</h1>
	</div>
	<div class="agile-main">
		<div class="agile-left">
				
		</div>
		<div class="agile-right">
			<form action="" method="post">
					@csrf
				<div class="agile-right-h2">
					<h2> register here</h2>
				</div>
				<div class="w3l-name">
					<span><i class="fa fa-user" aria-hidden="true"></i></span>
					<input type="text" name="name" placeholder="Username" required=""/ id="name">
				</div>
				<div class="clear"></div>
				<div class="w3l-email">
					<span><i class="fa fa-envelope" aria-hidden="true"></i></span>
					<input type="email" name="email" placeholder="Email" required="" id="email"/>
				</div>
				<div class="clear"></div>
				<div class="w3l-psw">
					<span><i class="fa fa-lock" aria-hidden="true"></i></span>
					<input type="password" name="password" placeholder="password" required="" id="password"/>
				</div>
				<div class="clear"></div>
				<div class="w3l-cpsw">
					<span><i class="fa fa-lock" aria-hidden="true"></i></span>
					<input type="password" name="pwd" placeholder="confirm-Password" required=""  id="pwd"/>
				</div>
				<div class="clear"></div>
				
				<div class="w3l-submit">
					<input type="button" value="register now" id="sub">
				</div>
			</form>
				<p class="wthree-p">  or connect with  </p>
		</div>
		<div class="clear"></div>
	</div>
		<footer>
			<p>&copy; transitive register Form. All Rights Reserved | Design by <a href="http://w3layouts.com/"> W3layouts</a></p>
		</footer>
	
</body>
</html>
<script src="{{asset('layui/layui.js')}}"></script>
<script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
<script>
	$(function(){
		layui.use(['layer'], function(){
		  var layer = layui.layer;
		  //点击注册
		  $(document).on('click','#sub',function(){
		  		var name = $('#name').val();
		  		var email = $('#email').val();
		  		var password = $('#password').val();
		  		var pwd = $('#pwd').val();
		  		if(password!= pwd){
		  			layer.msg('两次密码不一致',{icon:2});
		  			return false;
		  		}
		  		$.ajaxSetup({
					 headers: {
					 	'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
					 }
				});
		  		$.post(
		  			'registdo',
		  			{name:name,email:email,password:password},
		  			function(res){
		  				// console.log(res);/
		  				if(res==1){
		  					layer.msg('用户名或者邮箱已存在',{icon:2});
		  				}else{
		  					layer.msg('注册成功',{icon:1,time:800},function(){
		  						location.href="/index";
		  					});
		  				}
		  			}
		  		)
		  })
	  	});
	})
</script>