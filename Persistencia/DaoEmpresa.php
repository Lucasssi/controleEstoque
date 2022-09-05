<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleEstoqueWebTCC/Persistencia/Conexao.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleEstoqueWebTCC/Classes/Empresa.php';



class DaoEmpresa {
    
      public static function inserir(Empresa $empresa) {
         
         $nome = $empresa->getNome();
         $nome_fantasia = $empresa->getNome_fantasia();
         $cmpj = $empresa->getCmpj();
         $email = $empresa->getEmail();
         $seguimento = $empresa->getSeguimento();
         $site = $empresa->getSite();
         $estado = $empresa->getEstado();
         $cidade = $empresa->getCidade();
         $bairro = $empresa->getBairro();
         $rua = $empresa->getRua();
         $numero = $empresa->getNumero();
         $telefone = $empresa->getTelefone();
         
                 
         
        $dbh = Conexao::getInstance();
        $sql = "INSERT INTO Empresa ( nome, nomeFantasia, cmpj, telefone, email, site, seguimento, Estado, cidade, bairro, rua, numero ) values ( ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ? )";
        try {
            $dbh->beginTransaction();
            $stmt = $dbh->prepare($sql);
            $stmt->bindParam(1, $nome, PDO::PARAM_STR);
            $stmt->bindParam(2, $nome_fantasia, PDO::PARAM_STR);
            $stmt->bindParam(3, $cmpj, PDO::PARAM_STR);
            $stmt->bindParam(4, $telefone, PDO::PARAM_STR);
            $stmt->bindParam(5, $email, PDO::PARAM_STR);
            $stmt->bindParam(6, $site, PDO::PARAM_STR);
            $stmt->bindParam(7, $seguimento, PDO::PARAM_STR);
            $stmt->bindParam(8, $estado, PDO::PARAM_STR);
            $stmt->bindParam(9, $cidade, PDO::PARAM_STR);
            $stmt->bindParam(10, $bairro, PDO::PARAM_STR);
            $stmt->bindParam(11, $rua, PDO::PARAM_STR);
            $stmt->bindParam(12, $numero, PDO::PARAM_STR);
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
        $sql = "SELECT id_empresa, nomeFantasia, nome, cmpj, telefone, email, site, seguimento, Estado, cidade, bairro, rua, numero FROM Empresa";
        $stmt = $dbh->prepare($sql);
        $stmt->execute();
        $vetor = array();
        while ($retorno = $stmt->fetch(PDO::FETCH_ASSOC)) {
            
            $empresa = new Empresa();
            $empresa->setId_empresa($retorno['id_empresa']);
            $empresa->setNome_fantasia($retorno['nomeFantasia']);
            $empresa->setNome($retorno['nome']);
            $empresa->setCmpj($retorno['cmpj']);
            $empresa->setTelefone($retorno['telefone']);
            $empresa->setEmail($retorno['email']);
            $empresa->setSite($retorno['site']);
            $empresa->setSeguimento($retorno['seguimento']);
            $empresa->setEstado($retorno['Estado']);
            $empresa->setCidade($retorno['cidade']);
            $empresa->setBairro($retorno['bairro']);
            $empresa->setRua($retorno['rua']);
            $empresa->setNumero($retorno['numero']);
                    
            $vetor[] = $empresa;
        }
        return $vetor;
    }

    
    public static function excluir($id) {
        $dbh = Conexao::getInstance();
        $sql = "DELETE FROM Empresa WHERE id_empresa = ?";
        try {
            $dbh->beginTransaction();
            $stmt = $dbh->prepare($sql);
            $stmt->bindParam(1, $id, PDO::PARAM_INT);
            $stmt->execute();
            $dbh->commit();
            return 1;
        } catch (Exception $ex) {
            $dbh->rollBack();
            return "Falha: " . $ex->getMessage();
        }
        
    }
    
    
    public static function alterar(Empresa $empresa) {
            
           $id_empresa   = $empresa->getId_empresa();
           $nomeFantasia = $empresa->getNome_fantasia();
           $nome         = $empresa->getNome();
           $cmpj         = $empresa->getCmpj();
           $telefone     = $empresa->getTelefone();
           $email        = $empresa->getEmail();
           $site         = $empresa->getSite();
           $seguimento   = $empresa->getSeguimento();
           $estado       = $empresa->getEstado();
           $cidade       = $empresa->getCidade();
           $bairro       = $empresa->getBairro();
           $rua          = $empresa->getRua();
           $numero       = $empresa->getNumero();
            
        $dbh = Conexao::getInstance();
         
        $sql = "UPDATE Empresa SET nomeFantasia = ?, nome = ?, cmpj = ?, telefone = ?, email = ?, site = ?, seguimento = ?, Estado = ?, cidade = ?, bairro = ?, rua = ?, numero = ? WHERE id_empresa = ?";
        try {
            $dbh->beginTransaction();
            $stmt = $dbh->prepare($sql);
            $stmt->bindParam(1, $nomeFantasia, PDO::PARAM_STR);
            $stmt->bindParam(2, $nome, PDO::PARAM_STR);
            $stmt->bindParam(3, $cmpj, PDO::PARAM_STR);
            $stmt->bindParam(4, $telefone, PDO::PARAM_STR);
            $stmt->bindParam(5, $email, PDO::PARAM_STR);
            $stmt->bindParam(6, $site, PDO::PARAM_STR);
            $stmt->bindParam(7, $seguimento, PDO::PARAM_STR);
            $stmt->bindParam(8, $estado, PDO::PARAM_STR);
            $stmt->bindParam(9, $cidade, PDO::PARAM_STR);
            $stmt->bindParam(10, $bairro, PDO::PARAM_STR);
            $stmt->bindParam(11, $rua, PDO::PARAM_STR);
            $stmt->bindParam(12, $numero, PDO::PARAM_STR);
            $stmt->bindParam(13, $id_empresa, PDO::PARAM_STR);
            
            $stmt->execute();
            $dbh->commit();
            return true;
        } catch (Exception $ex) {
            $dbh->rollBack();
            return "Falha: " . $ex->getMessage();
        }
    }
    
    
    public static function getEmpresa($id) {
                 
        $dbh = Conexao::getInstance();
        $sql = "select id_empresa, nomeFantasia, nome, cmpj, telefone, email, site, seguimento, Estado, cidade, bairro, rua, numero from Empresa WHERE id_empresa = ?";
        $stmt = $dbh->prepare($sql);
        $stmt->bindParam(1, $id, PDO::PARAM_INT);
        $stmt->execute();
        $empresa = new Empresa();
        while ($retorno = $stmt->fetch(PDO::FETCH_ASSOC)) {
            
           $empresa->setId_empresa($retorno['id_empresa']);
           $empresa->setNome_fantasia($retorno['nomeFantasia']);
           $empresa->setNome($retorno['nome']);
           $empresa->setCmpj($retorno['cmpj']);
           $empresa->setTelefone($retorno['telefone']);
           $empresa->setEmail($retorno['email']);
           $empresa->setSite($retorno['site']);
           $empresa->setSeguimento($retorno['seguimento']);
           $empresa->setEstado($retorno['Estado']);
           $empresa->setCidade($retorno['cidade']);
           $empresa->setBairro($retorno['bairro']);
           $empresa->setRua($retorno['rua']);
           $empresa->setNumero($retorno['numero']);
            
                       
        }
        return $empresa;
    }
    
     public static function getEmpresaNome($nome) {
                 
        $dbh = Conexao::getInstance();
        $sql = "select nome from Empresa WHERE  nome LIKE ?";
        $stmt = $dbh->prepare($sql);
        $stmt->bindParam(1, $nome, PDO::PARAM_INT);
        $stmt->execute();
        $empresa = new Empresa();
        while ($retorno = $stmt->fetch(PDO::FETCH_ASSOC)) {
            
         
          $empresa->setNome($retorno['nome']);
            
                       
        }
        return $empresa->getNome();
    }
    //put your code here
}
