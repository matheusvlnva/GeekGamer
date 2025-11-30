<?php
    require '../Classes/produto.php';
    $produtos = new Produto();
    $produtos->conectar("estacio2025","localhost","root", "");
    $dados = $produtos->listarProdutos();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Produtos</title>
    <link rel="stylesheet" href="../CSS/Login.css">
        <style>
        .tabela {
            width: 80%; 
            margin: auto;
            border-collapse: collapse; 
            border-radius: 8px;
            overflow: hidden; 
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-size: 15px;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1); 
        }

        .tabela thead {
            background-color: #f8f8f8; 
            color: #333; 
            border-bottom: 2px solid #ddd; 
        }

        .tabela th {
            text-align: left; 
            padding: 12px 20px; 
            font-weight: 600; 
    
        }

        .tabela tbody tr{
            background-color: #f0f8ff; 
            cursor: pointer; 
        }

    
    </style>
</head>
<body>
    <a href="areausuario.php" class="btn-return">Voltar</a>
    <div class="log">
    <h2>LISTAR PRODUTOS</h2>
    <table class="tabela">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Valor</th>
                <th>Quantidade</th>
            </tr>
        </thead>
        <tbody>
            <?php
                if(!empty($dados))
                {
                    foreach ($dados as $pessoa):
            ?>
                 <tr>
                    <td><?php echo $pessoa['nome'];?></td>
                    <td><?php echo $pessoa['valor'];?></td>
                    <td><?php echo $pessoa['quantidade'];?></td>
                    <td style="display:flex; flex-direction:row; gap:3px;">
                        
                </tr>   
                     
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