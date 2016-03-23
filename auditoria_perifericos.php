<!DOCTYPE html>
<html lang="en">
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
     
      
      <header class="header dark-bg">
            <div class="toggle-nav">
                <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"></div>
            </div>

            <!--logo start-->
            <a href="index.php" class="logo">Repre<span class="lite">Clinlab</span></a>
            <!--logo end-->

            <div class="nav search-row" id="top_menu">
                <!--  search form start -->
                <ul class="nav top-menu">                    
                    <li>
                        <form class="navbar-form">
                            <input class="form-control" placeholder="Search" type="text">
                        </form>
                    </li>                    
                </ul>
                <!--  search form end -->                
            </div>

            <div class="top-nav notification-row">                
                <!-- notificatoin dropdown start-->
                <ul class="nav pull-right top-menu">
                    
                    
                        <!-- user login dropdown start-->
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="profile-ava">
                                <img alt="" src="img/avatar1_small.jpg">
                            </span>
                            <span class="username">Jenifer Smith</span>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu extended logout">
                            <div class="log-arrow-up"></div>
                            <li class="eborder-top">
                                <a href="#"><i class="icon_profile"></i> Mi Perfil</a>
                            </li>
                            <li>
                                <a href="#"><i class="icon_mail_alt"></i> Mis Mensajes</a>
                            </li>
                           
                            <li>
                                <a href="#"><i class="icon_chat_alt"></i> Chats</a>
                            </li>
                            <li>
                                <a href="login.html"><i class="icon_key_alt"></i> Log Out</a>
                            </li>
                           
                            <li>
                                <a href="documentation.html"><i class="icon_key_alt"></i> Documentation</a>
                            </li>
                        </ul>
                    </li>
                    <!-- user login dropdown end -->
                </ul>
                <!-- notificatoin dropdown end-->
            </div>
      </header>      
      <!--header end-->

      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu">                
                  <li>
                      <a class="" href="index.php">
                          <i class="icon_house_alt"></i>
                          <span>Escritorio</span>
                      </a>
                  </li>
                  <li>
                      <a class="" href="#">
                          <i class="icon_house_alt"></i>
                          <span>Control de Llamadas</span>
                      </a>
                  </li>
                  <li>
                      <a class="" href="#">
                          <i class="icon_house_alt"></i>
                          <span>Inventario</span>
                      </a>
                  </li>
          <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon_document_alt"></i>
                          <span>Servicio</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="" href="crud_equipo.php">Equipos</a></li>                          
                          <li><a class="" href="crud_repuesto.php">Repuestos</a></li>
                          <li><a class="" href="crud_periferico.php">Perifericos</a></li>                          
                          <li><a class="" href="crud_linea.php">Lineas</a></li>
                          <li><a class="" href="crud_marca.php">Marcas</a></li>

                      </ul>
                  </li>       
                  <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon_desktop"></i>
                          <span>Administracion</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="" href="crud_cliente.php">Clientes</a></li>
                          <li><a class="" href="crud_empleado.php">Empleados</a></li>
                          <li><a class="" href="crud_cargo.php">Cargos</a></li>
                          <li><a class="" href="crud_empleado_cargo.php">Empleados por Cargos</a></li>
                          <li><a class="" href="crud_lugar">Direcciones</a></li>
                          <li><a class="" href="crud_telefono.php">Telefonos</a></li>



                      </ul>
                  </li>      
                  <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon_table"></i>
                          <span>Reportes</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="" href="reportes_generales.php">Reportes Generales</a></li>
                          <li><a class="" href="reportes_graficos.php">Reportes Graficos</a></li>

                      </ul>
                  </li>
                  
                  <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon_documents_alt"></i>
                          <span>Seguridad</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">                          
                          <li><a class="" href="crud_usuario.php">Usuarios</a></li>
                          <li><a class="" href="crud_rol.php"><span> Roles</span></a></li>
                          <li><a class="" href="crud_accion.php">Acciones</a></li>
                          <li><a class="" href="crud_accion_rol.php">Acciones por Rol</a></li>
                          <li><a class="" href="crud_session.php">Sessiones</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon_documents_alt"></i>
                          <span>Auditoria</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">                          
                          <li><a class="" href="auditoria_equipos.php">Equipos</a></li>
                          <li><a class="" href="auditoria_repuestos.php"><span>Repuestos</span></a></li>
                          <li><a class="" href="auditoria_perifericos.php">Perifericos</a></li>
                          <li><a class="" href="auditoria_clientes.php">Clientes</a></li>
                          <li><a class="" href="auditoria_usuarios.php">Usuarios</a></li>
                      </ul>
                  </li>
                  
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->

      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
		  <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa fa-bars"></i><strong>Usuarios del Sistema</strong></h3>
					
			    </div>
		  </div>
              <!-- page start-->

            

             <div class="row">    
   
            <div class="col-lg-12">


                
            <table id="example"  class="table table-bordered   table-heading table-datatable" cellspacing="0" width="100%">
                    <thead>
                         <tr>
                            <td><strong>Tabla Modificada</strong></td>
                            <td><strong>Operacion Realizada</strong></td>
                            <td><strong>Campos Modificados</strong></td>
                            <td><strong>Dato Antiguo</strong></td>
                            <td><strong>Dato Modificado</strong></td>
                            <td><strong>Fecha de Registro</strong></td>
                            <td><strong>Hora de Registro</strong></td>
                             
                        </tr>
            
                        <tr>
                            <th><strong>Tabla Modificada</strong></th>
                            <th><strong>Operacion Realizada</strong></th>
                            <th><strong>Campos Modificados</strong></th>
                            <th><strong>Dato Antiguo</strong></th>
                            <th><strong>Dato Modificado</strong></th>
                            <th><strong>Fecha de Registro</strong></th>
                            <th><strong>Hora de Registro</strong></th>
                         </tr>
                    </thead>
 
                    <tfoot>
                        <tr>
                            <td><strong>Tabla Modificada</strong></td>
                            <td><strong>Operacion Realizada</strong></td>
                            <td><strong>Campos Modificados</strong></td>
                            <td><strong>Dato Antiguo</strong></td>
                            <td><strong>Dato Modificado</strong></td>
                            <td><strong>Fecha de Registro</strong></td>
                            <td><strong>Hora de Registro</strong></td> 
                        </tr>
                    </tfoot>
 
                    <tbody>
                        <tr>
                            <td>Michael Bruce</td>
                            <td>Javascript Developer</td>
                            <td>Singapore</td>
                            <td>Michael Bruce</td>
                            <td>Javascript Developer</td>
                            <td>Singapore</td>
                            <td>Michael Bruce</td>
                        </tr>
            
                        <tr>
                            <td>Michael Bruce</td>
                            <td>Javascript Developer</td>
                            <td>Singapore</td>
                            <td>Michael Bruce</td>
                            <td>Javascript Developer</td>
                            <td>Singapore</td>
                            <td>Michael Bruce</td>
                        </tr>
                    </tbody>
            </table> 
      </div>

      

