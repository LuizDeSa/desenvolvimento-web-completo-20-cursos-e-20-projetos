<?php
    
    class TarefaService{

        private $conexao;
        private $tarefa;

        public function __construct(Conexao $conexao, Tarefa $tarefa){
            $this->conexao = $conexao->conectar();
            $this->tarefa = $tarefa;
        }

        public function inserir(){//create
            $query = 'INSERT INTO tb_tarefas(tarefa) VALUES (:tarefa)';
            $stmt = $this->conexao->prepare($query);
            $stmt->bindValue(':tarefa',$this->tarefa->__get('tarefa'));
            $stmt->execute();
        }

        public function recuperar(){//select 
            // try{   
                $query = 'SELECT 
                            t.id, s.status, t.tarefa, t.data_cadastrado 
                          FROM 
                            tb_tarefas as t
                            left join tb_status as s on (t.id_status = s.id)';   
                $stmt = $this->conexao->prepare($query);
                $stmt->execute();
                return $stmt->fetchAll(PDO::FETCH_OBJ);  
            // }catch(PDOException $e){
            //     echo 'Error: '.$e->getCode().' - Mensagem: '.$e->getMessage();
            // }
        }

        public function atualizar(){//update
            
            // Primeira forma
            // $query = "UPDATE tb_tarefas SET tarefa = :tarefa WHERE id = :id";
            // $stmt = $this->conexao->prepare($query);
            // $stmt->bindValue(':tarefa', $this->tarefa->__get('tarefa'));
            // $stmt->bindValue(':id', $this->tarefa->__get('id'));
            // return $stmt->execute();


            // Segunda forma
            $query = "UPDATE tb_tarefas SET tarefa = ? WHERE id = ?";
            $stmt = $this->conexao->prepare($query);
            $stmt->bindValue(1, $this->tarefa->__get('tarefa'));
            $stmt->bindValue(2, $this->tarefa->__get('id'));
            return $stmt->execute();
        }

        public function remover(){//delete
            $query = 'delete from tb_tarefas where id = :id';
            $stmt = $this->conexao->prepare($query);
            $stmt->bindValue(':id', $this->tarefa->__get('id'));
            $stmt->execute();
        }

        public function marcarRealizada(){
            $query = "UPDATE tb_tarefas SET id_status = ? WHERE id = ?";
            $stmt = $this->conexao->prepare($query);
            $stmt->bindValue(1, $this->tarefa->__get('id_status'));
            $stmt->bindValue(2, $this->tarefa->__get('id'));
            return $stmt->execute();
        }

        public function recuperarTarefasPendentes(){
            $query = "SELECT id, id_status, tarefa, data_cadastrado FROM tb_tarefas WHERE id_status = ?";
            $stmt = $this->conexao->prepare($query);
            $stmt->bindValue(1, $this->tarefa->__get('id_status'));
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_OBJ);  
        }
    }
?>