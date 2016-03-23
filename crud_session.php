<!DOCTYPE html>
<html lang="en">

       <?php
          
 include"funciones/establecerConexion.php";


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

            ?>
      <!--sidebar end-->

      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
          <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header"><i class="fa fa fa-bars"></i><strong>SESSION DEL SISTEMA</strong></h3>
                    
                </div>
          </div>
              <!-- page start-->

           

             <div class="row">    
            <div class="col-lg-1"></div>

            <div class="col-lg-10">


                
            <table id="example"  class="table table-bordered   table-heading table-datatable" cellspacing="0" width="100%">
                    <thead>
                         <tr>
                            <td><strong>Usuario</strong></td>
                            <td><strong>Fecha Acceso</strong></td>
                            <td><strong>Hora Acceso</strong></td>
                            <td><strong>Hora Salida</strong></td> 
                            <td><strong>IP Origen</strong></td> 

                        </tr>
            
                        <tr>
                            <th><strong>Usuario</strong></t>
                            <th><strong>Fecha Acceso</strong></th>
                            <th><strong>Hora Acceso</strong></th>
                            <th><strong>Hora Salida</strong></th> 
                            <th><strong>IP Origen</strong></th> 
                        </tr>
                    </thead>
 
                    <tfoot>
                        <tr>
                            <td><strong>Usuario</strong></td>
                            <td><strong>Fecha Acceso</strong></td>
                            <td><strong>Hora Acceso</strong></td>
                            <td><strong>Hora Salida</strong></td> 
                            <td><strong>IP Origen</strong></td> 
                            
                        </tr>
                    </tfoot>
 
                    <tbody>
                                          
 <?php 

                    $sql="SELECT sesion.id_session,sesion.hora_acceso_session,sesion.hora_salida_session,sesion.ip_origen_session,sesion.fecha_acceso_session,usuario.Username_usuario
                          FROM sesion,usuario
                          WHERE sesion.fk_usuario=usuario.id_usuario";
                    $base_db->ejecutar($sql);
                   
                      while($valor=$base_db->obtener_fila($base_db->getCorrida(),0)) { 
                       print("<tr>");
                       print("<td>".$valor['Username_usuario']."</td>");
                       print("<td>".$valor['fecha_acceso_session']."</td>");
                       print("<td>".$valor['hora_acceso_session']." </td>");
                       print("<td>".$valor['hora_salida_session']."</td>");    
                       print("<td>".$valor['ip_origen_session']."</td>");      
  
                       print("</tr>");
                    
                         
                 }  
              ?>
                    </tbody>
            </table> 
      </div>

      <div class="col-lg-1"></div>

</div>



 <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
                      <div class="modal-dialog">
                          <div class="modal-content">
                              

                              <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                  <h4 class="modal-title selecion"><strong>Session</strong></h4>
                              </div>
                              <div class="modal-body">
                                  <form  id="formulario_agregar_accion" action="ajax/agregarAccion.php"   method ="post">

                                  <p><strong>Agregar Usuario</strong></p>
                                  <input type="text" name="nombre_usuario" placeholder="*usuario" autocomplete="off" class="form-control placeholder-no-fix">                        
                                  <p><strong>Elegir Rol</strong></p>
                                 <select name="country" class="default" tabindex="2">
                                    <option value="AU">Australia</option>
                                     <option value="CA">Canada</option>
                                     <option value="JP">Japan</option>
                                     <option value="GB">United Kingdom</option>
                                     <option value="US">United States</option>
                                     </select>

                                   <p><strong>Elegir Empleado</strong></p>
                                  <select class="defaultw" >
                                        <option value ="sydney">armando</option>
                                        <option value ="melbourne">pedro</option>
                                        <option value ="cromwell" selected>Carmer</option>
                                        <option value ="queenstown">roberto</option>
                                  </select>
                                  </br>
                                  </br>



                                  <button id="boton_agregar" data-dismiss="modal" class="btn btn-success" type="summit"><strong> Agregar</strong></button>

                                   </form>

                              
                              </div>
                              <div class="modal-footer">
                                    <button data-dismiss="modal" class="btn btn-default" type="button"><strong>Cancelar</strong></button>

                                        
                              </div>
                          

                          </div>
                      </div>
  </div>

  <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="modalEliminar" class="modal fade">
                      <div class="modal-dialog">
                          <div class="modal-content">
                              

                              <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                  <h4 class="modal-title selecion"><strong>Eliminar Usuario</strong></h4>
                              </div>
                              <div class="modal-body">
                                 <center><p><strong>Esta seguro de eliminar el usuario ?</strong></p></center> 
                              
                              </div>
                              <div class="modal-footer">
                              <div class="row">
                                  <div class="col-lg-2">
                                    <button data-dismiss="modal" class="btn btn-danger" type="button"><strong>Elimnar</strong></button>  
                                  </div>
                                  <div class="col-lg-8">
                                   </div> 
                                  <div class="col-lg-2">
                                   
                                    <button data-dismiss="modal" class="btn btn-default" type="button"><strong>Cancelar</strong></button>       
                                   </div>
                        
                              </div>
                          

                          </div>
                      </div>
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


<link type="text/css" href="jquery-ui/css/ui-lightness/jquery-ui-1.9.2.custom.css" rel="Stylesheet" />      
<script type="text/javascript" src="jquery-ui/js/jquery-ui-1.9.2.custom.min.js"></script>
 


<!-- librerias de jquery ui-- >
  <link href="css/jquery-ui-1.10.4.min.css" rel="stylesheet">
  <script src="js/jquery-ui-1.10.4.min.js"></script>


<!-- archivos generales--> 
  <link type="text/css" href="funciones/generalcss.css" rel="Stylesheet" />      
  <script type="text/javascript" src="funciones/generaljavascript.js"></script>
  



<script>
$(document).ready(function(){

$( "#fecha_acceso_session" ).datepicker();


       
   var table = $('#example').DataTable({
    "bLengthChange": false,
      "iDisplayLength": 8,

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
