<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cadastro | Doador</title>
	<style type="text/css">
		body{
			margin: 0;
       		padding: 0;
        	box-sizing: border-box;
		}
		.register{
        	width: 500px; 
        	padding-top: 250px;
        	margin-left: auto;
        	margin-right: auto;
        	font-family: sans-serif;
   		}
   		input, select{ display: block; padding-left: 12px;}
	</style>
</head>
<body>
<div class="register">	
	<form action="/Cadastro" method="POST">
		@csrf
		<div>
			<label for="name">Nome:</label>
			<input type="text" name="name" id="name">
		</div>
		<div>
			<label for="email">email:</label>
			<input type="text" name="email" id="email">
		</div>
		<div>
			<label for="Coleta">Ponto de Coleta?</label>
            <select name="Coleta" id="Coleta">
                <option value="0">Não</option>
                <option value="1">Sim</option>
            </select>
        </div>
		<div>
			<label for="password">Senha:</label>
			<input type="password" name="password" id="password">
		</div>
		<div>
			<label for="confirm_password">Confirmar Senha:</label>
			<input type="password" name="confirm_password" id="confirm_password">
		</div>
		<br>
		<button type="submit">Cadastrar</button>
	</form>
</div>
</body>
</html>