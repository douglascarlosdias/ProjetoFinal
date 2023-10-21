
<?php
    header('Content-Type: text/html; charset=utf-8;');
    
    require_once 'src/conexao.php';

    # recebe os valores enviados do formulário via método post.
    $nome = $_POST['nome'];
    $endereco = $_POST['endereco'];
    $cpf = $_POST['cpf'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    #fiz a impressão na tela para verificar se estava tudo ok .
    echo "nome:$nome<br>endereço:$endereco<br>cpf:$cpf<br>telefone:$telefone<br>email:$email<br>senha:$senha<br>";
   

    # solicita a conexão com o banco de dados e guarda na váriavel dbh.
    $dbh = Conexao::getConexao();

    # cria uma instrução SQL para inserir dados na tabela usuarios.
    $query = "INSERT INTO tiogogadelivery.usuarios (nome, endereço, cpf, telefone, email, senha,) 
                VALUES (:nome, :endereco, :cpf, :telefone, :email, :senha);"; 
    
    # prepara a execução da query e retorna para uma variável chamada stmt.
    $stmt = $dbh->prepare($query);

    # com a variável stmt, usada bindParam para associar a cada um dos parâmetro
    # e seu tipo (opcional).
    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':endereco', $endereco);
    $stmt->bindParam(':cpf', $cpf);
    $stmt->bindParam(':telefone', $telefone);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':senha', $senha);
   
    
    # executa a instrução contida em stmt e se tudo der certo retorna uma valor maior que zero.
    $result = $stmt->execute();
    if ($result)
    {
        echo '<p>Cadastro realizado com sucesso!</p>';
    } else {
        echo '<p>Não foi fossível inserir Usuário!</p>';
        # método da classe conexao que informa o error ocorrido na execução da query.
        $error = $dbh->errorInfo();
        print_r($error);
    }
    $dbh = null;
    echo "<a href='index.php'>Voltar</a>";