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
                    <h3 class="page-header"><i class="fa fa fa-bars"></i><strong>Empleados</strong></h3>
                    
                </div>
          </div>
              <!-- page start-->

                  

            <div class="row">    
          
            <div class="col-lg-12">
             <div class="btn-group" role="group">
                        <button class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                           <strong>  Agregar Empleado</strong>
                        </button>
        
                        <button id="boton_modificar" class="btn btn-info" data-toggle="modal" data-target="#Modal_modificar">
                         <strong>   Modificar Empleado </strong>
                        </button>
            
                        <button id="boton_eliminar" class="btn btn-danger" data-toggle="modal" data-target="#modalEliminar">
                           <strong> Eliminar Empleado</strong>
                        </button>     
             </div>

                
            <table id="example"  class="table table-bordered   table-heading table-datatable" cellspacing="0" width="100%">
                    <thead>
                         <tr>
                            <td><strong>id_empleado</strong></td>
                            <td><strong>CI</strong></td>
                            <td><strong>Nombre Empleado</strong></td>
                            <td><strong>Apellido Empleado</strong></td>
                            <td><strong>Tipo Empleado</strong></td>
                            <td><strong>Fecha Nacimiento</strong></td>
                            <td><strong>Fecha Registro</strong></td>
                            <td><strong>Estatus</strong></td>
                            <td><strong>Direccion</strong></td>
                            <td><strong>Sucursal</strong></td>
                            <td><strong>Fecha Ingreso</strong></td>
                        </tr>
            
                        <tr>
                            <th><strong>id_empleado</strong></th>
                            <th><strong>CI</strong></th>
                            <th><strong>Nombre Empleado</strong></th>
                            <th><strong>Apellido Empleado</strong></th>
                            <th><strong>Tipo Empleado</strong></th>
                            <th><strong>Fecha Nacimiento</strong></th>
                            <th><strong>Fecha Registro</strong></th>
                            <th><strong>Estatus</strong></th>
                            <th><strong>Direccion</strong></th>
                            <th><strong>Sucursal</strong></th>
                            <th><strong>Fecha Ingreso</strong></th>

                        </tr>
                    </thead>
 
                    <tfoot>
                        <tr>
                            <td><strong>id_empleado</strong></td>
                            <td><strong>CI</strong></td>
                            <td><strong>Nombre Empleado</strong></td>
                            <td><strong>Apellido Empleado</strong></td>
                            <td><strong>Tipo Empleado</strong></td>
                            <td><strong>Fecha Registro</strong></td>
                            <td><strong>Fecha Nacimiento</strong></td>
                            <td><strong>Estatus</strong></td>
                            <td><strong>Direccion</strong></td>
                            <td><strong>Sucursal</strong></td>
                            <td><strong>Fecha Ingreso</strong></td>


                        </tr>
                    </tfoot>
 
                    <tbody>


                     <?php 

                    $sql="SELECT  empleado.id_empleado,
