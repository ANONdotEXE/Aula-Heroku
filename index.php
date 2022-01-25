<?php



?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
   <style>
       
    font-size: 25px;
    color: #fff;
    padding: 10px;
    display: inline;
    font-family: 'Valorant';
}

#menu ul li a {
    color: #fff;
    padding: 20px;
    display: inline-block;
    text-decoration: none;
    transition: background .1s;
    font-family:'Quicksand', sans-serif ;
}

#menu ul li a:hover {
    background: #1e2a54
}

#menu ul li:last-child a {
    float: right;
}

#main {
    position: absolute;
    margin: 0;
    height: 1280px;
    width: 100%;
    background: linear-gradient(-45deg, #0077b6, #1e2a54);
}

.info1{
    padding-top: 60px;
    padding-right: 130px;
    float: right;
}

#texto1 {
    color: #fff;
    font-size: 1.75em;
    padding-top: 100px;
    padding-left: 130px;
    float: left,
}

#texto2 { 
    color: #fff;
    font-size: 1.75em;
    padding-left: 130px;
    text-align:justify, left;
}

   </style>

</head>

<body>
<div>
        <nav id="menu">
            <ul>
                <h1>Feito por: Lucas Oliveira Assis</h1>
                <li>Lubank</li>
                <li><a>Home</a></li>
                <li><a>Cadastrar</a></li>
                <li><a>Sobre nós</a></li>
                <li><a>Contato</a></li>
                <li><a>Entrar</a></li>
            </ul>
        </nav>
    </div>
    <div id="main">
        <div class="info1">
            <img src="Wallpaper.png" width="284" height="479">
        </div>
        <div id="texto1">
            <h1>A Conta do Lubank</h1>
        </div>
        <br>
        <br>
        <div id="texto2">
            <h2>A conta que vai levar você <br>ao controle da sua vida <br> financeira</h2>
        </div>
    </div>
</body>

</html>