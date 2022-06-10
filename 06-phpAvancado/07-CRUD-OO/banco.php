<?php 

    class Banco{
        
        private $pdo;
        private $numRows;
        private $array;

        public function __construct($host, $dbname, $dbuser, $dbpass){

            try{
                $this->pdo = new PDO("mysql:dbname=".$dbname.";host=".$host, $dbuser,$dbpass);
            }catch(PDOException $e){
                echo "FALHOU : ".$e->getMessage();
            } // catch
            
        } // construct

        public function query($sql){

            $query = $this->pdo->query($sql);
            $this->numRows = $query->rowCount();
            $this->array = $query->fetchAll();
            
        } // sql

        public function result(){
            return $this->array;
        } //result

        public function numRows(){
            return $this->numRows;
        } // numRows

        public function insert($tabela, $data){
            # Verifica se a tabela está vazia e se $data é um array maior que 0
            if(!empty($tabela) && (is_array($data)) && count($data) > 0){
                # montar query
                $sql = "INSERT INTO ".$tabela." SET ";
                $dados = array();
                    foreach($data as $chave => $valor){
                        $dados[] = $chave." = '".addslashes($valor)."' ";
                    }

                    $sql = $sql.implode(", ", $dados);

                    $this->pdo->query($sql);

            } // empt table
        } // insert


        public function update($table, $data,  $where = array(), $where_cond = "AND"){
            
            if(!empty($table) && is_array($data) && count($data) > 0 && is_array($where)) {
                $sql = "UPDATE ".$table." SET ";

                $dados = array();
                foreach($data as $chave => $valor){
                    $dados[] = $chave." = '".addslashes($valor)."' ";
                }

                $sql = $sql.implode(", ", $dados);
     
                if($where > 0){
                    $dados = array();
                    foreach($where as $chave => $valor){
                        $dados[] = $chave." = '".addslashes($valor)."' ";
                        $sql = $sql." WHERE ".implode(" ".$where_cond." ", $dados);
                        
                    }
                }
                $this->pdo->query($sql);

            }
        } // update()


        public function delete($table, $where, $where_cond = "AND"){
            if(!empty($table) && (is_array($where) && count($where) > 0)){
                $sql = "DELETE FROM ".$table;

                if(count($where) > 0 ){
                    $dados = array();
                        foreach($where as $chave => $valor){
                            $dados[] = $chave." =  ".addslashes($valor);
                        }
                    $sql = $sql." WHERE ".implode(" ".$where_cond." ", $dados);
                }

                $this->pdo->query($sql);
            }
        }// delete



    }// Banco


?>