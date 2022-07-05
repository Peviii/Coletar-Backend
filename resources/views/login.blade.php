<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login | Doador</title>
	<style type="text/css">
		body{
			margin: 0;
       		padding: 0;
        	box-sizing: border-box;
		}
		.login{
			width: 500px; 
        	padding-top: 250px;
        	margin-left: auto;
        	margin-right: auto;
        	font-family: sans-serif;
		}
		input{ display: block;}
	</style>
</head>
<body>
	<div class="login">
		<form action="/userLogin" method="POST">
			@csrf
			<div>
				<label>Email</label>
				<input type="email" name="email" id="email" required>
			</div>
			<div>
				<label>Password</label>
				<input type="password" name="password" id="password" required>
				<button>Entrar</button>
				<a href="/forgot-password">Esqueceu a senha?</a>
			</div>
		</form>
	</div>
</body>
</html>