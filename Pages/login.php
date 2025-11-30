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
    <title>Tela Login</title>
</head>
<body>
    <a href="home.php" class="btn-return">Voltar</a>
    <div class="cont-log">
        <div class="log">
            <h2>LOGIN</h2><br><br>
            <form method="post">            
                <label>Usuário:</label><br>
                <input type="email" name="email" id="" placeholder="Digite seu email."><br><br>           
                <label>Senha:</label><br>
                <input type="password" name="senha" id="" placeholder="********"><br><br>           
            <input type="submit" value="LOGAR"><br>
            <a href="cadastro.php">Cadastre-se!</a>
            </form>  
        </div>
    </div>
    <?php
        if(isset($_POST['email']))
        {
            $email = addslashes($_POST['email']);
            $senha = addslashes($_POST['senha']);

            if(!empty($email) && !empty($senha))
            {
                $usuario->conectar("estacio2025","localhost","root", "");
                if($usuario->msgErro =="")
                {
                    if($usuario->logar($email, $senha))
                    {
                        header("location: areausuario.php");
                    }
                    else
                    {
                        ?>
                            <div class="msg-erro">
                                <p>Email e/ou senha incorretos.</p>
                            </div>
                        <?php
                    }
                }
                else
                {
                    ?>
                        <div class="msg-erro">
                            <?php echo "Erro: ".$usuario->msgErro; ?>
                        </div>
                    <?php
                }
            }
            else
            {
                ?>
                    <div class="msg-erro">
                        <p>Preencha todos os campos.</p>
                    </div>

                <?php
            }
        }

    ?>

</body>
</html>

