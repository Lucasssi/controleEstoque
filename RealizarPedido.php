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
        <meta http-equiv="Content-Language" content="pt-br">

    <title> REALIZAR PEDIDO - CONTROLE DE ESTOQUE - ASSIS </title>

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
                <a class="navbar-brand" href="PaginaPrincipal.php">CONTROLE DE ESTOQUE</a>
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
                                    <strong>Atualizações</strong>
                                    <span class="pull-right text-muted">
                                        <em>Avisos</em>
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
                        <li><a href="login.php"><i class="fa fa-sign-out fa-fw"></i>Sair</a>
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

        </nav>
         </div>
    <?php
            
    require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleEstoqueWebTCC/Classes/Curso.php';
    require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleEstoqueWebTCC/Persistencia/DaoCurso.php';
    require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleEstoqueWebTCC/Persistencia/DaoPedido.php';
    require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleEstoqueWebTCC/Persistencia/DaoDepartamentoFuncionario.php';
    
  
    
    
    if(isset($_POST['enviar']))
    {
     //   echo '<h1>Post: '.$_POST['cursoo'].'</h1><br>';
        $_SESSION['id_Curso'] = $_POST['cursoo'];
      //   echo '<h1>sessão: '.$_SESSION['id_Curso'].'</h1><br>';
        $_SESSION['Nome_Curso'] = DaoCurso::getCurso($_POST['cursoo'])->getNome();
       //  echo '<h1>sessão Nome Curso : '.$_SESSION['Nome_Curso'].'</h1><br>';
    }else if( $_SESSION['Nome_Curso'] !=  null){
       
        
    }else{
            $_SESSION['Nome_Curso'] =  null;
        
    }
            
            
            
            ?>
        <div class="col-lg-12">
            
            <?php
            if( $_SESSION['Nome_Curso'] !=  null){
            ?>
            
             <!--<div class="well">-->
              
                <!--<p>NOME: <?php  $_SESSION['nome'];?></p>-->
                <!--<p>FUNÇÃO: <?php  $_SESSION['funcao'];?></p>-->
                <!--<p>TIPO: <?php  $_SESSION['tipo'];?></p>-->
                <!--<p>ID Funcionario:   <?php  $_SESSION['id_funcionario'];?></p>-->
                 <?php
                //    if(isset($_POST['enviar']) || isset($_GET['GerarPedido'])){
                    ?>
                 <!--<p>Nome Curso:   <?php //echo $_SESSION['Nome_Curso'];?></p>-->
                 <!--<p>ID Curso:   <?php  $_SESSION['id_Curso'];?></p>-->
                <?php
                //    }
                ?>
                 
                
<!--            </div>-->
             <?php
            }
            ?>
            
        
            
            
            <div class="row">
                
                <?php
                // if(isset($_GET['GerarPedido'])){
                 ?>
            
                
                  <?php
                  //     } else {
                           
                       ?>
                           
                               <div class="col-lg-12">
                    
               
               
                </div>
                           
                           
                           
                           
                           <?php
                           
                           
                           
                           
                           
                  //     }
           if($_SESSION['Nome_Curso'] != NULL)  {          
                    ?>
                <!-- /.col-lg-12 -->
           
                     <center>
                    <h2 class="page-header"> O CURSO SELECIONADO FOI: "<?php echo $_SESSION['Nome_Curso'];?>"</h2>
                    </center>
                    <?php
                       }else{
                    ?>
                    <center>
                    
                      <h2 class="page-header">SELECIONE O CURSO DE DESTINO DO PEDIDO. </h2>
                    </center>
                    <?php
                       }
                       
                    ?>
                
                   <div class="row">
                                                                  
                       <div class="row">
                            <div class="col-md-3"><label> </label> </div>
                            <div class="col-md-6"><h4>   &nbsp; &nbsp;    </h4> </div>
                        </div>
                    </div>
                    
                    <div class="row">';
                    <form action="RealizarPedido.php" method="post">      
                               
                     <div class="col-md-3">
                                                        
                                                
                     </div>
                        <div class="col-md-4">
                                                        
                         

                             <select name="cursoo"  class="form-control">

                           <?php $vCurso = DaoDepartamentoFuncionario::getDepartamentoUsuario($_SESSION['id_funcionario']);

                            foreach ($vCurso as $cursooo) {

                            echo'<option value="' . $cursooo->getDepartamento()->getId_departamento_U() . '">' . $cursooo->getDepartamento()->getNome() . '</option>';

                            }

                           ?>


                             </select>
                        </div>
                         <div class="col-md-4">
                           <input class="btn btn-success" type ="submit" name="enviar" value ="SELECIONAR" >
                         
                           
                         </div>
                        </form>
                     </div>
            </div>


 <?php             
                   // if(isset($_POST['enviar'])){
                    if($_SESSION['Nome_Curso'] != NULL){
                    ?>
                    
           
                                                        
                                   
                                                         
                                                       
                                                           <div class="col-md-4">
                                                         <label></label>
                                                         
                                                       
                                                          
                                                         
                                                        </div>
                                                        <br>
                              <br>
                                  </center>                     
                                               
                                                             <div class="row">
                       <div class="col-md-4">
                        
                       </div>
                       <div class="col-md-4">
                           <form action="RealizarPedido2.php" method="POST">
                           
                               <button type="submit" class="btn btn-primary btn-lg btn-block"   name="GerarPedido"  >SELECIONAR ALMOXARIFADO</button>
<!--                               <a class="btn btn-primary btn-lg btn-block"  href="RealizarPedido2.php?GerarPedido">INICIAR PEDIDO</a>-->
                           </form>
                       </div>
                       <div class="col-md-4">
                       
                       </div>
                      
                      </div>
                                                   
                                                   
                                                   <?php  
                              
                    }    ?>
            
            <?php
            
                  

               // echo '<center>';
            if(isset($_GET['GerarPedido'])){
                        ?>
                            
                            
                            
                           
                                  
                                  
           <?php  
                 if(isset($_GET['GerarPedido'])){
                 ?>
            
                 <h2 class="page-header">PROXIMO PASSO ESCOLHER OS ITENS: </h2>
                 <br>
                 
                 <a class="btn btn-default btn-lg btn-block"  href="SelecionarItem.php">PROXIMO   ====>>>>></a>
                   <br>
                 <br>
                 <br>
                 <br>
                 <br>
                 <br>
                 <br>
                 <br>
                 <br>
                 <br>
                 <br>
                 <br>
                 <br>
<!--                <a class="btn btn-default btn-lg btn-block" target="_blank" href="">RELATORIOS</a>
                <a class="btn btn-default btn-lg btn-block" target="_blank" href="">FAZER PEDIDO</a>-->

                  <?php
                  }
                  else {
                      ?>
             
                      
                

                 
                     <?php
    
                   }
                  ?><?php
                                                        echo '  <div class="col-md-12"> &nbsp; </div>
                                                                </div>';
                                                        echo '  <div class="col-md-12"> &nbsp; </div>
                                                                </div>';
                                                        echo '  <div class="col-md-12"> &nbsp; </div>
                                                                </div>';
                                                        echo '  <div class="col-md-12"> &nbsp; </div>
                                                                </div>';                 
                                                        
            }
  
            
            ?>
            
            
            <!-- /.row -->
            
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

   
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../css/metisMenu/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
<!--    <script src="../css/datatables/*"></script>
    <script src="../css/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="../css/datatables-responsive/dataTables.responsive.js"></script>-->

    <!-- Custom Theme JavaScript -->
    <script src="/js/sb-admin-2.js"></script>
    <script src="../css/datatables/*" ></script>
    
    
 <script type="text/javascript" language="javascript" src="../jquery/jquery.js"></script>
 <script type="text/javascript" language="javascript" src="../css/datatables/js/jquery.dataTables.js"></script>
    
     

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
    </script>
    
     </div>

</body>

</html>
<?php
}else{
    
    header("location: login.php");
     
    
}

  if(isset($_GET['GerarPedido']))
    {
      //  header("location: ItemMaterialConsumo.php");
        $_SESSION['id_pedido'] = DaoPedido::GerarID(0);
        DaoPedido::inserir($_SESSION['id_pedido'] , $_SESSION['id_funcionario'], $_SESSION['id_Curso']);
        DaoPedido::AlimentarGeradorID();
        
         
        
        
    }

?>