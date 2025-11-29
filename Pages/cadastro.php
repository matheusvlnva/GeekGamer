
<?php 
    require '../Classes/usuario.php';
    $usuario = new Usuario();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/Login.css">
    <title>Cadastro Usuário</title>
</head>
<body>
    <a href="areausuario.php" class="btn-return">Voltar</a>
        <div class="log">
            <h2>CADASTRO DE USUÁRIO</h2>
            <form method="post">
            
            <label>Nome:</label><br>
                <input type="text" name="nome" placeholder="Digite seu nome."><br><br>
            <label>E-mail:</label><br>
                <input type="email" name="email" placeholder="Digite seu email"><br><br>
            <label>Endereço:</label><br>
                <input type="text" name="endereco" placeholder="Digite seu endereço."><br><br>
            <label>Cidade:</label><br>
                <input type="text" name="cidade" placeholder="Digite sua cidade."><br><br>
            <label>Estado:</label><br>
                <input type="text" name="estado" placeholder="Digite seu estado."><br><br>
            <label>Telefone:</label><br>
                <input type="tel" name="telefone" placeholder="Digite seu telefone."><br><br>
            <label>Senha:</label><br>
                <input type="password" name="senha" placeholder="Digite sua senha."><br><br>
            <label>Confirmação de senha:</label><br>
                <input type="password" name="Confsenha" placeholder="Confirme sua senha."><br><br>
        <button type="submit" >CADASTRAR</button><br><br>
            <div>
        <p>Já é cadastrado? Clique <a href="login.php">Aqui</a> para acessar.</p>

    </form>
    <?php 
        if(isset($_POST['nome']))
        {
            $nome = $_POST['nome'];
            $endereco = $_POST['endereco'];
            $cidade = $_POST['cidade'];
            $estado = $_POST['estado'];
            $telefone = $_POST['telefone'];
            $email = $_POST['email'];
            $senha = $_POST['senha'];
            $confsenha = addslashes($_POST['Confsenha']);

            //Verificar se todos os campos estão preenchidos
            if(!empty($nome) && !empty($endereco) && !empty($cidade) && !empty($estado) && !empty($telefone) && !empty($email) && !empty($senha))
            {
                $usuario->conectar("estacio2025","localhost", "root", "");
                if($usuario->msgErro == "")
                {
                    echo "conectou";
                    if($senha == $confsenha)
                    {
                        if($usuario->cadastrarUsuario($nome,$endereco,$cidade,$estado,$telefone,$email, $senha)){

                            ?>
                                <div class="msg-sucesso">
                                    <p>Usuário Cadastrado com Sucesso.</p>
                                </div>
                            <?php
                        }
                        else
                        {
                            ?>
                                <div class="msg-sucesso">
                                    <p>Usuário Já cadastrado.</p>
                                </div>
                            <?php
                        }
                    }
                    else
                    {
                        ?>
                                <div class="msg-sucesso">
                                    <p>Senha e confirmar senha não conferem</p>
                                </div>
                            <?php
                    }
                }
                else
                {
                    ?>
                                <div class="msg-sucesso">
                                    <?php echo "Erro: ".$usuario->msgErro; ?>
                                </div>
                            <?php
                }
            }
        }

    ?>
    
</body>
</html>