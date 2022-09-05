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

       

            <!-- Navigation -->
         


          
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
                            
                            
                            require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleEstoqueWebTCC/Classes/Empresa.php';

                            require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleEstoqueWebTCC/Persistencia/DaoEmpresa.php';

                            require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleEstoqueWebTCC/Persistencia/Conexao.php';

                            $empresa = new Empresa();
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





                                $empresa->setId_empresa($_POST['id_empresa']);
                                $empresa->setNome($_POST['nome']);
                                $empresa->setNome_fantasia($_POST['nomeFantasia']);
                                $empresa->setCmpj($_POST['cmpj']);
                                $empresa->setEmail($_POST['email']);
                                $empresa->setSeguimento($_POST['seguimento']);
                                $empresa->setSite($_POST['site']);
                                $empresa->setTelefone($_POST['telefone']);


                                $testenome = DaoEmpresa::getEmpresaNome($_POST['nome']);




                                if ($empresa->getId_empresa() <= 0) {

                                    if ($testenome == $_POST['nome']) {

                                        $_SESSION['NomeExistente'] = $testenome;
                                    } else {
                                        $retorno = DaoEmpresa::inserir($empresa);
                                    }
                                } else {


                                    if ($testenome == $_POST['nome']) {

                                        $_SESSION['NomeExistente'] = $testenome;
                                    } else {

                                        $retorno = DaoEmpresa::alterar($empresa);
                                        unset( $_SESSION['alterar']);
                                    }
                                }



                                $empresa->setId_empresa(0);
                                $empresa->setNome("");
                                $empresa->setNome_fantasia("");
                                $empresa->setCmpj("");
                                $empresa->setEmail("");
                                $empresa->setSeguimento("");
                                $empresa->setSite("");
                                $empresa->setTelefone("");
                                
                                unset($_SESSION['Excluir']);
                                unset($_SESSION['salvar']);
                            }

                            if (isset($_GET['op'])) {


                                $operacao = $_GET['op'];
                                if ($operacao == "alterar") {
                                    $_SESSION['alterar'] = 'alterar';
                                    unset($_SESSION['Excluir']);
                                    unset($_SESSION['salvar']);
                                   
                                    $empresa = DaoEmpresa::getEmpresa($_GET['id']);
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
                                    $empresa = DaoEmpresa::getEmpresa($_GET['id']);
                                   
                                }
                            }
                            
                             if (isset($_POST['Excluir'])) 
                            {
                                 
                                $retorno = 0;
                                $retorno = DaoEmpresa::excluir($_POST['id_empresa']);

                                if ($retorno == 1) {

                                    echo '<script type="text/javascript">
                                                                  alert("Empresa Excluida com sucesso!!!");
                                                               </script>';
                                } else {

                                    echo '<script type="text/javascript">
                                                                  alert("Empresa não pode ser excluida, pois está vinculada a um pedido !!!");
                                                          </script>';
                                }
                                
                                
                                unset($_SESSION['Excluir']);
                            }
                            
                            
                            
                             if (isset($_POST['RESET'])) {
                                 
                                    $empresa->setId_empresa(0);
                                    $empresa->setNome("");
                                    $empresa->setNome_fantasia("");
                                    $empresa->setCmpj("");
                                    $empresa->setEmail("");
                                    $empresa->setSeguimento("");
                                    $empresa->setSite("");
                                    $empresa->setTelefone("");
                                  
                                    $_SESSION['Excluir'] = "";
                                  
                                    unset($_SESSION['Excluir']);
                                
                                
                             }
                            
                            
                            
                            
                            ?>
                          
                                <div class="row">
                                    <div class="panel-body">
                                        <form role="form" action="CadEmpresa.php" method="post">
                                            <div class="col-lg-6">

                                                <div class="form-group">

                                                    <!--                                                    teste-->
