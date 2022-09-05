<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleEstoqueWebTCC/Persistencia/Conexao.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleEstoqueWebTCC/Classes/Cidadee.php';


class DaoCidadee {
    
    
          public static function getTodos() {
        $dbh = Conexao::getInstance();
        $sql = 'SELECT *  FROM tb_cidades';
        $stmt = $dbh->prepare($sql);
        $stmt->execute();
        $vetor = array();
        while ($retorno = $stmt->fetch(PDO::FETCH_ASSOC)) {
            
            $cidade = new Cidadee();
            $cidade->setId_cidade($retorno['id']);
            $cidade->setEstado($retorno['estado']);
            $cidade->setUf($retorno['uf']);
            $cidade->setNome($retorno['nome']);
            
            
                    
            $vetor[] = $cidade;
        }
        return $vetor;
    }
    
    
    
      public static function getCidadePorEstado($id) {
                 
        $dbh = Conexao::getInstance();
        $sql = "select * from tb_cidades WHERE  estado = ?";
        $stmt = $dbh->prepare($sql);
        $stmt->bindParam(1, $id, PDO::PARAM_INT);
        $stmt->execute();
        $vetor = array();
        while ($retorno = $stmt->fetch(PDO::FETCH_ASSOC)) {
            
            $cidade = new Cidadee();
            $cidade->setId_cidade($retorno['id']);
            $cidade->setEstado($retorno['estado']);
            $cidade->setUf($retorno['uf']);
            $cidade->setNome($retorno['nome']);
            
              $vetor[] = $cidade;         
        }
        return $vetor;
    }
    
}
