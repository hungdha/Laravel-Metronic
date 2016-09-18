<html>
	<head>
		<title>Laravel</title>
		
		<link href='//fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>
		<style>
			body {
				margin: 0;
				padding: 0;
				width: 100%;
				height: 100%;
				color: #B0BEC5;
				display: table;
				font-weight: 100;
				font-family: 'Lato';
			}

			.container {
				text-align: center;
				display: table-cell;
				vertical-align: middle;
			}

			.content {
				text-align: center;
				display: inline-block;
			}

			.title {
				font-size: 96px;
				margin-bottom: 40px;
			}

			.quote {
				font-size: 24px;
			}
			ul.registerlogin{
				list-style: none;
			    text-align: center;
			    width: 100%;
			    float: left;
			}
			ul.registerlogin li{
			    float: left;
    			margin: 0 10px;
    			width: 35%;
			}
			ul.registerlogin li.login{
			    text-align: left;
			}
			ul.registerlogin li.register{
				text-align: right;
			}

			ul.registerlogin li a{
		        text-decoration: none;
			    font-size: 18px;
			    text-align: center;
			    font-weight: 600;
			    color: #f3f3f3;
			}

		</style>
	</head>
	<body>
		<div class="container">
			<div class="content">
				<div class="title">Hello Laravel 5</div>				
				<div class="link" >
					<ul class="registerlogin">						
						<li class="register"><a href="{{ url('/auth/register') }}">Register</a></li>
						<li class="login"><a href="{{ url('/auth/login') }}">Login</a></li>
					</ul>
				</div>
			</div>
		</div>
	</body>
</html>
