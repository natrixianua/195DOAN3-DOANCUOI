<!DOCTYPE html>
<head>
	<title>Trang Forget Pass</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!-- bootstrap-css -->
	<link rel="stylesheet" href="css/bootstrap.min.css" >
	<!-- //bootstrap-css -->
	<!-- Custom CSS -->
	<!-- <link href="{{asset('public/backend/css/style.css')}}" rel='stylesheet' type='text/css' /> -->
	<link href="{{asset('public/backend/css/style-responsive.css')}}" rel="stylesheet"/>
	<!-- font CSS -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
	<!-- font-awesome icons -->
	<link rel="stylesheet" href="{{asset('public/backend/css/font.css')}}" type="text/css"/>
	<link href="{{asset('public/backend/css/font-awesome.css')}}" rel="stylesheet"> 
	<!-- //font-awesome icons -->
	<script src="js/jquery2.0.3.min.js"></script>
</head>
<body>
	<style type="text/css" media="screen">
		*{
			padding: 0;
			margin: 0;
			box-sizing: border-box;
		}

		body{
			font-family: 'Poppins', sans-serif;
			overflow: hidden;
		}

		.wave{
			position: fixed;
			bottom: 0;
			left: 0;
			height: 100%;
			z-index: -1;
		}

		.container{
			width: 100vw;
			height: 100vh;
			display: grid;
			grid-template-columns: repeat(2, 1fr);
			grid-gap :7rem;
			padding: 0 2rem;
		}

		.img{
			display: flex;
			justify-content: flex-end;
			align-items: center;
		}

		.login-content{
			display: flex;
			justify-content: flex-start;
			align-items: center;
			text-align: center;
		}

		.img img{
			width: 500px;
		}

		form{
			width: 360px;
		}

		.login-content img{
			height: 100px;
		}

		.login-content h2{
			margin: 15px 0;
			color: #333;
			text-transform: uppercase;
			font-size: 2.9rem;
		}

		.login-content .input-div{
			position: relative;
			display: grid;
			grid-template-columns: 7% 93%;
			margin: 25px 0;
			padding: 5px 0;
			border-bottom: 2px solid #d9d9d9;
		}

		.login-content .input-div.one{
			margin-top: 0;
		}

		.i{
			color: #d9d9d9;
			display: flex;
			justify-content: center;
			align-items: center;
		}

		.i i{
			transition: .3s;
		}

		.input-div > div{
			position: relative;
			height: 45px;
		}

		.input-div > div > h5{
			position: absolute;
			left: 10px;
			top: 50%;
			transform: translateY(-50%);
			color: #999;
			font-size: 18px;
			transition: .3s;
		}

		.input-div:before, .input-div:after{
			content: '';
			position: absolute;
			bottom: -2px;
			width: 0%;
			height: 2px;
			background-color: #38d39f;
			transition: .4s;
		}

		.input-div:before{
			right: 50%;
		}

		.input-div:after{
			left: 50%;
		}

		.input-div.focus:before, .input-div.focus:after{
			width: 50%;
		}

		.input-div.focus > div > h5{
			top: -5px;
			font-size: 15px;
		}

		.input-div.focus > .i > i{
			color: #38d39f;
		}

		.input-div > div > input{
			position: absolute;
			left: 0;
			top: 0;
			width: 100%;
			height: 100%;
			border: none;
			outline: none;
			background: none;
			padding: 0.5rem 0.7rem;
			font-size: 1.2rem;
			color: #555;
			font-family: 'poppins', sans-serif;
		}

		.input-div.pass{
			margin-bottom: 4px;
		}

		a{
			display: block;
			text-align: right;
			text-decoration: none;
			color: #999;
			font-size: 0.9rem;
			transition: .3s;
		}

		a:hover{
			color: #38d39f;
		}

		.btn{
			display: block;
			width: 100%;
			height: 50px;
			border-radius: 25px;
			outline: none;
			border: none;
			background-image: linear-gradient(to right, #32be8f, #38d39f, #32be8f);
			background-size: 200%;
			font-size: 1.2rem;
			color: #fff;
			font-family: 'Poppins', sans-serif;

			margin: 1rem 0;
			cursor: pointer;
			transition: .5s;
		}
		.btn:hover{
			background-position: right;
		}

/* 
@media screen and (max-width: 1050px){
	.container{
		grid-gap:  5rem;
	}
	} */

	@media screen and (max-width: 1000px){
		form{
			width: 290px;
		}

		.login-content h2{
			font-size: 2.4rem;
			margin: 8px 0;
		}

		.img img{
			width: 400px;
		}
	}

	@media screen and (max-width: 900px){
		.container{
			grid-template-columns: 1fr;
		}

		.img{
			display: none;
		}

		.wave{
			display: none;
		}

		.login-content{
			justify-content: center;
		}
	}
	.add input{
		display: block;
		width: 100%;
		height: 5vh;
		margin: 5%;
	}
	.signup-form{
		position: absolute;
		top: 50%;
		right: 16.5%;
		text-align: center;
	}
	.box{
		position: absolute;
		top: 0;
		}.text-alert{
			color: #32be8f;
			position: absolute;
			z-index: 10000;
		}
		.btn.btn-default{
			margin-left: 5%;
		}
		.text-alert{
			position: relative;
			color: #32be8f;
			top: 40%;
			left: 30%;
		}
		.alert.alert-danger{
			position: relative;
			color: red;
			top: 40%;
			left: 23%;
		}
	</style>
	<body>
		<section id="form">


			<div   class="container">
				<img class="wave" src="{{('public/frontend/images/wave.png')}}">
				<div class="img">
					<img src="{{('public/frontend/images/bg.svg')}}">
				</div>

				<div class="row">
						<?php
							$message = Session::get('message');
							if($message){
							echo '<span class="text-alert">'.$message.'</span>';
							Session::put('message',null);
						}
						?>
						@if(session()->has('error'))
						<div class="alert alert-danger">
							{!! session()->get('error') !!}
						</div>
						@endif
					<div class="col-sm-12">

						<div class="login-form" style="margin-top:25vh; margin-left: 10vw">


						<form class="box" action="{{URL::to('/recover-pass')}}" method="POST">

							{{csrf_field()}}
							<img style="width: 10vh;margin-left: 16vh;" src="{{('public/frontend/images/avatar.svg')}}">
							<h2  style="text-align: center;"class="title">ĐIỀN EMAIL ĐỂ LẤY LẠI MẬT KHẨU</h2>
							<div class="input-div one">
								<div class="i">
									<i class="fa fa-user"></i>
								</div>
								<div class="div">

									<input class="admin_email" name="email_account" placeholder="Nhập Email">
								</div>
							</div>
							


							<input class="btn" type="submit" name="login" value="Gửi">
						</form>
					</div>
				</div>

			</div>



			
			<!--/sign up form-->


		</section>


	</body>
	</html>