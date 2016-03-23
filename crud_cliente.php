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
					<h3 class="page-header"><i class="fa fa fa-bars"></i><strong>Clientes</strong></h3>
					
			    </div>
		  </div>
              <!-- page start-->

            <div class="row">
                     <div class="col-lg-1">
                     </div>
                      <div class="col-lg-8">
    

<div class="btn-group" role="group">

                        <button class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                           <strong>  Agregar Cliente</strong>
                        </button>
        
                        <button id="boton_modificar" class="btn btn-info" data-toggle="modal" data-target="#Modal_modificar">
                         <strong>   Modificar Cliente </strong>
                        </button>
            
                        <button id="boton_eliminar" class="btn btn-danger" data-toggle="modal" data-target="#modalEliminar">
                           <strong> Eliminar Cliente</strong>
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
                            <td><strong>id_cliente</strong></td>
                            <td><strong>Rif</strong></td> 
                            <td><strong>Nombre</strong></td>
                           <td><strong>Estatus</strong></td>
                            <td><strong>Direccion</strong></td> 
                            <td><strong>Sucursal</strong></td> 

                        </tr>
            
                        <tr>
                            <th><strong>id_cliente</strong></th>
                            <th><strong>Rif</strong></th> 
                            <th><strong>Nombre</strong></th>
                            <th><strong>Estatus</strong></th>
                            <th><strong>Direccion</strong></th> 
                            <th><strong>Sucursal</strong></th> 
 
                        </tr>
                    </thead>
 
                    <tfoot>
                        <tr>
                            <td><strong>id_cliente</strong></td>
                            <td><strong>Rif</strong></td> 
                            <td><strong>Nombre</strong></td>
                            <td><strong>Estatus</strong></td>
                            <td><strong>Direccion</strong></td> 
                            <td><strong>Sucursal</strong></td> 

                        </tr>
                    </tfoot>
 
                    <tbody>

                     <?php 

                    $sql="SELECT  cliente.id_cliente ,cliente.RIF_cliente,cliente.Nombre_cliente,cliente.Status_cliente ,l.Nombre_lugar as nombre ,nombre_sucursal
                          FROM cliente,lugar as l , sucursal 
                          where cliente.fk_lugar=l.id_lugar and sucursal.id_sucursal=cliente.fk_sucursal";
                    $base_db->ejecutar($sql);
                   
                      while($valor=$base_db->obtener_fila($base_db->getCorrida(),0)) { 
                       print("<tr>");
                       print("<td>".$valor['id_cliente']."</td>");
                       print("<td>".$valor['RIF_cliente']."</td>");
                       print("<td>".$valor['Nombre_cliente']."</td>");
                       print("<td>".$valor['Status_cliente']." </td>");
                       print("<td>".$valor['nombre']."</td>");    
                       print("<td>".$valor['nombre_sucursal']."</td>");    
  
                       print("</tr>");
                    
                         
                 }  
              ?>

         
                    </tbody>
            </table> 
      </div>

      <div class="col-lg-1"></div>

