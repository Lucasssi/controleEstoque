<?php
//session_start();
?>
<!DOCTYPE html>

<html>
    <head>
      <?php






require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleEstoqueWebTCC/Classes/Endereco.php';

require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleEstoqueWebTCC/Persistencia/DaoEmpresa.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleEstoqueWebTCC/Persistencia/DaoEndereco.php';

require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleEstoqueWebTCC/Persistencia/Conexao.php';

if(isset($_POST['Estado'])){
    

    
    
     
          

   
    
    
    if (isset($_POST['enviarr'])) {
        
         if ($_POST['bairro'] == null) {
            ?>
                                    <div class="panel-body">
                                        <div class="alert alert-success alert-dismissable">
                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                            INFORME O BAIRRO E OBRIGATORIO.
                                        </div>
                                    </div>          
    
                                    <?php
                                }


                                if ($_POST['rua'] == null) {
                                    ?>
                                    <div class="panel-body">
                                        <div class="alert alert-success alert-dismissable">
                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                            INFORME A RUA E OBRIGATORIO.
                                        </div>
                                    </div>          

                                    <?php
                                }








                                if ($_POST['descricao'] == null) {
                                    ?>
                                    <div class="panel-body">
                                        <div class="alert alert-success alert-dismissable">
                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                            INFORME O TELEFONE E OBRIGATORIO.
                                        </div>
                                    </div>          

                                    <?php
                                }



                                $endereco = new Endereco();

                                $endereco->setId_endereco($_POST['id_endereco']);
                                $endereco->setBairro($_POST['bairro']);
                                $endereco->getCidadee()->setId_cidade($_POST['cidade']);
                                $endereco->setDescricao($_POST['descricao']);
                                $endereco->getEmpresa()->setId_empresa($_POST['id_empresa22']);
                                $endereco->getEstadoo()->setId($_POST['Estado']);
                                $endereco->setNumero($_POST['numero']);
                                $endereco->setRua($_POST['rua']);


                                // $testenome = DaoEmpresa::getEmpresaNome($_POST['nome']);

                               // var_dump($endereco);


                             //   if ($endereco->getId_endereco() <= 0) {
                              //  if ($_SESSION['alterar'] == 1) {
                              //      echo '<h1>Teste Alterar</h1>';
                                    //if ($testenome == $_POST['nome']) {
                                    //  $_SESSION['NomeExistente'] = $testenome;
                                    //} else {

                                //    $retorno = DaoEndereco::inserir($endereco);
                                    // }
                               // } else {


                                    //if ($testenome == $_POST['nome']) {
                                    //   $_SESSION['NomeExistente'] = $testenome;
                                    // } else {
                                  //  var_dump($endereco);
                                    $retorno = DaoEndereco::alterar($endereco);
                                     header('Location: /ControleEstoqueWebTCC/CadEmpresa.php');
                                    //   unset( $_SESSION['alterar']);
                                    // }
                                }else{
                                        $endereco = new Endereco();
    
    
                                        $bairro = $_POST['bairro'];
                                       // $endereco->setId_endereco($_POST['id_endereco']);
                                        //$endereco->getCidadee()->setId_cidade($_POST['cidade']);
                                        $descricao = $_POST['descricao'];
                                       // $endereco->getEmpresa()->setId_empresa($_SESSION['id_empresa']); 
                                        //$endereco->getEstadoo()->setId($_POST['Estado']);
                                        $Estado = $_POST['Estado'];
                                        $numero = $_POST['numero'];
                                        //$endereco->setRua($_POST['rua']);
                                        $rua = $_POST['rua'];
                                       // $_SESSION['endereco'] = $endereco;

                                       // $_SESSION['1'] = 2;

                                     //   serialize( $_SESSION['endereco']);
                                    
                                    
                                     header('Location: /ControleEstoqueWebTCC/CadEndereco2.php?sp&Bairro='.$bairro.'&ruaa='.$rua.'&numero='.$numero.'&descricao='.$descricao.'&estado='.$Estado.'');
                                }



//                                $endereco->setId_endereco(0);
//                                $endereco->setBairro("");
//                                $endereco->getCidadee()->setId_cidade(NULL);
//                                $endereco->setDescricao("");
//                                $endereco->getEmpresa()->setId_empresa(NULL);
//                                $endereco->getEstadoo()->setId(NULL);
//                                $endereco->setNumero("");
//                                $endereco->setRua("");
//
//                                $_SESSION['Excluir'] = 0;
//                                $_SESSION['salvar'] = 0;
                                //     unset($_SESSION['SelecaoEstado']);
                           


        
 }
 
  
 
 


    
      


 ?>
 
    </head>
 
   
    <body>
           <?php
   // var_dump($endereco);
    
    if(isset($_POST['Estado'])){
    echo '<br>';
    echo  $_SESSION['SelecaoEstado2'];
    echo '<br>';
    echo  $_SESSION['rua'];
    echo '<br>';
    echo '1234';
   // echo $_POST['rua'];
    echo '<br>';
 // echo  $_SESSION['endereco']->getEstadoo()->getId();
//  echo  $_SESSION['endereco']->getRua();
//  echo  $_SESSION['endereco']->getRua();
//  echo  $_SESSION['endereco']->getRua();
//  echo  $_SESSION['endereco']->getRua();
//  echo  $_SESSION['endereco']->getRua();
    }
    ?> 
    </body>
</html>