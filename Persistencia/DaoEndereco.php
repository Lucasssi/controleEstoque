<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleEstoqueWebTCC/Persistencia/Conexao.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleEstoqueWebTCC/Classes/Endereco.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleEstoqueWebTCC/Classes/Cidadee.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleEstoqueWebTCC/Classes/Estadoo.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleEstoqueWebTCC/Classes/Empresa.php';


class DaoEndereco {
    
     public static function inserir(Endereco $endereco) {
         
        // $id_endereco = $endereco->getId_endereco();
         $id_cidade = $endereco->getCidadee()->getId_cidade();
         $id_estado = $endereco->getEstadoo()->getId();
         $id_empresa = $endereco->getEmpresa()->getId_empresa();
         $bairro = $endereco->getBairro();
         $rua = $endereco->getRua();
         $numero = $endereco->getNumero();
         $descricao = $endereco->getDescricao();
        
         
                 
         
        $dbh = Conexao::getInstance();
        $sql = "INSERT INTO tb_endereco ( descricao, bairro, rua, numero, id_empresa, id_cidade, id_estado ) values ( ?, ?, ?, ?, ?, ?, ? )";
        try {
            $dbh->beginTransaction();
            $stmt = $dbh->prepare($sql);
            $stmt->bindParam(1, $descricao, PDO::PARAM_STR);
            $stmt->bindParam(2, $bairro, PDO::PARAM_STR);
            $stmt->bindParam(3, $rua, PDO::PARAM_STR);
            $stmt->bindParam(4, $numero, PDO::PARAM_STR);
            $stmt->bindParam(5, $id_empresa, PDO::PARAM_STR);
            $stmt->bindParam(6, $id_cidade, PDO::PARAM_STR);
            $stmt->bindParam(7, $id_estado, PDO::PARAM_STR);
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
        $sql = 'SELECT ende.id_endereco, ende.descricao, ende.bairro, ende.rua, ende.numero, esta.nome as "Estado", cida.nome as "Cidade", empr.nome as "Empresa" 
                FROM tb_endereco as ende INNER JOIN Empresa as empr ON (ende.id_empresa = empr.id_empresa) 
                                         INNER JOIN tb_estados as esta ON (ende.id_estado = esta.id ) 
                                         INNER JOIN tb_cidades as cida ON ( ende.id_cidade = cida.id)';
        $stmt = $dbh->prepare($sql);
        $stmt->execute();
        $vetor = array();
        while ($retorno = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $endereco = new Endereco();
            $endereco->setId_endereco($retorno['id_endereco']);
            $endereco->setDescricao($retorno['descricao']);
            $endereco->setBairro($retorno['bairro']);
            $endereco->setRua($retorno['rua']);
            $endereco->setNumero($retorno['numero']);
            $endereco->getEstadoo()->setNome($retorno['Estado']);
            $endereco->getCidadee()->SetNome($retorno['Cidade']);
            $endereco->getEmpresa()->SetNome($retorno['Empresa']);
            
                    
            $vetor[] = $endereco;
        }
        return $vetor;
    }

    
    public static function excluir($id) {
        $dbh = Conexao::getInstance();
        $sql = "DELETE FROM tb_endereco WHERE id_endereco = ?";
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
    
    
    public static function alterar(Endereco $endereco) {
         
        
         $id_endereco = $endereco->getId_endereco();
         $id_cidade = $endereco->getCidadee()->getId_cidade();
         $id_estado = $endereco->getEstadoo()->getId();
         $id_empresa = $endereco->getEmpresa()->getId_empresa();
         $bairro = $endereco->getBairro();
         $rua = $endereco->getRua();
         $numero = $endereco->getNumero();
         $descricao = $endereco->getDescricao();
         
         
            
        $dbh = Conexao::getInstance();
         
        $sql = "UPDATE tb_endereco SET descricao = ?, bairro = ?, rua = ?, numero = ?, id_empresa = ?, id_cidade = ?, id_estado = ? WHERE id_endereco = ?";
        try {
            
            $dbh->beginTransaction();
            $stmt = $dbh->prepare($sql);
            $stmt->bindParam(1, $descricao, PDO::PARAM_STR);
            $stmt->bindParam(2, $bairro, PDO::PARAM_STR);
            $stmt->bindParam(3, $rua, PDO::PARAM_STR);
            $stmt->bindParam(4, $numero, PDO::PARAM_STR);
            $stmt->bindParam(5, $id_empresa, PDO::PARAM_STR);
            $stmt->bindParam(6, $id_cidade, PDO::PARAM_STR);
            $stmt->bindParam(7, $id_estado, PDO::PARAM_STR);
            $stmt->bindParam(8, $id_endereco, PDO::PARAM_STR);
            
            $stmt->execute();
            $dbh->commit();
            return true;
        } catch (Exception $ex) {
            $dbh->rollBack();
            return "Falha: " . $ex->getMessage();
        }
    }
    
    
    public static function getEndereco($id) {
                 
        $dbh = Conexao::getInstance();
        $sql = 'select ende.id_endereco, ende.descricao, ende.bairro, ende.rua, ende.numero,
                ende.id_empresa, ende.id_cidade, ende.id_estado, esta.nome AS "Estado",
                cida.nome AS "Cidade", empr.nome AS "Empresa"  
                 from tb_endereco as ende 
                 INNER JOIN Empresa as empr ON (ende.id_empresa = empr.id_empresa)
                 INNER JOIN tb_cidades as cida ON (ende.id_cidade = cida.id)
                 INNER JOIN tb_estados as esta ON (ende.id_estado = esta.id) WHERE id_endereco = ?';
               
        $stmt = $dbh->prepare($sql);
        $stmt->bindParam(1, $id, PDO::PARAM_INT);
        $stmt->execute();
        $endereco = new Endereco();
        while ($retorno = $stmt->fetch(PDO::FETCH_ASSOC)) {
            
            $endereco->setId_endereco($retorno['id_endereco']);
            $endereco->setDescricao($retorno['descricao']);
            $endereco->setBairro($retorno['bairro']);
            $endereco->setRua($retorno['rua']);
            $endereco->setNumero($retorno['numero']);
            $endereco->getEmpresa()->setId_empresa($retorno['id_empresa']);
            $endereco->getCidadee()->setId_cidade($retorno['id_cidade']);
            $endereco->getEstadoo()->setId($retorno['id_estado']);
            $endereco->getEstadoo()->setNome($retorno['Estado']);
            $endereco->getCidadee()->setNome($retorno['Cidade']);
            $endereco->getEmpresa()->setNome($retorno['Empresa']); 
                       
        }
        return $endereco;
    }
    
    public static function getEnderecoEmpresa($id) {
                 
        $dbh = Conexao::getInstance();
        $sql = 'select ende.id_endereco, ende.descricao, ende.bairro, ende.rua, ende.numero,
                ende.id_empresa, ende.id_cidade, ende.id_estado, esta.nome AS "Estado",
                cida.nome AS "Cidade", empr.nome AS "Empresa"  
                 from tb_endereco as ende 
                 INNER JOIN Empresa as empr ON (ende.id_empresa = empr.id_empresa)
                 INNER JOIN tb_cidades as cida ON (ende.id_cidade = cida.id)
                 INNER JOIN tb_estados as esta ON (ende.id_estado = esta.id) WHERE ende.id_empresa = ?';
               
        $stmt = $dbh->prepare($sql);
        $stmt->bindParam(1, $id, PDO::PARAM_INT);
        $stmt->execute();
        $vetor = array();
        while ($retorno = $stmt->fetch(PDO::FETCH_ASSOC)) {
            
             $endereco = new Endereco();
            
            $endereco->setId_endereco($retorno['id_endereco']);
            $endereco->setDescricao($retorno['descricao']);
            $endereco->setBairro($retorno['bairro']);
            $endereco->setRua($retorno['rua']);
            $endereco->setNumero($retorno['numero']);
            $endereco->getEmpresa()->setId_empresa($retorno['id_empresa']);
            $endereco->getCidadee()->setId_cidade($retorno['id_cidade']);
            $endereco->getEstadoo()->setId($retorno['id_estado']);
            $endereco->getEstadoo()->setNome($retorno['Estado']);
            $endereco->getCidadee()->setNome($retorno['Cidade']);
            $endereco->getEmpresa()->setNome($retorno['Empresa']); 
            
            $vetor[] = $endereco;
                       
        }
        return $vetor;
    }
    
//     public static function getEnderecoNome($nome) {
//                 
//        $dbh = Conexao::getInstance();
//        $sql = "select * from te_endereco WHERE  nome LIKE ?";
//        $stmt = $dbh->prepare($sql);
//        $stmt->bindParam(1, $nome, PDO::PARAM_INT);
//        $stmt->execute();
//        $cidade = new Cidade();
//        while ($retorno = $stmt->fetch(PDO::FETCH_ASSOC)) {
//            
//          $cidade->setId_cidade($retorno['id_cidade']);
//          $cidade->setNome($retorno['nome']);
//            
//                       
//        }
//        return $cidade->getNome();
//    }
}