<?php
if (isset($_SESSION['NomeExistente'])) {
    ?>
                                                        <div class="panel-body">
                                                            <div class="alert alert-success alert-dismissable">
                                                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                                                A Empresa <?php echo $_SESSION['NomeExistente']; ?> JA FOI CRIADA.
                                                            </div>
                                                        </div>

    <?php
    unset($_SESSION['NomeExistente']);
}
?>

                                                    <!--                                                    teste-->



                                                    <label>NOME</label>
                                                    <input class="form-control" value="<?php echo $empresa->getId_empresa(); ?>" type ="hidden" name="id_empresa" >
                                                    <input class="form-control" value="<?php echo $empresa->getNome(); ?>" type ="text" name="nome">
                                                    <p class="help-block">EXEMPLO "Escritoio, Coordenção Matematica".</p>
                                                    <label>NOME FANTASIA</label>
                                                    <input class="form-control" value="<?php echo $empresa->getNome_fantasia(); ?>" type ="text" name="nomeFantasia">
                                                    <p class="help-block">EXEMPLO "Escritoio, Coordenção Matematica".</p>
                                                    <label>CMPJ</label>
                                                    <input class="form-control" value="<?php echo $empresa->getCmpj(); ?>" type ="text" name="cmpj">
                                                    <p class="help-block">EXEMPLO "Escritoio, Coordenção Matematica".</p>
                                                    <label>SEGUIMENTO</label>
                                                    <input class="form-control" value="<?php echo $empresa->getSeguimento(); ?>" type ="text" name="seguimento">
                                                    <p class="help-block">EXEMPLO "Escritoio, Coordenção Matematica".</p>
                                                    <label>TELEFONE</label>
                                                    <input class="form-control" value="<?php echo $empresa->getTelefone(); ?>" type ="text" name="telefone">
                                                    <p class="help-block">EXEMPLO "Escritoio, Coordenção Matematica".</p>
                                                    <label>SITE</label>
                                                    <input class="form-control" value="<?php echo $empresa->getSite(); ?>" type ="text" name="site">
                                                    <p class="help-block">EXEMPLO "Escritoio, Coordenção Matematica".</p>
                                                    <label>EMAIL</label>
                                                    <input class="form-control" value="<?php echo $empresa->getEmail(); ?>" type ="text" name="email">
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
                                                                    <h4 class="modal-title" id="myModalLabel">DESEJA ALTERAR INFORMAÇÕES DA EMPRESA ?</h4>

                                                                    <?php
                                                                }
                                                                
                                                            }
                                                            
                                                            if(isset($_SESSION['Excluir'])) {
                                                                ?>
                                                                <h4 class="modal-title" id="myModalLabel">DESEJA EXCLUIR EMPRESA ?</h4>     
                                                                <?php
                                                            } 
                                                            
                                                            if(isset($_SESSION['salvar']))
                                                                { 
                                                                    ?>

                                                                    <h4 class="modal-title" id="myModalLabel">DESEJA ADICIONAR NOVA EMPRESA ?</h4>     

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

                   
   


                                <?PHP
// REMOVER AQUI ------------------------------------------------------


                                $vEmpresa = DaoEmpresa::getTodos();
                                echo '  <div class="panel panel-default">';
                                echo ' <div class="panel-heading">
                                   LISTA DE EMPRESAS
                                    </div>';
                                echo '<div class="panel-body">';
                                echo '<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-EMPRESA">';
                                echo ' <thead>';
                                echo '<tr>';
                                echo '<th>Codigo</th>'
                                . '<th>Nome</th>'
                                . '<th>Nome Fantasia</th>'
                                . '<th>CMPJ</th>'
                                . '<th>Seguimento</th>'
                                . '<th>Telefone</th>'
                                . '<th>Site</th>'
                                . '<th>Email</th>'
                                . '<th>Ações</th>';
                                echo '</tr>';
                                echo ' </thead>';
                                echo '<tbody>';
                                foreach ($vEmpresa as $Empresaa) {

                                    echo '<tr>';
                                    echo "<td>" . $Empresaa->getId_empresa()."</td>";
                                    echo "<td>" . $Empresaa->getNome() . "</td>";
                                    echo "<td>" . $Empresaa->getNome_fantasia() . "</td>";
                                    echo "<td>" . $Empresaa->getCmpj() . "</td>";
                                    echo "<td>" . $Empresaa->getSeguimento() . "</td>";
                                    echo "<td>" . $Empresaa->getTelefone() . "</td>";
                                    echo "<td>" . $Empresaa->getSite() . "</td>";
                                    echo "<td>" . $Empresaa->getEmail() . "</td>";
                                    ?>
                                    <td>
                                    <?php
                                    echo "<a type='button' class='btn btn-outline btn-warning'  data-toggle='modal' href='CadEmpresa.php?op=alterar&id=" . $Empresaa->getId_empresa() . "'>Alterar</a>";

//                                  
                                    ?>


                                        <form  action="CadEmpresa.php" method="post">
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
     echo "<a type='button' class='btn btn-outline btn-danger'  data-toggle='Excluir' href='CadEmpresa.php?op=Excluir&id=" . $Empresaa->getId_empresa() . "'>Excluir</a>";
      // echo "<a type='button' class='btn btn-outline btn-warning'  data-toggle='modal' href='CadCidade.php?op=alterar&id=" . $Cidadee->getId_cidade() . "'>Alterar</a>";
  
     ?>
                                           
    <?php //echo $Empresaa->getId_empresa(); ?>
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
                    $('#dataTables-EMPRESA').DataTable({
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

