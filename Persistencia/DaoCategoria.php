<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleEstoqueWebTCC/Classes/Categoria.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleEstoqueWebTCC/Persistencia/Conexao.php';

class DaoCategoria {
    
    public static function inserir(Categoria $cat) {
         
        $nome = $cat->getNome();
        $estMin = $cat->getEstMin();
        $estMed = $cat->getEstMed();
        $comp = $cat->getComp();
                 
         
        $dbh = Conexao::getInstance();
        $sql = "INSERT INTO Categoria (nome, estMin, estMed, comp) values (?, ?, ?, ?)";
        try {
            $dbh->beginTransaction();
            $stmt = $dbh->prepare($sql);
            $stmt->bindParam(1, $nome, PDO::PARAM_STR);
            $stmt->bindParam(2, $estMin, PDO::PARAM_INT);
            $stmt->bindParam(3, $estMed, PDO::PARAM_INT);
            $stmt->bindParam(4, $comp, PDO::PARAM_INT);
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
        $sql = "SELECT * FROM Categoria";
        $stmt = $dbh->prepare($sql);
        $stmt->execute();
        $vetor = array();
        while ($retorno = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $cat = new Categoria();
            $cat->setId($retorno['id']);
            $cat->setNome($retorno['nome']);
            $cat->setEstMin($retorno['estMin']);
            $cat->setEstMed($retorno['estMed']);
            $cat->setComp($retorno['comp']);
                    
            $vetor[] = $cat;
        }
        return $vetor;
    }
      
    
    
    
    public static function getCursosPorUsuario($id_cad) {
        $dbh = Conexao::getInstance();
        $sql = "SELECT * FROM Categoria";
        $stmt = $dbh->prepare($sql);
          $stmt->bindParam(1, $id_cad, PDO::PARAM_STR);
        $stmt->execute();
        $vetor = array();
        while ($retorno = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $cat = new Categoria();
            $cat->setId($retorno['id']);
            $cat->setNome($retorno['nome']);
                    
            $vetor[] = $cat;
        }
        return $vetor;
    }
    
    public static function excluir($id) {
        $dbh = Conexao::getInstance();
        $sql = "DELETE FROM Categoria WHERE id = ?";
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
    
    
    public static function alterar(Categoria $cat) {
            
         $nome = $cat->getNome();
         $id = $cat->getId();
         $estMed = $cat->getEstMed();
         $estMin = $cat->getEstMin();
         $comp = $cat->getComp();
            
        $dbh = Conexao::getInstance();
        $sql = "UPDATE Categoria SET nome = ?, estMin = ?, estMed = ?, comp = ? WHERE id = ?";
        try {
            $dbh->beginTransaction();
            $stmt = $dbh->prepare($sql);
            $stmt->bindParam(1, $nome, PDO::PARAM_STR);
            $stmt->bindParam(2, $estMin, PDO::PARAM_INT);
            $stmt->bindParam(3, $estMed, PDO::PARAM_INT);
            $stmt->bindParam(4, $comp, PDO::PARAM_INT);
            $stmt->bindParam(5, $id, PDO::PARAM_INT);
            $stmt->execute();
            $dbh->commit();
            return true;
        } catch (Exception $ex) {
            $dbh->rollBack();
            return "Falha: " . $ex->getMessage();
        }
    }
    
    
    public static function getCategoria($id) {
                 
        $dbh = Conexao::getInstance();
        $sql = "select * from Categoria WHERE id = ?";
        $stmt = $dbh->prepare($sql);
        $stmt->bindParam(1, $id, PDO::PARAM_INT);
        $stmt->execute();
        $cat = new Categoria();
        while ($retorno = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $cat->setId($retorno['id']);
            $cat->setNome($retorno['nome']);
            $cat->setEstMin($retorno['estMin']);
            $cat->setEstMed($retorno['estMed']);
            $cat->setComp($retorno['comp']);
                       
        }
        return $cat;
    }
    
    
    
}
