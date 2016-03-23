<!DOCTYPE html>
<html lang="en">

       <?php
          
 include"funciones/establecerConexion.php";
 include "head.php";

                       ?>

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
                    <h3 class="page-header"><i class="fa fa fa-bars"></i><strong>Equipos</strong></h3>
                    
                </div>
          </div>
              <!-- page start-->
 <div class="row">
                     <div class="col-lg-1">
                     </div>
                      <div class="col-lg-8">
    

<div class="btn-group" role="group">
                        <button class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                           <strong>  Agregar Equipo</strong>
                        </button>
        
                        <button id="boton_modificar" class="btn btn-info" data-toggle="modal" data-target="#Modificar_modal">
                         <strong>   Modificar Equipo </strong>
                        </button>
            
                        <button id="boton_eliminar" class="btn btn-danger" data-toggle="modal" data-target="#modalEliminar">
                           <strong> Eliminar Equipo</strong>
                        </button>     
             </div>
             </div>
             <div class="col-lg-1">
                 
             </div>
            </div>

            <div class="row">    

            <div class="col-lg-12">
                
                                 
            <table id="example"  class="table table-bordered   table-heading table-datatable" cellspacing="0" width="100%">
                    <thead>
                         <tr>
                            <td><strong>id_equipo</strong></td>
                            <td><strong>Serial Equipo</strong></td>
                            <td><strong>Nombre Equipo</strong></td>
                            <td><strong>Estatus Equipo</strong></td>
                            <td><strong>Descripcion Equipo</strong></td>
                            <td><strong>Linea</strong></td>
                            <td><strong>Cliente</strong></td>
                            <td><strong>Fecha Registro</strong></td>

                        </tr>
            
                        <tr>
                            <th><strong>id_equipo</strong></th>
                            <th><strong>Serial Equipo</strong></th>
                            <th><strong>Nombre Equipo</strong></th>
                            <th><strong>Estatus Equipo</strong></th>
                            <th><strong>Descripcion Equipo</strong></th>
                            <th><strong>Linea</strong></th>
                            <th><strong>Cliente</strong></th>
                            <th><strong>Fecha Registro</strong></th>
                        </tr>
                    </thead>
 
                    <tfoot>
                        <tr>
                            <td><strong>id_equipo</strong></td>
                            <td><strong>Serial Equipo</strong></td>
                            <td><strong>Nombre Equipo</strong></td>
                            <td><strong>Estatus Equipo</strong></td>
                            <td><strong>Descripcion Equipo</strong></td>
                            <td><strong>Linea</strong></td>
                            <td><strong>Cliente</strong></td>
                            <td><strong>Fecha Registro</strong></td>
                        </tr>
                    </tfoot>
 
                    <tbody>


 <?php 

                    $sql="SELECT equipo.id_equipo, equipo.Serial_equipo,equipo.Nombre_equipo,equipo.Status_equipo,equipo.Descripcion_equipo,equipo.Fecha_registro,cliente.Nombre_cliente,linea.Nombre_linea
from equipo left join cliente on  cliente.id_cliente=equipo.fk_cliente left join linea on equipo.fk_linea=linea.id_linea";
                    $base_db->ejecutar($sql);
                   
                      while($valor=$base_db->obtener_fila($base_db->getCorrida(),0)) { 
                       print("<tr>");
                       print("<td>".$valor['id_equipo']."</td>");
                       print("<td>".$valor['Serial_equipo']."</td>");
                       print("<td>".$valor['Nombre_equipo']."</td>");
                       print("<td>".$valor['Status_equipo']." </td>");
                       print("<td>".$valor['Descripcion_equipo']."</td>");      
                       print("<td>".$valor['Nombre_linea']."</td>");      
                       print("<td>".$valor['Nombre_cliente']."</td>");      
                       print("<td>".$valor['Fecha_registro']."</td>");      
                       print("</tr>");
                    
                         
                 }  
              ?>
       
                      



                       </tbody>
            </table> 
  </div>