empleado.CI_empleado,
empleado.nombre_empleado,
empleado.apellido_empleado,
empleado.Status_empleado,
empleado.Tipo_empleado,
empleado.Fecha_Nacimiento_empleado,
empleado.Fecha_ingreso_empleado,
empleado.Fecha_inicio_empleado,
sucursal.nombre_sucursal,
lugar.Nombre_lugar 
FROM  empleado ,sucursal,lugar 
where sucursal.id_sucursal=empleado.fk_sucursal and 
      empleado.fk_lugar=lugar.id_lugar";
                    $base_db->ejecutar($sql);
                   
                      while($valor=$base_db->obtener_fila($base_db->getCorrida(),0)) { 
                       print("<tr>");
                       print("<td>".$valor['id_empleado']."</td>");
                       print("<td>".$valor['CI_empleado']."</td>");
                       print("<td>".$valor['nombre_empleado']."</td>");
                       print("<td>".$valor['apellido_empleado']."</td>");
                       print("<td>".$valor['Tipo_empleado']."</td>");
                       print("<td>".$valor['Fecha_Nacimiento_empleado']."</td>");
                       print("<td>".$valor['Fecha_ingreso_empleado']."</td>");
                       print("<td>".$valor['Status_empleado']."</td>");
                       print("<td>".$valor['Nombre_lugar']."</td>");
                       print("<td>".$valor['nombre_sucursal']."</td>");
                       print("<td>".$valor['Fecha_inicio_empleado']."</td>");

                       print("</tr>");
                    
                         
                 }  
              ?>

                    </tbody>
            </table> 
        </div>
    
 <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
                      <div class="modal-dialog">
                          <div class="modal-content">
                              

                              <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                  <h4 class="modal-title selecion"><strong>Empleado</strong></h4>
                              </div>
                              <div class="modal-body">
                                  <form  id="formulario_agregar_accion" action="ajax/agregarAccion.php"   method ="post">

                                  <p>CI</p>
                                  <input id="ci_empleado_agregar" type="text" name="ci_empleado_agregar" placeholder="*No CI" autocomplete="off" class="form-control placeholder-no-fix">                        
                                
                                  <p>Nombre Empleado</p>
                                  <input id="nombre_empleado_agregar" type="text" name="nombre_empleado_agregar" placeholder="*Primer Nombre" autocomplete="off" class="form-control placeholder-no-fix">                        

                                  <p>Apellido Empleado</p>
                                  <input id="apellido_empleado_agregar" type="text" name="apellido_empleado_agregar" placeholder="*Segundo Nombre" autocomplete="off" class="form-control placeholder-no-fix">                        


                                   <p><strong>Tipo Empleado</strong></p>
                                 <select id="tipo_empleado"  name="status_cliente" class="default" tabindex="2">
                                     <option value="fijo">Fijo</option>
                                     <option value="contratado">Contratado</option>
                                 </select>

                                  <p><strong>Estatus Empleado</strong></p>
                                 <select id="status_empleado"  name="status_cliente" class="default" tabindex="2">
                                     <option value="activo">activo</option>
                                     <option value="inactivo">inactivo</option>
                                 </select>
                                    <p>Fecha Nacimiento</p>
                                    <input id="fecha_nacimiento_empleado_agregar" type="date" name="fecha">

                                       <p>Fecha Ingreso</p>
                                    <input id="fecha_ingreso_empleado_agregar" type="date" name="fecha">
                                    
                                      <p>Sucursal</p>
                                   <select id="id_sucursal_empleado" class="default"  tabindex="2">
                           <?php 
                      

                               $sql="SELECT sucursal.id_sucursal,sucursal.nombre_sucursal
                                 FROM  sucursal ";
                               $base_db->ejecutar($sql);


                      while($valor=$base_db->obtener_fila($base_db->getCorrida(),0)) { 
                                
          
                          print("<option value='".$valor['id_sucursal']."'>".$valor['nombre_sucursal']."</option>");
                 }  
              ?>
          
                                  </select>

                              <p>Direccion</p>
                                   <select id="id_direccion_empleado" class="default"  tabindex="2">
                           <?php 
                      

                               $sql="SELECT lugar.id_lugar,lugar.Nombre_lugar
                                 FROM  lugar ";
                               $base_db->ejecutar($sql);


                      while($valor=$base_db->obtener_fila($base_db->getCorrida(),0)) { 
                                
          
                          print("<option value='".$valor['id_lugar']."'>".$valor['Nombre_lugar']."</option>");
                 }  
              ?>                         
                                  </select>

              </br>


                                   </form>

                              
                              </div>

                              <div class="modal-footer">
                              <div class="row">
                               <div class="col-lg-2">
                                                                   <button id="boton_agregar" data-dismiss="modal" class="btn btn-success" type="summit"><strong>Agregar</strong></button>


                               </div>
                               <div class="col-lg-8"></div>
 
                              
                               
                                    <button data-dismiss="modal" class="btn btn-default" type="button"><strong> Cancelar</strong></button>

                              </div>          
                              </div>
                          

                          </div>
                      </div>
                  </div>

