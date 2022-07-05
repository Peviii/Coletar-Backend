<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Dashboard | Doador</title>
	<style type="text/css">
      ul {
         display: flex;
         list-style: none;
         margin: 0;
         padding: 0;
         overflow: hidden;
        }
        li {
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
			<ul>
				<li>|<strong>{{$user->name}}</strong></li>
				<li><a href="/Home">Home</a></li>
				<li>
                <form action="/Logout" method="POST"></form>    
                    <a href="/Logout">Sair</a>
                </form>    
                </li>
			</ul>
		</nav>
	</header>
	<h1>Dashboard de usuario</h1> 
       <div class="coleta">
            @if($user->coleta =='1')
             <a href="/Dashboard/Coleta">Seu Ponto de Coleta</a>
            @else
            <p>seus dados pessoais</p>
            @endif    
       </div>
</body>
</html>