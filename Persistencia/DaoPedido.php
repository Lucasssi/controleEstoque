<?php


require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleEstoqueWebTCC/Classes/Funcionario.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleEstoqueWebTCC/Classes/Curso.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleEstoqueWebTCC/Classes/Status.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleEstoqueWebTCC/Classes/Almoxarifado.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleEstoqueWebTCC/Classes/Pedido.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleEstoqueWebTCC/Persistencia/Conexao.php';


class DaoPedido {
    
    
   public static function inserir($id_pedido ,$Func_Cli, $id_departamento ) {
         
       $id_func_almox = 0; 
       $id_status = 6;
       $id_almox = 0;
       
       
        $dbh = Conexao::getInstance();
        $sql = "INSERT INTO Pedido ( id_pedido, id_func_cli, id_func_almox, id_departamento, id_status, id_almox, data_pedido, data_entrega )"
                . " values ( ?, ?, ?, ?, ?, ?, now(), now() )";
        try {
            $dbh->beginTransaction();
            $stmt = $dbh->prepare($sql);
            $stmt->bindParam(1, $id_pedido, PDO::PARAM_INT);
            $stmt->bindParam(2, $Func_Cli, PDO::PARAM_INT);
            $stmt->bindParam(3, $id_func_almox, PDO::PARAM_INT);
            $stmt->bindParam(4, $id_departamento, PDO::PARAM_STR);
            $stmt->bindParam(5, $id_status, PDO::PARAM_STR);
            $stmt->bindParam(6, $id_almox, PDO::PARAM_STR);
            $stmt->execute();
            $dbh->commit();
            return true;
        } catch (Exception $ex) {
            $dbh->rollBack();
            return "Falha: " . $ex->getMessage();
        }
    }
    
    
    
