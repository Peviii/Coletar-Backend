<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Editar | Ponto de Coleta</title>
</head>
<body>
<div>
	<form action="/Coleta/{{$coleta->id}}/Update" method="POST" enctype="multipart/form-data">
		@csrf
		@method('PUT')
		<div class="form-group">
        	<label for="Image">Foto do Ponto de coleta</label>
            <input type="file" name="image" id="Image" value="{{$coleta->image}}">
        </div>
        <div class="form-group">
        	<label for="Image">Nome:</label>
            <input type="text" name="name" id="Name" value="{{$coleta->name}}">
        </div>
        <div class="form-group">
        	<label for="city">Cidade:</label>
            <input type="text" name="city" id="City" value="{{$coleta->city}}">
        </div>
        <div class="form-group">
			<label for="neighborhood">Bairro:</label>
			<input type="text" id="neighborhood" name="neighborhood" value="{{$coleta->neighborhood}}">
		</div>
		<div class="form-group">
			<label for="street">Rua:</label>
			<input type="text" id="street" name="street" value="{{$coleta->street}}">
		</div>
		<div class="form-group">
			<label for="number">Numero:</label>
			<input type="number" id="number" name="number"value="{{$coleta->number}}">
		</div>
		<div class="form-group">
			<label for="phone">Telefone:</label>
			<input type="phone" id="phone" name="phone" value="{{$coleta->phone}}">
		</div>
		<div class="form-group">
			<label for="title">Materiais de coleta:</label> 
				<div class="form-group">
					<input type="checkbox" name="itens[]" value="Vidro"> 
					Vidro
				</div>
				<div class="form-group">
					<input type="checkbox" name="itens[]" value="Papel"> 
					Papel
				</div>
				<div class="form-group">
					<input type="checkbox" name="itens[]" value="Plastico"> 
					Plastico
				</div>
				<div class="form-group">
					<input type="checkbox" name="itens[]" value="Metal"> 
					Metal
				</div>
				<div class="form-group">
					<input type="checkbox" name="itens[]" value="Organico"> 
					Organico
				</div>
		</div>
		<div class="form-group">
			<label for="info">Expediente:</label>
			<textarea name="info" id="info" value="{{$coleta->info}}"></textarea> 
		</div>            
		<input type="submit" class="button" value="Editar">	
	</form>
</div>
</body>
</html>