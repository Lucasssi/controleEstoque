<?php
session_start();

      require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleEstoqueWebTCC/Persistencia/DaoMaterialConsumo.php';
      require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleEstoqueWebTCC/Classes/MaterialConsumo.php';

  if (isset($_POST['enviar'])) {
      
            $_SESSION['TESTEDIA'] = $_POST['dia'];
            $dia = $_POST['dia'];
            $mes = $_POST['mes'];
            $ano = $_POST['ano'];
            
            
            
            if($ano == "0000" || $dia == "00" || $mes == "00")
                {
                $data = "0000/00/00";
                
                }else{
                    
                $data = "".$ano."-".$mes."-".$dia."";
                }
      

               $nf = $_SESSION['id_NotaFiscal'];
               $codigo = $_SESSION['codigoProduto4'];
               $idAlmox = $_SESSION['id_almox6'];

      
       $testeCodigo = DaoMaterialConsumo::VerificarCodigo($_SESSION['codigoProduto4']);
               
               if($testeCodigo == $_SESSION['codigoProduto4'])
               {
                  // echo '<h1>Não aparecer</h1>';
               }
               else
               {
             // DaoMaterialConsumo::inserirCodigo($_SESSION['id_almox6'], $_SESSION['codigoProduto4'] , $_SESSION['id_NotaFiscal']);
              DaoMaterialConsumo::inserir3($idAlmox, $codigo, $_POST['nf']);
                  // echo '<h1> aparecer</h1>';
               }
//               echo '<br>';
//               echo $_SESSION['id_NotaFiscal'];
//               var_dump($_SESSION['id_NotaFiscal']);
//               echo '<br>';
//               echo '<br>';
//               echo $_SESSION['codigoProduto4'];
//               echo '<br>';
//               echo '<br>';
//               echo $_SESSION['id_almox6'];
//               echo '<br>  id_nf --> ';
//               echo $_POST['nf'];
//               echo '<br>';
           

      
      
      $MC = new MaterialConsumo; 
      
      var_dump($data);
      $_SESSION['TESTEDATA'] = $data;
      
            $MC->setNome($_POST['nome']);
            $MC->setDescricao($_POST['descricao']);
            $MC->getId_UM()->setId_UM($_POST['UM']);
            $MC->getId_tipo()->setId_tipo($_POST['tipo']);
            $MC->getCategoria()->setId($_POST['cat']);
            $MC->setCodigo($_SESSION['codigoProduto4']);
            $MC->setValidade($data);
            
//            echo '<br>';
//            var_dump($MC);
//            echo '<br>';
//            
//            echo '<br>';
        //    $retorno =  DaoMaterialConsumo::InserirDados($MC);
//            echo '<br>';
//             var_dump($retorno);
//            echo '<br>';
      
     
            
              
            $retorno =  DaoMaterialConsumo::InserirDados($MC);
            
            
            if($_POST['UM'] == 2)
                {
                
                 header("location: CadProduto5.php");
                }
                else
                {
                 header("location: CadProduto6.php");
                }
     
            
        }
        
        
        
            if (isset($_POST['enviarUnidade'])) {
                
            $MC = new MaterialConsumo; 
            
            $MC->setEstMedUn($_POST['estMedUn']);
            $MC->setEstMinUn($_POST['estMinUn']);
            $MC->setQtd($_POST['qtd']);
            $MC->setCodigo($_SESSION['codigoProduto4']);
            
              
            $retorno =  DaoMaterialConsumo::InserirDados3($MC);
            
            
             header("location: VisualizarItemCriados.php");
            
        }
        
        
       if (isset($_POST['enviarCaixa'])) {
           
            $MC = new MaterialConsumo; 
            
            $MC->setEstMedCx($_POST['estMedCx']);
            $MC->setEstMinCx($_POST['estMinCx']);
            $MC->setCx($_POST['cx']);
            $MC->setCxUn($_POST['cxUn']);
            $MC->setQtd($_POST['cx'] * $_POST['cxUn']);
            $MC->setCodigo($_SESSION['codigoProduto4']);
            
              
            $retorno =  DaoMaterialConsumo::InserirDados2($MC);
            
            
             header("location: VisualizarItemCriados.php");
            
        }
        
        
        
        if (isset($_POST['FinalizarCadastro'])) 
        {
            
            DaoMaterialConsumo::FinalizarPedido($_POST['id_notaFiscal']);
            DaoMaterialConsumo::EntradaNotaFiscal($_POST['id_notaFiscal']);
            
            header("location: VisualizarItemCriados.php?Fim");
        }
        
        
        
        
        
        
    
        
        
        
        
        ?>
