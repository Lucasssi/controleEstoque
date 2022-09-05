<!DOCTYPE html>

<?php


session_start();
$_SESSION['login'];
if($_SESSION['login'] == "ativo"){
    


?>

<html lang="pt-br">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>CADASTRO DE CATEGORIA</title>

        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- MetisMenu CSS -->
        <link href="css/metisMenu.min.css" rel="stylesheet">
        <link href="css/dataTables.bootstrap.css" rel="stylesheet">
        <link href="css/dataTables.responsive.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="css/sb-admin-2.css" rel="stylesheet">
        <link href="css/sb-admin-2.min.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">


        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>

    <body>

        <div id="wrapper">

            <!-- Navigation -->
            <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="CadMateirlaComsumo.php">VOLTAR</a>
                </div>
                <!-- /.navbar-header -->

                <ul class="nav navbar-top-links navbar-right">
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-envelope fa-fw"></i> <i class="fa fa-caret-down"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-messages">
                            <li>
                                <a href="#">
                                    <div>
                                        <strong>John Smith</strong>
                                        <span class="pull-right text-muted">
                                            <em>Yesterday</em>
                                        </span>
                                    </div>
                                    <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <strong>John Smith</strong>
                                        <span class="pull-right text-muted">
                                            <em>Yesterday</em>
                                        </span>
                                    </div>
                                    <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <strong>John Smith</strong>
                                        <span class="pull-right text-muted">
                                            <em>Yesterday</em>
                                        </span>
                                    </div>
                                    <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a class="text-center" href="#">
                                    <strong>Read All Messages</strong>
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </li>
                        </ul>
                        <!-- /.dropdown-messages -->
                    </li>
                    <!-- /.dropdown -->
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-tasks fa-fw"></i> <i class="fa fa-caret-down"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-tasks">
                            <li>
                                <a href="#">
                                    <div>
                                        <p>
                                            <strong>Task 1</strong>
                                            <span class="pull-right text-muted">40% Complete</span>
                                        </p>
                                        <div class="progress progress-striped active">
                                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                                <span class="sr-only">40% Complete (success)</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <p>
                                            <strong>Task 2</strong>
                                            <span class="pull-right text-muted">20% Complete</span>
                                        </p>
                                        <div class="progress progress-striped active">
                                            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                                <span class="sr-only">20% Complete</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <p>
                                            <strong>Task 3</strong>
                                            <span class="pull-right text-muted">60% Complete</span>
                                        </p>
                                        <div class="progress progress-striped active">
                                            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                                <span class="sr-only">60% Complete (warning)</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <p>
                                            <strong>Task 4</strong>
                                            <span class="pull-right text-muted">80% Complete</span>
                                        </p>
                                        <div class="progress progress-striped active">
                                            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                                <span class="sr-only">80% Complete (danger)</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a class="text-center" href="#">
                                    <strong>See All Tasks</strong>
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </li>
                        </ul>
                        <!-- /.dropdown-tasks -->
                    </li>
                    <!-- /.dropdown -->
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-bell fa-fw"></i> <i class="fa fa-caret-down"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-alerts">
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="fa fa-comment fa-fw"></i> New Comment
                                        <span class="pull-right text-muted small">4 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                        <span class="pull-right text-muted small">12 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="fa fa-envelope fa-fw"></i> Message Sent
                                        <span class="pull-right text-muted small">4 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="fa fa-tasks fa-fw"></i> New Task
                                        <span class="pull-right text-muted small">4 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                        <span class="pull-right text-muted small">4 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a class="text-center" href="#">
                                    <strong>See All Alerts</strong>
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </li>
                        </ul>
                        <!-- /.dropdown-alerts -->
                    </li>
                    <!-- /.dropdown -->
                     <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i><?php echo $_SESSION['nome'] ?></a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Configurações</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="Sair.php"><i class="fa fa-sign-out fa-fw"></i>Sair</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                     </li>
                    <!-- /.dropdown -->
                </ul>
               
            </nav>


            <div class="col-lg-12">
                <div class="row">
<!--                    <div class="col-lg-12">
                        <h1 class="page-header"></h1>
                    </div>-->

<br>
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                CADASTRO DE CATEGORIA
                            </div>
         

                            <?php
                                 
       require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleEstoqueWebTCC/Classes/Categoria.php';

       require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleEstoqueWebTCC/Persistencia/DaoCategoria.php';

      // require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleEstoqueWebTCC/Persistencia/Conexao.php';
                            
                            
                            
     

     
        $cat = new Categoria();
        // $vMC = DaoMaterialConsumo::getTodos();
        $sql = "";

        if (isset($_POST['enviar'])) {
            
           // $curso->setId_curso(12);
            $cat->setId($_POST['id']);
            $cat->setNome($_POST['nome']);
            $cat->setEstMin($_POST['estMin']);
            $cat->setEstMed($_POST['estMed']);
            $cat->setComp($_POST['comp']);

         //   var_dump($curso);;

            if ($cat->getId() <= 0) 
            {
            $retorno = DaoCategoria::inserir($cat);
            } 
            else 
            {
            $retorno = DaoCategoria::alterar($cat);
            }

            $cat->setId(0);
            $cat->setNome("");
            $cat->setEstMin("");
            $cat->setEstMed("");
            $cat->setComp("");
        }
        
    
        ?>
                            
                           
                            <div class="panel-body">
                                <div class="row">
                                    <div class="panel-body">
                                        <form role="form" action="CadCategoria.php" method="post">
                                            <div class="col-lg-6">

                                                <div class="form-group">

                                                    <!--                                                    teste-->
<?php
if (isset($_SESSION['NomeExistente'])) {
    ?>
                                                        <div class="panel-body">
                                                            <div class="alert alert-success alert-dismissable">
                                                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                                                A Categoria <?php echo $_SESSION['NomeExistente']; ?> JA FOI CRIADA.
                                                            </div>
                                                        </div>

    <?php
    unset($_SESSION['NomeExistente']);
}

    if (isset($_GET['op'])) {
            $operacao = $_GET['op'];
            if ($operacao == "alterar") {
                $cat = DaoCategoria::getCategoria($_GET['id']);
            }
        }
?>

                                                    <!--                                                    teste-->



                                                    <label>NOME:</label>
<!--                                                <input class="form-control" value="<?php //$curso->getId_curso(); ?>" type ="hidden" name="id_cursoo">-->
                                                    <input class="form-control" value="<?php  echo $cat->getId(); ?>" type ="hidden" name="id">
                                                    <input class="form-control" value="<?php echo $cat->getNome(); ?>" type ="text" name="nome">
                                                    <p class="help-block">LAPÍS, CANETA ENTRE OUTROS.</p>
                                                     <label>ESTOQUE MINIMO:</label>
                                                     <input class="form-control" value="<?php echo $cat->getEstMin(); ?>" type ="number" name="estMin">
                                                    <p class="help-block">DEVE-SE COLOCAR QUANTIDADE DE ESTOQUE MINIMO, QUANDO ATIGIDA REALIZAR NOVA COMPRAR PARA NÃO HAVER FALTA DE PRODUTO.</p>
                                                    <p class="help-block">CONSIDERANTO TEMPO DE REALIZAÇÃO DE COMPRAR E ENTREGA DE PRODUTO PARA REABASTECER ESTOQUE.</p>
                                                     <label>ESTOQUE MEDIO:</label>
                                                     <input class="form-control" value="<?php echo $cat->getEstMed(); ?>" type ="number" name="estMed">
                                                    <p class="help-block">O VALOR A SER COLOCADO NO ESTOQUE MÉDIO E A SOMA DO ESTOQUE MÍNIMA MAIS A METADE DO LOTE DE COMPRA.</p>
                                                     <label>COMPRA:</label>
                                                     <input class="form-control" value="<?php echo $cat->getComp(); ?>" type ="number" name="comp">
                                                    <p class="help-block">VALOR DE SUGERIDO PARA A PROXIMA COMPRA.</p>
                                                   
                                                  
                                                    
                                                    
                                                    
                                                     <div>

                                                         
                         
                                                         
                                                         
                                                         
                                                         
                                                         
                                                         
                                                         
                        </div>
                                                    
                                                    
                                                    
                                                    
                                                    
                                                </div>


<?php   

if (isset($_GET['op'])) {
    $operacao = $_GET['op'];
    if ($operacao == "remover") {
        $retorno = DaoCategoria::excluir($_GET['id']);
    }
}

if (isset($_GET['op'])) {
    $operacao = $_GET['op'];
    if ($operacao == "remover") {
       // $retorno = DaoFuncionario::excluir($_GET['id']);
        
       echo '<a class="btn btn-default" data-toggle="modal" data-target="#myModal" tabindex="6"> EXCLUIR </a>';
        
    }
}


if (isset($_GET['op'])) 
             {
              $operacao = $_GET['op'];
                  if ($operacao == "Excluir") 
                  {

                 

                  ?>
                       <a class="btn btn-default" data-toggle="modal" data-target="#myModal" tabindex="6"> EXCLUIR </a>
                  <?php
                  }
                  
              } 
                  
                  if (isset($_GET['op'])) 
                      {
                               $operacao = $_GET['op'];
                               if ($operacao == "alterar") {
                                   ?>
                               <a class="btn btn-default" data-toggle="modal" data-target="#myModal" tabindex="6"> ALTERAR </a>
                               <?php
                           }
                       } else 
                           {
                           $_SESSION['salvar'] = "salvar";
                           ?>
                          
                           <a class="btn btn-default" data-toggle="modal" data-target="#myModal" tabindex="6"> SALVAR </a>
                           
                     <?PHP }   ?>

                                               
                           

                                                <button type="submit" class="btn btn-default"  name="RESET">RESET</button>

<!--                                         </form>-->
                                            </div>
                                            <!-- /.col-lg-6 (nested) -->
                                            <div class="col-lg-6">
                                                <!--                                    <h1>Disabled Form States</h1>-->




                                            </div>
                                            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
<?php
if (isset($_GET['op'])) {
    $operacao = $_GET['op'];
    if ($operacao == "alterar") {
        ?>
                                                                    <h4 class="modal-title" id="myModalLabel">DESEJA ALTERAR DADOS DE CATEGORIA ?</h4>

                                                                    <?php
                                                                }
                                                                
                                                            }
                                                            
                                                            if(isset($_SESSION['Excluir'])) {
                                                                ?>
                                                                <h4 class="modal-title" id="myModalLabel">DESEJA EXCLUIR CATEGORIA ?</h4>     
                                                                <?php
                                                            } 
                                                            
                                                            if(isset($_SESSION['salvar']))
                                                                { 
                                                                    ?>

                                                                    <h4 class="modal-title" id="myModalLabel">DESEJA ADICIONAR NOVA CATEGORIA ?</h4>     

                                                          <?php }
                                                            ?>
                                                        </div>
                                                        <!--                                        <div class="modal-body">
                                                                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                                                                                </div>-->
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-default" data-dismiss="modal">NÃO</button>
                                                            <!--                                            <button type="button" class="btn btn-primary">Save changes</button>-->
                                                            
                                                            <?PHP
                                                            if(isset($_SESSION['Excluir']))
                                                                {
                                                                ?>
                                                                     <button type="submit" class="btn btn-default"   name="Excluir"  >EXCLUIR</button>
                                                                    <?PHP
                                                                }else if (isset ($_SESSION['salvar'])){
                                                                    
                                                                    ?>
                                                                      <button type="submit" class="btn btn-default"   name="enviar"  >SIM</button>
                                                                        <?php
                                                                } if (isset($_SESSION['alterar'])){
                                                                    ?>
                                                                         <button type="submit" class="btn btn-default"   name="enviar"  >ALTERAR</button>
                                                                        <?php
                                                                }
                                                            ?>
                                                           
                                                        </div>
                                                    </div>
                                                    <!-- /.modal-content -->
                                                </div>
                                                <!-- /.modal-dialog -->
                                            </div>
                                            
                                            
                                            
<!-- TESTE PARA EXCLUIR CIDADE - INICIO -->

<!-- <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
<?php
//if (isset($_GET['op'])) {
//    $operacao = $_GET['op'];
//    if ($operacao == "alterar") {
//        ?>
                                                                    <h4 class="modal-title" id="myModalLabel">DESEJA ALTERAR NOME DA CIDADE ?</h4>

                                                                    <?php
                                                            //    } else {
                                                                    ?>

                                                                    <h4 class="modal-title" id="myModalLabel">DESEJA ADICIONAR NOVA CIDADE ?</h4>     

                                                                    <?php
                                                         //       }
                                                           // } else {
                                                                ?>
                                                                <h4 class="modal-title" id="myModalLabel">DESEJA ADICIONAR NOVA CIDADE ?</h4>     
                                                                <?php
                                                            //}
                                                            ?>
                                                        </div>
                                                                                                <div class="modal-body">
                                                                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                                                                                </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-default" data-dismiss="modal">NÃO</button>
                                                                                                        <button type="button" class="btn btn-primary">Save changes</button>
                                                            <button type="submit" class="btn btn-default"   name="enviar"  >SIM</button>
                                                        </div>
                                                    </div>
                                                     /.modal-content 
                                                </div>
                                                 /.modal-dialog 
                                            </div>-->




<!-- TESTE PARA EXCLUIR CIDADE - FIM -->




                                        </form>

                                        <!--                    verificar      <div class="panel-body">-->
                                        <!-- Button trigger modal -->

                                        <!-- Modal -->


                                        <!-- /.col-lg-6 (nested) -->
                                    </div>
                                    <!-- /.row (nested) -->
                                </div>

                                <br>
                                <br>
                                <br>
                                <br>
<?php
//if (isset($_GET['op'])) {
//    
//    
//         $operacao = $_GET['op'];
//         if ($operacao == "Excluir")
//             {                  
//           ?>
<!--                    <SCRIPT LANGUAGE="JavaScript" TYPE="text/javascript">
                       
                       decisao = confirm("Deseja Excluir Cidade ?");
                     
                     if (decisao)
                     {
                         //decisao = "1234567890123456789012345678901234567890";
                         decisao = "1";
                        
                   
                       alert ("Cidade será Excluida !!!  ");
                         
                     
                     } 
                     else 
                     {
                        //decisao = "0234567890123456789012345678901234567890";
                        decisao = "0";
                       
                       
                        alert ("Operação cancelada !!!  ");
                        
                     }
                     
                   </SCRIPT>-->
                   
                       <?php
//                 
//                       
//                      
//                       
//                     $decisao1 =  "<script>window.document.write(decisao)</script>";
//              
//                    
//                      
//                      echo $decisao1;
//                      
//                     // $valor = $decisao1;
////                      echo '<br>';
////                      echo $valor;
////                       echo '<br>';
////                      echo '<br >deci1';
////                      echo $decisao1;
////                       echo '<br>';
////                     
////                       echo '<br>';
////                       $teste = "teste123";
////                      var_dump($valor);
////                      echo '<br>';
////                       var_dump($valor);
////                      echo '<br>';
////                      var_dump($teste);
////                       echo '<br>aa';
////                      print_r($valor);
////                        echo '<br>aa';
////                      //echo strpos($decisao1, 'true');
////                      //echo strrpos($decisao1, 'true'); //Resultado: 8
////                        echo '<br>aa';
////                        
////                      $inteiro = substr($valor, 22, 32);
////                      $inteiro =  ltrim($valor);
////                       echo '<br>aa';
////                      echo $inteiro;
////                       echo '<br>aa<br>';
////                       var_dump($inteiro);
////                       echo '<br>sessnão inteiro<br>';
////                      $_SESSION['inteiro'] = $inteiro;
////                      var_dump($_SESSION['inteiro']);
////                      
//                        
//                      
//                      
//                      
//                      // false, true
//                      
//                        if($decisao1 == "1"){
//                         
//                         $retorno = 0;
//                         $retorno = DaoCidade::excluir($_GET['id']);
//                         
//                          if ($retorno == 1) {
//                              
//                              echo '<script type="text/javascript">
//                                      alert("Cidade Excluida com sucesso!!!");
//                                   </script>';
//                              
//                              
//                          }else{
//                           
//                                   echo '<script type="text/javascript">
//                                      alert("Cidade não pode ser escluida, pois está vinculada a endereço de empresa !!!");
//                              </script>';
//                              
//                              
//                              
//                          }
//         
//                     
//
//             
//             }    
             
                        
                          
                          
//                          if($decisao == 'false'){
//                              
//                               echo '<script type="text/javascript">
//                                      alert("Cidade não pode ser escluida, pois está vinculada a emdereço de empresa !!!");
//                              </script>';
//                              
//                          }
                          
//                      }
             
  



  
//}
?>


                                <?PHP
// REMOVER AQUI ------------------------------------------------------



                         $vCAT = DaoCategoria::getTodos();
                          
                                echo '  <div class="panel panel-default">';
                                echo ' <div class="panel-heading">
                                   LISTA DE CATEGORIA
                                    </div>';
                                echo '<div class="panel-body">';
                                echo '<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-CURSOS">';
                                echo ' <thead>';
                                echo '<tr>';
                                echo '<th>CODIGO</th>'
                                . '<th>NOME</th>'
                                . '<th>ESTOQUE MINIMO</th>'
                                . '<th>ESTOQUE MEDIO</th>'
                                . '<th>PROX. COMPRA</th>'
                                . '<th>AÇÕES</th>';
                                echo '</tr>';
                                echo ' </thead>';
                                echo '<tbody>';
                               foreach ($vCAT as $Categoria) {

                                    echo '<tr>';
                                     echo "<td>" . $Categoria->getId() . "</td>";
                                     echo "<td>" . $Categoria->getNome() . "</td>";
                                     echo "<td>" . $Categoria->getEstMin() . "</td>";
                                     echo "<td>" . $Categoria->getEstMed() . "</td>";
                                     echo "<td>" . $Categoria->getComp() . "</td>";
                                    ?>
                                   <!--<td>-->
                                    <?php
                                   
                                      echo "<td><a href='CadCategoria.php?op=alterar&id=" . $Categoria->getId() . "'> Alterar </a>&nbsp;";
                                      echo "<a href='CadCategoria.php?op=remover&id=" . $Categoria->getId() . "'> Remover </a></td>";
                                    ?>


                                        <form  action="CadCidade.php" method="post">
<!-- inicio de -->
<!--                                            <div class="modal fade" id="Remover" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>


                                                            <h4 class="modal-title" id="myModalLabel">DESEJA EXCLUIR CIDADE ?</h4>     


                                                        </div>

                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-default" data-dismiss="modal">NÃO</button>

                                                            <button type="submit"   class="btn btn-primary btn-sm" name="Remover"  >SIM</button>
                                                        </div>
                                                    </div>
                                                     /.modal-content 
                                                </div>
                                                 /.modal-dialog 
                                            </div>-->

<!-- <input class="form-control" value="<?php //echo $Cidadee->getId_cidade(); ?>" type ="text" name="id_cidadeExcluir" >-->



    <?php
   //---------------teeeeeeeessssste  echo "<a type='button' class='btn btn-outline btn-danger'  data-toggle='Excluir' href='CadCidade.php?op=Excluir&id=" . $Cidadee->getId_cidade() . "'>Excluir</a>";
      // echo "<a type='button' class='btn btn-outline btn-warning'  data-toggle='modal' href='CadCidade.php?op=alterar&id=" . $Cidadee->getId_cidade() . "'>Alterar</a>";
  
     ?>
                                           
    <?php // echo $Cidadee->getId_cidade(); ?>
<!--                                            </td>-->

                                            </tr>

                                        </form>

                                            <?php
                                        }

                                        echo '</tbody>';


                                        echo '</table>';
                                        echo '</div>';
                                        echo '</div>';
                                        ?>

                            </div>
                            <!-- /.panel -->
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /#page-wrapper -->

            </div>
            <!-- /#wrapper -->

            <!-- jQuery -->
            <script src="/ControleEstoqueWebTCC/jquery/jquery.min.js"></script>

            <!-- Bootstrap Core JavaScript -->
            <script src="/ControleEstoqueWebTCC/js/bootstrap.min.js"></script>

            <!-- Metis Menu Plugin JavaScript -->
            <script src="/ControleEstoqueWebTCC/js/metisMenu.min.js"></script>



            <script type="text/javascript" language="javascript" src="/ControleEstoqueWebTCC/jquery/jquery.js"></script>
            <script type="text/javascript" language="javascript" src="/ControleEstoqueWebTCC/jquery/jquery.dataTables.js"></script>

            <!-- Custom Theme JavaScript -->
            <script src="/ControleEstoqueWebTCC/js/sb-admin-2.js"></script>



            <script>
                $(document).ready(function () {
                    $('#dataTables-CURSOS').DataTable({
                        responsive: true,
                        "oLanguage": {
                            "sProcessing": "Aguarde enquanto os dados são carregados ...",
                            "sLengthMenu": "Mostrar _MENU_ registros por pagina",
                            "sZeroRecords": "Nenhum registro correspondente ao criterio encontrado",
                            "sInfoEmtpy": "Exibindo 0 a 0 de 0 registros",
                            "sInfo": "Exibindo de _START_ a _END_ de _TOTAL_ registros",
                            "sInfoFiltered": "",
                            "sSearch": "Procurar",
                            "oPaginate": {
                                "sFirst": "Primeiro",
                                "sPrevious": "Anterior",
                                "sNext": "Próximo",
                                "sLast": "Último"
                            }
                        }


                    });
                });
            </script>


    </body>

</html>

<?php
}else{
    
    header("location: login.php");
    
}

?>
