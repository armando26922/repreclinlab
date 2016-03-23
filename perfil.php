<!DOCTYPE html>
<html lang="en">

       <?php
          
 include"funciones/establecerConexion.php";
  
 include "funciones/generalphp.php";




                       ?>

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Repreclinlab</title>

    <!-- Bootstrap CSS -->    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="css/elegant-icons-style.css" rel="stylesheet" />
    <link href="css/font-awesome.min.css" rel="stylesheet" />    
    <!-- full calendar css-->
    <link href="assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
  <link href="assets/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" />
    <!-- easy pie chart-->
    <link href="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen"/>
    <!-- owl carousel -->
    <link rel="stylesheet" href="css/owl.carousel.css" type="text/css">
  <link href="css/jquery-jvectormap-1.2.2.css" rel="stylesheet">
    <!-- Custom styles -->
  <link rel="stylesheet" href="css/fullcalendar.css">
  <link href="css/widgets.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />
  <link href="css/xcharts.min.css" rel=" stylesheet"> 
  <link href="css/jquery-ui-1.10.4.min.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></scriptf>
      <script src="js/lte-ie7.js"></script>
    <![endif]-->
  </head>

  <body>
  <!-- container section start -->
  <section id="container" class="">
    
      <!--header end-->
        <?php include "header.php";
        ?>

      <!--sidebar start-->
           <?php 

              include"menu.php";


           $sql=" SELECT usuario.Username_usuario, empleado.nombre_empleado,empleado.apellido_empleado,empleado.CI_empleado,empleado.Status_empleado,empleado.Tipo_empleado,imagen_usuario,
                         empleado.Fecha_Nacimiento_empleado,empleado_cargo.fecha_comienzo,cargo.Nombre_cargo,lugar.Nombre_lugar ,rol.Nombre_rol
                  FROM empleado,empleado_cargo,cargo,lugar,usuario, rol 
                  where cargo.id_cargo=empleado_cargo.fk_cargo and empleado_cargo.fk_empleado=empleado.id_empleado and empleado.fk_lugar=lugar.id_lugar and usuario.fk_empleado=empleado.id_empleado and rol.id_rol=usuario.fk_rol and  Username_usuario='".$_SESSION['usuario']."'";

           $base_db->ejecutar($sql);

           $valor=$base_db->obtener_fila($base_db->getCorrida(),0);

          

            ?>
      <!--sidebar end-->      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
		  <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-user-md"></i> Perfil</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.html">Inicio</a></li>
						<li><i class="icon_documents_alt"></i>Pagina</li>
						<li><i class="fa fa-user-md"></i>Perfil</li>
					</ol>
				</div>
			</div>
              <div class="row">
                <!-- profile-widget -->
                <div class="col-lg-12">
                    <div class="profile-widget profile-widget-info">
                          <div class="panel-body">
                            <div class="col-lg-2 col-sm-2">
                              <h4><?php print(strtoupper($_SESSION["usuario"]));?></h4>               
                              <div class="follow-ava">

                                  <?php
                             //        $direccion=$valor['imagen_usuario'];
                         print("<img  src='".$_SESSION["imagen_usuario"]."' >");
                         ?>
                              </div>
                              </br>
                              <h6><?php print(strtoupper($valor['Nombre_rol'])); ?></h6>
                            </div>
                            <div class="col-lg-4 col-sm-4 follow-info">
                                <p>Hola yo soy  <?php print($valor['nombre_empleado'].'  '.$valor['apellido_empleado'] );?>.</p>
                                <p> correo: <?php print($valor["nombre_empleado"]);?></p>
								<p>Estatus : <?php print($valor["Status_empleado"]);?></p>
                                <h6>
                                </h6>
                            </div>
                           
						
							
                          </div>
                    </div>
                </div>
              </div>
              <!-- page start-->
              <div class="row">
                 <div class="col-lg-12">
                    <section class="panel">
                          <header class="panel-heading tab-bg-info">
                              <ul class="nav nav-tabs">
                                   
                                   

                                   <li >
                                      <a data-toggle="tab" href="#profile">
                                          <i class="icon-user"></i>
                                          Perfil
                                      </a>
                                  </li>
                         
                                 
                              </ul>
                          </header>
                          <div class="panel-body">
                              <div class="tab-content">
                                  
                                  <!-- profile -->
                                  <div id="profile" class="tab-pane active">
                                    <section class="panel">
                                      <div class="bio-graph-heading">
                                                Hola mi nombre es <?php print($valor["nombre_empleado"].'  '.$valor["apellido_empleado"]);?>.
                                      </div>
                                      <div class="panel-body bio-graph-info">
                                          <h1>Biografia</h1>
                                          <div class="row">
                                              <div class="bio-row">
                                                  <p><span>Nombre </span>: <?php print($valor["nombre_empleado"]);?> </p>
                                              </div>
                                              <div class="bio-row">
                                                  <p><span>Apellido </span>: <?php print($valor["apellido_empleado"]);?></p>
                                              </div>                                              
                                              <div class="bio-row">
                                                  <p><span>Fecha Nacimiento</span>: <?php print($valor["Fecha_Nacimiento_empleado"]);?></p>
                                              </div>
                                              <div class="bio-row">
                                                  <p><span>Lugar </span>: <?php print($valor["Nombre_lugar"]);?></p>
                                              </div>
                                              <div class="bio-row">
                                                  <p><span>Cargo </span>: <?php print($valor["Nombre_cargo"]);?></p>
                                              </div>
                                              <div class="bio-row">
                                                  <p><span>Correo </span>:jenifer@mailname.com</p>
                                              </div>
                                              <div class="bio-row">
                                                  <p><span>Celular </span>: (+6283) 456 789</p>
                                              </div>
                                                                                        </div>
                                      </div>
                                    </section>
                                      <section>
                                          <div class="row">                                              
                                          </div>
                                      </section>
                                  </div>
                                  <!-- edit-profile -->

                                  </div>
                                 
                              </div>
                          </div>
                      </section>
                 </div>
              </div>

              <!-- page end-->
          </section>
      </section>
      <!--main content end-->
  </section>
  <!-- container section end -->
    <!-- javascripts -->
 
  <!-- javascripts -->

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- nice scroll -->
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script><!--custome script for all page-->
    <script src="js/scripts.js"></script>

    <script src="datatable.js"></script>
    <link rel="stylesheet" type="text/css" href="jquery.dataTables.css" media="screen" />



    <script src="dataTables.tableTools.js"></script>
    <link rel="stylesheet" type="text/css" href="dataTables.tableTools.css" media="screen" />


<link type="text/css" href="jquery-ui/css/ui-lightness/jquery-ui-1.9.2.custom.css" rel="Stylesheet" />      
<script type="text/javascript" src="jquery-ui/js/jquery-ui-1.9.2.custom.min.js"></script>
 


<!-- librerias de jquery ui-- >
  <link href="css/jquery-ui-1.10.4.min.css" rel="stylesheet">
  <script src="js/jquery-ui-1.10.4.min.js"></script>


<!-- archivos generales--> 
  <link type="text/css" href="funciones/generalcss.css" rel="Stylesheet" />      
  <script type="text/javascript" src="funciones/generaljavascript.js"></script>
  


  <script>

      //knob
      $(".knob").knob();

  </script>


  </body>
</html>
