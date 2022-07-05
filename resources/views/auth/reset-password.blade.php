<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar Senha | Coleta Lagos</title>
</head>
<body>
    <form action="/reset-password" method="POST">
        @csrf

        @if(session('email'))
            <p style="color: red;">{{session('email')}}</p> 
        @endif  
            <input type="hidden" name="token" value="{{$token}}">
            <div>
                <label for="email">Email</label>
                <input type="email" id="email" name="email" value="{{$email ?? old('email')}}">
                @error('email')
                    <p style="color: red;">{{$message}}</p>
                @enderror
            </div> 
            <div>
                <label for="password">Password</label>
                <input type="password" id="password" name="password">
                @error('password')
                    <p style="color: red;">{{$message}}</p>
                @enderror
            </div> 
            <div>   
                <label for="password_confirmation">Confirm password</label>
                <input type="password" id="password_confirmation" name="password confirmation">
                @error('password_confirmation')
                    <p style="color: red;">{{$message}}</p>
                @enderror
            </div>    
        <div>
            <button>atualizar senha</button>
        </div>
    </form>
</body>
</html>