<?php
    Class Usuario
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

        public function cadastrarUsuario($nome, $endereco, $cidade, $estado, $telefone, $email, $senha)
        {
            global $pdo;

            //verificar se o usuário já está cadastrado
            $usuario = $pdo->prepare("SELECT id_usuario FROM usuarios WHERE email = :e");
            $usuario->bindValue(":e", $email);
            $usuario->execute();
            if($usuario->rowCount() > 0)
            {
                return false;
            }
            else{
                $usuario = $pdo->prepare("INSERT INTO usuarios (nome, endereco, cidade,estado, telefone, email, senha) VALUES (:n, :en, :c, :es, :t, :e, :s)");
                $usuario->bindValue(":n",$nome);
                $usuario->bindValue(":en",$endereco);
                $usuario->bindValue(":c",$cidade);
                $usuario->bindValue(":es",$estado);
                $usuario->bindValue(":t",$telefone);
                $usuario->bindValue(":e",$email);
                $usuario->bindValue(":s",$senha);
                $usuario->execute();
                return true;
            }
        }
    }
        public function listarUsuarios()
        {
            global $pdo;

            $sqlListar = $pdo->prepare("SELECT * FROM usuario");
            $sqlListar->execute();
            if($sqlListar->rowCount()>0)
            {
                $dados = $sqlListar->fetchAll(PDO::FETCH_ASSOC);
                return $dados;
            }
            else
            {
                return false;
            }


?>