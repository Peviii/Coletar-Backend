<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login | Ponto de Coleta</title>
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
		<form action="/coletaLogin" method="POST">
			@csrf
			<div>
				<label for="email">Email</label>
				<input type="email" name="email">
			</div>
			<div>
				<label for="senha">Senha</label>
				<input type="password" name="password">
			</div>
			<button>Entrar</button>
			<a href="/esqueciSenha">Esqueceu a senha?</a>
		</form>
	</div>
</body>
</html>