<?php

?>

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
            <a href="">Amigos</a><br><br>
            <a href="">Configurações</a><br><br>
            <a href="View/index.php">Sair</a><br><br>
        </header>
        
        <div class="feed1">
            <h2 class="fonteFeed">O que deseja postar?</h2>
            <form method="POST" action="" enctype="multipart/form-data">
                <input type="text" width="320" height="240" name="Postagem" required=""><br><br>
                <input type="file" name="arquivos"
                 <input type="submit" value="Postar">    
            </form>
        </div>
        <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.5";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
    </body>
</html>
