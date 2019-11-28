<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="./estilo/style.css">
        <title>Feed</title>
    </head>
    <body class="fundo" background="./imagens/fundo.jpg">
        <header class="perfilMovel"><br>
            <img src="./imagens/user.png"><br><br><br>
            <a href="perfil.php">Perfil</a><br><br>
            <a href="">RPG favorito</a><br><br>
            <a href="">Amigos</a><br><br>
            <a href="">Comunidades</a><br><br>
            <a href="">Area de criador</a><br><br>
            <a href="">Configurações</a><br><br>
            <a href="index.php">Sair</a><br><br>
        </header>
        
        <div class="feed1">
            <h2 class="fonteFeed">O que deseja postar?</h2>
            <form method="POST" action="">
                <input type="text" width="320" height="240" name="Postagem" required=""><br><br>
                <input type="submit" value="Postar">    
            </form>
        </div>
    </body>
</html>