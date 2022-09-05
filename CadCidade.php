<!DOCTYPE html>

<?php
session_start();
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
                    <a class="navbar-brand" href="index.html">SB Admin v2.0</a>
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

                <div class="navbar-default sidebar" role="navigation">
                    <div class="sidebar-nav navbar-collapse">
                        <ul class="nav" id="side-menu">
                            <li class="sidebar-search">
                                <div class="input-group custom-search-form">
                                    <input type="text" class="form-control" placeholder="Search...">
                                    <span class="input-group-btn">
                                        <button class="btn btn-default" type="button">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </span>
                                </div>
                                <!-- /input-group -->
                            </li>
                            <li>
                                <a href="index.html"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Charts<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="flot.html">Flot Charts</a>
                                    </li>
                                    <li>
                                        <a href="morris.html">Morris.js Charts</a>
                                    </li>
                                </ul>
                                <!-- /.nav-second-level -->
                            </li>
                            <li>
                                <a href="tables.html"><i class="fa fa-table fa-fw"></i> Tables</a>
                            </li>
                            <li>
                                <a href="forms.html"><i class="fa fa-edit fa-fw"></i> Forms</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-wrench fa-fw"></i> UI Elements<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="panels-wells.html">Panels and Wells</a>
                                    </li>
                                    <li>
                                        <a href="buttons.html">Buttons</a>
                                    </li>
                                    <li>
                                        <a href="notifications.html">Notifications</a>
                                    </li>
                                    <li>
                                        <a href="typography.html">Typography</a>
                                    </li>
                                    <li>
                                        <a href="icons.html"> Icons</a>
                                    </li>
                                    <li>
                                        <a href="grid.html">Grid</a>
                                    </li>
                                </ul>
                                <!-- /.nav-second-level -->
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-sitemap fa-fw"></i> Multi-Level Dropdown<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="#">Second Level Item</a>
                                    </li>
                                    <li>
                                        <a href="#">Second Level Item</a>
                                    </li>
                                    <li>
                                        <a href="#">Third Level <span class="fa arrow"></span></a>
                                        <ul class="nav nav-third-level">
                                            <li>
                                                <a href="#">Third Level Item</a>
                                            </li>
                                            <li>
                                                <a href="#">Third Level Item</a>
                                            </li>
                                            <li>
                                                <a href="#">Third Level Item</a>
                                            </li>
                                            <li>
                                                <a href="#">Third Level Item</a>
                                            </li>
                                        </ul>
                                        <!-- /.nav-third-level -->
                                    </li>
                                </ul>
                                <!-- /.nav-second-level -->
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-files-o fa-fw"></i> Sample Pages<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="blank.html">Blank Page</a>
                                    </li>
                                    <li>
                                        <a href="login.html">Login Page</a>
                                    </li>
                                </ul>
                                <!-- /.nav-second-level -->
                            </li>
                        </ul>
                    </div>
                    <!-- /.sidebar-collapse -->
                </div>
                <!-- /.navbar-static-side -->
            </nav>


            <div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">SISTEMA ASSIS</h1>
                    </div>


                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                CADASTRO DE CIDADE
                            </div>
         

                            <?php
                            
                            
                            require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleEstoqueWebTCC/Classes/Cidade.php';

                            require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleEstoqueWebTCC/Persistencia/DaoCidade.php';

                            require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleEstoqueWebTCC/Persistencia/Conexao.php';

                            $cidade = new Cidade();
                            // $vMC = DaoMaterialConsumo::getTodos();
                            $sql = "";

                            if (isset($_POST['enviar'])) {

                                if ($_POST['nome'] == null) {
                                    ?>
                                    <div class="panel-body">
                                        <div class="alert alert-success alert-dismissable">
                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                            INFORME O CAMPO NOME E OBRIGATORIO.
                                        </div>
                                    </div>          

                                    <?php
                                }





                                $cidade->setId_cidade($_POST['id_cidade']);
                                $cidade->setNome($_POST['nome']);


                                $testenome = DaoCidade::getCidadeNome($_POST['nome']);




                                if ($cidade->getId_cidade() <= 0) {

                                    if ($testenome == $_POST['nome']) {

                                        $_SESSION['NomeExistente'] = $testenome;
                                    } else {
                                        $retorno = DaoCidade::inserir($cidade);
                                    }
                                } else {


                                    if ($testenome == $_POST['nome']) {

                                        $_SESSION['NomeExistente'] = $testenome;
                                    } else {

                                        $retorno = DaoCidade::alterar($cidade);
                                        unset( $_SESSION['alterar']);
                                    }
                                }



                                $cidade->setId_cidade(0);
                                $cidade->setNome("");
                                
                                unset($_SESSION['Excluir']);
                                unset($_SESSION['salvar']);
                            }

                            if (isset($_GET['op'])) {


                                $operacao = $_GET['op'];
                                if ($operacao == "alterar") {
                                    $_SESSION['alterar'] = 'alterar';
                                    unset($_SESSION['Excluir']);
                                    unset($_SESSION['salvar']);
                                   
                                    $cidade = DaoCidade::getCidade($_GET['id']);
                                    echo '<script type="text/javascript">';
                                    echo 'alert("' . var_dump($departamento) . '")';

                                    echo '</script>';
                                }
                            }
                            
                            
                             if (isset($_GET['op'])) {
                             
                                $operacao = $_GET['op'];
                                if ($operacao == "Excluir") {
                                    $_SESSION['Excluir'] = "Excluir";
                                    unset($_SESSION['salvar']);
                                    $cidade = DaoCidade::getCidade($_GET['id']);
                                   
                                }
                            }
                            
                             if (isset($_POST['Excluir'])) 
                            {
                                 
                                $retorno = 0;
                                $retorno = DaoCidade::excluir($_POST['id_cidade']);

                                if ($retorno == 1) {

                                    echo '<script type="text/javascript">
                                                                  alert("Cidade Excluida com sucesso!!!");
                                                               </script>';
                                } else {

                                    echo '<script type="text/javascript">
                                                                  alert("Cidade não pode ser excluida, pois está vinculada a endereço de empresa !!!");
                                                          </script>';
                                }
                                
                                
                                unset($_SESSION['Excluir']);
                            }
                            
                            
                            
                             if (isset($_POST['RESET'])) {
                                 
                                  $cidade->setId_cidade(0);
                                  $cidade->setNome("");
                                  $_SESSION['Excluir'] = "";
                                  unset($_SESSION['Excluir']);
                                
                                
                             }
                            
                            
                            
                            
                            ?>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="panel-body">
                                        <form role="form" action="CadCidade.php" method="post">
                                            <div class="col-lg-6">

                                                <div class="form-group">

                                                    <!--                                                    teste-->