<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="Modal_modificar" class="modal fade">
                      <div class="modal-dialog">
                          <div class="modal-content">
                              

                              <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                  <h4 class="modal-title selecion"><strong>Modificar Empleado</strong></h4>
                              </div>
                              <div class="modal-body">
                                  <form  id="formulario_agregar_accion" action="ajax/agregarAccion.php"   method ="post">

                                  <p>CI</p>
                                  <input id="ci_empleado_modificar" type="text" name="ci_empleado_modificar" placeholder="*No CI" autocomplete="off" class="form-control placeholder-no-fix">                        
                                
                                  <p>Nombre Empleado</p>
                                  <input id="nombre_empleado_modificar" type="text" name="nombre_empleado_modificar" placeholder="*Primer Nombre" autocomplete="off" class="form-control placeholder-no-fix">                        

                                  <p>Apellido Empleado</p>
                                  <input id="apellido_empleado_modificar" type="text" name="apellido_empleado_modificar" placeholder="*Segundo Nombre" autocomplete="off" class="form-control placeholder-no-fix">                        


                                   <p><strong>Tipo Empleado</strong></p>
                                 <select id="tipo_empleado_modificar"  name="status_cliente" class="default" tabindex="2">
                                     <option value="fijo">Fijo</option>
                                     <option value="contratado">Contratado</option>
                                 </select>

                                  <p><strong>Estatus Empleado</strong></p>
                                 <select id="status_empleado_modificar"  name="status_cliente" class="default" tabindex="2">
                                     <option value="activo">activo</option>
                                     <option value="inactivo">inactivo</option>
                                 </select>
                                    <p>Fecha Nacimiento</p>
                                    <input id="fecha_nacimiento_empleado_modificar" type="date" name="fecha">

                                       <p>Fecha Ingreso</p>
                                    <input id="fecha_ingreso_empleado_modificar" type="date" name="fecha">
                                      <p>Sucursal</p>
                                   <select id="id_sucursal_modificar" class="default"  tabindex="2">
                           <?php 
                      

                               $sql="SELECT sucursal.id_sucursal,sucursal.nombre_sucursal
                                 FROM  sucursal ";
                               $base_db->ejecutar($sql);


                      while($valor=$base_db->obtener_fila($base_db->getCorrida(),0)) { 
                                
          
                          print("<option value='".$valor['id_sucursal']."'>".$valor['nombre_sucursal']."</option>");
                 }  
              ?>
          
                                  </select>

                              <p>Direccion</p>
                                   <select id="id_direccion_empleado_modificar" class="default"  tabindex="2">
                           <?php 
                      

                               $sql="SELECT lugar.id_lugar,lugar.Nombre_lugar
                                 FROM  lugar ";
                               $base_db->ejecutar($sql);


                      while($valor=$base_db->obtener_fila($base_db->getCorrida(),0)) { 
                                
          
                          print("<option value='".$valor['id_lugar']."'>".$valor['Nombre_lugar']."</option>");
                 }  
              ?>                         
                                  </select>

              </br>

                                  <button id="boton_cambio" data-dismiss="modal" class="btn btn-success" type="summit"><strong>Modificar</strong></button>

                                   </form>

                              
                              </div>
                              <div class="modal-footer">
                                    <button data-dismiss="modal" class="btn btn-default" type="button"><strong> Cancelar</strong></button>

                                        
                              </div>
                          

                          </div>
                      </div>
                  </div>


    <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="modalEliminar" class="modal fade">
                      <div class="modal-dialog">
                          <div class="modal-content">
                              

                              <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                  <h4 class="modal-title selecion"><strong>Eliminar Repuesto</strong></h4>
                              </div>
                              <div class="modal-body">
                                 <center><p><strong>Esta seguro de eliminar el Repuesto ?</strong></p></center> 
                              
                              </div>
                              <div class="modal-footer">
                              <div class="row">
                                  <div class="col-lg-2">
                                    <button id="boton_eliminar_final" data-dismiss="modal" class="btn btn-danger" type="button"><strong>Elimnar</strong></button>  
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

$( "#tipo_empleado" ).combobox();
$( "#status_empleado" ).combobox();
$( "#id_direccion_empleado" ).combobox();
$( "#id_sucursal_empleado" ).combobox();



$( "#tipo_empleado_modificar" ).combobox();
$( "#status_empleado_modificar" ).combobox();
$( "#id_direccion_empleado_modificar" ).combobox();
$( "#id_sucursal_modificar" ).combobox();



