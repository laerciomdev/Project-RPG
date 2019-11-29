<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="./estilo/style.css">
        <title>Feed</title>
    </head>
    <body class="fundo" background="./imagens/fundo.jpg">
        <header class="perfilMovel">
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
            <form class="postFeed1" method="POST" action="">
                <input type="text" name="Postagem" size="256" required="">
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
