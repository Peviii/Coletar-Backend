<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Dashboard | Ponto de Coleta</title>
	<style type="text/css">
     	 #nav {
         	display: flex;
        	list-style: none;
        	margin: 0;
         	padding: 0;
         	overflow: hidden;
        }
        .li {
            float: left;
            padding: 17px;
            margin: 10px;
        }
        li a {
            text-decoration: none;
        }
    </style>
</head>
<body>
	<header>
		<nav>
			<ul id="nav">
				<li class="li">| <strong>{{$user->name}}</strong></li>
				<li class="li"><a href="/Home">Home</a></li>
				<li class="li"><a href="/Logout">sair</a></li>
			</ul>
		</nav>
	</header>
	<div id="container">
    	<div class="image">
        	<img src="/img/coletas/{{$user->coleta->image}}">
    	</div>    
    	<div class="coleta">
    		<p>Nome do Ponto: {{$user->coleta->name}}</p>
    		<p>Cidade: {{$user->coleta->city}}</p>
    		<p>Bairro: {{$user->coleta->neighborhood}}</p>
    		<p>Rua: {{$user->coleta->street}}</p>
    		<p>Numero: {{$user->coleta->number}}</p>
    		<p>Telefone: {{$user->coleta->phone}}</p>
    		<p>Expediente: {{$user->coleta->info}}</p>
    	</div>
    	<h4>Materiais a receber: </h4>
    	<ul id="itens">
       		@foreach($user->coleta->itens as $item)
            	<li>{{$item}} </li>
        	@endforeach 
    	</ul> 
    	<hr>
    	<h3>
    		<a href="/Coleta/{{$user->coleta->id}}/Edit">
    		Atualizar Dados
    		</a>
    	</h3>    
    </div>    
</body>
</html>