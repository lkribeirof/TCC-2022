<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="utf8_general_ci">
        <title>Depoimentos</title>
        <link rel="stylesheet" type="text/css" href="depoimentos.css">
        <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=K2D:wght@200;500;700&family=Krub:wght@200;300&display=swap" rel="stylesheet">
    </head>
    <body>

        <header id="cabecaa" class="cabeca">
            
            <img id="logo" src="img/LOGO.png" alt="" width="204" height="295"> 

            <div class="container" id="menu">
    
                <div class="hamburguer">
                    <div class="line" id="line1"></div>
                    <div class="line" id="line2"></div>
                    <div class="line" id="line3"></div>
                </div>
                
                <aside class="sidebar">
                    <nav>
                        <ul class="menu">
                            <li class="menu-item"><a href="inicio.html" class="menu-link">Home</a></li>
                            <li class="menu-item"><a href="depressao1.html" class="menu-link">Depressão</a></li>
                            <li class="menu-item"><a href="ansiedade.html
                                " class="menu-link">Ansiedade</a></li>
                            <li class="menu-item"><a href="depoimentos.php" class="menu-link">Relatos</a></li>
                            <li class="menu-item"><a href="tirinhas.html" class="menu-link">Tirinhas</a></li>
                            <li class="menu-item"><a href="podcast.html" class="menu-link">Podcast</a></li>
                            <li class="menu-item"><a href="sobre-nos.html" class="menu-link">Sobre nós</a></li>
                        </ul>
                    </nav>
                </aside>
            </div>
        </header>

        <main class="conteudo">
            <section class="card-principal">
                <h1 class="titulo-principal">Fala que eu te escuto!</h1>

                <p class="texto-principal">
                    Essse espa&#231;o &#233; direcionado &#224; comunidade que acessa o site, nele voc&#234; pode compartilhar com os demais as suas experi&#234;ncias com a Ansiedade e a Depress&#227;o ou doen&#231;as relacionadas. Fique &#224; vontade para deixar seu relato e assim compartilhar com outras pessoas experi&#234;ncias e sentimentos que podem ajudar, tanto voc&#234; quanto quem l&#234;.
                </p>

                <div class="formulario">
                    <form action="registro.php" method="POST" class="card"> 
                        <h2 class="titulo-form">Insira nos campos abaixo o seu relato sobre viver com ansiedade ou depress&#227;o: </h2>
                        <br><Br>
                        
                        <label for="nome">Nome</label>
                        <input type="text" name="nome" id="nome" class="input-nome">
                        <input type="checkbox" name="anonimo" id="anonimo" class="caixa"> <span class="anonimo">Prefiro n&atilde;o informar</span>
                        <br><br>

                        <label for="email">E-mail</label>
                        <input type="email" name="email" id="email" class="input-email">
                        <br><br>

                        <label for="idade">Idade</label>
                        <input type="number" name="idade" id="idade" class="input-idade" minlength="18">
                        <br><br>

                        <label for="diagnostico">Voc&ecirc; foi diagnosticado por um profissional?</label>
                        <input type="radio" name="diagnostico" id="diagnostico" value="sim" class="radio-1"><span class="radio-texto-1">Sim</span>
                        <input type="radio" name="diagnostico" id="diagnostico" value="nao" class="radio-2"><span class="radio-texto-2">N&atilde;o</span>
                        <br><br>

                        <label for="transtorno">Se voc&ecirc; foi diagnosticado, nos diga qual o transtorno</label> 
                        <input type="text" name="transtorno" id="transtorno" class="input-transtorno" maxlength="30">
                        <br><br>

                        <label for="depoimento">Relato</label>
                        <textarea name="depoimento" id="depoimento" class="input-depoimento" cols="42" rows="8"> </textarea>
                        <br><br>

                        <input type="submit" name="enviar" value="Enviar" class="botao">
                    </form>
                </div>
            </section>

            <?php
                $conexao = @mysqli_connect('localhost', 'root', 'usbw', 'kulmi') 
                or die ("Problemas com a conex&atilde;o do Banco de Dados");
                
                $query = mysqli_query($conexao, "SELECT `nome`, `idade`, `transtorno`, `depoimento` FROM `produtofinal` ORDER BY data DESC") or die ("erro de instru&ccedil;&atilde;o");
                
                while($dados = mysqli_fetch_array($query)) {
                    echo "<section class='card-depoimento'>";
                    echo "<div class='depoimento'><h4 class='titulo-depoimento'>Nome: ". $dados['nome']. "</h4><br>
                            <p class='categorias'>Idade: ". $dados['idade'] ."</p></br>
                            <p class='categorias'>Transtorno: ". $dados['transtorno'] ."</p><br>
                            <p class='categorias'>Relato:</p> <br><p class='texto-relato'>". $dados['depoimento'] ."</p></div>";
                    echo "</section>";
                }
                ?>
        </main>

        <footer class="rodape">

            <img class="img-rodape" src="img/Brain.png" alt="">

            <div class="contato">

                <h2> Contato </h2>

                <h3>ContatoKulmi@gmail.com</h3>


            </div>




        
            <div class="redes">

                <a class="insta" href="#"><img src="img/rs/instagram.png" alt="logo Instagram"><p>Instagram</p></a>

                <a class="tt" href="#"><img src="img/rs/twitter.png" alt="logo Twitter"><p>Twitter</p></a>

            </div>

    </footer>
    


	<script src="script.js"></script>
    </body>
</html>