</div>


 <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
                      <div class="modal-dialog">
                          <div class="modal-content">
                              

                              <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                  <h4 class="modal-title selecion"><strong>Equipo</strong></h4>
                              </div>
                              <div class="modal-body">
                                  <form  id="formulario_agregar_accion" action="ajax/agregarAccion.php"   method ="post">

                                  <p>Serial Equipo</p>
                                  <input id="serial_equipo" type="text" name="nombre_accion" placeholder="*serial" autocomplete="off" class="form-control placeholder-no-fix">                        
                                   <p>Nombre Equipo</p>
                                  <input id="nombre_equipo" type="text" name="nombre_accion" placeholder="*accion" autocomplete="off" class="form-control placeholder-no-fix">  
                                    <p>Estatus Equipo</p>
                                   <select id="status_equipo" class="default"  tabindex="2">
                                      <option value='renta'>Renta</option>
                                      <option value='facturacion'>Facturacion</option>
                                      <option value='encargo'>Encargo</option>
                                   </select>  
                                    <p>Descripcion Equipo</p>
                                        <input id="descripcion_equipo"  type="text" name="nombre_accion" placeholder="*accion" autocomplete="off" class="form-control placeholder-no-fix">  
                                   <p>Linea</p>
                                    <select id="id_linea" class="default"  tabindex="2">
                                               <?php 
                                               $sql="SELECT linea.Nombre_linea,linea.id_linea
                                                    FROM linea";
                                                  $base_db->ejecutar($sql);


                      while($valor=$base_db->obtener_fila($base_db->getCorrida(),0)) { 
                                
          
                          print("<option value='".$valor['id_linea']."'>".$valor['Nombre_linea']."</option>");
                 }  
              ?>
                                  </select>
                                   <p>Cliente</p>
                                    <select id="id_cliente" class="default"  tabindex="2">

                              <?php 
                                               $sql="SELECT cliente.id_cliente,cliente.Nombre_cliente
from cliente";
                                                  $base_db->ejecutar($sql);


                      while($valor=$base_db->obtener_fila($base_db->getCorrida(),0)) { 
                                
          
                          print("<option value='".$valor['id_cliente']."'>".$valor['Nombre_cliente']."</option>");
                 }  
              ?>
                                  </select>
                                  </br>

                                   <div class="row">
                                      <div class="col-lg-2">
                                  <button id="boton_agregar" data-dismiss="modal" class="btn btn-success" type="submit"><strong>Agregar</strong></button>
                                    </div>
                                    <div class="col-lg-8"></div>
                                    <div class="col-lg-2">
                                     <button data-dismiss="modal" class="btn btn-default" type="button"><strong>Cancelar</strong></button>
                                    </div>
                                  </div>




                                   </form>

                              
                              </div>
                              <div class="modal-footer">
                               
                                        
                              </div>
                          

                          </div>
                      </div>
                  </div>





 <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="Modificar_modal" class="modal fade">
                      <div class="modal-dialog">
                          <div class="modal-content">
                              

                              <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                  <h4 class="modal-title selecion"><strong>Modificar Equipo</strong></h4>
                              </div>
                              <div class="modal-body">
                                  <form  id="formulario_agregar_accion" action="ajax/agregarAccion.php"   method ="post">

                                  <p>Serial Equipo</p>
                                  <input id="serial_equipo_modificar" type="text" name="nombre_accion" placeholder="*serial" autocomplete="off" class="form-control placeholder-no-fix">                        
                                   <p>Nombre Equipo</p>
                                  <input id="nombre_equipo_modificar" type="text" name="nombre_accion" placeholder="*accion" autocomplete="off" class="form-control placeholder-no-fix">  
                                    <p>Estatus Equipo</p>
                                   <select id="status_equipo_modificar" class="default"  tabindex="2">
                                      <option value='renta'>Renta</option>
                                      <option value='facturacion'>Facturacion</option>
                                      <option value='encargo'>Encargo</option>
                                   </select>  
                                    <p>Descripcion Equipo</p>
                                        <input id="descripcion_equipo_modificar"  type="text" name="nombre_accion" placeholder="*accion" autocomplete="off" class="form-control placeholder-no-fix">  
                                   <p>Linea</p>
                                    <select id="id_linea_modificar" class="default"  tabindex="2">
                                               <?php 
                                               $sql="SELECT linea.Nombre_linea,linea.id_linea
                                                    FROM linea";
                                                  $base_db->ejecutar($sql);


                      while($valor=$base_db->obtener_fila($base_db->getCorrida(),0)) { 
                                
          
                          print("<option value='".$valor['id_linea']."'>".$valor['Nombre_linea']."</option>");
                 }  
              ?>
                                  </select>
                                   <p>Cliente</p>
                                    <select id="id_cliente_modificar" class="default"  tabindex="2">

                              <?php 
                                               $sql="SELECT cliente.id_cliente,cliente.Nombre_cliente
from cliente";
                                                  $base_db->ejecutar($sql);


                      while($valor=$base_db->obtener_fila($base_db->getCorrida(),0)) { 
                                
          
                          print("<option value='".$valor['id_cliente']."'>".$valor['Nombre_cliente']."</option>");
                 }  
              ?>
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
                                  <h4 class="modal-title selecion"><strong>Eliminar Equipo</strong></h4>
                              </div>
                              <div class="modal-body">
                                 <center><p><strong>esta seguro de eliminar el Equipo ?</strong></p></center> 
                              
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

$("#status_equipo").combobox();
$("#id_cliente").combobox();
$("#id_linea").combobox();

$("#status_equipo_modificar").combobox();
$("#id_cliente_modificar").combobox();
$("#id_linea_modificar").combobox();



