<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/cadastro.css">
    <title>cadastro</title>
</head>
<body>
    <div class="main_cadastro" >
    <form action="" method="post">
    <fieldset>
        <legend>Dados para cadastro</legend>
        <p>Nome: <input type="text" name="nome" id="" required autofocus></p>
        <p>Telefone: <input type="text" name="telefone" id="" required autofocus></p>
   <fieldset>
 <legend>Dados de Endereço:</legend>
    <label for="rua">Rua:</label>
    <input type="text" name="rua" required autofocus>
    <label for="numero">Numero:</label>
    <input type="text" name="numero" size="4" required autofocus >
    <label for="bairro">Bairro: </label>
    <input type="text" name="bairro" required autofocus>
    <label for="cidade">Cidade: </label>
    <input type="text" name="cidade" required autofocus>
    <label for="cep">CEP: </label>
    <input type="text" name="cep" size="5" maxlength="5" required > - <input type="text" name="cep2" size="3" maxlength="3" required>
    </fieldset>
    <p>Senha: <input type="password" name="senha" id="" required autofocus></p>
    <input type="submit" value="Cadastrar">

    </fieldset>
    </form>
    <a href="index.php">Home</a>
    </div>
</body>
</html>