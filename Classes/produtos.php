<?php
    Class Produtos
    {
        private $pdo;

        public $msgErro ="";

        public function conectar($nome, $host, $usuario, $senha)
        {
            global $pdo;
            try{
                $pdo = new PDO("mysql:dbname=".$nome,$usuario,$senha);
            }
            catch(PDOException $erro){
                $msgErro = $erro->getMessage();
            }
        }

        public function cadastrarproduto($nome, $valor, $quantidade, $codigo, $peso, $estmin, $estmax)
        {
            global $pdo;

            //verificar se o produto já está cadastrado
            $prodto = $pdo->prepare("SELECT id_produto FROM produtos WHERE nome = :e");
            $produto->bindValue(":n", $nome);
            $produto->execute();
            if($produto->rowCount() > 0)
            {
                return false;
            }
            else{
                $produto = $pdo->prepare("INSERT INTO produtos (nome, valor, quantidade, codigo, peso, estmin, estmax)) 
                VALUES (:n, :vl, :qnt, :sku, :ps, :emin, :emax)");
                $produto->bindValue(":n",$nome);
                $produto->bindValue(":vl",$valor);
                $produto->bindValue(":qnt",$quantidade);
                $produto->bindValue(":sku",$codigo);
                $produto->bindValue(":ps",$peso);
                $produto->bindValue(":emin",$estmin);
                $produto->bindValue(":emax",$estmax);
                $produto->execute();
                return true;
            }
        }
    }



?>