       public static function GerarID2() {
           
        $dbh = Conexao::getInstance();
        $sql = "SELECT max(id_fornecedor) as id FROM fornecedirIpPedido";
        $stmt = $dbh->prepare($sql);
        $stmt->execute();
        $Curso = new Curso();
        while ($retorno = $stmt->fetch(PDO::FETCH_ASSOC)) {
            
            $Curso->setId_curso($retorno['id']);
            
          
                    
           
        }
        return $Curso->getId_curso();
    }
    
    
    
    
    
    
      public static function GerarID($id) {
                 
        $dbh = Conexao::getInstance();
        $sql = "SELECT max(id_fornecedor) as id FROM fornecedirIpPedido";
        $stmt = $dbh->prepare($sql);
        $stmt->bindParam(1, $id, PDO::PARAM_INT);
        $stmt->execute();
        $Curso = new Curso();
        while ($retorno = $stmt->fetch(PDO::FETCH_ASSOC)) {
            
           $Curso->setId_curso($retorno['id']);
           
            
                       
        }
        return $Curso->getId_curso();
    }
    
    
    
    
       public static function AlimentarGeradorID() {
         
      
       $id_pedido = 1;
       
       
        $dbh = Conexao::getInstance();
        $sql = "INSERT INTO fornecedirIpPedido ( ID ) values ( ?)";
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
    
    
 
    
    
       public static function getTodos1() {
        $dbh = Conexao::getInstance();
        $sql = 'SELECT p.id_pedido, p.id_func_cli as "ClienteID", 
                f.nome, p.id_departamento, d.nome as "curso", p.id_status, s.nome as "Status",
                p.id_almox, DATE_FORMAT( p.data_pedido, "%d/%m/%Y") as DATAPEDIDO, p.data_entrega 
                FROM Pedido as p INNER JOIN departamento as d ON (p.id_departamento = d.id_dpt)
				 INNER JOIN Status_pedido as s ON (s.id_status_pedido = p.id_status)
                                 INNER JOIN funcionario as f ON (p.id_func_cli = f.id_funcionario)';
        $stmt = $dbh->prepare($sql);
        $stmt->execute();
        $vetor = array();
        while ($retorno = $stmt->fetch(PDO::FETCH_ASSOC)) {
            
            $pedido = new Pedido();
            $pedido->setId_pedido($retorno['id_pedido']);
            $pedido->getFunc_cli()->setId_funcionario($retorno['ClienteID']);
            $pedido->getFunc_cli()->setNome($retorno['nome']);
            $pedido->getCurso()->setId_curso($retorno['id_departamento']);
            $pedido->getCurso()->setNome($retorno['curso']);
            $pedido->getStatus()->setId_status($retorno['id_status']);
            $pedido->getStatus()->setNome($retorno['Status']);
            $pedido->getAlmox()->setId_almox($retorno['id_almox']);
            $pedido->setData_pedido($retorno['DATAPEDIDO']);
            $pedido->setData_entrega($retorno['data_entrega']);
           
                    
            $vetor[] = $pedido;
        }
        return $vetor;
    }
    
    
    
       public static function getPedidoPorCliente($Id_cliente) {
        $dbh = Conexao::getInstance();
        $sql = 'SELECT p.id_pedido, p.id_func_cli as "ClienteID", 
                f.nome, p.id_departamento, d.nome as "curso", p.id_status, s.nome as "Status",
                p.id_almox, DATE_FORMAT( p.data_pedido, "%d/%m/%Y   %H:%i:%s") as DATAPEDIDO, p.data_entrega 
                FROM Pedido as p INNER JOIN departamento as d ON (p.id_departamento = d.id_dpt)
				 INNER JOIN Status_pedido as s ON (s.id_status_pedido = p.id_status)
                                 INNER JOIN funcionario as f ON (p.id_func_cli = f.id_funcionario)
                                 WHERE p.id_func_cli = ?
                                 ORDER BY p.id_pedido DESC';
        $stmt = $dbh->prepare($sql);
        $stmt->bindParam(1, $Id_cliente, PDO::PARAM_INT);
        $stmt->execute();
        $vetor = array();
        while ($retorno = $stmt->fetch(PDO::FETCH_ASSOC)) {
            
            $pedido = new Pedido();
            $pedido->setId_pedido($retorno['id_pedido']);
            $pedido->getFunc_cli()->setId_funcionario($retorno['ClienteID']);
            $pedido->getFunc_cli()->setNome($retorno['nome']);
            $pedido->getCurso()->setId_curso($retorno['id_departamento']);
            $pedido->getCurso()->setNome($retorno['curso']);
            $pedido->getStatus()->setId_status($retorno['id_status']);
            $pedido->getStatus()->setNome($retorno['Status']);
            $pedido->getAlmox()->setId_almox($retorno['id_almox']);
            $pedido->setData_pedido($retorno['DATAPEDIDO']);
            $pedido->setData_entrega($retorno['data_entrega']);
           
                    
            $vetor[] = $pedido;
        }
        return $vetor;
    }
       public static function getPedidoPorClientesSolicitado($Id_cliente) {
        $dbh = Conexao::getInstance();
        $sql = 'SELECT p.id_pedido, p.id_func_cli as "ClienteID", 
                f.nome, p.id_departamento, d.nome as "curso", p.id_status, s.nome as "Status",
                p.id_almox, DATE_FORMAT( p.data_pedido, "%d/%m/%Y   %H:%i:%s") as DATAPEDIDO, p.data_entrega 
                FROM Pedido as p INNER JOIN departamento as d ON (p.id_departamento = d.id_dpt)
				 INNER JOIN Status_pedido as s ON (s.id_status_pedido = p.id_status)
                                 INNER JOIN funcionario as f ON (p.id_func_cli = f.id_funcionario)
                                 WHERE p.id_func_cli = ? AND p.id_status = 1
                                 ORDER BY p.id_pedido DESC';
        $stmt = $dbh->prepare($sql);
        $stmt->bindParam(1, $Id_cliente, PDO::PARAM_INT);
        $stmt->execute();
        $vetor = array();
        while ($retorno = $stmt->fetch(PDO::FETCH_ASSOC)) {
            
            $pedido = new Pedido();
            $pedido->setId_pedido($retorno['id_pedido']);
            $pedido->getFunc_cli()->setId_funcionario($retorno['ClienteID']);
            $pedido->getFunc_cli()->setNome($retorno['nome']);
            $pedido->getCurso()->setId_curso($retorno['id_departamento']);
            $pedido->getCurso()->setNome($retorno['curso']);
            $pedido->getStatus()->setId_status($retorno['id_status']);
            $pedido->getStatus()->setNome($retorno['Status']);
            $pedido->getAlmox()->setId_almox($retorno['id_almox']);
            $pedido->setData_pedido($retorno['DATAPEDIDO']);
            $pedido->setData_entrega($retorno['data_entrega']);
           
                    
            $vetor[] = $pedido;
        }
        return $vetor;
    }
       public static function getPedidoPorClientesPrepEntrega($Id_cliente) {
        $dbh = Conexao::getInstance();
        $sql = 'SELECT p.id_pedido, p.id_func_cli as "ClienteID", 
                f.nome, p.id_departamento, d.nome as "curso", p.id_status, s.nome as "Status",
                p.id_almox, DATE_FORMAT( p.data_pedido, "%d/%m/%Y   %H:%i:%s") as DATAPEDIDO, p.data_entrega 
                FROM Pedido as p INNER JOIN departamento as d ON (p.id_departamento = d.id_dpt)
				 INNER JOIN Status_pedido as s ON (s.id_status_pedido = p.id_status)
                                 INNER JOIN funcionario as f ON (p.id_func_cli = f.id_funcionario)
                                 WHERE p.id_func_cli = ? AND p.id_status = 7
                                 ORDER BY p.id_pedido DESC';
        $stmt = $dbh->prepare($sql);
        $stmt->bindParam(1, $Id_cliente, PDO::PARAM_INT);
        $stmt->execute();
        $vetor = array();
        while ($retorno = $stmt->fetch(PDO::FETCH_ASSOC)) {
            
            $pedido = new Pedido();
            $pedido->setId_pedido($retorno['id_pedido']);
            $pedido->getFunc_cli()->setId_funcionario($retorno['ClienteID']);
            $pedido->getFunc_cli()->setNome($retorno['nome']);
            $pedido->getCurso()->setId_curso($retorno['id_departamento']);
            $pedido->getCurso()->setNome($retorno['curso']);
            $pedido->getStatus()->setId_status($retorno['id_status']);
            $pedido->getStatus()->setNome($retorno['Status']);
            $pedido->getAlmox()->setId_almox($retorno['id_almox']);
            $pedido->setData_pedido($retorno['DATAPEDIDO']);
            $pedido->setData_entrega($retorno['data_entrega']);
           
                    
            $vetor[] = $pedido;
        }
        return $vetor;
    }
    
    
       public static function getPedidoTodos() {
        $dbh = Conexao::getInstance();
        $sql = 'SELECT p.id_pedido, p.id_func_cli as "ClienteID", 
                f.nome, p.id_departamento, d.nome as "curso", p.id_status, s.nome as "Status",
                p.id_almox, DATE_FORMAT( p.data_pedido, "%d/%m/%Y   %H:%i:%s") as DATAPEDIDO, p.data_entrega 
                FROM Pedido as p INNER JOIN departamento as d ON (p.id_departamento = d.id_dpt)
				 INNER JOIN Status_pedido as s ON (s.id_status_pedido = p.id_status)
                                 INNER JOIN funcionario as f ON (p.id_func_cli = f.id_funcionario)
                                 where id_status - 6
                                 ORDER BY p.id_pedido DESC';
        $stmt = $dbh->prepare($sql);
     //   $stmt->bindParam(1, $Id_cliente, PDO::PARAM_INT);
        $stmt->execute();
        $vetor = array();
        while ($retorno = $stmt->fetch(PDO::FETCH_ASSOC)) {
            
            $pedido = new Pedido();
            $pedido->setId_pedido($retorno['id_pedido']);
            $pedido->getFunc_cli()->setId_funcionario($retorno['ClienteID']);
            $pedido->getFunc_cli()->setNome($retorno['nome']);
            $pedido->getCurso()->setId_curso($retorno['id_departamento']);
            $pedido->getCurso()->setNome($retorno['curso']);
            $pedido->getStatus()->setId_status($retorno['id_status']);
            $pedido->getStatus()->setNome($retorno['Status']);
            $pedido->getAlmox()->setId_almox($retorno['id_almox']);
            $pedido->setData_pedido($retorno['DATAPEDIDO']);
            $pedido->setData_entrega($retorno['data_entrega']);
           
                    
            $vetor[] = $pedido;
        }
        return $vetor;
    }
    
    
       public static function getPedidoTodosSolicitado() {
        $dbh = Conexao::getInstance();
        $sql = 'SELECT p.id_pedido, p.id_func_cli as "ClienteID", 
                f.nome, p.id_departamento, d.nome as "curso", p.id_status, s.nome as "Status",
                p.id_almox, DATE_FORMAT( p.data_pedido, "%d/%m/%Y   %H:%i:%s") as DATAPEDIDO, p.data_entrega 
                FROM Pedido as p INNER JOIN departamento as d ON (p.id_departamento = d.id_dpt)
				 INNER JOIN Status_pedido as s ON (s.id_status_pedido = p.id_status)
                                 INNER JOIN funcionario as f ON (p.id_func_cli = f.id_funcionario)
                                 where id_status = 1
                                 ORDER BY p.id_pedido DESC';
        $stmt = $dbh->prepare($sql);
     //   $stmt->bindParam(1, $Id_cliente, PDO::PARAM_INT);
        $stmt->execute();
        $vetor = array();
        while ($retorno = $stmt->fetch(PDO::FETCH_ASSOC)) {
            
            $pedido = new Pedido();
            $pedido->setId_pedido($retorno['id_pedido']);
            $pedido->getFunc_cli()->setId_funcionario($retorno['ClienteID']);
            $pedido->getFunc_cli()->setNome($retorno['nome']);
            $pedido->getCurso()->setId_curso($retorno['id_departamento']);
            $pedido->getCurso()->setNome($retorno['curso']);
            $pedido->getStatus()->setId_status($retorno['id_status']);
            $pedido->getStatus()->setNome($retorno['Status']);
            $pedido->getAlmox()->setId_almox($retorno['id_almox']);
            $pedido->setData_pedido($retorno['DATAPEDIDO']);
            $pedido->setData_entrega($retorno['data_entrega']);
           
                    
            $vetor[] = $pedido;
        }
        return $vetor;
    }
    
    
       public static function getPedidoTodosSolicitadoCliente($id_cliente) {
        $dbh = Conexao::getInstance();
        $sql = 'SELECT p.id_pedido, p.id_func_cli as "ClienteID", 
                f.nome, p.id_departamento, d.nome as "curso", p.id_status, s.nome as "Status",
                p.id_almox, DATE_FORMAT( p.data_pedido, "%d/%m/%Y   %H:%i:%s") as DATAPEDIDO, p.data_entrega 
                FROM Pedido as p INNER JOIN departamento as d ON (p.id_departamento = d.id_dpt)
				 INNER JOIN Status_pedido as s ON (s.id_status_pedido = p.id_status)
                                 INNER JOIN funcionario as f ON (p.id_func_cli = f.id_funcionario)
                                 where id_status = 1 AND p.id_func_cli = ?
                                 ORDER BY p.data_pedido DESC';
        $stmt = $dbh->prepare($sql);
        $stmt->bindParam(1, $id_cliente, PDO::PARAM_INT);
        $stmt->execute();
        $vetor = array();
        while ($retorno = $stmt->fetch(PDO::FETCH_ASSOC)) {
            
            $pedido = new Pedido();
            $pedido->setId_pedido($retorno['id_pedido']);
            $pedido->getFunc_cli()->setId_funcionario($retorno['ClienteID']);
            $pedido->getFunc_cli()->setNome($retorno['nome']);
            $pedido->getCurso()->setId_curso($retorno['id_departamento']);
            $pedido->getCurso()->setNome($retorno['curso']);
            $pedido->getStatus()->setId_status($retorno['id_status']);
            $pedido->getStatus()->setNome($retorno['Status']);
            $pedido->getAlmox()->setId_almox($retorno['id_almox']);
            $pedido->setData_pedido($retorno['DATAPEDIDO']);
            $pedido->setData_entrega($retorno['data_entrega']);
           
                    
            $vetor[] = $pedido;
        }
        return $vetor;
    }
       public static function getPedidoTodosEmAndamento() {
        $dbh = Conexao::getInstance();
        $sql = 'SELECT p.id_pedido, p.id_func_cli as "ClienteID", 
                f.nome, p.id_departamento, d.nome as "curso", p.id_status, s.nome as "Status",
                p.id_almox, DATE_FORMAT( p.data_pedido, "%d/%m/%Y   %H:%i:%s") as DATAPEDIDO, p.data_entrega 
                FROM Pedido as p INNER JOIN departamento as d ON (p.id_departamento = d.id_dpt)
				 INNER JOIN Status_pedido as s ON (s.id_status_pedido = p.id_status)
                                 INNER JOIN funcionario as f ON (p.id_func_cli = f.id_funcionario)
                                 where id_status = 7
                                 ORDER BY p.id_pedido DESC';
        $stmt = $dbh->prepare($sql);
     //   $stmt->bindParam(1, $Id_cliente, PDO::PARAM_INT);
        $stmt->execute();
        $vetor = array();
        while ($retorno = $stmt->fetch(PDO::FETCH_ASSOC)) {
            
            $pedido = new Pedido();
            $pedido->setId_pedido($retorno['id_pedido']);
            $pedido->getFunc_cli()->setId_funcionario($retorno['ClienteID']);
            $pedido->getFunc_cli()->setNome($retorno['nome']);
            $pedido->getCurso()->setId_curso($retorno['id_departamento']);
            $pedido->getCurso()->setNome($retorno['curso']);
            $pedido->getStatus()->setId_status($retorno['id_status']);
            $pedido->getStatus()->setNome($retorno['Status']);
            $pedido->getAlmox()->setId_almox($retorno['id_almox']);
            $pedido->setData_pedido($retorno['DATAPEDIDO']);
            $pedido->setData_entrega($retorno['data_entrega']);
           
                    
            $vetor[] = $pedido;
        }
        return $vetor;
    }
       public static function getPedidoTodosEntregue() {
        $dbh = Conexao::getInstance();
        $sql = 'SELECT p.id_pedido, p.id_func_cli as "ClienteID", 
                f.nome, p.id_departamento, d.nome as "curso", p.id_status, s.nome as "Status",
                p.id_almox, DATE_FORMAT( p.data_pedido, "%d/%m/%Y   %H:%i:%s") as DATAPEDIDO, p.data_entrega 
                FROM Pedido as p INNER JOIN departamento as d ON (p.id_departamento = d.id_dpt)
				 INNER JOIN Status_pedido as s ON (s.id_status_pedido = p.id_status)
                                 INNER JOIN funcionario as f ON (p.id_func_cli = f.id_funcionario)
                                 where id_status = 8
                                 ORDER BY p.id_pedido DESC';
        $stmt = $dbh->prepare($sql);
     //   $stmt->bindParam(1, $Id_cliente, PDO::PARAM_INT);
        $stmt->execute();
        $vetor = array();
        while ($retorno = $stmt->fetch(PDO::FETCH_ASSOC)) {
            
            $pedido = new Pedido();
            $pedido->setId_pedido($retorno['id_pedido']);
            $pedido->getFunc_cli()->setId_funcionario($retorno['ClienteID']);
            $pedido->getFunc_cli()->setNome($retorno['nome']);
            $pedido->getCurso()->setId_curso($retorno['id_departamento']);
            $pedido->getCurso()->setNome($retorno['curso']);
            $pedido->getStatus()->setId_status($retorno['id_status']);
            $pedido->getStatus()->setNome($retorno['Status']);
            $pedido->getAlmox()->setId_almox($retorno['id_almox']);
            $pedido->setData_pedido($retorno['DATAPEDIDO']);
            $pedido->setData_entrega($retorno['data_entrega']);
           
                    
            $vetor[] = $pedido;
        }
        return $vetor;
    }
    
    
       public static function getPedidoPorId($id_pedido) {
        $dbh = Conexao::getInstance();
        $sql = 'SELECT p.id_pedido, p.id_func_cli as "ClienteID", 
                f.nome, p.id_departamento, d.nome as "curso", p.id_status, s.nome as "Status",
                p.id_almox, DATE_FORMAT( p.data_pedido, "%d/%m/%Y   %H:%i:%s") as DATAPEDIDO, p.data_entrega 
                FROM Pedido as p INNER JOIN departamento as d ON (p.id_departamento = d.id_dpt)
				 INNER JOIN Status_pedido as s ON (s.id_status_pedido = p.id_status)
                                 INNER JOIN funcionario as f ON (p.id_func_cli = f.id_funcionario)
                                 where id_status - 6 AND p.id_pedido = ?
                                 ORDER BY p.id_pedido DESC';
        $stmt = $dbh->prepare($sql);
        $stmt->bindParam(1, $id_pedido, PDO::PARAM_INT);
        $stmt->execute();
     //   $vetor = array();
        $pedido = new Pedido();
        while ($retorno = $stmt->fetch(PDO::FETCH_ASSOC)) {
            
          //  $pedido = new Pedido();
            $pedido->setId_pedido($retorno['id_pedido']);
            $pedido->getFunc_cli()->setId_funcionario($retorno['ClienteID']);
            $pedido->getFunc_cli()->setNome($retorno['nome']);
            $pedido->getCurso()->setId_curso($retorno['id_departamento']);
            $pedido->getCurso()->setNome($retorno['curso']);
            $pedido->getStatus()->setId_status($retorno['id_status']);
            $pedido->getStatus()->setNome($retorno['Status']);
            $pedido->getAlmox()->setId_almox($retorno['id_almox']);
            $pedido->setData_pedido($retorno['DATAPEDIDO']);
            $pedido->setData_entrega($retorno['data_entrega']);
           
                    
          //  $vetor[] = $pedido;
        }
        //return $vetor;
        return $pedido;
    }
    
    
    
    
       public static function getTodos2() {
        $dbh = Conexao::getInstance();
        $sql = 'SELECT p.id_pedido, p.id_func_cli as "Cliente ID", 
                f.nome, p.id_departamento, d.nome as "curso", p.id_status, s.nome as "Status",
                p.id_almox, p.data_pedido, p.data_entrega 
                FROM Pedido as p INNER JOIN departamento as d ON (p.id_departamento = d.id_dpt)
				 INNER JOIN Status_pedido as s ON (s.id_status_pedido = p.id_status)
                                 INNER JOIN funcionario as f ON (p.id_func_cli = f.id_funcionario)';
        $stmt = $dbh->prepare($sql);
        $stmt->execute();
        $vetor = array();
        while ($retorno = $stmt->fetch(PDO::FETCH_ASSOC)) {
            
            $pedido = new Pedido();
            $pedido->setId_pedido($retorno['id_pedido']);
            $pedido->getFunc_clit()->setId_funcionario($retorno['id_func_cli']);
            $pedido->getFunc_clit()->setNome($retorno['nome']);
            $pedido->getCurso()->setId_curso($retorno['id_departamento']);
            $pedido->getCurso()->setNome($retorno['curso']);
            $pedido->getStatus()->setId_status($retorno['id_status']);
            $pedido->getStatus()->setNome($retorno['Status']);
            $pedido->getAlmox()->setId_almox($retorno['id_almox']);
            $pedido->setData_pedido($retorno['data_pedido']);
            $pedido->setData_entrega($retorno['data_entrega']);
           
                    
            $vetor[] = $pedido;
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
    
    
    public static function alterarPedidoStatus($idStatus) {
            
           
            
        $dbh = Conexao::getInstance();
         
        $sql = "UPDATE Pedido SET id_status = 1 WHERE id_pedido = ?";
        try {
            $dbh->beginTransaction();
            $stmt = $dbh->prepare($sql);
            $stmt->bindParam(1, $idStatus, PDO::PARAM_INT);
           
            
            $stmt->execute();
            $dbh->commit();
            return true;
        } catch (Exception $ex) {
            $dbh->rollBack();
            return "Falha: " . $ex->getMessage();
        }
    }
    public static function alterarPedidoEntregue($id_Pedido, $id_func) {
            
           
            
        $dbh = Conexao::getInstance();
         
        $sql = "UPDATE Pedido SET id_status = 8, id_func_almox = ?, data_entrega = now()  WHERE id_pedido = ?";
        try {
            $dbh->beginTransaction();
            $stmt = $dbh->prepare($sql);
            $stmt->bindParam(2, $id_Pedido, PDO::PARAM_INT);
            $stmt->bindParam(1, $id_func, PDO::PARAM_INT);
           
            
            $stmt->execute();
            $dbh->commit();
            return true;
        } catch (Exception $ex) {
            $dbh->rollBack();
            return "Falha: " . $ex->getMessage();
        }
    }
    
    
    public static function InserirAlmoxarifado($id_almox, $id_pedido) {
            
           
            
        $dbh = Conexao::getInstance();
         
        $sql = "UPDATE Pedido SET id_almox = ? WHERE id_pedido = ?";
        try {
            $dbh->beginTransaction();
            $stmt = $dbh->prepare($sql);
            $stmt->bindParam(1, $id_almox, PDO::PARAM_INT);
            $stmt->bindParam(2, $id_pedido, PDO::PARAM_INT);
           
            
            $stmt->execute();
            $dbh->commit();
            return true;
        } catch (Exception $ex) {
            $dbh->rollBack();
            return "Falha: " . $ex->getMessage();
        }
    }
    
    
    
    public static function alterarPedidoEtapa2($id_Pedido, $id_Func_almox, $id_almox) {
            
           
            
        $dbh = Conexao::getInstance();
         
        $sql = "UPDATE Pedido SET id_func_almox = ?, id_status = 7, id_almox = ?, data_entrega = now() WHERE id_pedido = ?";
        try {
            $dbh->beginTransaction();
            $stmt = $dbh->prepare($sql);
            $stmt->bindParam(1, $id_Func_almox, PDO::PARAM_INT);
            $stmt->bindParam(2, $id_almox, PDO::PARAM_INT);
            $stmt->bindParam(3, $id_Pedido, PDO::PARAM_INT);
           
            
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
        $sql = "select id_empresa, nomeFantasia, nome, cmpj, telefone, email, site, seguimento from Empresa WHERE id_empresa = ?";
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
