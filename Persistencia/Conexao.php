<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Conexao
 *
 * @author lucas
 */
class Conexao {
    
    
    private static $instance;
    
    
    public static function getInstance(){
        if(!isset (self::$instance)){
            self::$instance = new PDO('mysql:host=localhost;dbname=ControleEstoque2', 'root', '');
            self::$instance->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        }
        return self::$instance;
    }
    
}
