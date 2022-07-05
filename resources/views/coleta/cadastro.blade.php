<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cadastro | Ponto de Coleta</title>
</head>
<body>
	<form action="/Cadastro-Coleta" method="POST" enctype="multipart/form-data">
	@csrf
        <div class="form-group">
           	<label for="Image">Foto do Ponto de coleta:</label>
           	<input type="file" name="image" id="Image">
        </div>
        <div class="form-group">
           	<label for="Name">Nome:</label>
            <input type="name" name="name" id="Name">
        </div>
        <div class="form-group">
            <label for="City">Cidade:</label>
           	<input type="city" name="city" id="City">
        </div>
        <div class="form-group">
            <label for="Neighborhood">Bairro:</label>
         	<input type="neighborhood" name="neighborhood" id="Neighborhood">
        </div>
        <div class="form-group">
            <label for="Street">Rua:</label>
            <input type="street" name="street" id="Street">
        </div>
        <div class="form-group">
            <label for="Number">Numero:</label>
          	<input type="number" name="number" id="number">
        </div>
        <div class="form-group">
            <label for="phone">Telefone:</label>
            <input type="phone" name="phone" id="phone">
        </div>
        <div class="form-group">
            <label for="info">Expediente:</label>
            <textarea name="info" id="info" placeholder="Expediente"></textarea> 
        </div>
        <div class="form-group">
            <label for="title">Materiais de coleta:</label> 
            <div class="form-group">
            	<input type="checkbox" name="itens[]" value="Vidro"> Vidro
            </div>
            <div class="form-group">
                <input type="checkbox" name="itens[]" value="Papel"> Papel
            </div>
            <div class="form-group">
                <input type="checkbox" name="itens[]" value="Plastico"> Plastico
            </div>
            <div class="form-group">
                <input type="checkbox" name="itens[]" value="Metal"> Metal
            </div>
            <div class="form-group">
                <input type="checkbox" name="itens[]" value="Organico"> Organico
            </div>
        </div>            
        <button type="submit">Cadastrar</button>
		</div>
	</form>
</body>
</html>