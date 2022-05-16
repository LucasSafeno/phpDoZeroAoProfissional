<?php 

    class Usuario{

        ##
        ## PROPRIEDADES
        ##
        private $id;
        private $email;
        private $senha;
        private $nome;

        private $pdo;

        ##
        ## METÓDOS
        ##
   

        public function __construct($i = false){

            /* Conexão com banco de dados */
            try{
                    
                $this->pdo = new PDO("mysql:dbname=usuarios;host=localhost", "root", "root");


            }catch(PDOException $e){
                echo "FALHOU ".$e->getMessage();
            } // catch  

            if(!empty($i)){
             $sql = $this->pdo->prepare("SELECT * FROM usuarios WHERE id = :id ");
             $sql->bindValue(":id", $i);
             $sql->execute();

                if($sql->rowCount() > 0){
                    $data = $sql->fetch();

                    $this->id       = $data['id'];
                    $this->email    = $data['email'];
                    $this->senha    = $data['senha'];
                    $this->nome     = $data['nome'];
                } // pegar informações do resultado da query

            }// verifica se $i não está vazio

        } // Construct


        public function getId(){
            return $this->id;
        } //getId

        public function setEmail($e){
            return $this->email = $e;
        }// setEmail

        public function getEmail(){
            return $this->email;
        }// getEmail

        public function setSenha($s){
            return $this->senha = md5($s);
        } // setSenha

        public function setNome($n){
            return $this->nome = $n;
        } // setNome

        public function getNome(){
            return $this->nome;
        } // getNome

        public function salvar(){
            if(!empty($this->id)){
                $sql = "UPDATE usuarios SET
                 email = ?,
                 senha = ?,
                 nome =  ?
                WHERE id = ?  ";
                $sql = $this->pdo->prepare($sql);
                $sql->execute(array($this->email,
                                    $this->senha,
                                    $this->nome,
                                    $this->id));
            }else{

                $sql = "INSERT INTO usuarios SET
                 email = ?,
                 senha = ?,
                 nome =  ? ";
                $sql = $this->pdo->prepare($sql);
                $sql->execute(array($this->email, $this->senha, $this->nome));

            } // alterando usuario existente / caso não, adicionando
        }

        public function delete(){
            if(!empty($this->id)){
                $sql = $this->pdo->prepare("DELETE FROM usuarios WHERE id = :id");
                $sql->bindValue(":id", $this->id);
                $sql->execute();
            }
        }


    } // Usuario



?>