<?php
if (isset($_SESSION['NomeExistente'])) {
    ?>
                                                        <div class="panel-body">
                                                            <div class="alert alert-success alert-dismissable">
                                                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                                                A CIDADE <?php echo $_SESSION['NomeExistente']; ?> JA FOI CRIADA.
                                                            </div>
                                                        </div>

    <?php
    unset($_SESSION['NomeExistente']);
}
?>

                                                    <!--                                                    teste-->



                                                    <label>NOME</label>
                                                    <input class="form-control" value="<?php echo $cidade->getId_cidade(); ?>" type ="hidden" name="id_cidade" >
                                                    <input class="form-control" value="<?php echo $cidade->getNome(); ?>" type ="text" name="nome">
                                                    <p class="help-block">EXEMPLO "Escritoio, Coordenção Matematica".</p>
<!--                                                    <p class="help-block"><?php //var_dump($departamento)   ?></p>-->
                                                </div>


<?php        if (isset($_GET['op'])) 
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
                                                                    <h4 class="modal-title" id="myModalLabel">DESEJA ALTERAR NOME DA CIDADE ?</h4>

                                                                    <?php
                                                                }
                                                                
                                                            }
                                                            
                                                            if(isset($_SESSION['Excluir'])) {
                                                                ?>
                                                                <h4 class="modal-title" id="myModalLabel">DESEJA EXCLUIR CIDADE ?</h4>     
                                                                <?php
                                                            } 
                                                            
                                                            if(isset($_SESSION['salvar']))
                                                                { 
                                                                    ?>

                                                                    <h4 class="modal-title" id="myModalLabel">DESEJA ADICIONAR NOVA CIDADE ?</h4>     

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
                   
                       //<?php
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


                                $vCidade = DaoCidade::getTodos();
                                echo '  <div class="panel panel-default">';
                                echo ' <div class="panel-heading">
                                   LISTA DE CIDADES
                                    </div>';
                                echo '<div class="panel-body">';
                                echo '<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-CIDADE">';
                                echo ' <thead>';
                                echo '<tr>';
                                echo '<th>Codigo</th>'
                                . '<th>Nome</th>'
                                . '<th>Ações</th>';
                                echo '</tr>';
                                echo ' </thead>';
                                echo '<tbody>';
                                foreach ($vCidade as $Cidadee) {

                                    echo '<tr>';
                                    echo "<td>" . $Cidadee->getId_cidade()."</td>";
                                    echo "<td>" . $Cidadee->getNome() . "</td>";
                                    ?>
                                    <td>
                                    <?php
                                    echo "<a type='button' class='btn btn-outline btn-warning'  data-toggle='modal' href='CadCidade.php?op=alterar&id=" . $Cidadee->getId_cidade() . "'>Alterar</a>";

//                                  
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
     echo "<a type='button' class='btn btn-outline btn-danger'  data-toggle='Excluir' href='CadCidade.php?op=Excluir&id=" . $Cidadee->getId_cidade() . "'>Excluir</a>";
      // echo "<a type='button' class='btn btn-outline btn-warning'  data-toggle='modal' href='CadCidade.php?op=alterar&id=" . $Cidadee->getId_cidade() . "'>Alterar</a>";
  
     ?>
                                           
    <?php echo $Cidadee->getId_cidade(); ?>
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
                    $('#dataTables-CIDADE').DataTable({
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

