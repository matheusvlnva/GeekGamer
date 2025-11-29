
<?php 
    require '../Classes/produto.php';
    $produto = new Produto();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/Login.css">
    <title>Cadastro Produto</title>
</head>
<body>
    <a href="areausuario.php" class="btn-return">Voltar</a>
    <div class="log">
        <h2>CADASTRO DE PRODUTO</h2>
     <form method="post">
            <label>Nome:</label><br>
                <input type="text" name="nome" placeholder="Nome do produto:"><br><br>
            <label>Valor:</label><br>
                <input type="float" name="valor" placeholder="Valor do produto:"><br><br>
            <label>Quantidade:</label><br>
                <input type="int" name="quantidade" placeholder="Quantidade adquirida:"><br><br>
            <label>Código:</label><br>
                <input type="int" name="codigo" placeholder="Digite o codigo SKU:"><br><br>
            <label>Peso:</label><br>
                <input type="float" name="peso" placeholder="Digite o peso:"><br><br>
            <label>Quantidade Mínima:</label><br>
                <input type="int" name="estmin" placeholder="Estoque mínimo:"><br><br>
            <label>Quantidade Máxima:</label><br>
                <input type="int" name="estmax" placeholder="Estoque máximo:"><br><br>
            <button type="submit">CADASTRAR</button>
        
    </form>
    </div>
    <?php 
        if(isset($_POST['nome']))
        {
            $nome = $_POST['nome'];
            $valor = $_POST['valor'];
            $quantidade = $_POST['quantidade'];
            $codigo = $_POST['codigo'];
            $peso = $_POST['peso'];
            $estmin = $_POST['estmin'];
            $estmax = $_POST['estmax'];
            

            //Verificar se todos os campos estão preenchidos
            if(!empty($nome) && !empty($valor) && !empty($quantidade) && !empty($codigo) && !empty($peso) && !empty($estmin) && !empty($estmax))
            {
                $produto->conectar("estacio2025","localhost", "root", "");
                if($produto->msgErro == "")
                {
                    echo "conectou";
                    if($produto->cadastrarProduto($nome,$valor,$quantidade,$codigo,$peso,$estmin,$estmax)){
                            ?>
                                <div class="msg-sucesso">
                                    <p>Produto Cadastrado com Sucesso.</p>
                                </div>
                            <?php
                        }
                        else
                        {
                            ?>
                                <div class="msg-sucesso">
                                    <p>Produto Já cadastrado.</p>
                                </div>
                            <?php
                        }
                }
                else
                {
                    ?>
                                <div class="msg-sucesso">
                                    <?php echo "Erro: ".$produto->msgErro; ?>
                                </div>
                            <?php
                }
            }
        }

    ?>
    
</body>
</html>
    
