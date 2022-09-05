<?php

session_start();

require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleEstoqueWebTCC/Persistencia/DaoNotaFiscal.php';


     if(isset($_GET['GerarIdNF']))
    {
    
         echo 'Dentro!';
              DaoNotaFiscal::GerarId();
    $_SESSION['id_NotaFiscal'] =   DaoNotaFiscal::RetornaId();

    echo '<br>';
     echo $_SESSION['id_NotaFiscal'];
        echo '<br>';
     
     //echo $_SESSION['id_funcionario'];
   //echo $_SESSION['almox_Selecionado_id_almox'];
//    $_SESSION['TotalDeAtendidos'] = 0;
//    $_SESSION['TotalDeItem'] = 0;
    

       header("location: CadProduto2.php");

    }

echo 'fora!';


 
        

?>