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

   
                                    <form role="form" action="CadCidade.php" method="post">

                                        <div class="modal fade" id="Remover" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>


                                                        <h4 class="modal-title" id="myModalLabel">DESEJA EXCLUIR CIDADE ?</h4>     


                                                    </div>
                                                    <!--                                        <div class="modal-body">
                                                                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                                                                            </div>-->
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">NÃO</button>
                                                        <!--                                            <button type="button" class="btn btn-primary">Save changes</button>-->
<!--                                                        <button type="submit" class="btn btn-default"   name="Remover"  >SIM</button>-->
                                                        <button type="submit"   class="btn btn-primary btn-sm" name="Remover"  >SIM</button>
                                                    </div>
                                                </div>
                                                <!-- /.modal-content -->
                                            </div>
                                            <!-- /.modal-dialog -->
                                        </div>

                                     
<?php
echo '<h1>';
echo 'ESTOQUE';
echo '<BR>';
echo '<BR>';
$TotalUnidadeE = 2999;

$CxUnE = 15;


$TotalCaixaE = $TotalUnidadeE / $CxUnE;

$RestoE = $TotalUnidadeE % $CxUnE;

echo 'Total Unidade -->';
echo $TotalUnidadeE;
echo '<BR>';

echo 'Unidade Por Caixa -->';
echo $CxUnE;
echo '<BR>';

//echo 'total Caixa --->';
//echo $TotalCaixaE;
echo '<br>';


echo 'total Caixa Conversão --->';
echo $TotalCaixa2E = intval($TotalCaixaE);
echo '<br>';

echo 'Resto --->';
echo $RestoE;
echo '<br>';




echo '</h1>';

echo '<BR>';
echo '<BR>';
echo '<BR>';
echo '<BR>';



echo '<h1>';
echo 'UNIDADES PEDIDAS';
echo '<BR>';
echo '<BR>';
$TotalUnidade = 1254;

$CxUn = 15;


$TotalCaixa = $TotalUnidade / $CxUn;

$Resto = $TotalUnidade % $CxUn;

echo 'Total Unidade -->';
echo $TotalUnidade;
echo '<BR>';

echo 'Unidade Por Caixa -->';
echo $CxUn;
echo '<BR>';

//echo 'total Caixa --->';
//echo $TotalCaixa;
echo '<br>';


echo 'total Caixa Conversão --->';
echo $TotalCaixa2 = intval($TotalCaixa);
echo '<br>';

echo 'Resto --->';
echo $Resto;
echo '<br>';




echo '</h1>';
echo '<h1>';
echo 'SALDO EM ESTOQUE';
echo '<BR>';
echo '<BR>';
//$TotalUnidade = 1254;

//$CxUn = 15;


//$TotalCaixa = $TotalUnidade / $CxUn;

//$Resto = $TotalUnidade % $CxUn;

//echo 'Total Unidade -->';
//echo $TotalUnidade;
echo '<BR>';



//echo 'total Caixa --->';
//echo $TotalCaixa;
echo '<br>';


echo 'total Caixa Conversão --->';
echo $TotalCaixa2E = intval($TotalCaixaE) - $TotalCaixa2 = intval($TotalCaixa);
echo '<br>';

echo 'Resto --->';
echo $RestoE - $Resto;
echo '<br>';




echo '</h1>';

echo '<BR>';
echo '<BR>';





?>


    
   
  
<!--                                <a class="btn btn-default" data-toggle="modal" data-target="#Remover" tabindex="6">
                                    SALVAR
                                </a>-->
                                <!-- /.panel-body -->
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



            


    </body>

</html>

