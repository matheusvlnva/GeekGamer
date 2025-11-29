<?php
    Class Produto
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

        public function cadastrarProduto($nome,$valor,$quantidade,$codigo,$peso,$estmin,$estmax)
        {
            global $pdo;

            //verificar se o usuário já está cadastrado
            $produto = $pdo->prepare("SELECT id_produto FROM produtos WHERE nome = :n");
            $produto->bindValue(":n", $nome);
            $produto->execute();
            if($produto->rowCount() > 0)
            {
                return false;
            }
            else{
                $produto = $pdo->prepare("INSERT INTO produtos (nome, valor, quantidade, codigo, peso,estmin, estmax) VALUES (:n, :vlr, :qnte :sku, :p, :emin, :emax)");
                $produto->bindValue(":n",$nome);
                $produto->bindValue(":vlr",$valor);
                $produto->bindValue(":qnte",$quantidade);
                $produto->bindValue(":sku",$codigo);
                $produto->bindValue(":p",$peso);
                $produto->bindValue(":emin",$estmin);
                $produto->bindValue(":emax",$estmax);
                $produto->execute();
                return true;
            }
        }
    }



?>