function ajax_modificar(){
//alert('d');
 $.ajax({

   url: 'modificar_tabla.php',
         type:"post",
         data: {      nombre_tabla:'empleado',  //nombre de la tabla
                      numero_atributos:9,
                      id_objeto: table.row('.selected').data()[0],
                 
               
                      nombre_atributo1:'CI_empleado',
                      esNumero1:1,
                      valor_atributo1:$('#ci_empleado_modificar').val(),

                      nombre_atributo2:'nombre_empleado',
                      esNumero2:1,
                      valor_atributo2:$('#nombre_empleado_modificar').val(),

                      nombre_atributo3:'apellido_empleado',
                      esNumero3:1,
                      valor_atributo3:$('#apellido_empleado_modificar').val(),

                      nombre_atributo4:'Tipo_empleado',
                      esNumero4:1,
                      valor_atributo4:$('#tipo_empleado_modificar').val(),

                      nombre_atributo5:'Status_empleado',
                      esNumero5:1,
                      valor_atributo5:$('#status_empleado_modificar').val(),

                      nombre_atributo6:'Fecha_Nacimiento_empleado',
                      esNumero6:1,
                      valor_atributo6:$('#fecha_nacimiento_empleado_modificar').val(),

                      nombre_atributo7:'fk_lugar',
                      esNumero7:0,
                      valor_atributo7:$('#id_direccion_empleado_modificar').val(),

                      nombre_atributo8:'fk_sucursal',
                      esNumero8:0,
                      valor_atributo8:$('#id_sucursal_modificar').val(),

                      nombre_atributo9:'Fecha_inicio_empleado',
                      esNumero9:1,
                      valor_atributo9:$('#fecha_ingreso_empleado_modificar').val()

                //      nombre_atributo9:'Fecha_ingreso_empleado',
              //        esNumero9:1,
//                      valor_atributo9: nueva_fecha


             },
               success:function(data,textStatus,jqXHR){
             
          alert(data);
          if(data=='error'){
                    alert('Error al agregar la marca no se aceptan marcas duplicadas');
             }else{
                var id=table.row('.selected').data()[0];
                var fecha=table.row('.selected').data()[9];
                alert('se modifico con exito');
               table.row('.selected').remove().draw( false );
               table.row.add([parseInt(id),$('#ci_empleado_modificar').val(),$('#nombre_empleado_modificar').val(),$('#apellido_empleado_modificar').val(),$('#tipo_empleado_modificar option:selected').text(),$('#fecha_nacimiento_empleado_modificar').val(),fecha,$('#id_direccion_empleado_modificar option:selected').text(),$('#status_empleado_modificar option:selected').text(),$('#id_sucursal_empleado option:selected').text()],$('#fecha_ingreso_empleado_modificar').val()).draw(false);

              }


         },
           
         error:function(jqXHR,textStatus,errorThrown)
        {

           alert("error");

        }

  });
}// final de ajax modificar



////////////////////////////////////////////////////////////////////////////////////////////////////////////
function ajax_agregar(){
   var f = new Date(); 
   var nueva_fecha=f.getFullYear()+ "-" + (f.getMonth() +1) + "-" +f.getDate(); 
  // alert(nueva_fecha);
    $.ajax({

             url: 'agregar_tabla.php',
             type:"post",
             data: {  nombre_tabla:'empleado',  //nombre de la tabla
                      numero_atributos:9,
               
                      nombre_atributo1:'CI_empleado',
                      esNumero1:1,
                      valor_atributo1:$('#ci_empleado_agregar').val(),

                      nombre_atributo2:'nombre_empleado',
                      esNumero2:1,
                      valor_atributo2:$('#nombre_empleado_agregar').val(),

                      nombre_atributo3:'apellido_empleado',
                      esNumero3:1,
                      valor_atributo3:$('#apellido_empleado_agregar').val(),

                      nombre_atributo4:'Tipo_empleado',
                      esNumero4:1,
                      valor_atributo4:$('#tipo_empleado').val(),

                      nombre_atributo5:'Status_empleado',
                      esNumero5:1,
                      valor_atributo5:$('#status_empleado').val(),

                      nombre_atributo6:'Fecha_Nacimiento_empleado',
                      esNumero6:1,
                      valor_atributo6:$('#fecha_nacimiento_empleado_agregar').val(),

                      nombre_atributo7:'fk_lugar',
                      esNumero7:0,
                      valor_atributo7:$('#id_direccion_empleado').val(),

                      nombre_atributo8:'fk_sucursal',
                      esNumero8:0,
                      valor_atributo8:$('#id_sucursal_empleado').val(),

                      nombre_atributo9:'Fecha_ingreso_empleado',
                      esNumero9:1,
                      valor_atributo9: nueva_fecha,

                      nombre_atributo10:'Fecha_inicio_empleado',
                      esNumero10:1,
                      valor_atributo10: $("#fecha_ingreso_empleado_agregar").val()


             },
         success:function(data,textStatus,jqXHR){
          //   alert(data);

             if(data=='error'){
                    alert('Error al agregar la marca no se aceptan marcas duplicadas');
             }else{

                alert('se agrego con exito');
               table.row.add([parseInt(data),$('#ci_empleado_agregar').val(),$('#nombre_empleado_agregar').val(),$('#apellido_empleado_agregar').val(),$('#tipo_empleado option:selected').text(),$('#fecha_nacimiento_empleado_agregar').val(),nueva_fecha,$('#status_empleado option:selected').text(),$('#id_direccion_empleado option:selected').text(),$('#id_sucursal_empleado option:selected').text(),$('#fecha_ingreso_empleado_agregar').val()]).draw(false);
              }
 
        
         },
           
         error:function(jqXHR,textStatus,errorThrown)
        {

          alert("error");

        }
  });

}



