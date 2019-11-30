<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
    <center>
        <form method="POST" action="../Controller/validar-cadastro.php">
            Seu nome: <input type="text" name="nome" placeholder="ex. Anderson" required="">*<br>
            E-mail: <input type="email" name="email" placeholder="exemplo@exemplo.com" required="">*<br>
            Informações: <textarea name="info" cols="30" rows="10"></textarea>
            Jogo favorito: <select name="Jogos" id="jogo">
                <option value="jogo 1">jogo 1</option>
                <option value="jogo 2">jogo 2</option>
                <option value="jogo 3">jogo 3</option>
                <option value="jogo 4">jogo 4</option>
            </select>
            Cpf: <input type="number" name="cpf" placeholder="ex: xxx.xxx.xxx-xx" required="">*<br>
            <input type="submit" value="Cadastrar">
        </form>
        <form method="POST" action="../View/index.php">
            Já tem conta? <input type="submit" value="Clique aqui!">
        </form>
    </center>
    </body>
</html>

