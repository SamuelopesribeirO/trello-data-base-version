<!--
    INDEX - TRELLO REPLICADO (incompleto)

    Utilizando o Live Server

    LINKS --
    css - mobli-first.css
    css - media-query.css
    script - index.js
    Json - quadros.json

    FUNCIONALIDADES
    
    O código contém as funções principais do próprio trello, como:
    * Criar um quadro
    * Personalização entre dois temos
    * Excluir o quadro
    * Excluir todos os quadros
    * Após a página ser recarregada o quadro se mantém


    HEADER 
    É composto por um menu onde temos uma <ul> para compor os itens em forma de lista.
    Dentro de cada <li> temos separações de divs, isso me ajudou a ter certo controle de movimentação. 

    SECTION - (id) MENU LATERAL
    É um menu lateral que aparece quando a minha viewport atinge 769px
    feito em JavaScript

    ARTICLE -  (id) CONTEÚDO GERAL
    É onde contém todo o conteúdo principal do meu site, conquanto, maioria dos elementos adicionados na página servem apenas para efeito de comparação com o trello original

    CRIAÇÃO DE QUADROS

    Feito por um código em JS linkado ao meu HTML
-->
<?php
    session_start();
    print_r($_SESSION);
    if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true))
    {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: login.php');
    }
    $logado = $_SESSION['email'];
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quadros | Trello</title>
    <link rel="stylesheet" href="estilos/mobli-first.css" media="screen">
    <link rel="stylesheet" href="estilos/media-query.css">
    <link rel="shortcut icon" href="imagens/favicon.ico" type="image/x-icon">
</head>
<body>
    <main>
        <header>
            <menu>
                <ul id="lista" >
                    <li><div id="trello-menu1">
                        <img src="imagens/dots-menu.png" alt="trello-menu">
                    </div>
                    <li><a href="index.php" id="link-home">
                        <div id="trello-menu-principal">
                            <div class="trello1" id="divMenuTrello">
                                <img src="imagens/trelloIMG.PNG" alt="trello-menu2">
                            </div>
                            <div class="trello2">
                                <img src="imagens/87e1af770a49ce8e84e3.gif" alt="">
                            </div>
                        </div>
                    </a>
                    <li><div class="divHover"  id="áreas-de-trabalho">
                            <p>Áreas de trabalho</p>
                            <img src="imagens/down-arrow.png" alt="areas de trabalho">
                        </div>
                        <li><div class="divHover"  id="recente-menu">
                            <p>Recente</p>
                            <img src="imagens/down-arrow.png" alt="recente">
                        </div>
                        <li><div class="divHover" id="marcado-com-estrela">
                            <p>Marcados com estrela</p>
                            <img src="imagens/down-arrow.png" alt="marcado com estrela">
                        </div>
                        <li><div class="divHover"  id="modelos">
                            <p>Modelos</p>
                            <img src="imagens/down-arrow.png" alt="modelos">
                        </div>
                    <li><div id="mais">
                        <p>Mais</p>
                        <div id="mostrar-mais">
                            <img src="imagens/down-arrow.png" alt="mostrar-mais">
                        </div>
                        <div onclick="criarQuadro()" id="btn-mais"> <!--chama a função criar quadro do js, cumprindo a mesma funcionalidade-->
                            <img src="imagens/plus.png" alt="button-mais">
                        </div>
                        </div>
                    <li><div id="pequisa-sino-conta">
                        <div id="pesquisa">
                            <img src="imagens/search-interface-symbol.png" alt="icon-pesquisa">
                            <input type="search" name="buscar" id="ibuscar" placeholder="Buscar">
                        </div>
                        <div id="sino">
                            <img src="imagens/bell.png" alt="sino-icon">
                        </div>
                        <div id="conta">
                            <h1>SL</h1>
                            <div class="box-2">
                                <div class="btn btn-two">
                                <span>HOVER ME</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </ul>
            </menu>
        </header>
        <section id="menu-lateral">
            <div id="quadros-modelo-inicio">
                <div id="quadros-ml"> <img src="imagens/btrello.png" alt="img-quadros-ML"><a href="index.html">Quadros</a></div>
                <div id="modelos-ml"> <img src="imagens/theme.png" alt="modelos-ML"> <a href="#" onclick="indIspo()">Modelos</a> </div> <!--Chamando a função para alertar as página indisponíveis-->
                <div id="inicio-ml"> <img src="imagens/radiography.png" alt="inicio-ML"> <a href="index.html" onclick="indIspo()">Início</a> </div>
            </div>

            <div id="areas-de-trabalho-menu-lateral">
                <div id="add-trabalho-quadro">
                        <a href="#" onclick="criarQuadro()"> <!--Chama a função para a criação de quadros-->
                            <p>Áreas de trabalho</p>
                            <img src="imagens/add.png" alt="">
                        </a>
                </div>
            </div>
        </section>
        <article id="conteudo-geral">
            <div id="visualizado-recentemente">
                <img id="visualizado" src="imagens/wall-clock.png" alt="visualizado">
                <h2>Vizualizado recentemente</h2>
            
                <div id="trabalho-visualizado">
                    <h3>PROGRAMAÇÃO EDUCERE</h3>
                    <a href="página do trello.html">
                        <img src="imagens/pexels-luis-gomes-546819.jpg" alt="fundacao-educere">
            
                    </a>
                </div>
            </div>
            <section id="suas-areas-de-trabalho">
                <h3>SUAS ÁREAS DE TRABALHO</h3>
                <div id="work-area">
                    <div id="Area1-EX">
                        <a href="página do trello.html" target="_blank">
                            <div id="icone-inicial"><p>F</p></div>
                        </a>
                        <p>Fundação Educere</p>
                    </div>
                </div>
                <div id="quadros-views-members-cfg-att">
                    <div id="quadros">
                        <img src="imagens/btrello.png" alt="icon-quadros">
                        <a href="">
                            <p>Quadros</p>
                        </a>
                    </div>
                    <div id="vizualizacao">
                        <img src="imagens/vizualizado.png" alt="icon-vizualizacao">
                        <p>Vizualização</p>
                    </div>
                    <div id="membros">
                        <img src="imagens/membros.png" alt="icon-membros">
                        <p>Membros</p>
                    </div>
                    <div id="config">
                        <img src="imagens/cfg.png" alt="config">
                        <p>Congifurações</p>
                    </div>
                    <div id="atualizar">
                        
                        <img src="imagens/atualizar.png" alt="atualizar">
                        <p>Atualizar</p>
                    </div>
                </div>
                <div onclick="excluirTodosQuadros()" id="excluir-todos-os-quadros"><p>Excluir todos os quadros</p></div>
                <section id="criar-quadro">
                  
                    <div id="criar-novo-quadro">
                        <p>Criar novo quadro</p>
                        <img id="criarquadroimg" src="imagens/plus-criar-quadro.png" alt="criarnovoquadro">
                    </div>
            
                </section>
            </section>
        </article>
    </main>
    <script src="JavaScript/index.js"></script>
</body>
</html>