////////////
function ajax_eliminar(){   ///// inicio de la funcion ajax_eliminar


  $.ajax({ //inicio ajax insertar

   url: 'eliminar_tabla.php',
         type:"post",
   
     data: {  nombre_tabla:'empleado',                  //nombre de la tabla
             id_objeto:table.row('.selected').data()[0] },
         success:function(data,textStatus,jqXHR){
             
        // alert(data);
         table.row('.selected').remove().draw( false );
         $('#boton_modificar').attr("disabled", true);
         $('#boton_eliminar').attr("disabled", true);



         },
           
         error:function(jqXHR,textStatus,errorThrown)
        {

           alert("error");

        }

  });// fin ajax eliminar



}///fin de la funcion ajax_eliminar






function ajax_permiso(accion,permiso){ // inicio de ajax_permiso

 // alert('entrooo');
$.ajax({

   url: 'permiso.php',
         type:"post",
   data: {    //nombre de la tabla
            permiso: permiso 
          },
         success:function(data,textStatus,jqXHR){
       
        if (accion=='agregar'){
             
           if(data=='true'){
              
           //  alert('agrego');
                  ajax_agregar(); 
          }
          else{
             alert('no tiene permiso para '+permiso);
          }
          
        }
       if (accion=='eliminar'){
             
           if(data=='true'){
              
           //  alert('agrego');
                  ajax_eliminar(); 
          }
          else{
             alert('no tiene permiso para '+permiso);
          }
          
        }

         if (accion=='modificar'){
             
           if(data=='true'){
              
           //  alert('agrego');
                  ajax_modificar(); 
          }
          else{
             alert('no tiene permiso para '+permiso);
          }
          
        }


  },           
         error:function(jqXHR,textStatus,errorThrown)
        {

           alert("error");

        }
  });


}  /// fin de ajax_permiso





////////////////////////////////////////////////////////////////////////////////////////////////////////////

   


   var table = $('#example').DataTable({
    "bLengthChange": false,
          "iDisplayLength": 8,
         // "scrollX": true,

"columnDefs": [
            {
                "targets": [0],
                "visible": false
            }
        ],
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

 




////////////////////////////////////////////////////////////////////////////////////////
var id_marca;
//boton de el modal

$('#boton_modificar').click(function() {
  
  datos_usuario=table.row('.selected').data();

  //$("#id_marca_modificar").val(datos_marca[0]);
  $("#nombre_empleado_modificar").val(datos_usuario[2]);
  $("#ci_empleado_modificar").val(datos_usuario[1]);
  $("#ci_empleado_modificar").attr({
    disabled: true
  });

  $("#apellido_empleado_modificar").val(datos_usuario[3]);
  $("#fecha_nacimiento_empleado_modificar").val(datos_usuario[5]);

  //$("#clave_usuario_modificar").val(datos_usuario[2]);
 // $("#").val(datos_usuario[3]);
  //$("#nombre_marca_modificar").val(datos_usuario[4]);




 });



$('#boton_cambio').click(function() {

  ajax_permiso('modificar','modificar empleado');

 });


$('#boton_eliminar_final').click(function(){

   ajax_permiso('eliminar','eliminar empleado'); 

});



$('#boton_agregar').click(function(){

   ajax_permiso('agregar','agregar empleado'); 

});

//////////////////////////////////////////////////////////////////////////////////////////

});

</script>

  </body>
</html>
