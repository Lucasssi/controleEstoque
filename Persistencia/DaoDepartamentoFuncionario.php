<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleEstoqueWebTCC/Persistencia/Conexao.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleEstoqueWebTCC/Classes/Departamento_U.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleEstoqueWebTCC/Classes/Funcionario.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleEstoqueWebTCC/Classes/Departamento_usuarios.php';

$teste =  NULL;

class DaoDepartamentoFuncionario {
    
    
    
     public static function inserir($idUsuario, $IdDepartamento) {
         
                
        $dbh = Conexao::getInstance();
        $sql = "INSERT INTO Departamento_usuario ( id_usuario, id_departamento ) values ( ? , ? )";
        try {
            $dbh->beginTransaction();
            $stmt = $dbh->prepare($sql);
            $stmt->bindParam(1, $idUsuario, PDO::PARAM_INT);
            $stmt->bindParam(2, $IdDepartamento, PDO::PARAM_INT);
            $stmt->execute();
            $dbh->commit();
            return true;
        } catch (Exception $ex) {
            $dbh->rollBack();
            return "Falha: " . $ex->getMessage();
        }
    }
    
    
    
       public static function getDepartamentoUsuario( $idUsuario ) {
        $dbh = Conexao::getInstance();
        $sql = "SELECT du.id_Departamento_usuario, du.id_usuario, du.id_departamento,
               d.nome as Departamento, f.nome as Funcionario
                FROM Departamento_usuario as du
                INNER JOIN funcionario AS f ON (f.id_funcionario = du.id_usuario)
                INNER JOIN departamento as d ON (du.id_departamento = d.id_dpt)
                where id_usuario = ?";
        $stmt = $dbh->prepare($sql);
        $stmt->bindParam(1, $idUsuario, PDO::PARAM_INT);
        $stmt->execute();
        $vetor = array();
        while ($retorno = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $departamento = new Departamento_usuarios();
            $departamento->setId_departamento_usuario($retorno['id_Departamento_usuario']);
            $departamento->getUsuario()->SetId_funcionario($retorno['id_usuario']);
            $departamento->getDepartamento()->SetId_departamento_U($retorno['id_departamento']);
            $departamento->getDepartamento()->SetNome($retorno['Departamento']);
            $departamento->getUsuario()->SetNome($retorno['Funcionario']);
                    
            $vetor[] = $departamento;
        }
        return $vetor;
    }
    
    
       public static function getVerificarEntrada( $idUsuario, $id_departamento ) {
        $dbh = Conexao::getInstance();
        $sql = "SELECT id_departamento FROM Departamento_usuario WHERE id_usuario = ? AND id_departamento = ?";
        $stmt = $dbh->prepare($sql);
        $stmt->bindParam(1, $idUsuario, PDO::PARAM_INT);
        $stmt->bindParam(2, $id_departamento, PDO::PARAM_INT);
        $stmt->execute();
        $teste =null;
        while ($retorno = $stmt->fetch(PDO::FETCH_ASSOC)) {
            
            
            
             $vetor = $retorno['id_departamento'];
             
             $teste = $vetor;
    
        }
          
        return $teste;
    }
    
    
       public static function getTodos() {
        $dbh = Conexao::getInstance();
        $sql = "SELECT du.id_Departamento_usuario, du.id_usuario, du.id_departamento,
               d.nome as Departamento, f.nome as Funcionario
                FROM Departamento_usuario as du
                INNER JOIN funcionario AS f ON (f.id_funcionario = du.id_usuario)
                INNER JOIN Departamento_U as d ON (du.id_departamento = d.id_Departamento_U)";
        $stmt = $dbh->prepare($sql);
        $stmt->execute();
        $vetor = array();
        while ($retorno = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $departamento = new Departamento_usuarios();
            $departamento->setId_departamento_usuario($retorno['id_Departamento_usuario']);
            $departamento->getUsuario()->SetId_funcionario($retorno['id_usuario']);
            $departamento->getDepartamento()->SetId_departamento_U($retorno['id_departamento']);
            $departamento->getDepartamento()->SetNome($retorno['Departamento']);
            $departamento->getUsuario()->SetNome($retorno['Funcionario']);
                    
            $vetor[] = $departamento;
        }
        return $vetor;
    }

    
    public static function excluir($id) {
        $dbh = Conexao::getInstance();
        $sql = "DELETE FROM Departamento_usuario WHERE id_Departamento_usuario = ?";
        try {
            $dbh->beginTransaction();
            $stmt = $dbh->prepare($sql);
            $stmt->bindParam(1, $id, PDO::PARAM_INT);
            $stmt->execute();
            $dbh->commit();
        } catch (Exception $ex) {
            $dbh->rollBack();
            return "Falha: " . $ex->getMessage();
        }
    }
    
    
    public static function alterar(Departamento_U $departamento) {
            
         $id = $departamento->getId_departamento_U();
         $nome = $departamento->getNome();
            
        $dbh = Conexao::getInstance();
         
        $sql = "UPDATE Departamento_U SET nome = ? WHERE id_Departamento_U = ?";
        try {
            $dbh->beginTransaction();
            $stmt = $dbh->prepare($sql);
            $stmt->bindParam(1, $nome, PDO::PARAM_STR);
            $stmt->bindParam(2, $id, PDO::PARAM_STR);
            
            $stmt->execute();
            $dbh->commit();
            return true;
        } catch (Exception $ex) {
            $dbh->rollBack();
            return "Falha: " . $ex->getMessage();
        }
    }
    
    
    public static function getDepartamento($id) {
                 
        $dbh = Conexao::getInstance();
        $sql = "select * from Departamento_U WHERE id_departamento_U = ?";
        $stmt = $dbh->prepare($sql);
        $stmt->bindParam(1, $id, PDO::PARAM_INT);
        $stmt->execute();
        $departamento = new Departamento_U();
        while ($retorno = $stmt->fetch(PDO::FETCH_ASSOC)) {
            
            $departamento->setId_departamento_U($retorno['id_Departamento_U']);
            $departamento->setNome($retorno['nome']);
            
                       
        }
        return $departamento;
    }
    
     public static function getDepartamentoNome($nome) {
                 
        $dbh = Conexao::getInstance();
        $sql = "select * from Departamento_U WHERE  nome LIKE ?";
        $stmt = $dbh->prepare($sql);
        $stmt->bindParam(1, $nome, PDO::PARAM_INT);
        $stmt->execute();
        $departamento = new Departamento_U();
        while ($retorno = $stmt->fetch(PDO::FETCH_ASSOC)) {
            
          $departamento->setId_departamento_U($retorno['id_Departamento_U']);
          $departamento->setNome($retorno['nome']);
            
                       
        }
        return $departamento->getNome();
    }
    
    
    
    
    
}
