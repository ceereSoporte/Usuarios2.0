<?php   // $hoy = getdate();
   session_start();
   
   
   if (!isset( $_SESSION['IDEMPRESA'])) {
       header("location: Index.php");
   }
   $hoy = date("d/m/Y");     
     include("BD/conexion.php");
      $conn = OpenConnection() ;
   
   ?>
<!DOCTYPE html>
<html lang="en">
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
      <link href="assest/node_modules/bootstrap/css/bootstrap.min.css" rel="stylesheet">
      <!-- Custom CSS -->
      <link href="Assest/css/pages/floating-label.css" rel="stylesheet">
      <link href="Assest/css/style.css" rel="stylesheet">
      <link href="Assest/css/sweetalert2.min.css" rel="stylesheet">
      <link href="Assest/css/pages/form-icheck.css" rel="stylesheet">
      <link href="Assest/node_modules/bootstrap-datepicker/bootstrap-datepicker.min.css" rel="stylesheet"
         type="text/css" />
      <link href="Assest/node_modules/bootstrap-table/dist/bootstrap-table.min.css" rel="stylesheet" type="text/css" />
      <!-- Bootstrap responsive table CSS -->
      <link href="Assest/node_modules/tablesaw-master/dist/tablesaw.css" rel="stylesheet">
      <!-- You can change the theme colors from here -->
      <link href="Assest/css/colors/default.css" id="theme" rel="stylesheet">
      <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]--><script type="text/javascript" src="JS/InfoGeneralIndex/funcionesJS.js"></script>
   </head>
   
   <body class="fix-header card-no-border fix-sidebar">
      <!-- ============================================================== -->
      <!-- Preloader - style you can find in spinners.css -->
      <!-- ============================================================== -->
      <div class="preloader">
         <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label">CEERE SOFTWARE</p>
         </div>
      </div>
      <!-- ============================================================== -->
      <!-- Main wrapper - style you can find in pages.scss -->
      <!-- ============================================================== -->
      <div id="main-wrapper">
      <!-- ============================================================== -->
      <!-- Topbar header - style you can find in pages.scss -->
      <!-- ============================================================== -->
      <header class="topbar">
         <nav class="navbar top-navbar navbar-expand-md navbar-light">
            <!-- ============================================================== -->
            <!-- Logo -->
            <!-- ============================================================== -->
            <div class="navbar-header">
               <a class="navbar-brand" href="index.php">
                  <!-- Logo icon -->
                  <b>
                     <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                     <!-- Dark Logo icon -->
                     <img src="Assest/images/logo-icon.png" alt="homepage" class="dark-logo" />
                     <!-- Light Logo icon -->
                     <img src="Assest/images/logo-light-icon.png" alt="homepage" class="light-logo" />
                  </b>
                  <!--End Logo icon -->
                  <!-- Logo text -->
                  <span>
                     <!-- dark Logo text -->
                     <img src="Assest/images/logo-text.png" alt="homepage" class="dark-logo" />
                     <!-- Light Logo text -->
                     <img src="Assest/images/logo-light-text.png" class="light-logo" alt="homepage" />
                  </span>
               </a>
            </div>
            <!-- ============================================================== -->
            <!-- End Logo -->
            <!-- ============================================================== -->
            <div class="navbar-collapse">
               <!-- ============================================================== -->
               <!-- toggle and nav items -->
               <!-- ============================================================== -->
               <ul class="navbar-nav mr-auto">
                  <!-- This is  -->
                  <li class="nav-item">
                     <a class="nav-link nav-toggler hidden-md-up waves-effect waves-dark" href="javascript:void(0)">
                     <i class="sl-icon-menu"></i>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link sidebartoggler hidden-sm-down waves-effect waves-dark" href="javascript:void(0)">
                     <i class="sl-icon-menu"></i>
                     </a> 
                  </li>
                  <!-- ============================================================== -->
                  <!-- Search -->
                  <!-- ============================================================== -->
                  <li class="nav-item hidden-xs-down search-box">
                     <a class="nav-link hidden-sm-down waves-effect waves-dark" data-toggle="modal" data-target="#ModalBuscar" data-whatever="@mdo">
                     <i class="icon-Magnifi-Glass2"></i>
                     <label for="">Buscar Paciente</label>
                     </a>
                  </li>
               </ul>
               <!-- ============================================================== -->
               <!-- User profile and search -->
               <!-- ============================================================== -->
               <ul class="navbar-nav my-lg-0">
                  <!-- ============================================================== -->
                  <!-- Comment -->
                  <!-- ============================================================== -->
                  <ul class="navbar-nav my-lg-0">
                     <!-- ============================================================== -->
                     <!-- Profile -->
                     <!-- ============================================================== -->
                     <li class="nav-item dropdown u-pro">
                        <img src="Assest/images/logo_empresa.png" alt="homepage" class="light-logo" width="180px" height="60px" />
                     </li>
                     <li class="nav-item dropdown u-pro">
                        <a class="nav-link dropdown-toggle waves-effect waves-dark profile-pic" href="Vistas/login.php" >Iniciar Sesion </a>
                     </li>
                  </ul>
               </ul>
            </div>
         </nav>
      </header>
      <!-- ============================================================== -->
      <!-- End Topbar header -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- Left Sidebar - style you can find in sidebar.scss  -->
      <!-- ============================================================== -->
      <aside class="left-sidebar">
         <!-- Sidebar scroll-->
         <div class="scroll-sidebar">
            <!-- Sidebar navigation-->
            <nav class="sidebar-nav">
               <ul id="sidebarnav">
           
                  <!-- informacion general -->
                  <li>
                     <a class="waves-effect waves-dark"  aria-expanded="false">
                     <i class="fa fa-address-book"></i>
                     <span class="hide-menu">Usuarios</span>
                     </a>
                  </li>
               </ul>
            </nav>
            <!-- End Sidebar navigation -->
         </div>
         <!-- End Sidebar scroll-->
      </aside>
      <!-- ============================================================== -->
      <!-- End Left Sidebar - style you can find in sidebar.scss  -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- Page wrapper  -->
      <!-- ============================================================== -->
      <div class="page-wrapper">
         <!-- ============================================================== -->
         <!-- Container fluid  -->
         <!-- ============================================================== -->
         <div class="container-fluid">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="modal fade" id="ModalBuscar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
               <div class="modal-dialog modal-lg" role="document">
                  <div class="modal-content">
                     <div class="modal-header">
                        <h2 class="modal-title" id="exampleModalLabel1">buscar paciente</h2>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                     </div>
                     <div class="modal-body">
                        <div class="form-group  ">
                           <label for="TipoBusqueda">Buscar Por:<span style="color:red;font-size:20px">*</span></label>
                           <select class="form-control" id="TipoBusqueda">
                              <option value="1">Documento</option>
                              <option value="2">Nombre Completo</option>
                              <option value="3">Telefono</option>
                              <option value="4">Telfono Celular</option>
                           </select>
                        </div>
                        <div class="form-group">
                           <label for="TextBusqueda">Texto de busqueda: <span style="color:red;font-size:20px">*</span> </label>
                           <input type="text" value="" id="TextBusqueda"  name="TextBusqueda"  maxlength="50" class="form-control Letras" />
                           <span class="bar"></span>
                        </div>
                       
                           <button style="margin-bottom: 5%;float:right;"  onclick="BuscarPacieteModal()" class="btn btn-info btn btn-block text-uppercase col-md-3 col-xs-3">Buscar</button>
                       
                        <table data-toggle="table"  data-mobile-responsive="true" data-sort-order="desc" class="table" >
                           <thead>
                              <tr>
                                 <th>Documento</th>
                                 <th>Tipo documento</th>
                                 <th>Nombre Completo </th>
                                 <th>Telefono 1</th>
                                 <th>Telefono 2</th>
                                 <th>telefono Celular</th>
                              </tr>
                           </thead>
                           <tbody id="bodyBuscar">
                           </tbody>
                        </table>
                     </div>
                     <div class="modal-footer">
                        <button type="button" onclick="BuscarPacieteModal()" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                     </div>
                  </div>
               </div>
            </div>
            <!-- AQUI EMPIEZA EL FORMULARIO DE USUARIO -->
            <div class="row page-titles">
               <div class="col-md-5 align-self-center">
                  <h3 class="text-themecolor">Informacion general</h3>
                  <ol class="breadcrumb">
                     <li class="breadcrumb-item">
                        <a href="javascript:void(0)">Home</a>
                     </li>
                     <li class="breadcrumb-item active">Informacion general </li>
                  </ol>
               </div>
            </div>
            <!-- ============================================================== -->
            <!-- Start Page Content -->
            <!-- ============================================================== -->
            <div class="col-12">
               <div class="card">
                  <div class="card-body">
                     <div id="formulario_basico">
                        <h4 class="card-title">Informacion basica</h4>
                        <!-- <Div class="floating-labels m-t-40"> -->
                        <div class="row">
                           <div class="col-md-6">
                              <h3  style="color:red" id="info">EL usario ya existe</h3>
                           </div>
                           <div class="col-md-3  text-right ">
                              <button type="button" onclick="LimpiarCamposCrear()" id="CreateBoton" class="btn btn-info">
                              <i class="fa fa-plus-circle" ></i> Crear nuevo
                              </button>
                           </div>
                           <div class="col-md-3  text-right ">
                              <button type="button" onclick="autorizacionActualizar()" id="UpdateBoton" class="btn btn-info">
                              <i class="fa fa-edit"></i>Actualizar datos
                              </button>
                           </div>
                        </div>
                        <div class="row">
                           <div class="form-group m-b-40 col-md-6">
                              <label for="DocumentoEntidad">Documento <span style="color:red;font-size:20px">*</span> </label>
                              <input type="text" value="" id="DocumentoEntidad" onchange="ValExisteUsuario(this.value)" name="DocumentoEntidad"  maxlength="15" class="form-control Letras" />
                              <span class="bar"></span>
                           </div>
                           <input type="hidden" id="NroHistoriaCLinica">
                           <input type="hidden" value="<?php echo $_SESSION['DocEmpresa'] ?>" id="DocumentoEmpresa">
                           <div class="form-group m-b-40 col-md-6  ">
                              <label for="TipoDocumento">Tipo Documento<span style="color:red;font-size:20px">*</span></label>
                              <select class="form-control" id="TipoDocumento">
                                 <option value="">Seleccionar Tipo de documento</option>
                                 <option value="2">Cédula Ciudadanía</option>
                                 <option value="3">Cédula Extranjería</option>
                                 <option value="4">Pasaporte</option>
                                 <option value="5">Registro Civil</option>
                                 <option value="6">Tarjeta de Identidad</option>
                                 <option value="7">Adulto sin Identificar</option>
                                 <option value="8">Menor sin Identificar</option>
                                 <option value="9">Número único de Identificación</option>
                                 <option value="10">Número de Identificación Tributaria</option>
                                 <option value="11">Número Historia</option>
                              </select>
                           </div>
                        </div>
                        <div class="row">
                           <div class="form-group m-b-40 col-md-6">
                              <label for="PrimerNombre">Primer Nombre<span style="color:red;font-size:20px">*</span></label>
                              <input type="text" value="" id="PrimerNombre" name="PrimerNombre" placeholder="" maxlength="99" class="form-control Letras" />
                              <span class="bar"></span>
                           </div>
                           <div class="form-group m-b-40 col-md-6  ">
                              <label for="SegundoNombre">Segundo Nombre</label>
                              <input type="text" value="" id="SegundoNombre" name="SegundoNombre" placeholder="" maxlength="49" class="form-control Letras" />
                              <span class="bar"></span>
                           </div>
                        </div>
                        <div class="row">
                           <div class="form-group m-b-40 col-md-6">
                              <label for="PrimerApellido">Primer Apellido<span style="color:red;font-size:20px">*</span></label>
                              <input type="text" value="" id="PrimerApellido" name="PrimerApellido" placeholder="" maxlength="99" class="form-control Letras" />
                              <span class="bar"></span>
                           </div>
                           <div class="form-group m-b-40 col-md-6  ">
                              <label for="SegundoApellido">Segundo Apellido<span style="color:red;font-size:20px">*</span></label>
                              <input type="text" value="" id="SegundoApellido" name="SegundoApellido" placeholder="" maxlength="99" class="form-control Letras" />
                              <span class="bar"></span>
                           </div>
                        </div>
                        <div class="row">
                           <div class="form-group m-b-40 col-md-6">
                              <label for="CorreoEntidad">Correo Electronico<span style="color:red;font-size:20px">*</span></label>
                              <input type="Email" id="CorreoEntidad" name="CorreoEntidad"  maxlength="99" class="form-control Email" />
                              <span class="bar"></span>
                           </div>
                           <div class="form-group m-b-40 col-md-6">
                              <label for="FechaNacimientoEntidad">Fecha De nacimiento<span style="color:red;font-size:20px">*</span></label>
                              <div class="input-group">
                                 <input type="text" id="FechaNacimientoEntidad" data-date-end-date="0d" maxlength="10" class="form-control mydatepicker Numero" placeholder="mm/dd/yyyy">
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="form-group m-b-40 col-md-6  ">
                           <label for="TelFijoEntidad">Telefono Fijo<span style="color:red;font-size:20px">*</span></label>
                           <input type="text" value=""  id="TelFijoEntidad" name="TelFijoEntidad" maxlength="7" placeholder="" class="form-control Numero" />
                           <span class="bar"></span>
                        </div>
                        <div class="form-group m-b-40 col-md-6  ">
                           <label for="CelularEntidad">Celular<span style="color:red;font-size:20px">*</span></label>
                           <input type="text" value=""  id="CelularEntidad" name="CelularEntidad" maxlength="10" placeholder="" class="form-control Numero" />
                           <span class="bar"></span>
                        </div>
                     </div>
                     <div class="row">
                        <div class="form-group m-b-40 col-md-12  ">
                           <h4 >Direccion De Residencia</h4>
                        </div>
                     </div>
                     <div class="row">
                        <div class="form-group m-b-40 col-md-3  ">
                           <label for="Nomenclatura1">Tipo de via<span style="color:red;font-size:20px">*</span></label>
                           <select class="form-control" id="Nomenclatura1">
                              <option value="">Sin Asignar</option>
                              <option value="1">Avenida</option>
                              <option value="2">Bulevar</option>
                              <option value="3">Calle</option>
                              <option value="4">Carrera</option>
                              <option value="5">Carretera</option>
                              <option value="6">Circular</option>
                              <option value="7">Circunvalar</option>
                              <option value="8">Diagonal</option>
                              <option value="9">Transversal</option>
                              <option value="10">Troncal</option>
                              <option value="11">Variante</option>
                              <option value="12">Via</option>
                              <option value="13">Corregimiento</option>
                              <option value="14">Kilometro</option>
                              <option value="15">Vereda</option>
                              <option value="16">Autopista</option>
                           </select>
                        </div>
                        <div class="form-group m-b-40 col-md-3">
                           <label for="NumeroDir1">Número<span style="color:red;font-size:20px">*</span></label>
                           <input type="text" value=""  maxlength="3" id="NumeroDir1" name="NumeroDir1"  placeholder="" class="form-control Numero" />
                           <span class="bar"></span>
                        </div>
                        <div class="form-group m-b-40 col-md-3  ">
                           <label for="LetraDir1" style="margin-top:10px">Letra</label>
                         
                           <select class="form-control" id="LetraDir1">
                              <option value="">Sin Asignar</option>
                              <option value="1">A</option>
                              <option value="2">AA</option>
                              <option value="3">AB</option>
                              <option value="4">AC</option>
                              <option value="5">AD</option>
                              <option value="6">AE</option>
                              <option value="7">AF</option>
                              <option value="8">AG</option>
                              <option value="9">AH</option>
                              <option value="10">B</option>
                              <option value="11">BB</option>
                              <option value="12">BA</option>
                              <option value="13">BC</option>
                              <option value="14">BD</option>
                              <option value="15">BE</option>
                              <option value="16">BF</option>
                              <option value="17">BG</option>
                              <option value="18">BH</option>
                              <option value="19">C</option>
                              <option value="20">C</option>
                              <option value="21">CA</option>
                              <option value="22">CB</option>
                              <option value="23">CD</option>
                              <option value="24">CE</option>
                              <option value="25">CF</option>
                              <option value="26">CG</option>
                              <option value="27">CH</option>
                              <option value="28">D</option>
                              <option value="29">DD</option>
                              <option value="30">DA</option>
                              <option value="31">DB</option>
                              <option value="32">DC</option>
                              <option value="33">DE</option>
                              <option value="34">DF</option>
                              <option value="35">DG</option>
                              <option value="36">DH</option>
                              <option value="37">E</option>
                              <option value="38">EE</option>
                              <option value="39">EA</option>
                              <option value="40">EB</option>
                              <option value="41">EC</option>
                              <option value="42">ED</option>
                              <option value="43">EF</option>
                              <option value="44">EG</option>
                              <option value="45">EH</option>
                              <option value="46">F</option>
                              <option value="47">FF</option>
                              <option value="48">FA</option>
                              <option value="49">FB</option>
                              <option value="50">FC</option>
                              <option value="51">FE</option>
                              <option value="52">FG</option>
                              <option value="53">FH</option>
                              <option value="54">G</option>
                              <option value="55">GG</option>
                              <option value="56">GA</option>
                              <option value="57">GB</option>
                              <option value="58">GC</option>
                              <option value="59">GD</option>
                              <option value="60">GE</option>
                              <option value="61">GF</option>
                              <option value="62">GH</option>
                              <option value="63">H</option>
                              <option value="64">HH</option>
                              <option value="65">HA</option>
                              <option value="66">HB</option>
                              <option value="67">HC</option>
                              <option value="68">HD</option>
                              <option value="69">HF</option>
                              <option value="70">HG</option>
                           </select>

                        </div>
                        <div class="form-group m-b-40 col-md-3  ">
                           <label for="Complemento1">Complemento</label>
                           <select class="form-control" id="Complemento1">
                              <option value="">Sin Asignar</option>
                              <option value="1">Este</option>
                              <option value="2">norte</option>
                              <option value="3">Oeste</option>
                              <option value="4">sur</option>

                           </select>
                        </div>
                     </div> 
                     <div class="row">
                     <!-- //COMIENZA OTRA LINEA -->
                       <div class="form-group m-b-40 col-md-3  ">
                           <label for="NumeroDir2">Número<span style="color:red;font-size:20px">*</span></label>
                           <input type="text" value=""  maxlength="3"  id="NumeroDir2" name="NumeroDir2"  placeholder="" class="Numero form-control" />
                           <span class="bar"></span>
                        </div>
                        <div class="form-group m-b-40 col-md-3  ">
                           <label for="LetraDir2" style="margin-top:10px">Letra</label>
                         
                           <select class="form-control" id="LetraDir2">
                              <option value="">Sin Asignar</option>
                              <option value="1">A</option>
                              <option value="2">AA</option>
                              <option value="3">AB</option>
                              <option value="4">AC</option>
                              <option value="5">AD</option>
                              <option value="6">AE</option>
                              <option value="7">AF</option>
                              <option value="8">AG</option>
                              <option value="9">AH</option>
                              <option value="10">B</option>
                              <option value="11">BB</option>
                              <option value="12">BA</option>
                              <option value="13">BC</option>
                              <option value="14">BD</option>
                              <option value="15">BE</option>
                              <option value="16">BF</option>
                              <option value="17">BG</option>
                              <option value="18">BH</option>
                              <option value="19">C</option>
                              <option value="20">C</option>
                              <option value="21">CA</option>
                              <option value="22">CB</option>
                              <option value="23">CD</option>
                              <option value="24">CE</option>
                              <option value="25">CF</option>
                              <option value="26">CG</option>
                              <option value="27">CH</option>
                              <option value="28">D</option>
                              <option value="29">DD</option>
                              <option value="30">DA</option>
                              <option value="31">DB</option>
                              <option value="32">DC</option>
                              <option value="33">DE</option>
                              <option value="34">DF</option>
                              <option value="35">DG</option>
                              <option value="36">DH</option>
                              <option value="37">E</option>
                              <option value="38">EE</option>
                              <option value="39">EA</option>
                              <option value="40">EB</option>
                              <option value="41">EC</option>
                              <option value="42">ED</option>
                              <option value="43">EF</option>
                              <option value="44">EG</option>
                              <option value="45">EH</option>
                              <option value="46">F</option>
                              <option value="47">FF</option>
                              <option value="48">FA</option>
                              <option value="49">FB</option>
                              <option value="50">FC</option>
                              <option value="51">FE</option>
                              <option value="52">FG</option>
                              <option value="53">FH</option>
                              <option value="54">G</option>
                              <option value="55">GG</option>
                              <option value="56">GA</option>
                              <option value="57">GB</option>
                              <option value="58">GC</option>
                              <option value="59">GD</option>
                              <option value="60">GE</option>
                              <option value="61">GF</option>
                              <option value="62">GH</option>
                              <option value="63">H</option>
                              <option value="64">HH</option>
                              <option value="65">HA</option>
                              <option value="66">HB</option>
                              <option value="67">HC</option>
                              <option value="68">HD</option>
                              <option value="69">HF</option>
                              <option value="70">HG</option>
                           </select>

                        </div>
                        <div class="form-group m-b-40 col-md-3  ">
                           <label for="Complemento2">Complemento</label>
                           <select class="form-control" id="Complemento2">
                              <option value="">Sin Asignar</option>
                              <option value="1">Este</option>
                              <option value="2">norte</option>
                              <option value="3">Oeste</option>
                              <option value="4">sur</option>

                           </select>
                        </div>
                      
                      
                        <div class="form-group m-b-40 col-md-3">
                           <label for="NumeroDir3">Número<span style="color:red;font-size:20px">*</span></label>
                           <input type="Text" value=""  maxlength="3" id="NumeroDir3" name="NumeroDir3"  placeholder="" class="Numero form-control" />
                           <span class="bar"></span>
                        </div>
                     </div>   
                     
                     <div class="row">
                        <div class="form-group m-b-40 col-md-6">
                           <label for="Complemento3">Complemento</label>
                           <input type="Text" value=""  maxlength="50" id="Complemento3" name="Complemento3"  placeholder="Ejemplo: Apto 101, torre 3" class="form-control" />
                           <span class="bar"></span>
                        </div> 
                        <div class="form-group m-b-40 col-md-6  ">
                           <label for="DireccionEntidad">Dirección ingresada<span style="color:white;font-size:20px">*</span></label>
                           <input type="text" name="" disabled="" class="form-control" id="DireccionEntidad">
                        </div>

                     </div>

                    
                    
                     <div class="col-md-12">
                        <div class="row">
                           <div class="form-group m-b-40 col-md-3  ">
                              <label for="PaisEntidad">Pais<span style="color:red;font-size:20px">*</span></label>
                              <select class="form-control" id="PaisEntidad">
                                 <option value="">Seleccionar pais</option>
                                 <?php
                                    $QueryPais= "SELECT [Id País] as IdPais , [Código País] AS CodPais, País AS pais, [Descripción País] AS DescPais, [Orden País], [Id Estado]
                                    FROM País WHERE        ([Código País] IS NOT NULL)";
                                    $ejecutarQueryPais= sqlsrv_query($conn, utf8_decode($QueryPais));
                                    
                                    if ($ejecutarQueryPais === false) {
                                        die(print_r(sqlsrv_errors(), true));
                                    }
                                    $i = 0;
                                    
                                           while ($row = sqlsrv_fetch_array($ejecutarQueryPais)) {
                                             echo '
                                    <option value="'.$row['IdPais'].'">'.utf8_encode($row['DescPais']).'</option>';
                                         }
                                    
                                    ?>
                              </select>
                           </div>
                           <div class="form-group m-b-40 col-md-3  ">
                              <label for="DepartamentoEntidad" >Departamento <span style="color:red;font-size:20px">*</span></label>
                              <select class="form-control" id="DepartamentoEntidad">
                                 <option value="">Seleccionar Departamento</option>
                                 <?php
                                    $QueryDepartamento= "SELECT   [Id Departamento], [Código Departamento] as codDepartamento, Departamento, [Id País] as idPais
                                    
                                    FROM  Departamento";
                                    $ejecutarQueryDepartamento= sqlsrv_query($conn, utf8_decode($QueryDepartamento));
                                    
                                    if ($ejecutarQueryDepartamento === false) {
                                        die(print_r(sqlsrv_errors(), true));
                                    }
                                    $i = 0;
                                    
                                           while ($row = sqlsrv_fetch_array($ejecutarQueryDepartamento)) {
                                             echo '
                                    <option value="'.$row['Id Departamento'].'">'.utf8_encode($row['Departamento']).'</option>';
                                         }
                                    
                                    ?>
                              </select>
                           </div>
                           <div class="form-group m-b-40 col-md-3  ">
                              <label for="CiudadEntidad">Ciudad <span style="color:red;font-size:20px">*</span></label>
                              <select class="form-control" id="CiudadEntidad">
                                 <option value="">Seleccionar Ciudad</option>
                                 <?php
                                    $QueryCiudad = "SELECT  [Id Ciudad],Ciudad, [Código Ciudad] as codCiudad, [Id Departamento] as IdDepartamento
                                    FROM  ciudad";
                                    $ejecutarQueryCiudad = sqlsrv_query($conn, utf8_decode($QueryCiudad));
                                    
                                    if ($ejecutarQueryCiudad === false) {
                                        die(print_r(sqlsrv_errors(), true));
                                    }
                                    $i = 0;
                                    
                                           while ($row = sqlsrv_fetch_array($ejecutarQueryCiudad)) {
                                             echo '
                                    <option value="'.$row['Id Ciudad'].'">'.utf8_encode($row['Ciudad']).'</option>';
                                         }
                                    
                                    ?>
                              </select>
                           </div>
                           <div class="form-group m-b-40 col-md-3  ">
                              <label for="barrioEntidad">Barrio<span style="color:red;font-size:20px">*</span></label>
                              <select class="form-control" id="barrioEntidad">
                                 <option value="">Seleccionar barrio</option>
                                 <?php
                                    $Querybarrio= "SELECT [Id Barrio] as idbarrio, [Código Barrio] AS codbarrio, Barrio, [Id Ciudad]
                                    FROM Barrio";
                                    $ejecutarQuerybarrio= sqlsrv_query($conn, utf8_decode($Querybarrio));
                                    
                                    if ($ejecutarQuerybarrio === false) {
                                        die(print_r(sqlsrv_errors(), true));
                                    }
                                    $i = 0;
                                    
                                           while ($row = sqlsrv_fetch_array($ejecutarQuerybarrio)) {
                                             echo '
                                    <option value="'.$row['idbarrio'].'">'.utf8_encode($row['Barrio']).'</option>';
                                         }
                                    
                                    ?>
                              </select>
                           </div>
                        </div>
                     </div>
                   
                     <div class="row">
                        <div class="form-group m-b-40 col-md-6  ">
                           <label for="SexoEntidad">Sexo<span style="color:red;font-size:20px">*</span></label>
                           <select class="form-control" id="SexoEntidad">
                              <option value="">sin asignar</option>
                              <?php
                                 $QuerySexo= "SELECT [Id Sexo],Sexo, [Descripción Sexo] as DescSexo FROM  Sexo WHERE ([Id Sexo] <> 1)";
                                 $ejecutarQuerySexo= sqlsrv_query($conn, utf8_decode($QuerySexo));
                                 
                                 if ($ejecutarQuerySexo === false) {
                                     die(print_r(sqlsrv_errors(), true));
                                 }
                                 $i = 0;
                                 
                                        while ($row = sqlsrv_fetch_array($ejecutarQuerySexo)) {
                                          echo '
                                 <option value="'.$row['Id Sexo'].'">'.utf8_encode($row['Sexo'])." - ".utf8_encode($row['DescSexo']).'</option>';
                                      }
                                 
                                 ?>
                           </select>
                        </div>
                        <div class="form-group m-b-40 col-md-6  ">
                           <label for="EstadoCivilEntidad">Estado Civil<span style="color:red;font-size:20px">*</span></label>
                           <select class="form-control" id="EstadoCivilEntidad">
                              <option value="">sin asignar</option>
                              <option value="2">Soltero(a))</option>
                              <option value="3">Casado(a)</option>
                              <option value="4">Separado(a)</option>
                              <option value="5">Viudo(a)</option>
                              <option value="6">Unión Libre</option>
                           </select>
                        </div>
                     </div>
                     <!-- <div class="col-md-12" id="DivAseguradora"><h3>Aseguradora</h3><div class="row"><div class="form-group m-b-40 col-md-6  "><label for="NombreAseguradora">Nombre aseguradora</label><select class="form-control" id="NombreAseguradora"><option value="">Seleccionar Aseguradora</option>
                        <?php
                           // $QueryEntPrepagada= "SELECT dbo.[Función Por Entidad].[Id Función], dbo.Entidad.[Documento Entidad] AS DocEntidad, dbo.Función.Función, dbo.Entidad.[Nombre Completo Entidad] AS NomEntidad
                           // FROM dbo.Función INNER JOIN  dbo.[Función Por Entidad] ON dbo.Función.[Id Función] = dbo.[Función Por Entidad].[Id Función] INNER JOIN
                           //                          dbo.Entidad ON dbo.[Función Por Entidad].[Documento Entidad] = dbo.Entidad.[Documento Entidad]
                           // WHERE (dbo.Entidad.[Nombre Completo Entidad] <> N' ') AND (dbo.[Función Por Entidad].[Id Función] = 23) OR
                           //                          (dbo.[Función Por Entidad].[Id Función] = 24)";
                           // $ejecutarQueryEntPrepagada= sqlsrv_query($conn, utf8_decode($QueryEntPrepagada));
                           
                           // if ($ejecutarQueryEntPrepagada === false) {
                           //     die(print_r(sqlsrv_errors(), true));
                           // }
                           // $i = 0;
                           
                           //        while ($row = sqlsrv_fetch_array($ejecutarQueryEntPrepagada)) {
                           //          echo '<option value="'.$row['DocEntidad'].'">'.utf8_encode($row['DocEntidad']).' - '.utf8_encode($row['NomEntidad']).'</option>';
                           //      }
                           
                           ?></select></div><div class="form-group m-b-40 col-md-6  "><label for="TipoVinculoAseguradora">Tipo de vinculo</label><select class="form-control" id="TipoVinculoAseguradora"><option value="">Sin asignar</option><option value="3">Empleado</option><option value="3">Indipendiente</option></select></div></div></div> -->
                     <div class="col-md-12">
                        <h3>Informacion laboral Academica</h3>
                        <div class="row">
                           <div class="form-group m-b-40 col-md-6  ">
                              <label for="NombreInstitucion">Nombre de la Institucion </label>
                              <input type="text" class="form-control" id="NombreInstitucion">
                           </div>
                           <div class="form-group m-b-40 col-md-6  ">
                              <label for="IdEstudioEntidad">Nivel de estudio</label>
                              <select class="form-control" id="IdEstudioEntidad">
                                 <option value="">Sin asignar</option>
                                 <?php
                                    $QueryEstudio= "SELECT [Id Estudio] AS IdEstudio, [Código Estudio] AS CodEstudio, Estudio, [Descripción Estudio], [Orden Estudio], [Id Estado]
                                    FROM  Estudio
                                    WHERE (Estudio IS NOT NULL)";
                                    $ejecutarQueryEstudio= sqlsrv_query($conn, utf8_decode($QueryEstudio));
                                    
                                    if ($ejecutarQueryEstudio === false) {
                                        die(print_r(sqlsrv_errors(), true));
                                    }
                                    $i = 0;
                                    
                                           while ($row = sqlsrv_fetch_array($ejecutarQueryEstudio)) {
                                             echo '
                                    <option value="'.$row['IdEstudio'].'">'.utf8_encode($row['Estudio']).'</option>';
                                         }
                                    
                                    ?>
                              </select>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-12">
                        <h3>Informacion laboral Usuario</h3>
                        <div class="row">
                           <div class="form-group m-b-40 col-md-6  ">
                              <label for="NombreEmpresaEntidad">Nombre de la Empresa </label>
                              <input type="text" class="form-control" id="NombreEmpresaEntidad">
                           </div>
                           <div class="form-group m-b-40 col-md-6  ">
                              <label for="OcupacionEntidad">Ocupacion</label>
                              <select class="form-control" id="OcupacionEntidad">
                                 <option value="">Sin asignar</option>
                                 <?php
                                    $QueryOcupacion= "SELECT [Id Ocupación] as idOcupacion, [Código Ocupación] as CodOcupacion, Ocupación as Ocupacion, [Descripción Ocupación] as DescOcupacion
                                    FROM  Ocupación WHERE        ([Id Ocupación] <> 1)";
                                    $ejecutarQueryOcupacion= sqlsrv_query($conn, utf8_decode($QueryOcupacion));
                                    
                                    if ($ejecutarQueryOcupacion === false) {
                                        die(print_r(sqlsrv_errors(), true));
                                    }
                                    $i = 0;
                                    
                                           while ($row = sqlsrv_fetch_array($ejecutarQueryOcupacion)) {
                                             echo '
                                    <option value="'.$row['idOcupacion'].'">'.utf8_encode($row['Ocupacion']).'</option>';
                                         }
                                    
                                    ?>
                              </select>
                           </div>
                        </div>
                     </div>
                     <!-- empieza div de responsable -->
                     <!-- <div class="col-md-12" id="DivReponsable"><h3>Responsable</h3><div class="row"><div class="form-group m-b-40 col-md-4  "><label for="NombreResponsable">Nombre Responsable</label><input type="text" name="" class="form-control" id="NombreResponsable"></div><div class="form-group m-b-40 col-md-4  "><label for="VinculoResponsable">Tipo de vinculo</label><select class="form-control" id="VinculoResponsable"><option value="1">Sin asignar</option><option value="3">Padre</option><option value="3">Esposo(a)</option><option value="3">Hermano(a)</option><option value="3">Abuelo(a)</option><option value="3">Amigo(a)</option><option value="3">Sobrino(a)</option><option value="3">Yerno/Nuera</option><option value="3">Novio(a)</option><option value="3">Madre</option><option value="3">Compañero(a)</option><option value="3">Primo(a)</option><option value="3">Hijo(a)</option><option value="3">Tio(a)</option><option value="3">Suegro(a)</option><option value="3">Cuñado(a)</option></select></div><div class="form-group m-b-40 col-md-4  "><label for="TelefonoResponsable">telefono Responsable </label><input type="text" name="" class="form-control Numero" maxlength="10" id="TelefonoResponsable"                               "></div></div></div>
                        Termina div de responsable -->
                     <div class="col-md-12">
                        <h3>Entidad prepago Usuario</h3>
                        <div class="row">
                           <div class="form-group m-b-40 col-md-6  ">
                              <label for="DocEntidadPrepagada">Documento Entidad Prepagada</label>
                              <select class="form-control" id="DocEntidadPrepagada">
                                 <option value="">Seleccionar Entidad</option>
                                 <?php
                                    $QueryEntPrepagada= "SELECT [Función Por Entidad].[Id Función], Entidad.[Documento Entidad] AS DocEntidad, Función.Función, Entidad.[Nombre Completo Entidad] AS NomEntidad
                                    FROM            Función INNER JOIN  [Función Por Entidad] ON Función.[Id Función] = [Función Por Entidad].[Id Función] INNER JOIN
                                                             Entidad ON [Función Por Entidad].[Documento Entidad] = Entidad.[Documento Entidad]
                                    WHERE        (Entidad.[Nombre Completo Entidad] <> N' ') AND ([Función Por Entidad].[Id Función] = 24)";
                                    $ejecutarQueryEntPrepagada= sqlsrv_query($conn, utf8_decode($QueryEntPrepagada));
                                    
                                    if ($ejecutarQueryEntPrepagada === false) {
                                        die(print_r(sqlsrv_errors(), true));
                                    }
                                    $i = 0;
                                    
                                           while ($row = sqlsrv_fetch_array($ejecutarQueryEntPrepagada)) {
                                             echo '
                                    <option value="'.$row['DocEntidad'].'">'.utf8_encode($row['DocEntidad']).' - '.utf8_encode($row['NomEntidad']).'</option>';
                                         }
                                    
                                    ?>
                              </select>
                           </div>
                           <div class="form-group m-b-40 col-md-6  ">
                              <label for="TipoEntidadPregapada">Tipo de Afiliado</label>
                              <select class="form-control" id="TipoEntidadPregapada">
                              <?php
                                 $QueryTipoEntPrepagada= "SELECT [Id Tipo de Afiliado], [Código Tipo de Afiliado] as codAfiliado, [Tipo de Afiliado], [Descripción Tipo de Afiliado], [Orden Tipo de Afiliado], [Id Estado]
                                 FROM            [Tipo de Afiliado]
                                 WHERE        ([Tipo de Afiliado] IS NOT NULL)";
                                 $ejecutarQueryTipoEntPrepagada= sqlsrv_query($conn, utf8_decode($QueryTipoEntPrepagada));
                                 
                                 if ($ejecutarQueryTipoEntPrepagada === false) {
                                     die(print_r(sqlsrv_errors(), true));
                                 }
                                 $i = 0;
                                 
                                        while ($row = sqlsrv_fetch_array($ejecutarQueryTipoEntPrepagada)) {
                                          echo '
                                 <option value="'.$row['Id Tipo de Afiliado'].'">'.utf8_encode($row['Tipo de Afiliado']).'</option>';
                                      }
                                 
                                 ?>
                              </select>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-12">
                        <h3>Entidad Eps Usuario</h3>
                        <div class="row">
                           <div class="form-group m-b-40 col-md-6  ">
                              <label for="NombreEntidadEps">Nombre Entidad</label>
                              <select class="form-control" id="NombreEntidadEps">
                                 <option value="">Seleccionar Entidad</option>
                                 <?php
                                    $QueryEntPrepagada= "SELECT [Función Por Entidad].[Id Función], Entidad.[Documento Entidad] AS DocEntidad, Función.Función, Entidad.[Nombre Completo Entidad] AS NomEntidad
                                    FROM            Función INNER JOIN  [Función Por Entidad] ON Función.[Id Función] = [Función Por Entidad].[Id Función] INNER JOIN
                                                             Entidad ON [Función Por Entidad].[Documento Entidad] = Entidad.[Documento Entidad]
                                    WHERE        (Entidad.[Nombre Completo Entidad] <> N' ') AND ([Función Por Entidad].[Id Función] = 23)";
                                    $ejecutarQueryEntPrepagada= sqlsrv_query($conn, utf8_decode($QueryEntPrepagada));
                                    
                                    if ($ejecutarQueryEntPrepagada === false) {
                                        die(print_r(sqlsrv_errors(), true));
                                    }
                                    $i = 0;
                                    
                                           while ($row = sqlsrv_fetch_array($ejecutarQueryEntPrepagada)) {
                                             echo '
                                    <option value="'.$row['DocEntidad'].'">'.utf8_encode($row['DocEntidad']).' - '.utf8_encode($row['NomEntidad']).'</option>';
                                         }
                                    
                                    ?>
                              </select>
                           </div>
                           <div class="form-group m-b-40 col-md-6  ">
                              <label for="TipoEntidadEps">Tipo de Afiliado</label>
                              <select class="form-control" id="TipoEntidadEps">
                                 <option value="">Sin asignar</option>
                                 <?php
                                    $QueryTipoEps= "SELECT [Id Tipo de Afiliado], [Código Tipo de Afiliado] as codAfiliado, [Tipo de Afiliado], [Descripción Tipo de Afiliado], [Orden Tipo de Afiliado], [Id Estado]
                                    FROM            [Tipo de Afiliado]
                                    WHERE        ([Tipo de Afiliado] IS NOT NULL)";
                                    $ejecutarQueryTipoEps= sqlsrv_query($conn, utf8_decode($QueryTipoEps));
                                    
                                    if ($ejecutarQueryTipoEps === false) {
                                        die(print_r(sqlsrv_errors(), true));
                                    }
                                    $i = 0;
                                    
                                           while ($row = sqlsrv_fetch_array($ejecutarQueryTipoEps)) {
                                             echo '
                                    <option value="'.$row['Id Tipo de Afiliado'].'">'.utf8_encode($row['Tipo de Afiliado']).'</option>';
                                         }
                                    
                                    ?>
                              </select>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-12">
                        <h3>Medio que remite</h3>
                        <div class="row">
                           <div class="form-group m-b-40 col-md-6  ">
                              <label for="IdMedioPublicitario">Medio publicitario</label>
                              <select class="form-control" id="IdMedioPublicitario">
                                 <option value="">Seleccionar medio publicitario</option>
                                 <?php
                                    $QueryEntRemite= "SELECT [Id Medio Publicitario], [Medio Publicitario] FROM [Medio Publicitario]";
                                    $ejecutarQueryQueryEntRemite= sqlsrv_query($conn, utf8_decode($QueryEntRemite));
                                    
                                    if ($ejecutarQueryQueryEntRemite === false) {
                                        die(print_r(sqlsrv_errors(), true));
                                    }
                                    $i = 0;
                                    
                                           while ($row = sqlsrv_fetch_array($ejecutarQueryQueryEntRemite)) {
                                             echo '
                                          <option value="'.$row['Id Medio Publicitario'].'">'.utf8_encode($row['Medio Publicitario']).'</option>';
                                         }
                                    
                                    ?>
                              </select>
                           </div>
                           <div class="form-group m-b-40 col-md-6  ">
                              <label for="NombreMedioRemitente">Nombres</label>
                              <input type="text" name="NombreMedioRemitente" maxlength="99" class="form-control Letras" id="NombreMedioRemitente">
                           </div>
                        </div>
                        <div class="col-md-12">
                           <h3>Informacion Extra</h3>
                           <div class="row">
                              <div class="form-group m-b-40 col-md-6  ">
                                 <label for="ObservacionesDoc">Observaciones al doctor </label>
                                 <textarea name="ObservacionesDoc" id="ObservacionesDoc" class="form-control" cols="20" rows="5"></textarea>
                              </div>
                              <div class="form-group m-b-40 col-md-6  ">
                                 <label for="Alergias">Alergias</label>
                                 <input type="text" name="Alergias" id="Alergias" class="form-control" >
                              </div>
                           </div>
                        </div>
                        <!-- <div class="row"><div class="form-group m-b-40 col-md-6  "><label for="NroHistoriaCLinica">Nro Historia CLinica</label><input type="text" value="" disabled="" id="NroHistoriaCLinica" name="NroHistoriaCLinica"  placeholder="" class="form-control" /><span class="bar"></span></div></div> -->
                        <div class="form-group m-b-40 col-md-4" style="margin-left:50%; transform:translateX(-50%)">
                           <div class="custom-control custom-checkbox">
                              <input type="checkbox" class="custom-control-input" id="terminos">
                              <label class="custom-control-label" for="terminos">Aceptar terminos de uso de estos datos <a style="color: blue;" class="nav-link hidden-sm-down waves-effect waves-dark" onclick="window.open('terminos.pdf')">Ver mas</a></label>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-2 col-sm-3" id="DivBotonRegistrar" style="float:right" >
                        <button onclick="IngresarInfo()" id="BotonRegistrar" class="btn btn-info btn btn-block text-uppercase">Registrar</button>
                     </div>
                      <div class="col-md-2 col-sm-3" style="float:right" >
                        <button onclick="ActualizarInfo()" id="BotonActualizar" class="btn btn-info btn btn-block text-uppercase">Actualizar</button>
                     </div>
                     <!-- </div> -->
                  </div>
               </div>
            </div>



           
            <!-- ============================================================== -->
            <!-- End PAge Content -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Right sidebar -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer">
               © 2019 Ceere software
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
         //</div>
         <!-- ============================================================== -->
         <!-- End Page wrapper  -->
         <!-- ============================================================== -->
      </div>
      <!-- ============================================================== -->
      <!-- End Wrapper -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- All Jquery -->
      <!-- ============================================================== -->
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
      <script src="Assest/node_modules/tablesaw-master/dist/tablesaw.js"></script>
      <script src="Assest/node_modules/tablesaw-master/dist/tablesaw-init.js"></script>
      <script src="Assest/node_modules/bootstrap-table/dist/bootstrap-table.min.js"></script>
      <!-- ============================================================== -->
      <!-- Style switcher -->
      <!-- ============================================================== -->
      <script src="Assest/node_modules/styleswitcher/jQuery.style.switcher.js"></script>
      <script type="text/javascript" src="JS/Validaciones.js"></script>
    
   </body>
</html>