<?php

session_start();

require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleEstoqueWebTCC/Persistencia/DaoPedido.php';


if($_SESSION['TotalDeAtendidos'] == $_SESSION['TotalDeItem'])
    {
    DaoPedido::alterarPedidoEtapa2($_SESSION['Pedido2_Idpedido'], $_SESSION['id_funcionario'], $_SESSION['almox_Selecionado_id_almox']);

     //echo $_SESSION['Pedido2_Idpedido'];
    //echo $_SESSION['id_funcionario'];
   //echo $_SESSION['almox_Selecionado_id_almox'];
    $_SESSION['TotalDeAtendidos'] = 0;
    $_SESSION['TotalDeItem'] = 0;
    

header("location: homeAlmoxarife.php");

    }
    else
        {
        header("location: AtenderPedido.php?NaoFinalizado");
        
        
        }




 
        

?>