function ajax_modificar(){
 
 //alert('modificar tabla');
 $.ajax({

   url: 'modificar_tabla.php',
         type:"post",
         data: {  nombre_tabla:'equipo',  //nombre de la tabla
                      numero_atributos:6,
                      id_objeto: table.row('.selected').data()[0],

                      nombre_atributo1:'Serial_equipo',
                      esNumero1:1,
                      valor_atributo1:$('#serial_equipo_modificar').val(),

                      nombre_atributo2:'Nombre_equipo',
                      esNumero2:1,
                      valor_atributo2:$('#nombre_equipo_modificar').val(),

                      nombre_atributo3:'Status_equipo',
                      esNumero3:1,
                      valor_atributo3:$('#status_equipo_modificar').val(),

                      nombre_atributo4:'Descripcion_equipo',
                      esNumero4:1,
                      valor_atributo4:$('#descripcion_equipo_modificar').val(),

                      nombre_atributo5:'fk_cliente',
                      esNumero5:0,
                      valor_atributo5:$('#id_cliente_modificar').val(),

                      nombre_atributo6:'fk_linea',
                      esNumero6:0,
                      valor_atributo6:$('#id_linea_modificar').val(),

                       

             },
   success:function(data,textStatus,jqXHR){
             
           alert(data);
          if(data=='error'){
                    alert('Error al agregar la marca no se aceptan marcas duplicadas');
             }else{
                var id=table.row('.selected').data()[0];
                alert('se modifico con exito');
                var fecha=table.row('.selected').data()[7];


            //   table.row('.selected').data()[1]=$('#id_rol_modificar').val();
                table.row('.selected').remove().draw( false );
               table.row.add([parseInt(data),$('#serial_equipo_modificar').val(),$('#nombre_equipo_modificar').val(),$('#status_equipo_modificar option:selected').text(),$('#descripcion_equipo_modificar').val(),$('#id_linea_modificar option:selected').text(),$('#id_cliente_modificar option:selected').text(),fecha]).draw(false);

               // table.row('.selected').data().draw(false);
              //  alert( table.row('.selected').data()[1]);
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
    $.ajax({

             url: 'agregar_tabla.php',
             type:"post",
             data: {  nombre_tabla:'equipo',  //nombre de la tabla
                      numero_atributos:7,
                 
                      nombre_atributo1:'Serial_equipo',
                      esNumero1:1,
                      valor_atributo1:$('#serial_equipo').val(),

                      nombre_atributo2:'Nombre_equipo',
                      esNumero2:1,
                      valor_atributo2:$('#nombre_equipo').val(),

                      nombre_atributo3:'Status_equipo',
                      esNumero3:1,
                      valor_atributo3:$('#status_equipo').val(),

                      nombre_atributo4:'Descripcion_equipo',
                      esNumero4:1,
                      valor_atributo4:$('#descripcion_equipo').val(),

                      nombre_atributo5:'fk_cliente',
                      esNumero5:0,
                      valor_atributo5:$('#id_cliente').val(),

                      nombre_atributo6:'fk_linea',
                      esNumero6:0,
                      valor_atributo6:$('#id_linea').val(),

                      
                      nombre_atributo7: 'Fecha_registro',
                      esNumero7:1,
                      valor_atributo7: nueva_fecha,


                       

             },
         success:function(data,textStatus,jqXHR){
            alert(data);

             if(data=='error'){
                    alert('Error al agregar el equipo no se aceptan equipos duplicadas');
             }else{
       
                alert('se agrego con exito');
               table.row.add([parseInt(data),$('#serial_equipo').val(),$('#nombre_equipo').val(),$('#status_equipo option:selected').text(),$('#descripcion_equipo').val(),$('#id_linea option:selected').text(),$('#id_cliente option:selected').text(),nueva_fecha]).draw(false);
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
   
     data: {  nombre_tabla:'equipo',                  //nombre de la tabla
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
        $(this).html( '<input type="text" name="'+title+'" placeholder="Buscar '+title+'" />' );
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

 






//boton del modificar


///////////////////////////////////////////////////////////////////////////////////////////////////
$('#boton_modificar').click(function() {
  
  datos_equipo=table.row('.selected').data();

  $("#serial_equipo_modificar").val(datos_equipo[1]);
  $("#nombre_equipo_modificar").val(datos_equipo[2]);
  $("#status_equipo").val(datos_equipo[3]);
  $("#descripcion_equipo_modificar").val(datos_equipo[4]);

  


 });




//boton de el modal
$('#boton_eliminar_final').click(function(){

   ajax_permiso('eliminar','eliminar equipo'); 

});



$('#boton_agregar').click(function(){

   ajax_permiso('agregar','agregar equipo'); 

});


$('#boton_cambio').click(function() {

  ajax_permiso('modificar','modificar equipo');

 });


//////////////////////////////////////////////////////////////////////////////////////////



});

</script>

  </body>
</html>
