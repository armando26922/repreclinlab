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
                    <h3 class="page-header"><i class="fa fa fa-bars"></i><strong>Repuestos de Equipos</strong></h3>
                    
                </div>
          </div>
              <!-- page start-->

                   <div class="row">
                     <div class="col-lg-1">
                     </div>
                      <div class="col-lg-8">
    

<div class="btn-group" role="group">
                        <button class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                           <strong>  Agregar Repuesto</strong>
                        </button>
        
                        <button id="boton_modificar" class="btn btn-info" data-toggle="modal" data-target="#myModal">
                         <strong>   Modificar Repuesto </strong>
                        </button>
            
                        <button id="boton_eliminar" class="btn btn-danger" data-toggle="modal" data-target="#modalEliminar">
                           <strong> Eliminar Repuesto</strong>
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
                            <td><strong>id_Repuesto</strong></td>
                            <td><strong>Numero de parte </strong></td>
                            <td><strong>Nombre del Repuesto</strong></td>
                            <td><strong>Tipo Equipo</strong></td>
                            <td><strong>Costo</strong></td>
                            <td><strong>Cantidad Inventario</strong></td>
                            <td><strong>Sucursal</strong></td>
                        </tr>
            
                        <tr>
                            <th><strong>id_Repuesto</strong></th>
                            <th><strong>Numero de parte </strong></th>
                            <th><strong>Nombre del Repuesto</strong></th>
                            <th><strong>Tipo Equipo</strong></th>
                            <th><strong>Costo</strong></th>
                            <th><strong>Cantidad Inventario</strong></th>
                            <th><strong>Sucursal</strong></th>
                        </tr>
                    </thead>
 
                    <tfoot>
                        <tr>
                            <td><strong>id_Repuesto</strong></td>
                            <td><strong>Numero de parte </strong></td>
                            <td><strong>Nombre del Repuesto</strong></td>
                            <td><strong>Tipo Equipo</strong></td>
                            <td><strong>Costo</strong></td>
                            <td><strong>Cantidad Inventario</strong></td>
                            <td><strong>Sucursal</strong></td>
                            
                        </tr>
                    </tfoot>
 
                    <tbody>


 <?php 

                    $sql="SELECT id_repuesto,
                          Nombre_repuesto,
                          codigo_parte_repuestos,
                          tipo_equipo_repuesto,
                          Costo_repuesto,
                          cantidad_repuesto,
                          ubicacion_repuesto
                          from repuesto";
                    $base_db->ejecutar($sql);
                   
                      while($valor=$base_db->obtener_fila($base_db->getCorrida(),0)) { 
                       print("<tr>");
                       print("<td>".$valor['id_repuesto']."</td>");
                       print("<td>".$valor['codigo_parte_repuestos']." </td>");
                       print("<td>".$valor['Nombre_repuesto']." </td>");
                       print("<td>".$valor['tipo_equipo_repuesto']." </td>");
                       print("<td>".$valor['Costo_repuesto']."</td>");
                       print("<td>".$valor['cantidad_repuesto']." </td>");
                       print("<td>".$valor['ubicacion_repuesto']."</td>");      
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
                                  <h4 class="modal-title selecion">Repuestos</h4>
                              </div>
                              <div class="modal-body">
                                  <form  id="formulario_agregar_accion" action="ajax/agregarAccion.php"   method ="post">

                                  <p>Numero de Parte</p>
                                  <input id="serial_repuesto_agregar" type="text" name="nombre_accion" placeholder="*serial" autocomplete="off" class="form-control placeholder-no-fix">                        
                                
                                  <p>Nombre Repuesto</p>
                                  <input id="nombre_repuesto_agregar" type="text" name="nombre_accion" placeholder="*nombre" autocomplete="off" class="form-control placeholder-no-fix">                        

                                    <p>Costo</p>
                                  <input id="costo" type="text" name="nombre_accion" placeholder="*tipo_equipo" autocomplete="off" class="form-control placeholder-no-fix">                        

                                    <p>Cantidad Inventario</p>
                                  <input id="costo" type="text" name="nombre_accion" placeholder="*tipo_equipo" autocomplete="off" class="form-control placeholder-no-fix">                        

                                    <p>Ubicacion</p>
                                  <input id="ubicacion" type="text" name="nombre_accion" placeholder="*tipo_equipo" autocomplete="off" class="form-control placeholder-no-fix">                        

                                   <p>Equipo</p>
                                    <select id="id_equipo" class="default"  tabindex="2">
                                        <?php 
                      

                               $sql="SELECT id_equipo,equipo.Nombre_equipo
                                      FROM equipo ";
                               $base_db->ejecutar($sql);


                      while($valor=$base_db->obtener_fila($base_db->getCorrida(),0)) { 
                                
          
                          print("<option value='".$valor['id_equipo']."'>".$valor['Nombre_equipo']."</option>");
                 }  
              ?>
                                  </select>
                                  </br>

                                      <p>Sucursal</p>
                                    <select id="id_sucursal" class="default"  tabindex="2">
                                        <?php 
                      

                               $sql="select id_sucursal,nombre_sucursal 
                                    from sucursal";
                               $base_db->ejecutar($sql);


                      while($valor=$base_db->obtener_fila($base_db->getCorrida(),0)) { 
                                
          
                          print("<option value='".$valor['id_sucursal']."'>".$valor['nombre_sucursal']."</option>");
                 }  
              ?>
                                  </select>
                                  </br>

                                  <button id="boton_agregar" data-dismiss="modal" class="btn btn-success" type="summit"><strong>Agregar</strong></button>

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
  

  <script type="text/javascript" src="plugins/dist/jquery.validate.js"></script>



<script>
$(document).ready(function(){

$( "#id_equipo" ).combobox();
$( "#id_sucursal" ).combobox();



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
   
     data: {  nombre_tabla:'repuesto',                  //nombre de la tabla
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

 
//boton de el modal
$('#boton_eliminar_final').click( function () {

 //       alert(table.row('.selected').data()[0]);
  $.ajax({

   url: 'eliminar_tabla.php',
         type:"post",
   
     data: {  nombre_tabla:'repuesto',                  //nombre de la tabla
             id_objeto:table.row('.selected').data()[0] },
         success:function(data,textStatus,jqXHR){
             
         alert(data);


         },
           
         error:function(jqXHR,textStatus,errorThrown)
        {

           alert("error");

        }

  });
 

 table.row('.selected').remove().draw( false );

    $('#boton_modificar').attr("disabled", true);
    $('#boton_eliminar').attr("disabled", true);



    });



///////////////////////////////////////////////////////////////////////////////////////////////////
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

   ajax_permiso('eliminar','eliminar repuesto'); 

});



$('#boton_agregar').click(function(){

   ajax_permiso('agregar','agregar repuesto'); 

});


$('#boton_cambio').click(function() {

  ajax_permiso('modificar','modificar repuesto');

 });



 
});

</script>

  </body>
</html>
