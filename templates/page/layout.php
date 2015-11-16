<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Sobre</title>

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">

        <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    </head>
    <body>
        <div class="centralizar">
            <header id="cabecalho">              
                <a href="index.html" class="logo">
                    <img src="img/logo.png" alt="Logo IMDB" />    
                </a>

                <nav class="menu">
                    <a class="menu-link" href="home.html">Home</a>
                    <a class="menu-link" href="listadefilme.html">Lista de Filmes</a>
                    <a class="menu-link" href="sobre.html">Sobre</a>
                </nav>

                <form class="form-pesquisa">
                    <input type="text" name="pesquisa" />
                    <button>Pesquisar</button>
                </form>
            </header>

            <article class="conteudo">
                
                <p><?php include_once $page. '.php'; ?></p>
            </article>
            
            <footer id="rodape">
                <p>
                    &copy; CopyRight - "Site do Jean Pier" - Todos os Direitos Reservados 
                    <br />
                    <a href="mailto:jikapieri@gmail.com">Jikapieri@gmail.comk</a>
                </p>
            </footer>
        </div>
    </body>
</html>