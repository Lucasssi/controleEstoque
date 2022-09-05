<?php
 require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleEstoqueWebTCC/Classes/Funcionario.php';
 require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleEstoqueWebTCC/Persistencia/Conexao.php';

class DaoFuncionario {
    
    
     public static function inserir(Funcionario $func) {
         
         $data_adm = $func->getData_adm();
         $funcao   = $func->getFuncao()->getId_Funcao_U();
         $login    = $func->getLogin();
         $nome     = $func->getNome();
         $senha    = $func->getSenha();
         $tipo     = $func->getTipo();
         
                 
         
        $dbh = Conexao::getInstance();
        $sql = "INSERT INTO funcionario (nome, login, data_adm, funcao, senha, tipo) values (?, ?, ?, ?, ?, ?)";
        try {
            $dbh->beginTransaction();
            $stmt = $dbh->prepare($sql);
            $stmt->bindParam(1, $nome, PDO::PARAM_STR);
            $stmt->bindParam(2, $login, PDO::PARAM_STR);
            $stmt->bindParam(3, $data_adm, PDO::PARAM_STR);
            $stmt->bindParam(4, $funcao, PDO::PARAM_INT);
            $stmt->bindParam(5, $senha, PDO::PARAM_STR);
            $stmt->bindParam(6, $tipo, PDO::PARAM_STR);
            $stmt->execute();
            $dbh->commit();
            return true;
        } catch (Exception $ex) {
            $dbh->rollBack();
            return "Falha: " . $ex->getMessage();
        }
    }
    
    
    public static function alterar(Funcionario $func) {
            
         $data_adm = $func->getData_adm();
         $funcao   = $func->getFuncao()->getId_Funcao_U();
         $login    = $func->getLogin();
         $nome     = $func->getNome();
         $senha    = $func->getSenha();
         $id_func  = $func->getId_funcionario();
         $tipo     = $func->getTipo();
            
        $dbh = Conexao::getInstance();
        $sql = "UPDATE funcionario SET nome = ?, data_adm = ?, funcao = ?, login = ?, tipo = ? WHERE id_funcionario = ? ";
        try {
            $dbh->beginTransaction();
            $stmt = $dbh->prepare($sql);
            $stmt->bindParam(1, $nome, PDO::PARAM_STR);
            $stmt->bindParam(2, $data_adm, PDO::PARAM_STR);
            $stmt->bindParam(3, $funcao, PDO::PARAM_STR);
            $stmt->bindParam(4, $login, PDO::PARAM_STR);
            $stmt->bindParam(5, $tipo, PDO::PARAM_STR);
            $stmt->bindParam(6, $id_func, PDO::PARAM_STR);
            $stmt->execute();
            $dbh->commit();
            return true;
        } catch (Exception $ex) {
            $dbh->rollBack();
            return "Falha: " . $ex->getMessage();
        }
    }
    public static function alterarSenha(Funcionario $func) {
            
       
         $senha    = $func->getSenha();
         $id_func  = $func->getId_funcionario();
         
            
        $dbh = Conexao::getInstance();
        $sql = "UPDATE funcionario SET senha = ? WHERE id_funcionario = ? ";
        try {
            $dbh->beginTransaction();
            $stmt = $dbh->prepare($sql);
            $stmt->bindParam(1, $senha, PDO::PARAM_STR);
            $stmt->bindParam(2, $id_func, PDO::PARAM_STR);
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
        $sql = "select f.id_funcionario, f.nome, f.login,"
            . " f.data_adm, f.funcao, f.senha, f.tipo,"
            . " fcao.nome as Nfuncao "
            . "from funcionario as f INNER JOIN Funcao_U as fcao on "
            . "(f.funcao = fcao.id_Funcao_U) WHERE id_funcionario != 1 AND id_funcionario != 4 ";
        $stmt = $dbh->prepare($sql);
        $stmt->execute();
        $vetor = array();
        while ($retorno = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $Func = new Funcionario();
            $Func->setId_funcionario($retorno['id_funcionario']);
            $Func->setNome($retorno['nome']);
            $Func->setLogin($retorno['login']);
            $Func->setData_adm($retorno['data_adm']);
            $Func->getFuncao()->setId_Funcao_U($retorno['funcao']);
            $Func->setSenha($retorno['senha']);
            $Func->setTipo($retorno['tipo']);
            $Func->getFuncao()->setNome($retorno['Nfuncao']);
            
            $vetor[] = $Func;
        }
        return $vetor;
    }
    public static function getTodosClientes() {
        $dbh = Conexao::getInstance();
        $sql = "select f.id_funcionario, f.nome, f.login,"
            . " f.data_adm, f.funcao, f.senha, f.tipo,"
            . " fcao.nome as Nfuncao "
            . "from funcionario as f INNER JOIN Funcao_U as fcao on "
            . "(f.funcao = fcao.id_Funcao_U) WHERE id_funcionario != 1 AND id_funcionario != 4 AND tipo LIKE 'Cliente' ";
        $stmt = $dbh->prepare($sql);
        $stmt->execute();
        $vetor = array();
        while ($retorno = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $Func = new Funcionario();
            $Func->setId_funcionario($retorno['id_funcionario']);
            $Func->setNome($retorno['nome']);
            $Func->setLogin($retorno['login']);
            $Func->setData_adm($retorno['data_adm']);
            $Func->getFuncao()->setId_Funcao_U($retorno['funcao']);
            $Func->setSenha($retorno['senha']);
            $Func->setTipo($retorno['tipo']);
            $Func->getFuncao()->setNome($retorno['Nfuncao']);
            
            $vetor[] = $Func;
        }
        return $vetor;
    }
    public static function getTodosAlmoxarife() {
        $dbh = Conexao::getInstance();
        $sql = "select f.id_funcionario, f.nome, f.login,"
            . " f.data_adm, f.funcao, f.senha, f.tipo,"
            . " fcao.nome as Nfuncao "
            . "from funcionario as f INNER JOIN Funcao_U as fcao on "
            . "(f.funcao = fcao.id_Funcao_U) WHERE id_funcionario != 1 AND id_funcionario != 4 AND tipo LIKE 'almoxarife' ";
        $stmt = $dbh->prepare($sql);
        $stmt->execute();
        $vetor = array();
        while ($retorno = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $Func = new Funcionario();
            $Func->setId_funcionario($retorno['id_funcionario']);
            $Func->setNome($retorno['nome']);
            $Func->setLogin($retorno['login']);
            $Func->setData_adm($retorno['data_adm']);
            $Func->getFuncao()->setId_Funcao_U($retorno['funcao']);
            $Func->setSenha($retorno['senha']);
            $Func->setTipo($retorno['tipo']);
            $Func->getFuncao()->setNome($retorno['Nfuncao']);
            
            $vetor[] = $Func;
        }
        return $vetor;
    }
    
    
      public static function getFuncionario($id) {
                 
        $dbh = Conexao::getInstance();
        $sql = "select * from funcionario WHERE login LIKE ?";
        $stmt = $dbh->prepare($sql);
        $stmt->bindParam(1, $id, PDO::PARAM_INT);
        $stmt->execute();
        $Func = new Funcionario();
        while ($retorno = $stmt->fetch(PDO::FETCH_ASSOC)) {
           
            $Func = new Funcionario();
            $Func->setId_funcionario($retorno['id_funcionario']);
            $Func->setNome($retorno['nome']);
            $Func->setLogin($retorno['login']);
            $Func->setData_adm($retorno['data_adm']);
            $Func->setFuncao($retorno['funcao']);
            $Func->setSenha($retorno['senha']);
            $Func->setTipo($retorno['tipo']);
            
        }
        return $Func;
    }
    
        public static function getFuncionarioID($id) {
                 
        $dbh = Conexao::getInstance();
        $sql = "select * from funcionario WHERE id_funcionario = ?";
        $stmt = $dbh->prepare($sql);
        $stmt->bindParam(1, $id, PDO::PARAM_INT);
        $stmt->execute();
        $Func = new Funcionario();
        while ($retorno = $stmt->fetch(PDO::FETCH_ASSOC)) {
           
            $Func = new Funcionario();
            $Func->setId_funcionario($retorno['id_funcionario']);
            $Func->setNome($retorno['nome']);
            $Func->setLogin($retorno['login']);
            $Func->setData_adm($retorno['data_adm']);
            $Func->getFuncao()->setId_Funcao_U($retorno['funcao']);
            $Func->setSenha($retorno['senha']);
            $Func->setTipo($retorno['tipo']);
            
        }
        return $Func;
    }
    
        public static function getFuncionarioLogin($Login) {
                 
        $dbh = Conexao::getInstance();
        $sql = "select f.id_funcionario, f.nome, f.login,"
            . " f.data_adm, f.funcao, f.senha, f.tipo,"
            . " fcao.nome as Nfuncao "
            . "from funcionario as f INNER JOIN Funcao_U as fcao on "
            . "(f.funcao = fcao.id_Funcao_U) WHERE login LIKE ?  ";
        $stmt = $dbh->prepare($sql);
        $stmt->bindParam(1, $Login, PDO::PARAM_STR);
        $stmt->execute();
       
        while ($retorno = $stmt->fetch(PDO::FETCH_ASSOC)) {
           
            $Func = new Funcionario();
            $Func->setId_funcionario($retorno['id_funcionario']);
            $Func->setNome($retorno['nome']);
            $Func->setLogin($retorno['login']);
            $Func->setData_adm($retorno['data_adm']);
            $Func->getFuncao()->setId_Funcao_U($retorno['funcao']);
            $Func->setSenha($retorno['senha']);
            $Func->setTipo($retorno['tipo']);
            $Func->getFuncao()->setNome($retorno['Nfuncao']);
            return $Func;
        }
        
    }
    
    public static function excluir($id) {
        $dbh = Conexao::getInstance();
        $sql = "DELETE FROM funcionario WHERE id_funcionario = ?";
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
    
    
    
   


?>