</div>

 <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="Modal_modificar" class="modal fade">
                      <div class="modal-dialog">
                          <div class="modal-content">
                              

                              <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                  <h4 class="modal-title selecion"><strong>MODIFICAR CLIENTE</strong></h4>
                              </div>
                              <div class="modal-body">
                                  <form  id="formulario_modificar_cliente" action="ajax/agregarAccion.php"   method ="post">

                                  <p><strong>Nombre</strong></p>
                                  <input type="text" id="nombre_cliente_modificar" name="nombre_cliente_modificar" placeholder="*usuario" autocomplete="off" class="form-control placeholder-no-fix">                        
                                   <p><strong>RIF</strong></p>
                                  <input  id="RIF_cliente_modificar"  type="text" name="RIF_cliente_modificar" placeholder="*usuario" autocomplete="off" class="form-control placeholder-no-fix"> 
                                   <p><strong>Estatus</strong></p>
                                 <select id="status_cliente_modificar"  name="status_cliente" class="default" tabindex="2">
                                     <option value="activo">Activo</option>
                                     <option value="inactivo">Inactivo</option>
                                 </select>

                                   <p><strong>Direccion</strong></p>
                                  <select id="direccion_cliente_modificar" class="defaultw" >
                                   <?php 
                      

                               $sql="SELECT lugar.id_lugar,lugar.nombre_lugar
                                 FROM  lugar ";
                               $base_db->ejecutar($sql);


                      while($valor=$base_db->obtener_fila($base_db->getCorrida(),0)) { 
                                
          
                          print("<option value='".$valor['id_lugar']."'>".$valor['nombre_lugar']."</option>");
                 }  
              ?>
          
                                       


                                  </select>
                                  </br>
                                  </br> <p><strong>Sucursal</strong></p>
                                  <select id="sucursal_cliente_modificar" class="defaultw" >
                                   <?php 
                      

                               $sql="SELECT id_sucursal,nombre_sucursal
                                 FROM  sucursal ";
                               $base_db->ejecutar($sql);


                      while($valor=$base_db->obtener_fila($base_db->getCorrida(),0)) { 
                                
          
                          print("<option value='".$valor['id_sucursal']."'>".$valor['nombre_sucursal']."</option>");
                 }  
              ?>
          
                                       


                                  </select>
                                  </br></br>




                                  <button id="boton_cambio"  class="btn btn-success" type="summit"><strong>Modificar Cliente</strong></button>

                                   </form>

                              
                              </div>
                              <div class="modal-footer">
                                    <button data-dismiss="modal" class="btn btn-default" type="button"><strong>Cancelar</strong></button>

                                        
                              </div>
                          

                          </div>
                      </div>
  </div>



 <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
                      <div class="modal-dialog">
                          <div class="modal-content">
                              

                              <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                  <h4 class="modal-title selecion"><strong>CLIENTE</strong></h4>
                              </div>
                              <div class="modal-body">
                                  <form  id="formulario_agregar_cliente" action="ajax/agregarAccion.php"   method ="post">

                                  <p><strong>Nombre</strong></p>
                                  <input type="text" id="nombre_cliente" name="nombre_cliente" placeholder="*usuario" autocomplete="off" class="form-control placeholder-no-fix">                        
                                   <p><strong>RIF</strong></p>
                                  <input  id="RIF_cliente"  type="text" name="RIF_cliente" placeholder="*usuario" autocomplete="off" class="form-control placeholder-no-fix"> 
                                   <p><strong>Estatus</strong></p>
                                 <select id="status_cliente"  name="status_cliente" class="default" tabindex="2">
                                     <option value="activo">Activo</option>
                                     <option value="inactivo">Inactivo</option>
                                 </select>

                                   <p><strong>Direccion</strong></p>
                                  <select id="direccion_cliente" class="defaultw" >
                                   <?php 
                      

                               $sql="SELECT lugar.id_lugar,lugar.nombre_lugar
                                 FROM  lugar ";
                               $base_db->ejecutar($sql);


                      while($valor=$base_db->obtener_fila($base_db->getCorrida(),0)) { 
                                
          
                          print("<option value='".$valor['id_lugar']."'>".$valor['nombre_lugar']."</option>");
                 }  
              ?>
          
                                       


                                  </select>
                                  </br>
                                  </br>
                                  <p><strong>Sucursal</strong></p>
                                  <select id="sucursal_cliente_agregar" class="defaultw" >
                                   <?php 
                      

                               $sql="SELECT id_sucursal,nombre_sucursal
                                 FROM  sucursal ";
                               $base_db->ejecutar($sql);


                      while($valor=$base_db->obtener_fila($base_db->getCorrida(),0)) { 
                                
          
                          print("<option value='".$valor['id_sucursal']."'>".$valor['nombre_sucursal']."</option>");
                 }  
              ?>
          
                                       


                                  </select>
                                  </br></br>



                                  <button id="boton_agregar"  class="btn btn-success" type="summit"><strong> Agregar</strong></button>

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
                                  <h4 class="modal-title selecion"><strong>Eliminar Cliente</strong></h4>
                              </div>
                              <div class="modal-body">
                                 <center><p><strong>Esta seguro de eliminar el cliente ?</strong></p></center> 
                              
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
    <script src="js/scripts.js"></script>-- 

    <script src="datatable.js"></script>
    <link rel="stylesheet" type="text/css" href="jquery.dataTables.css" media="screen" />



    <script src="dataTables.tableTools.js"></script>
    <link rel="stylesheet" type="text/css" href="dataTables.tableTools.css" media="screen" />


