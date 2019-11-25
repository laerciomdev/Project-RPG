<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
    <center>
        <form method="POST" action="../Controller/CadastroBanco.php">
            Seu nome: <input type="text" name="nome" placeholder="ex. Anderson" required=""><br>
            sobrenome: <input type="text" name="sobrenome" placeholder="ex. Silva" required=""><br>
            e-mail: <input type="email" name="email" placeholder="exemplo@exemplo.com" required=""><br>
            telefone: <input type="number" name="" placeholder="(DDD)9 9999-8888" required=""><br>
            data de nascimento: <input type="date" name="data" required=""><br>
            usuário: <input type="text" name="login" placeholder="Login" required=""><br>
            Senha: <input type="password" name="senha" placeholder="Senha" required=""><br>
            <input type="submit" value="Cadastrar">
        </form>
        <form method="POST" action="../View/index.php">
            Já tem conta? <input type="submit" value="Clique aqui!">
        </form>
    </center>
    </body>
</html>

