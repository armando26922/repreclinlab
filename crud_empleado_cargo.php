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
					<h3 class="page-header"><i class="fa fa fa-bars"></i><strong>Asignar o eliminar empleado del cargo</strong></h3>

				</div>
		  </div>
              <!-- page start-->
   <div class="row">
                     <div class="col-lg-1">
                     </div>
                      <div class="col-lg-8">
    

<div class="btn-group" role="group">
                        <button class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                           <strong>  Agregar empleado al cargo</strong>
                        </button>
        
                        <button id="boton_modificar" class="btn btn-info" data-toggle="modal" data-target="#ModalModificar">
                         <strong>   Modificar empleado al cargo </strong>
                        </button>
            
                        <button id="boton_eliminar" class="btn btn-danger" data-toggle="modal" data-target="#modalEliminar">
                           <strong> Eliminar empleado al cargo</strong>
                        </button>     
             </div>
             </div>
             <div class="col-lg-1">
                 
             </div>
            </div>

            <div class="row">    
            <div class="col-lg-1"></div>

            <div class="col-lg-10">
                

                
            <table id="example"  class="table table-bordered   table-heading table-datatable" cellspacing="0" width="100%">
                    <thead>
                         <tr>
                            <td><strong>id_empleado_cargo</strong></td>
                            <td><strong>nombre del empleado</strong></td>
                            <td><strong>nombre del cargo</strong></td>
                            <td><strong>Fecha de Registro</strong></td>
                            <td><strong>Fecha Inicio</strong></td>
                            <td><strong>Fecha de culminacion</strong></td>
                           
                        </tr>
            
                        <tr>
                            <td><strong>id_empleado_cargo</strong></td>
                            <th><strong>nombre del empleado</strong></th>
                            <th><strong>nombre del cargo</strong></th>
                            <th><strong>Fecha Registro</strong></th>
                            <th><strong>Fecha Inicio</strong></th>
                            <th><strong>Fecha de culminacion</strong></th>
                        </tr>
                    </thead>
 
                    <tfoot>
                        <tr>
                            <td><strong>id_empleado_cargo</strong></td>
                            <td><strong>nombre del empleado</strong></td>
                            <td><strong>nombre del cargo</strong></td>
                            <td><strong>Fecha Registro</strong></td>
                            <td><strong>Fecha Inicio</strong></td>
                            <td><strong>Fecha de culminacion</strong></td>
                  
                        </tr>
                    </tfoot>
 
                    <tbody>
                          <?php 

                    $sql="SELECT empleado_cargo.id_empleado_cargo, empleado.CI_empleado , cargo.Nombre_cargo,empleado_cargo.fecha_inicio,fecha_fin  ,fecha_comienzo  
                                FROM  empleado , cargo ,empleado_cargo
                                WHERE empleado.id_empleado =empleado_cargo.fk_empleado and empleado_cargo.fk_cargo=cargo.id_cargo";
                    $base_db->ejecutar($sql);
                   
                      while($valor=$base_db->obtener_fila($base_db->getCorrida(),0)) { 
                       print("<tr>");
                       print("<td>".$valor['id_empleado_cargo']."</td>");
                       print("<td>".$valor['CI_empleado']."</td>");
                       print("<td>".$valor['Nombre_cargo']."</td>");
                       print("<td>".$valor['fecha_inicio']."</td>");
                       print("<td>".$valor['fecha_comienzo']."</td>");
                       print("<td>".$valor['fecha_fin']."</td>");
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
                                  <h4 class="modal-title selecion"><strong>Cargo del Empleado</strong></h4>
                              </div>
                              <div class="modal-body">
                                  <form  id="formulario_agregar_accion" action="ajax/agregarAccion.php"   method ="post">

                                  
                                  <p>Agregar Cargo</p>
                                   <select id="id_cargo_agregar" class="default"  tabindex="2">
                           <?php 
                      

                               $sql="SELECT cargo.id_cargo,cargo.Nombre_cargo
                                 FROM   cargo ";
                               $base_db->ejecutar($sql);


                      while($valor=$base_db->obtener_fila($base_db->getCorrida(),0)) { 
                                
          
                          print("<option value='".$valor['id_cargo']."'>".$valor['Nombre_cargo']."</option>");
                 }  
              ?>
          
                                       


                                  </select>
                                   
                                  <p>Agregar Empleado</p>
                                   <select id="id_empleado_agregar" class="default"  tabindex="2">
                           <?php 
                      

                               $sql="SELECT empleado.id_empleado,empleado.CI_empleado
                                 FROM  empleado ";
                               $base_db->ejecutar($sql);


                      while($valor=$base_db->obtener_fila($base_db->getCorrida(),0)) { 
                                
          
                          print("<option value='".$valor['id_empleado']."'>".$valor['CI_empleado']."</option>");
                 }  
              ?>
          
                                       


                                  </select>
                                  </br>            

                                    <p>Fecha Comienzo</p>
                                    <input id="fecha_comienzo" type="text" name="fecha">

                                   </form>

                              
                              </div>
                              <div class="modal-footer">

                              <div class="row"> 

                              <div class="col-lg-2">
                                <button id="boton_agregar" data-dismiss="modal" class="btn btn-success" type="summit"><strong>Agregar</strong></button>

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

 <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="ModalModificar" class="modal fade">
                      <div class="modal-dialog">
                          <div class="modal-content">
                              

                              <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                  <h4 class="modal-title selecion"><strong>Modificar Cargo del Empleado</strong></h4>
                              </div>
                              <div class="modal-body">
                                  <form  id="formulario_agregar_accion" action="ajax/agregarAccion.php"   method ="post">

                                  
                                  <p>Agregar Cargo</p>
                                   <select id="id_cargo_modificar" class="default"  tabindex="2">
                           <?php 
                      

                               $sql="SELECT cargo.id_cargo,cargo.Nombre_cargo
                                 FROM   cargo ";
                               $base_db->ejecutar($sql);


                      while($valor=$base_db->obtener_fila($base_db->getCorrida(),0)) { 
                                
          
                          print("<option value='".$valor['id_cargo']."'>".$valor['Nombre_cargo']."</option>");
                 }  
              ?>
          
                                       


                                  </select>
                                   
                                  <p>Agregar Empleado</p>
                                   <select id="id_empleado_modificar" class="default"  tabindex="2">
                           <?php 
                      

                               $sql="SELECT empleado.id_empleado,empleado.CI_empleado
                                 FROM  empleado ";
                               $base_db->ejecutar($sql);


                      while($valor=$base_db->obtener_fila($base_db->getCorrida(),0)) { 
                                
          
                          print("<option value='".$valor['id_empleado']."'>".$valor['CI_empleado']."</option>");
                 }  
              ?>

               <p>Fecha Comienzo</p>
                                    <input id="fecha_comienzo_modificar" type="text" name="fecha">
          
                                       


                                  </select>
                                  </br>            
                                  <button id="boton_cambio" data-dismiss="modal" class="btn btn-success" type="summit"><strong>Modificar</strong></button>

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
                                  <h4 class="modal-title selecion"><strong>Eliminar Cargo del Empleado</strong></h4>
                              </div>
                              <div class="modal-body">
                                 <center><p><strong>esta seguro de eliminar el cargo del empleado ?</strong></p></center> 
                              
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

//combobox
$( "#id_empleado_agregar" ).combobox();
$( "#id_cargo_agregar" ).combobox();
$( "#id_empleado_modificar" ).combobox();
$( "#id_cargo_modificar" ).combobox();
//////////////////////////////////////////////////////////////////////////////////////

$( "#fecha_comienzo_modificar" ).datepicker();
$( "#fecha_comienzo" ).datepicker();

$( "#fecha_comienzo" ).datepicker( "option", "showAnim", "drop" );
$( "#fecha_comienzo" ).datepicker( "option", "dateFormat","dd-mm-yy");

$( "#fecha_comienzo_modificar" ).datepicker( "option", "showAnim", "drop" );
$( "#fecha_comienzo_modificar" ).datepicker( "option", "dateFormat","dd-mm-yy");


//////////////////////
function ajax_modificar(){

 $.ajax({

   url: 'modificar_tabla.php',
         type:"post",
  data: {       

                nombre_tabla:'empleado_cargo',  //nombre de la tabla
                numero_atributos:3,
                id_objeto: table.row('.selected').data()[0],

                 nombre_atributo1:'fk_cargo',
                 esNumero1:0,
                 valor_atributo1:$('#id_cargo_modificar').val(),

                 nombre_atributo2:'fk_empleado',
                 esNumero2:0,
                 valor_atributo2:$('#id_empleado_modificar').val(),

                 nombre_atributo3:'fecha_comienzo',
                 esNumero3:1,
                 valor_atributo3:$("#fecha_comienzo_modificar").val()




             }, 
           success:function(data,textStatus,jqXHR){
             
          alert(data);
          if(data=='error'){
                    alert('Error al agregar la marca no se aceptan marcas duplicadas');
             }else{
                   var id=table.row('.selected').data()[0];
                alert('se modifico con exito');
            //   table.row('.selected').data()[1]=$('#id_rol_modificar').val();
                table.row('.selected').remove().draw( false );
                table.row.add([parseInt(id),$("#id_cargo_modificar option:selected").text(),$("#id_empleado_modificar option:selected").text(),nueva_fecha,$("#fecha_comienzo_modificar").val(),'']).draw(false);

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
   //alert(nueva_fecha);
    $.ajax({

             url: 'agregar_tabla.php',
             type:"post",
             data: {  nombre_tabla:'empleado_cargo',  //nombre de la tabla
                numero_atributos:4,
                nombre_atributo1:'fk_cargo',
                 esNumero1:0,
                 valor_atributo1:$('#id_cargo_agregar').val(),

                 nombre_atributo2:'fk_empleado',
                 esNumero2:0,
                 valor_atributo2:$('#id_empleado_agregar').val(),

                 nombre_atributo3:'fecha_inicio',
                 esNumero3:1,
                 valor_atributo3:nueva_fecha,


                 nombre_atributo4:'fecha_comienzo',
                 esNumero4:1,
                 valor_atributo4:$("#fecha_comienzo").val()






             },
         success:function(data,textStatus,jqXHR){
            // alert(data);

             if(data=='error'){
                    alert('Error al agregar la marca no se aceptan marcas duplicadas');
             }else{

                alert('se agrego con exito');
               table.row.add([parseInt(data),$("#id_empleado_agregar option:selected").text(),$('#id_cargo_agregar option:selected').text(),nueva_fecha,$("#fecha_comienzo").val(),'']).draw(false);
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
   
     data: {  nombre_tabla:'empleado_cargo',                  //nombre de la tabla
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
                  ajax_eliminar(); 
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

 


$('#boton_cambio').click(function() {

  ajax_permiso('modificar','modificar empleado al cargo');

 });

//boton de el modal
$('#boton_eliminar_final').click(function(){

   ajax_permiso('eliminar','eliminar empleado al cargo'); 

});



$('#boton_agregar').click(function(){

   ajax_permiso('agregar','agregar empleado al cargo'); 

});

//////////////////////////////////////////////////////////////////////////////////////////



});

</script>

  </body>
</html>
