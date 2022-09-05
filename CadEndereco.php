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

        <title>SISTEMA ASSIS - CADASTRO DE CIDADE</title>

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
                    <a class="navbar-brand" href="CadEndereco2.php">Voltar</a>
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
                            <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                            </li>
                            <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                            </li>
                            <li class="divider"></li>
                            <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                            </li>
                        </ul>
                        <!-- /.dropdown-user -->
                    </li>
                    <!-- /.dropdown -->
                </ul>
                <!-- /.navbar-top-links -->

               
                <!-- /.navbar-static-side -->
            </nav>


            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-12">
                        <br>
                        <br>
<!--                        <h1 class="page-header">SISTEMA ASSIS</h1>-->
                    </div>


                </div>
                <!-- /.row -->
                <!-- INICIO -->
                
                <?php 
                            require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleEstoqueWebTCC/Classes/Empresa.php';
                            require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleEstoqueWebTCC/Classes/Endereco.php';
                            require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleEstoqueWebTCC/Classes/Estadoo.php';
                            require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleEstoqueWebTCC/Classes/Cidadee.php';

                            require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleEstoqueWebTCC/Persistencia/DaoEndereco.php';
                            require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleEstoqueWebTCC/Persistencia/DaoEstadoo.php';
                            require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleEstoqueWebTCC/Persistencia/DaoCidadee.php';

                            require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleEstoqueWebTCC/Persistencia/Conexao.php';
                            
                            
                            echo $_SESSION['id_empresaa'];
                            
                              if (isset($_GET['op'])) {


                                $operacao = $_GET['op'];
                                if ($operacao == "alterar") {
                                    $_SESSION['alterar'] = 'alterar';
                                    unset($_SESSION['Excluir']);
                                    unset($_SESSION['salvar']);
                                   
                                    $endereco = DaoEndereco::getEndereco($_GET['id']);
                                    
                                    $_SESSION['id_endereco'] = $endereco->getId_endereco();
                                    $_SESSION['bairro']      = $endereco->getBairro();
                                    $_SESSION['rua']         = $endereco->getRua();
                                    $_SESSION['numero']      = $endereco->getNumero();
                                    $_SESSION['descricao']   = $endereco->getDescricao();
                                    
                                    
                                    
//                                    echo '<script type="text/javascript">';
//                                    echo 'alert("' . var_dump($departamento) . '")';
//
//                                    echo '</script>';
                                }
                            }
                            
                            
                            
                            
                            
                            
                               if(isset($_GET['Endereco'])){
                                
                                $_SESSION['id_empresa'] = $_GET['Endereco'];
                                //echo '<h1>Empresa</h1>';
                                //echo $_SESSION['id_empresa'];
                                //var_dump($_SESSION['id_empresa']);
                                
                            }
                            
                            if(isset($_GET['Endereco'])){     
                              $vEndereco = DaoEndereco::getEnderecoEmpresa( $_SESSION['id_empresa']);
                                //$vEndereco = DaoEndereco::getTodos();
                // var_dump($vEndereco);
                            }
                            else
                            {
                                $vEndereco = 0;
                                
                            }
                
                if($vEndereco != NULL || isset($_SESSION['alterar'])){
                ?>
                
                
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                CADASTRO DE ENDEREÇO
                            </div>
         

                            <?php
                            
                            
                         

                            $endereco = new Endereco();
                            // $vMC = DaoMaterialConsumo::getTodos();
                            $sql = "";

                            if (isset($_POST['enviar'])) {

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





                                $endereco->setId_endereco($_POST['id_endereco']);
                                $endereco->setBairro($_POST['bairro']);
                                $endereco->getCidadee()->setId_cidade($_POST['cidade']);
                                $endereco->setDescricao($_POST['descricao']);
                               
                                
                                if(isset($_SESSION['alterar']))
                                {
                                  $endereco->getEmpresa()->setId_empresa($_SESSION['id_empresaa']); 
                                  $endereco->getEstadoo()->setId($_POST['Estado']);
                                }
                                else
                                {
                                  $endereco->getEstadoo()->setId($_SESSION['SelecaoEstado']);  
                                  $endereco->getEmpresa()->setId_empresa( $_SESSION['id_empresaa']); 
                                }
                                $endereco->setNumero($_POST['numero']);
                                $endereco->setRua($_POST['rua']);
                                

                               // $testenome = DaoEmpresa::getEmpresaNome($_POST['nome']);




                                if ($endereco->getId_endereco() <= 0) {
                                    
                                        $retorno = DaoEndereco::inserir($endereco);
                                        var_dump($endereco);
                                 
                                } else {


                            
                                   var_dump($endereco);
                                   $retorno = DaoEndereco::alterar($endereco);
                                  
                                }



                                $endereco->setId_endereco(0);
                                $endereco->setBairro("");
                                $endereco->getCidadee()->setId_cidade(NULL);
                                $endereco->setDescricao("");
                                $endereco->getEmpresa()->setId_empresa(NULL);
                                $endereco->getEstadoo()->setId(NULL);
                                $endereco->setNumero("");
                                $endereco->setRua("");
                                
                                
                                unset($_SESSION['SelecaoEstado']);
                            }
                            
                         

               
                            
                            
                             if (isset($_GET['op'])) {
                             
                                $operacao = $_GET['op'];
                                if ($operacao == "Excluir") {
                                    $_SESSION['Excluir'] = "Excluir";
                                    unset($_SESSION['salvar']);
                                   
                                    $endereco = DaoEndereco::getEndereco($_GET['id']);
                                   
                                }else{
                                    
                                     
                                }
                            }
                            
                            
                             if (isset($_POST['Excluir'])) 
                            {
                                 
                              
                                $retorno = DaoEndereco::excluir($_POST['id_endereco']);

                                if ($retorno == 1) {

                                    echo '<script type="text/javascript">
                                                                  alert("Endereço Excluida com sucesso!!!");
                                                               </script>';
                                } else {

                                    echo '<script type="text/javascript">
                                                                  alert("Endereço não pode ser excluida, pois está vinculada a um empresa !!!");
                                                          </script>';
                                }
                                
                                
                                unset($_SESSION['Excluir']);
                            }
                            
                            
                            
                             if (isset($_POST['RESET'])) {
                                 
                                $endereco->setId_endereco(0);
                                $endereco->setBairro("");
                                $endereco->getCidadee()->setId(NULL);
                                $endereco->setDescricao("");
                                $endereco->getEmpresa()->setId_empresa(NULL);
                                $endereco->getEstadoo()->setId(NULL);
                                $endereco->setNumero("");
                                $endereco->setRua("");
                                
                                unset($_SESSION['Excluir']);
                                unset($_SESSION['salvar']);
                                  
                                    $_SESSION['Excluir'] = "";
                                  
                                    unset($_SESSION['Excluir']);
                                
                                
                             }
                             
                             if(isset($_GET['SelecaoEstado'])){
                                 
                                 $_SESSION['SelecaoEstado'] = $_GET['SelecaoEstado'];
                                 
                                 echo '<h1>'.$_SESSION['SelecaoEstado'].'</h1>';
                                 $endereco->getEstadoo()->setId($_GET['SelecaoEstado']);
    //                             $endereco->getBairro($_GET['Bairro']);
                                 
                             }
                            
                            
                            
                            
                            ?>
                           
                                                    
                            <div class="panel-body">
                                <!--                                INICIO  div formulario-->
                                <?php
                                if(isset($_SESSION['alterar'])){
                                ?>
                                <div class="row">
                                     <form role="form" action="CadEndereco.php" method="post">
                                    <div class="panel-body">
                                         
                                           <div class="col-lg-6">
<!--                                            ---------------------------------INICIO--------------------------------------->
                                                 <?php  
                                                  $vEstado = DaoEstadoo::getTodos();
                                                
                                                  
                                                 // var_dump($vEstado);
                                                //  var_dump($vCidadee);  
                                                  ?>
                                                    <?php if(isset($_SESSION['SelecaoEstado']) ||   $_SESSION['alterar1'] = 1) {
                                                   
                                                         if (isset($_GET['op'])) {


                                                            $operacao = $_GET['op'];
                                                            if ($operacao == "alterar") {
                                                                $_SESSION['alterar'] = 'alterar';
                                                                unset($_SESSION['Excluir']);
                                                                unset($_SESSION['salvar']);

                                                                $endereco = DaoEndereco::getEndereco($_GET['id']);
                                                                echo '<script type="text/javascript">';
                                                                echo 'alert("' . var_dump($departamento) . '")';

                                                                echo '</script>';
                                                            }
                                                        }
                                                   ?> 

                                                    <label>Estado: </label>
                                                    <select name="Estado" class="form-control" onchange="location = this.value;">
                                                    <?php
                                                    
    
                                                    if(! isset($_GET['SelecaoEstado'])){
                                                     echo'<option value="">SELECIONAR</option></a>';  
                                                    }
                                                    
                                                    foreach ($vEstado as $Estadooo) {
                                                        if ($Estadooo->getId() == $endereco->getEstadoo()->getId()){
                                                            echo'<option value="CadEndereco.php?SelecaoEstado=' . $Estadooo->getId() . '" selected=true>' . $Estadooo->getNome() . '</option>';
                                                            
                                                        }
                                                        else{
                                                            echo'<option value="CadEndereco.php?SelecaoEstado=' . $Estadooo->getId() .'">' . $Estadooo->getNome() . '</option></a>';
                                                            
                                                                                                               
                                                     }
                                                    
                                                        }
                                                    
                                                    ?>

                                                   </select> 
<!--                                                     <button type="submit" class="btn btn-default"  name="RESET">RESET</button>-->
                                                    
                                                     
                                                                                                                            
                                            
                                            
                                            
                                            
                                            
<!--                                                     <a>---------------------------------INICIO---------------------------------------</a>-->
                                            
                                            
                 <!--                                            ---------------------------------INICIO--------------------------------------->
                                     
                                                                  
                                         
                                                <div class="form-group">

                                                    <!--                                                    teste-->
<?php
//if (isset($_SESSION['NomeExistente'])) {
//    ?>
<!--                                                        <div class="panel-body">
                                                            <div class="alert alert-success alert-dismissable">
                                                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                                                A Empresa //<?php //echo $_SESSION['NomeExistente']; ?> JA FOI CRIADA.
                                                            </div>
                                                        </div>-->

    <?php
//    unset($_SESSION['NomeExistente']);
//}
?>

                                                    <!--                                                    teste-->
                             
                                                 
                                                    
                                                    
                                                    <p class="help-block">.</p>
                                                    <label>Cidade:</label>
<!--                                                    <input class="form-control" value="<?php //echo $endereco->getCidadee(); ?>" type ="text" name="cidade">-->
                                                    
                                                    
                                               
                                                    
                                                    
                                                   
                                                    <select name="cidade" class="form-control" >
                                                    <?php
                                                    
                                                    if($_GET['op'] == "alterar" ){
                                                     
                                                         $vCidadee = DaoCidadee::getCidadePorEstado($endereco->getEstadoo()->getId());
                                                    }else{
                                                      $vCidadee = DaoCidadee::getCidadePorEstado($_SESSION['SelecaoEstado']);
                                                    }

                                                    foreach ($vCidadee as $Cidadess) {
                                                        
                                                        if ($Cidadess->getId_cidade() == $endereco->getCidadee()->getId_cidade()){
                                                            echo'<option value="' . $Cidadess->getId_cidade() . '" selected=true>' . $Cidadess->getNome() . '</option>';
                                                        }
                                                        else{
                                                            echo'<option value="' . $Cidadess->getId_cidade() . '">' . $Cidadess->getNome() . '</option>';
                                                       }
                                                        
                                                    }
                                                    
                                                    ?>

                                                   </select> 
                                                   
                                                    
                                                    <?php
                                               }else{
                                                    ?>
                                                     <fieldset disabled>
                                                    <select name="cidade" class="form-control" >
                                                        <option>CIDADE</option>
                                                    </select>
                                                    
                                                   </fieldset>

                                                    
                                                    
                                                    
                                                    <?php
                                               }
                                                    ?>
                                                    
                                                    
   <?php   
//   $id_Estado = 3;
//  echo '<h1>'.$id_Estado.' <--antes</h1>';
//   $id_Estado =  "<script>window.document.write(id_estado)</script>"; 
//  echo '<h1>'.$id_Estado.' <--depois</h1>';
//   echo '<h1>teste</h1>';
   ?>
                                         <?php          $_SESSION['id_endereco'] = $endereco->getId_endereco();
                                                        $_SESSION['bairro']      = $endereco->getBairro();
                                                        $_SESSION['rua']         = $endereco->getRua();
                                                        $_SESSION['numero']      = $endereco->getNumero();
                                                        $_SESSION['descricao']   = $endereco->getDescricao();
                                                        ?>
                                                        
                                                    <?php
                                                    if(isset($_SESSION['alterar'])){
                                                    ?>    
                                                    <!--<input class="form-control" value="<?php //echo $endereco->getEmpresa()->getId_empresa(); ?>" type ="hidden" name="id_empresa2" >-->
                                                    <input class="form-control" value="<?php echo $endereco->getId_endereco(); ?>" type ="hidden" name="id_endereco" >
                                                    <p class="help-block">.</p>
                                                    <label>Bairro</label>
                                                    <?php //$endereco->setBairro($_SESSION['bairro']); ?>
                                                    <input class="form-control" value="<?php echo $endereco->getBairro(); ?>" type ="text" name="bairro">
                                                    <?php $_SESSION['bairro'] = $endereco->getBairro(); ?>
                                                    <p class="help-block">.</p>
                                                    <label>Rua</label>
                                                    <input class="form-control" value="<?php echo $endereco->getRua(); ?>" type ="text" name="rua">
                                                    <p class="help-block">.</p>
                                                    <label>Numero</label>
                                                    <input class="form-control" value="<?php echo $endereco->getNumero(); ?>" type ="text" name="numero">
                                                    <p class="help-block">.</p>
                                                    <label>Informações adicionais</label>
                                                    <input class="form-control" value="<?php echo $endereco->getDescricao(); ?>" type ="text" name="descricao">
                                                    <p class="help-block">.</p>
                                                    <?php
                                                    }
                                                    ?> 
                                                 
                                                </div>


                                               
                           

                                                <button type="submit" class="btn btn-default"  name="enviar">SALVAR</button>

                                      </form>
                                            </div>
                                            <!-- /.col-lg-6 (nested) -->
                                            <div class="col-lg-6">
                                                <!--                                    <h1>Disabled Form States</h1>-->




                                            </div>
                             
                                            
                                            
                                            

                                </div>
                                
                                <?php
                                }
                                ?>
<!--                                Fim div formulario-->

                                <br>
                                <br>
                                <br>
                                <br>



                                <?PHP
// REMOVER AQUI ------------------------------------------------------
                                   
                                  

                              $vEndereco = DaoEndereco::getEnderecoEmpresa( $_SESSION['id_empresaa']);
//                                //$vEndereco = DaoEndereco::getTodos();
//                                var_dump($vEndereco);
                                echo '  <div class="panel panel-default">';
                                echo ' <div class="panel-heading">
                                   LISTA DE ENDEREÇOS
                                    </div>';
                                echo '<div class="panel-body">';
                                echo '<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-ENDERECO">';
                                echo ' <thead>';
                                echo '<tr>';
                                echo '<th>Codigo</th>'
                                . '<th>Descrição</th>'
                                . '<th>Estado</th>'
                                . '<th>Cidade</th>'
                                . '<th>Bairro</th>'
                                . '<th>Rua</th>'
                                . '<th>Numero</th>'
                                . '<th>Ações</th>';
                                echo '</tr>';
                                echo ' </thead>';
                                echo '<tbody>';
                                foreach ($vEndereco as $Enderecoo) {

                                    echo '<tr>';
                                    echo "<td>" . $Enderecoo->getId_endereco()."</td>";
                                    echo "<td>" . $Enderecoo->getDescricao() . "</td>";
                                    echo "<td>" . $Enderecoo->getEstadoo()->getNome() . "</td>";
                                    echo "<td>" . $Enderecoo->getCidadee()->getNome() . "</td>";
                                    echo "<td>" . $Enderecoo->getBairro() . "</td>";
                                    echo "<td>" . $Enderecoo->getRua() . "</td>";
                                    echo "<td>" . $Enderecoo->getNumero() . "</td>";
                                   
                                    ?>
                                    <td>
                                    <?php
                                  // echo "<a type='button' class='btn btn-outline btn-warning'  data-toggle='modal' href='CadEmpresa.php?op=alterar&id=" . $Empresaa->getId_empresa() . "'>Alterar</a>";

//                                  
                                    ?>


                                        <form  action="CadEndereco.php" method="post">




    <?php
     echo "<a type='button' class='btn btn-outline btn-warning'  data-toggle='modal' href='CadEndereco.php?op=alterar&id=" . $Enderecoo->getId_endereco() . "'>Alterar</a>";
     echo "<a type='button' class='btn btn-outline btn-danger'  data-toggle='Excluir' href='CadEndereco.php?op=Excluir&id=" . $Enderecoo->getId_endereco() . "'>Excluir</a>";
      // echo "<a type='button' class='btn btn-outline btn-warning'  data-toggle='modal' href='CadCidade.php?op=alterar&id=" . $Cidadee->getId_cidade() . "'>Alterar</a>";
  
     ?>
                                           
    <?php echo $Enderecoo->getId_endereco(); ?>
                                            </td>

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
                <!-- FIM -->
                
               <?php
                                    //   unset($_SESSION['id_empresa']);
                }else{
                      if(isset($_GET['Endereco']))
                     {
                        echo '<h1>EMPRESA NÃO POSSUI ENDEREÇO !!!</h1>';
                     }
                      else 
                     {
                        echo '<h1>SELECIONE EMPRESA PARA VERIFICAR ENDEREÇO !!!</h1>';  
                     }
                }
               ?>

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
                    $('#dataTables-ENDERECO').DataTable({
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