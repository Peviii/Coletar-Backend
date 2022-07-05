<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esqueci Senha | Coleta Lagos</title>
</head>
<body>
    <div>
     <p>informe seu email para que possamos lhe enviar o link para atualização de senha.</p>
    <form action="/forgot-password" method="POST">
        @csrf
            @if(session('status'))
                <p style="color: green;">{{session('status')}}</p>
            @elseif(session('email'))
                <p style="color: red;">{{session('email')}}</p> 
            @endif  
        <div class="reset password">
            <h2>Esqueci a senha</h2>
            <label for="email">Insira seu email</label>
            <input type="email" name="email">
            <button>Enviar</button>
        </div>
    </form>
</div>
</body>
</html>