</div>





              <!-- page end-->
          </section>
      </section>
      <!--main content end-->
  </section>
  <!-- container section end -->
    


  

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
  <!--combo box-->
    <script src="dropKick/jquery.dropkick.js"></script>
    <script src="dropKick/jquery.dropkick-min.js"></script>
    <link rel="stylesheet" href="dropKick/dropkick.css" type="text/css">



<script>
$(document).ready(function(){

       
   var table = $('#example').DataTable({
    "bLengthChange": false,

     dom: 'T<"clear">lfrtip',
     tableTools: {
            "sSwfPath": "copy_csv_xls_pdf.swf",
            "aButtons": [
                "copy",
                "csv",
                "xls",
                {
                    "sExtends": "pdf",
                    "sPdfOrientation": "landscape",
                    "sPdfMessage": "Propiedad de la Empresa Repreclinlab"
                },
                "print"
            ]
        }
});



  $('#example thead th').each( function () {
        var title = $('#example thead td').eq( $(this).index() ).text();
        $(this).html( '<input type="text" placeholder="Buscar '+title+'" />' );
    });


  table.columns().every(function () {
        var that = this; 
        $( 'input', this.header()).on( 'keyup change', function () {
            that.search(this.value).draw();
        } );
    } );



    $('#boton_modificar').attr("disabled", true);
    $('#boton_eliminar').attr("disabled", true);


 
    $('#example tbody').on( 'click', 'tr', function () {
        if ( $(this).hasClass('selected') ) {
            $(this).removeClass('selected');
           $('#boton_modificar').attr("disabled", true);
            $('#boton_eliminar').attr("disabled", true);


        }
        else {
            table.$('tr.selected').removeClass('selected');
            $(this).addClass('selected');
            $('#boton_modificar').attr("disabled", false);
            $('#boton_eliminar').attr("disabled", false);


        }
    } );

   $('.default').dropkick();







    $('#boton_eliminar').click( function () {
        table.row('.selected').remove().draw( false );
    } );
} );

</script>

  </body>
</html>
