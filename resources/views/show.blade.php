<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ponto de Coleta</title>
</head>
<body>
	<div>
		<a href="/Home">voltar</a>
	<div>
		<div>
			<img src="/img/coletas/{{$coleta->image}}">
		</div>
		<hr>
		<p>Nome do Ponto: {{$coleta->name}}</p>
		<br>
    	<p>Cidade: {{$coleta->city}}</p>
    	<br>
    	<p>Bairro: {{$coleta->neighborhood}}</p>
    	<br>
    	<p>Rua: {{$coleta->street}}</p>
    	<br>
    	<p>Numero: {{$coleta->number}}</p>
    	<br>
    	<p>Telefone: {{$coleta->phone}}</p>
    	<br>
    	<p>Expediente: {{$coleta->info}}</p>
    </div>
    	<h4>Materiais a receber: </h4>
    	<ul id="itens">
       		@foreach($coleta->itens as $item)
            	<li>{{$item}} </li>
        	@endforeach 
    	</ul> 
	</div>
</body>
</html>