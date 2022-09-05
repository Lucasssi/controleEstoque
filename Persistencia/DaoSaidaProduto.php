<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleEstoqueWebTCC/Classes/SaidaProduto.php'; 
require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleEstoqueWebTCC/Persistencia/Conexao.php';

class DaoSaidaProduto {
    
     
    public static function inserir(SaidaProduto $SP) {
         
         $id_pedido = $SP->getId_pedido();
         $Id_produto = $SP->getProduto()->getId_MC();
         $atendido = $SP->getAtendido();
         $disponivel = $SP->getDisponivel();
         $solicitado = $SP->getSolicitado();
         $status = $SP->getStatus();
         $codigoProduto = $SP->getProduto()->getCodigo();
         
        $dbh = Conexao::getInstance();
        $sql = "insert into SaidaProduto (id_pedido, Id_Produto, atendido, disponivel, solicidate, statuss, codigoProduto) values (?, ?, ?, ?, ?, ?, ?)";
        try {
            $dbh->beginTransaction();
            $stmt = $dbh->prepare($sql);
            $stmt->bindParam(1, $id_pedido, PDO::PARAM_INT);
            $stmt->bindParam(2, $Id_produto, PDO::PARAM_INT);
            $stmt->bindParam(3, $atendido, PDO::PARAM_INT);
            $stmt->bindParam(4, $disponivel, PDO::PARAM_INT);
            $stmt->bindParam(5, $solicitado, PDO::PARAM_INT);
            $stmt->bindParam(6, $status, PDO::PARAM_STR);
            $stmt->bindParam(7, $codigoProduto, PDO::PARAM_STR);
            $stmt->execute();
            $dbh->commit();
            return true;
        } catch (Exception $ex) {
            $dbh->rollBack();
            return "Falha: " . $ex->getMessage();
        }
    }
    
     public static function getSaidaProdutoPorPedido($id_pedido) {
        $dbh = Conexao::getInstance();
        $sql = "SELECT SP.id_sp, SP.id_pedido, SP.Id_Produto, MC.nome, MC.codigo,
                MC.descricao, UM.descricao as 'UnidadeMedida', TIP.descricao as 'tipoProduto', MC.qtd as disponivel, SP.solicidate, SP.atendido, SP.statuss,
                MC.Cx, MC.CxUn
                FROM SaidaProduto as SP INNER JOIN MaterialConsumo as MC ON (SP.Id_Produto = MC.id_MC)
                                        INNER JOIN UnidadeMedida as UM ON (UM.id_UM = MC.id_UM)
                                        INNER JOIN tipo as TIP ON (TIP.id_tipo = MC.id_tipo)
                WHERE SP.id_pedido = ?  ";
   //     $dbh->beginTransaction();
        $stmt = $dbh->prepare($sql);
        $stmt->bindParam(1, $id_pedido, PDO::PARAM_INT);
        $stmt->execute();
        $vetor = array();
        while ($retorno = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $SP = new SaidaProduto();
            $SP->setId_sp($retorno['id_sp']);
            $SP->setId_pedido($retorno['id_pedido']);
            $SP->getProduto()->setId_MC($retorno['Id_Produto']);
            $SP->getProduto()->setCodigo($retorno['codigo']);
            $SP->getProduto()->setNome($retorno['nome']);
            $SP->getProduto()->setDescricao($retorno['descricao']);
            $SP->getProduto()->getId_UM()->SetDescricao($retorno['UnidadeMedida']);
            $SP->getProduto()->getId_tipo()->SetDescricao($retorno['tipoProduto']);
            $SP->setDisponivel($retorno['disponivel']);
            $SP->setSolicitado($retorno['solicidate']);
            $SP->setAtendido($retorno['atendido']);
            $SP->setStatus($retorno['statuss']);
            $SP->getProduto()->setCx($retorno['Cx']);
            $SP->getProduto()->setCxUn($retorno['CxUn']);
           
         
            $vetor[] = $SP;
        }
        return $vetor;
    }
    
    
     public static function getVerificarSaidaProduto($id_pedido, $codigoProduto) {
        $dbh = Conexao::getInstance();
        $sql = "SELECT codigoProduto
               FROM SaidaProduto
               WHERE id_pedido = ? and  codigoProduto = ? ";
   //     $dbh->beginTransaction();
        $stmt = $dbh->prepare($sql);
        $stmt->bindParam(1, $id_pedido, PDO::PARAM_INT);
        $stmt->bindParam(2, $codigoProduto, PDO::PARAM_INT);
        $stmt->execute();
      //  $vetor = array();
        while ($retorno = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $SP = new SaidaProduto();
          //  $SP->setId_sp($retorno['id_sp']);
        //    $SP->setId_pedido($retorno['id_pedido']);
          //$SP->getProduto()->setId_MC($retorno['Id_Produto']);
         //   $SP->getProduto()->setNome($retorno['nome']);
        //    $SP->getProduto()->setDescricao($retorno['descricao']);
        //    $SP->setDisponivel($retorno['disponivel']);
         //   $SP->setSolicitado($retorno['solicitado']);
         //   $SP->setAtendido($retorno['atendido']);
         //   $SP->setStatus($retorno['statuss']);
           
         return $retorno['codigoProduto'];
         
           // $vetor[] = $SP;
            
        }
        //return  $SP;
    }
    
      public static function excluir($id) {
        $dbh = Conexao::getInstance();
        $sql = "DELETE FROM SaidaProduto WHERE id_sp = ?";
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
    
    
       public static function alterarItensSaida($id_pedido) {
            
           
            
        $dbh = Conexao::getInstance();
         
        $sql = "UPDATE saidaproduto SET statuss = 'ENTREGUE' WHERE id_pedido = ?";
        try {
            $dbh->beginTransaction();
            $stmt = $dbh->prepare($sql);
            $stmt->bindParam(1, $id_pedido, PDO::PARAM_INT);
           
            
            $stmt->execute();
            $dbh->commit();
            return true;
        } catch (Exception $ex) {
            $dbh->rollBack();
            return "Falha: " . $ex->getMessage();
        }
    }
    
    
    
    
    
    
}
