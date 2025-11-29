
<?php
    require_once 'usuario.php';
    $usuario = new Usuario();
    $usuario->conectar("estacio2025 (1)","localhost","root", "");
    $dados = $usuario->listarUsuarios();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Dados</title>
    <link rel="stylesheet" href="../CSS/Login.css">
</head>
<body>
    <a href="areadelogin.php" class="btn-return">Voltar</a>
    <div class="log">
    <h2>LISTAR USUÁRIO</h2>
    <table border="1">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Email</th>
                <th>Telefone</th>
            </tr>
        </thead>
        <tbody>
            <?php
                if(!empty($dados))
                {
                    foreach ($dados as $pessoa):
            ?>
                     
            <?php 
                endforeach;
                }
                else
                {
                    echo "Nenhum usuário cadastrado.";
                }

            ?>
        </tbody>
    </table>
    </div>
</body>
</html>