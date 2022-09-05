<?php


require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleEstoqueWebTCC/Persistencia/Conexao.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleEstoqueWebTCC/Classes/Usuario.php';


class DaoUsuario {
    
     public static function inserir(Usuario $usuario) {
         
         $nome = $usuario->getNome();
         $Sobre_nome = $usuario->getSobre_nome();
         $matricula = $usuario->getMatricula();
         $login = $usuario->getLogin();
         $senha = $usuario->getSenha();
         
                 
         
        $dbh = Conexao::getInstance();
        $sql = "INSERT INTO Usuario ( nome, sobre_nome, matricula, login, senha) values (?, ?, ?, ?, ?)";
        try {
            $dbh->beginTransaction();
            $stmt = $dbh->prepare($sql);
            $stmt->bindParam(1, $nome, PDO::PARAM_STR);
            $stmt->bindParam(2, $Sobre_nome, PDO::PARAM_STR);
            $stmt->bindParam(3, $matricula, PDO::PARAM_STR);
            $stmt->bindParam(4, $login, PDO::PARAM_STR);
            $stmt->bindParam(5, $senha, PDO::PARAM_STR);
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
        $sql = "SELECT * FROM Usuario";
        $stmt = $dbh->prepare($sql);
        $stmt->execute();
        $vetor = array();
        while ($retorno = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $usuario = new Usuario();
            $usuario->setId_usuario($retorno['id_usuario']);
            $usuario->setNome($retorno['nome']);
            $usuario->setSobre_nome($retorno['sobre_nome']);
            $usuario->setMatricula($retorno['matricula']);
            $usuario->setLogin($retorno['login']);
            $usuario->setSenha($retorno['senha']);
                    
            $vetor[] = $usuario;
        }
        return $vetor;
    }
    
    public static function excluir($id) {
        $dbh = Conexao::getInstance();
        $sql = "DELETE FROM Usuario WHERE id_usuario = ?";
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
    
    
    public static function alterar(Usuario $usuario) {
            
         $id = $usuario->getId_usuario();
         $nome = $usuario->getNome();
         $Sobre_nome = $usuario->getSobre_nome();
         $matricula = $usuario->getMatricula();
         $login = $usuario->getLogin();
         $senha = $usuario->getSenha();
            
        $dbh = Conexao::getInstance();
         
        $sql = "UPDATE departamento SET nome = ?, sobre_nome = ?, matricula = ?, login = ?, login = ?, senha = ? WHERE id_usuario = ?";
        try {
            $dbh->beginTransaction();
            $stmt = $dbh->prepare($sql);
            $stmt->bindParam(1, $nome, PDO::PARAM_STR);
            $stmt->bindParam(2, $Sobre_nome, PDO::PARAM_STR);
            $stmt->bindParam(3, $matricula, PDO::PARAM_STR);
            $stmt->bindParam(4, $login, PDO::PARAM_STR);
            $stmt->bindParam(5, $senha, PDO::PARAM_STR);
            $stmt->bindParam(6, $id, PDO::PARAM_STR);
            $stmt->execute();
            $dbh->commit();
            return true;
        } catch (Exception $ex) {
            $dbh->rollBack();
            return "Falha: " . $ex->getMessage();
        }
    }
    
    
    public static function getUsuario($id) {
                 
        $dbh = Conexao::getInstance();
        $sql = "select * from Usuario WHERE id_usuario = ?";
        $stmt = $dbh->prepare($sql);
        $stmt->bindParam(1, $id, PDO::PARAM_INT);
        $stmt->execute();
        $usuario = new Usuario();
        while ($retorno = $stmt->fetch(PDO::FETCH_ASSOC)) {
            
            $usuario->setId_usuario($retorno['id_usuario']);
            $usuario->setNome($retorno['id_usuario']);
            $usuario->setSobre_nome($retorno['sobre_nome']);
            $usuario->setMatricula($retorno['matricula']);
            $usuario->setLogin($retorno['login']);
            $usuario->setSenha($retorno['senha']);
            
                       
        }
        return $usuario;
    }
    public static function getUsuarioLogin($login) {
                 
        $dbh = Conexao::getInstance();
        $sql = "select * from Usuario WHERE login = ?";
        $stmt = $dbh->prepare($sql);
        $stmt->bindParam(1, $login, PDO::PARAM_STR);
        $stmt->execute();
        $usuario = new Usuario();
        while ($retorno = $stmt->fetch(PDO::FETCH_ASSOC)) {
            
            $usuario->setId_usuario($retorno['id_usuario']);
            $usuario->setNome($retorno['nome']);
            $usuario->setSobre_nome($retorno['sobre_nome']);
            $usuario->setMatricula($retorno['matricula']);
            $usuario->setLogin($retorno['login']);
            $usuario->setSenha($retorno['senha']);
            
                       
        }
        return $usuario;
    }
}
