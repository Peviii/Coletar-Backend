<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home | Coleta Lagos</title>
	<style type="text/css">
        ul{
         list-style: none;
         display: flex;
         margin: 0;
         padding: 0;
         overflow: hidden;
        }
        li{
         padding: 15px;
         margin: 5px;
        }
        a{
         color: springgreen;
         text-decoration: none;
         transition: 1s;
        }
        a:hover{
         color: turquoise;
        }
    </style>    
</head>
<body>
	<header>
		<nav>
			<ul>
				<li class="nav-item">
            		<form action="/Home" method="GET">
                	<input type="text" id="search" name="search" class="form-control" placeholder="Procurar..."><button type="submit">Pesquisar</button>   
           			</form>
       			 </li>    
				<li><a href="/Dashboard">Dashboard</a></li>
				<li>
               <form action="/logout" method="POST">
               @csrf
                  <a href="/Logout">Sair</a>
               </form>   
               </li>	
			</ul>
		</nav>
	</header>
	<div id="selets-container">
  	@if($search)
    	<h2>Buscando por:{{$search}}</h2>  
 	 @else
    	<h2>Pontos de coleta das redondezas</h2>
    	<p class="subtitle">Veja aqui os pontos de coleta disponiveis</p>
  	@endif    
    <div id="cards-container"class="row">
     @foreach($coletas as $coleta)   
        <div class="coleta-container"> 
            <img src="/img/coletas/{{$coleta->image}}">  
           <div class="card-body">
              <p>{{$coleta->name}} - {{$coleta->city}} - {{$coleta->neighborhood}}</p>
              <a href="/Home/{{$coleta->id}}/Coleta">informações sobre o ponto</a>
           </div>
        </div>
     @endforeach
     @if(count($coletas) == 0 && $search)
        <p>Ponto de coleta não encontrado<a href="/Home">Ver todos</a></p>
     @elseif(count($coletas) == 0)
        <p>Não há pontos de coleta disponíveis</p>
     @endif   
    </div>
</div>
</body>
</html>