<link type="text/css" href="jquery-ui/css/ui-lightness/jquery-ui-1.9.2.custom.css" rel="Stylesheet" />      
<script type="text/javascript" src="jquery-ui/js/jquery-ui-1.9.2.custom.min.js"></script>
 


<!-- librerias de jquery ui>
  <link href="css/jquery-ui-1.10.4.min.css" rel="stylesheet">
  <script src="js/jquery-ui-1.10.4.min.js"></script>


<!-- archivos generales--> 
  <link type="text/css" href="funciones/generalcss.css" rel="Stylesheet" />      
  <script type="text/javascript" src="funciones/generaljavascript.js"></script>
  
    <script type="text/javascript" src="plugins/dist/jquery.validate.js"></script>


<script>
$(document).ready(function(){
$( "#sucursal_cliente_agregar" ).combobox();
$( "#sucursal_cliente_modificar" ).combobox();

$( "#direccion_cliente" ).combobox();
$( "#direccion_cliente_modificar" ).combobox();
$( "#status_cliente" ).combobox();
$( "#status_cliente_modificar" ).combobox();


//////////////////////////////////---------------VALIDACIONES-CAMPOS-------------///////////////////////////////////////////

///Agregar Cliente////
$("#formulario_agregar_cliente").ready(function($) {
$("#formulario_agregar_cliente").validate({
  debug:true,
  rules:{
    nombre_cliente:{ required:true,  minlength:2, maxlength:90 },
    RIF_cliente:{ required:true, minlength:2,maxlength:90 }
     },
  messages:{ 
       nombre_cliente:{required:"Este campo es obligatorio", minlength:"Minimo tiene que ser 2 caracteres",maxlength:"Maximo tiene que ser 90 caracteres"},
       RIF_cliente:{ required:"Este campo es obligatorio", minlength:"Minimo tiene que ser 2 caracteres",maxlength:"Maximo tiene que ser 90 caracteres"}
    },
    submitHandler:function(form){
          ajax_permiso('agregar','agregar cliente'); 
    }

});
});

////////////////////////////////////////////////////////////////////////////////////////////////////
///Modificar Cliente////
$("#formulario_modificar_cliente").ready(function($) {
$("#formulario_modificar_cliente").validate({
  debug:true,
  rules:{
    nombre_cliente_modificar:{ required:true,  minlength:2, maxlength:90 },
    RIF_cliente_modificar:{ required:true, minlength:2,maxlength:90 }
     },
  messages:{ 
       nombre_cliente_modificar:{required:"Este campo es obligatorio", minlength:"Minimo tiene que ser 2 caracteres",maxlength:"Maximo tiene que ser 90 caracteres"},
       RIF_cliente_modificar:{ required:"Este campo es obligatorio", minlength:"Minimo tiene que ser 2 caracteres",maxlength:"Maximo tiene que ser 90 caracteres"}
    },
    submitHandler:function(form){
          ajax_permiso('modificar','modificar cliente'); 
    }

});
});

////////////////////////////////////////////////////////////////////////////////////////////////////



function ajax_modificar(){
 
 //alert('modificar tabla');
 $.ajax({

   url: 'modificar_tabla.php',
         type:"post",
          data: {  nombre_tabla:'cliente',  //nombre de la tabla
                      numero_atributos:5,
                      id_objeto: table.row('.selected').data()[0],

                     
                     nombre_atributo1:'RIF_cliente',
                     esNumero1:1,
                     valor_atributo1:$('#RIF_cliente_modificar').val(),

                      nombre_atributo2:'Nombre_cliente',
                      esNumero2:1,
                      valor_atributo2:$('#nombre_cliente_modificar').val(),

                     nombre_atributo3:'Status_cliente',
                     esNumero3:1,
                     valor_atributo3:$('#status_cliente_modificar').val(),

                      nombre_atributo4:'fk_lugar',
                     esNumero4:0,
                     valor_atributo4:$('#direccion_cliente_modificar').val(),
                     
                     nombre_atributo5:'fk_sucursal',
                     esNumero5:0,
                     valor_atributo5:$('#sucursal_cliente_modificar').val()

             },
   success:function(data,textStatus,jqXHR){
             
          // alert(data);
          if(data=='error'){
                    alert('Error al agregar la marca no se aceptan marcas duplicadas');
             }else{
                var id=table.row('.selected').data()[0];
                alert('se modifico con exito');
                table.row('.selected').remove().draw( false );
               table.row.add([parseInt(data),$('#RIF_cliente_modificar').val(),$('#nombre_cliente_modificar').val(),$("#status_cliente_modificar option:selected").text(),$("#direccion_cliente option:selected").text(),$('#sucursal_cliente_modificar option:selected').text()]).draw(false);

             
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
   $.ajax({

             url: 'agregar_tabla.php',
             type:"post",
             data: {  nombre_tabla:'cliente',  //nombre de la tabla
                      numero_atributos:5,
                     
                     nombre_atributo1:'RIF_cliente',
                     esNumero1:1,
                     valor_atributo1:$('#RIF_cliente').val(),

                      nombre_atributo2:'Nombre_cliente',
                      esNumero2:1,
                      valor_atributo2:$('#nombre_cliente').val(),

                     nombre_atributo3:'Status_cliente',
                     esNumero3:1,
                     valor_atributo3:$('#status_cliente').val(),

                      nombre_atributo4:'fk_lugar',
                     esNumero4:0,
                     valor_atributo4:$('#direccion_cliente').val(),
                     
                     nombre_atributo5:'fk_sucursal',
                     esNumero5:0,
                     valor_atributo5:$('#sucursal_cliente_agregar').val()

             },
         success:function(data,textStatus,jqXHR){
            // alert(data);
              valor=data;
             if(data=='error'){
                    alert('Error al agregar la marca no se aceptan marcas duplicadas');
             }else{

                alert('se agrego con exito');
               table.row.add([parseInt(data),$('#RIF_cliente').val(),$('#nombre_cliente').val(),$("#status_cliente option:selected").text(),$("#direccion_cliente option:selected").text(),$('#sucursal_cliente_agregar option:selected').text()]).draw(false);
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
   
     data: {  nombre_tabla:'cliente',                  //nombre de la tabla
             id_objeto:table.row('.selected').data()[0] },
         success:function(data,textStatus,jqXHR){
             
      // /   alert(data);
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



   $( "#buscador_principal" ).autocomplete({
  source: [ "c++", "java", "php", "coldfusion", "javascript", "asp", "ruby" ]
});













//boton del modificar




///////////////////////////////////////////////////////////////////////////////////////////////////


$('#boton_modificar').click(function() {
  
  datos_cliente=table.row('.selected').data();

  //$("#id_marca_modificar").val(datos_marca[0]);
  $("#nombre_cliente_modificar").val(datos_cliente[2]);
  $("#RIF_cliente_modificar").val(datos_cliente[1]);
  $("#RIF_cliente_modificar").attr({
    disabled: true
  });
 // $("#").val(datos_usuario[3]);
  //$("#nombre_marca_modificar").val(datos_usuario[4]);




 });



////////////////////////////////////////////////////////////////////////////////////////



var id_marca;
//boton de el modal
$('#boton_eliminar_final').click(function(){

   ajax_permiso('eliminar','eliminar cliente'); 

});


//////////////////////////////////////////////////////////////////////////////////////////





});

</script>

  </body>
</html>
