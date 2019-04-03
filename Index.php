
<?php


      session_start();
      include("BD/conexion.php");
      $conn = OpenConnection() ;



?>
<!DOCTYPE html>
<html>
<head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- Tell the browser to be responsive to screen width -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- Favicon icon -->
      <link rel="icon" type="image/png" sizes="16x16" href="assest/images/favicon.png">
      <title>Ceere Software</title>
      <!-- Bootstrap Core CSS -->
      <link href="Assest/node_modules/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- page css -->
    <link href="Assest/css/pages/login-register-lock.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="Assest/css/style.css" rel="stylesheet">
    
    <!-- You can change the theme colors from here -->
    <link href="Assest/css/colors/default.css" id="theme" rel="stylesheet">
      <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
   </head>

<body>
<script type="text/javascript" src="JS/SelEmpresa/SelEmpresa.js"></script>

    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label">Ceere Software</p>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <section id="wrapper">
        <div class="login-register" style="background-image:url(Assest/images/background/login-register.jpg);">
            <div class="login-box card">
                <div class="card-body">
                    <form class="form-horizontal form-material" >
                        <div class="form-group">
                            <div class="col-MD-12 col-xs-12 text-center">
                                <div class="user-thumb text-center"> <img alt="thumbnail" class="img-circle" width="35%" src="assest/images/logo_empresa.png">
                                   
                                </div>
                            </div>
                        </div>
                        <div class="form-group ">
                            <div class="col-xs-12">
                            <h3 for="">Seleccione la sede</h3>
        
                              <select class="form-control" name="IdEmpresa" id="IdEmpresa">
                            
                                 <?php
                                    $QueryEntRemite= "SELECT * FROM  Empresa";
                                    $ejecutarQueryQueryEntRemite= sqlsrv_query($conn, utf8_decode($QueryEntRemite));

                                    if ($ejecutarQueryQueryEntRemite === false) {
                                        die(print_r(sqlsrv_errors(), true));
                                    }
                                    $i = 0;

                                           while ($row = sqlsrv_fetch_array($ejecutarQueryQueryEntRemite)) {
                                             echo '
                                          <option value="'.$row['Id Empresa'].'">'.utf8_encode($row['Nombre Comercial Empresa']).'</option>';
                                         }
                                   
                                    ?>
                              </select>
                            </div>
                        </div>
                        <div class="form-group text-center">
                            <div class="col-xs-12">
                                <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light"  type="Button"  Onclick="Ingresar()">Ingresar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
       
</body>
<script src="Assest/node_modules/jquery/jquery.min.js"></script>
      <!-- Bootstrap tether Core JavaScript -->
      <script src="Assest/node_modules/bootstrap/js/popper.min.js"></script>
      <script src="Assest/node_modules/bootstrap/js/bootstrap.min.js"></script>
      <!-- slimscrollbar scrollbar JavaScript -->
      <script src="Assest/node_modules/ps/perfect-scrollbar.jquery.min.js"></script>
      <!--Wave Effects -->
      <script src="Assest/js/waves.js"></script>
      <!--Menu sidebar -->
      <script src="Assest/js/sidebarmenu.js"></script>
      <!--stickey kit -->
      <script src="Assest/node_modules/sticky-kit-master/dist/sticky-kit.min.js"></script>
      <script src="Assest/node_modules/sparkline/jquery.sparkline.min.js"></script>
      <!--Custom JavaScript -->
      <script src="Assest/js/custom.min.js"></script>
      <script src="Assest/js/sweetalert2.js"></script>
      <script src="Assest/node_modules/icheck/icheck.min.js"></script>
      <script src="Assest/node_modules/icheck/icheck.init.js"></script>
      <script src="Assest/node_modules/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
      <!-- ============================================================== -->
      <!-- Style switcher -->
      <!-- ============================================================== -->
      <script src="Assest/node_modules/styleswitcher/jQuery.style.switcher.js"></script>
      <script type="text/javascript" src="JS/Validaciones.js"></script>
      <script></script>

</html>