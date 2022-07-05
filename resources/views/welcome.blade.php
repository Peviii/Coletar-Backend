<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Coleta Lagos</title>
<!-- Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
<style type="text/css">
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    body{ 
        background-image: url('img/cabofrio.JPG');
        no-repeat center center;
        background-size: cover;
        height: 92vh; 
    }
    nav{
        display: flex;
        justify-content: space-around;
        align-items: center;
        font-family: system-ui, Helvetica, Arial, sans-serif;
        background: lightgreen;
        height: 8vh;
    }
    a{
        color: #fff;
        text-decoration: none;
        transition: 0.3s;
    }
    a:hover{
        opacity: 0.7;
    }
    h3{
        font-size: 24px;
        text-transform: uppercase;
        letter-spacing: 4px;
    }    
    .nav-class{
        list-style: none;
        display: flex;
    }
    .nav-class li{
        letter-spacing: 3px;
        margin-left: 32px;
    } 
    footer{
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        height: auto;
        width: 100wv;
        background: lightgreen;
        font-family: sans-serif;
        padding-top: 30px;
        color: #fff;
    }  
    .footer-content{
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        text-align: center;
    }
    .footer-content ul{
        list-style: none;
        display: flex;
        letter-spacing: 3px;
    }
    .footer-botton{padding: 25px;}
    .footer-botton h4{
        font-size: 1.8rem;
        font-weight: 350;
        text-transform: capitalize;
        line font-weight: 3rem;
        align-items: center;
        justify-content: center;
        text-align: center;
    }
    .welcome{
        width: 500px; 
        padding-top: 250px;
        margin-left: auto;
        margin-right: auto;
        font-family: sans-serif;

    }
</style>
</head>
<body>       
    <header>
        <nav>
            <a href="#"><h3 style="color: white;">Coleta lagos</h3></a>
            <ul class="nav-class">
                <li><a href="/Cadastro">Cadastre-se</a></li>
                <li><a href="/loginUser">Login Doador</a></li>
                <li><a href="/loginColeta">Login Coleta</a></li>
            </ul>
        </nav>
    </header>
    <div class="welcome">
        <h3>Bem vindo ao Coleta Lagos</h3>
        <br>
        <p>A melhor aplicação web de mapeamento de pontos de coleta da Região dos Lagos-RJ para aqueles que buscam a preservação ecologica e a higienização do meio ambiente em detrimento e virtude das futuras gerações.Sempre orientando e conscientizando todos aqueles a quem se interessam pela proteção ambiental, e auxiliando aqueles que já trabalham pela mesma.</p>
    </div>            
<footer>
    <div class="footer-content">
        <ul>
            <li><p> example copyright & rights reserved</p></li>
            <li><p>,2022</p></li>
        </ul>
        
    </div>
    <div class="footer-botton">
        <h4>Coleta lagos°</h4>
    </div>
</footer>
</body>
</html>
