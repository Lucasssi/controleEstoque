<?php
 require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleEstoqueWebTCC/Classes/NotaFiscal.php';
 require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleEstoqueWebTCC/Persistencia/Conexao.php';

class DaoNotaFiscal {
    
    
     public static function inserir(NotaFiscal $nf) {
         
         $Id_empresa = $nf->getEmpresa()->getId_empresa();
         $dataemissao = $nf->getDataEmissao();
         $numero = $nf->getNumero();
         $id_nf = $nf->getId_notafiscal();
        
         
                 
         
        $dbh = Conexao::getInstance();
        $sql = "INSERT INTO NotaFiscal (id_empresa, dataemissao, numero, id_notaFiscal) values (?, ?, ?, ?)";
        try {
            $dbh->beginTransaction();
            $stmt = $dbh->prepare($sql);
            $stmt->bindParam(1, $Id_empresa, PDO::PARAM_INT);
            $stmt->bindParam(2, $dataemissao, PDO::PARAM_STMT);
            $stmt->bindParam(3, $numero, PDO::PARAM_STR);
            $stmt->bindParam(4, $id_nf, PDO::PARAM_INT);
            
            $stmt->execute();
            $dbh->commit();
            return true;
        } catch (Exception $ex) {
            $dbh->rollBack();
            return "Falha: " . $ex->getMessage();
        }
    }
     public static function GerarId() {
         
         
        $dbh = Conexao::getInstance();
        $sql = "INSERT INTO GerarIdNotaFiscal (id_gerado) values (1)";
        try {
            $dbh->beginTransaction();
            $stmt = $dbh->prepare($sql);
      //      $stmt->bindParam(1, $C, PDO::PARAM_INT);
            $stmt->execute();
            $dbh->commit();
            return true;
        } catch (Exception $ex) {
            $dbh->rollBack();
            return "Falha: " . $ex->getMessage();
        }
    }
    
    public static function RetornaId() {
        $dbh = Conexao::getInstance();
        $sql = "SELECT max(id_Gnf) as Maior FROM GerarIdNotaFiscal";
        $stmt = $dbh->prepare($sql);
        $stmt->execute();
        $vetor = array();
        while ($retorno = $stmt->fetch(PDO::FETCH_ASSOC)) {
//            $nf = new NotaFiscal();
//            $nf->setId_notafiscal($retorno['id_notaFiscal']);
//            $nf->getEmpresa()->setId_empresa($retorno['id_empresa']);
//            $nf->getEmpresa()->setNome($retorno['nome']);
//            $nf->setDataEmissao($retorno['dataemissao']);
//            $nf->setNumero($retorno['numero']);
            
           
             return $retorno['Maior'];
            
        }
       
    }
     
    
    
    public static function alterar(NotaFiscal $nf) {
            
         $Id_empresa = $nf->getEmpresa()->getId_empresa();
         $dataemissao = $nf->getDataEmissao();
         $numero = $nf->getNumero();
         $id_NotaFiscal = $nf->getId_notafiscal();
            
        $dbh = Conexao::getInstance();
        $sql = "UPDATE NotaFiscal SET id_empresa = ?, dataemissao = ?, numero = ? WHERE id_notaFiscal = ? ";
        try {
            $dbh->beginTransaction();
            $stmt = $dbh->prepare($sql);
            $stmt->bindParam(1, $Id_empresa, PDO::PARAM_INT);
            $stmt->bindParam(2, $dataemissao, PDO::PARAM_STR);
            $stmt->bindParam(3, $numero, PDO::PARAM_STR);
            $stmt->bindParam(4, $id_NotaFiscal, PDO::PARAM_STR);
           
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
        $sql = "SELECT nf.id_notaFiscal, nf.id_empresa, ep.nome, nf.dataemissao, nf.numero 
                      FROM NotaFiscal as nf 
                INNER JOIN Empresa as ep ON (nf.id_empresa = ep.id_empresa)";
        $stmt = $dbh->prepare($sql);
        $stmt->execute();
        $vetor = array();
        while ($retorno = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $nf = new NotaFiscal();
            $nf->setId_notafiscal($retorno['id_notaFiscal']);
            $nf->getEmpresa()->setId_empresa($retorno['id_empresa']);
            $nf->getEmpresa()->setNome($retorno['nome']);
            $nf->setDataEmissao($retorno['dataemissao']);
            $nf->setNumero($retorno['numero']);
            
           
            
            $vetor[] = $nf;
        }
        return $vetor;
    }

 
    
    
      public static function getNotaFiscal($id) {
                 
        $dbh = Conexao::getInstance();
        $sql = "SELECT nf.id_notaFiscal, nf.id_empresa, ep.nome, DATE_FORMAT( nf.dataemissao, '%d/%m/%Y') as Data, nf.numero, ep.cmpj
                      FROM NotaFiscal as nf 
                INNER JOIN Empresa as ep ON (nf.id_empresa = ep.id_empresa)
                WHERE id_notaFiscal = ? ";
        $stmt = $dbh->prepare($sql);
        $stmt->bindParam(1, $id, PDO::PARAM_INT);
        $stmt->execute();
       // $nf = new NotaFiscal();
        while ($retorno = $stmt->fetch(PDO::FETCH_ASSOC)) {
           
            $nf = new NotaFiscal();
            $nf->setId_notafiscal($retorno['id_notaFiscal']);
            $nf->getEmpresa()->setId_empresa($retorno['id_empresa']);
            $nf->getEmpresa()->setNome($retorno['nome']);
            $nf->setDataEmissao($retorno['Data']);
            $nf->setNumero($retorno['numero']);
            $nf->getEmpresa()->setCmpj($retorno['cmpj']);
            
        }
        return $nf;
    }
    
     
    
    public static function excluir($id) {
        $dbh = Conexao::getInstance();
        $sql = "DELETE FROM NotaFiscal WHERE id_notaFiscal = ?";
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
    
}
