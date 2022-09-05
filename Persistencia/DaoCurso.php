<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleEstoqueWebTCC/Classes/Curso.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleEstoqueWebTCC/Persistencia/Conexao.php';

class DaoCurso {
    
    
    
      public static function inserir(Curso $curso) {
         $nome = $curso->getNome();
                 
         
        $dbh = Conexao::getInstance();
        $sql = "INSERT INTO departamento (nome) values (?)";
        try {
            $dbh->beginTransaction();
            $stmt = $dbh->prepare($sql);
            $stmt->bindParam(1, $nome, PDO::PARAM_STR);
            $stmt->execute();
            $dbh->commit();
            return true;
        } catch (Exception $ex) {
            $dbh->rollBack();
            return "Falha: " . $ex->getMessage();
        }
    }
    
    
    
       public static function getTodos() {
        $dbh = Conexao::getInstance();
        $sql = "SELECT * FROM departamento";
        $stmt = $dbh->prepare($sql);
        $stmt->execute();
        $vetor = array();
        while ($retorno = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $curso = new Curso();
            $curso->setId_curso($retorno['id_dpt']);
            $curso->setNome($retorno['nome']);
                    
            $vetor[] = $curso;
        }
        return $vetor;
    }
      
    
    
    
    public static function getCursosPorUsuario($id_usuario) {
        $dbh = Conexao::getInstance();
        $sql = "SELECT * FROM departamento";
        $stmt = $dbh->prepare($sql);
          $stmt->bindParam(1, $id_usuario, PDO::PARAM_STR);
        $stmt->execute();
        $vetor = array();
        while ($retorno = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $curso = new Curso();
            $curso->setId_curso($retorno['id_dpt']);
            $curso->setNome($retorno['nome']);
                    
            $vetor[] = $curso;
        }
        return $vetor;
    }
    
    public static function excluir($id) {
        $dbh = Conexao::getInstance();
        $sql = "DELETE FROM departamento WHERE id_dpt = ?";
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
    
    
    public static function alterar(Curso $curso) {
            
         $nome = $curso->getNome();
         $id_curso = $curso->getId_curso();
            
        $dbh = Conexao::getInstance();
        $sql = "UPDATE departamento SET nome = ? WHERE id_dpt = ?";
        try {
            $dbh->beginTransaction();
            $stmt = $dbh->prepare($sql);
            $stmt->bindParam(1, $nome, PDO::PARAM_STR);
            $stmt->bindParam(2, $id_curso, PDO::PARAM_INT);
            $stmt->execute();
            $dbh->commit();
            return true;
        } catch (Exception $ex) {
            $dbh->rollBack();
            return "Falha: " . $ex->getMessage();
        }
    }
    
    
    public static function getCurso($id) {
                 
        $dbh = Conexao::getInstance();
        $sql = "select * from departamento WHERE id_dpt = ?";
        $stmt = $dbh->prepare($sql);
        $stmt->bindParam(1, $id, PDO::PARAM_INT);
        $stmt->execute();
        $curso = new Curso();
        while ($retorno = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $curso->setId_curso($retorno['id_dpt']);
            $curso->setNome($retorno['nome']);
                       
        }
        return $curso;
    }
    
    
}
