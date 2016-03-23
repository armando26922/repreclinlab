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
          <h3 class="page-header"><i class="fa fa fa-bars"></i><strong>Perifericos de Clientes</strong></h3>
          
          </div>
      </div>
              <!-- page start-->

            <div class="row">
                     <div class="col-lg-1">
                     </div>
                      <div class="col-lg-8">
    

<div class="btn-group" role="group">

                        <button class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                           <strong>  Agregar Periferico</strong>
                        </button>
        
                        <button id="boton_modificar" class="btn btn-info" data-toggle="modal" data-target="#Modal_modificar">
                         <strong>   Modificar Periferico </strong>
                        </button>
            
                        <button id="boton_eliminar" class="btn btn-danger" data-toggle="modal" data-target="#modalEliminar">
                           <strong> Eliminar Periferico</strong>
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
                            <td><strong>id_periferico</strong></td>
                            <td><strong>Serial</strong></td>
                            <td><strong>Marca</strong></td>
                            <td><strong>Tipo</strong></td> 
                            <td><strong>Estatus</strong></td>
                            <td><strong>Equipo</strong></td> 
                            <td><strong>Fecha Registro</strong></td> 
                            <td><strong>Fecha Ingreso</strong></td> 

                        </tr>
            
                        <tr>
                            <th><strong>id_periferico</strong></th>
                            <th><strong>Serial</strong></th>
                            <th><strong>Marca</strong></th>
                            <th><strong>Tipo</strong></th> 
                            <th><strong>Estatus</strong></th>
                            <th><strong>Equipo</strong></th> 
                            <th><strong>Fecha Registro</strong></th> 
                            <th><strong>Fecha Ingreso</strong></th> 
                        </tr>
                    </thead>
 
                    <tfoot>
                        <tr>
                        <td><strong>`</strong></td>
                           <td><strong>Serial</strong></td>
                            <td><strong>Marca</strong></td>
                            <td><strong>Tipo</strong></td> 
                            <td><strong>Estatus</strong></td>
                            <td><strong>Equipo</strong></td> 
                            <td><strong>Fecha Registro</strong></td> 
                            <td><strong>Fecha Ingreso</strong></td>                              
                        </tr>
                    </tfoot>
 
                    <tbody>
                      


                     <?php 

                    $sql="SELECT periferico.id_periferico, periferico.Serial_periferico,periferico.Nombre_periferico,periferico.Status_periferico,periferico.fecha_registro_periferico,periferico.Tipo_periferico,equipo.Serial_equipo,periferico.fecha_ingreso_periferico
                          From periferico LEFT JOIN equipo on periferico.fk_equipo=equipo.id_equipo";
                    $base_db->ejecutar($sql);
                   
                      while($valor=$base_db->obtener_fila($base_db->getCorrida(),0)) { 
                       print("<tr>");
                       print("<td>".$valor['id_periferico']."</td>");
                       print("<td>".$valor['Serial_periferico']."</td>");
                       print("<td>".$valor['Nombre_periferico']."</td>");
                       print("<td>".$valor['Tipo_periferico']."</td>");
                       print("<td>".$valor['Status_periferico']."</td>");
                       print("<td>".$valor['Serial_equipo']."</td>");
                       print("<td>".$valor['fecha_registro_periferico']."</td>");
                       print("<td>".$valor['fecha_ingreso_periferico']."</td>");
                       print("</tr>");
                     }
                    
                         ?>
                    </tbody>
            </table> 
      </div>

      <div class="col-lg-1"></div>

</div>




<!-- ventana modal de agregar ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
 <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
                      <div class="modal-dialog">
                          <div class="modal-content">
                              

                              <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                  <h4 class="modal-title selecion"><strong>PERIFERICO</strong></h4>
                              </div>
                              <div class="modal-body">
                                  <form  id="formulario_agregar_accion" action="ajax/agregarAccion.php"   method ="post">

                                  <p><strong>Marca</strong></p>
                                  <input id="nombre_periferico_agregar" type="text" name="nombre_periferico" placeholder="*Marca" autocomplete="off" class="form-control placeholder-no-fix">                        
                                   <p><strong>Serial</strong></p>
                                  <input id="serial_periferico_agregar" type="text" name="nombre_usuario" placeholder="*serial" autocomplete="off" class="form-control placeholder-no-fix"> 
                                   <p><strong>Tipo</strong></p>
                                  <input id="tipo_periferico_agregar"  type="text" name="tipo_periferico" placeholder="*usuario" autocomplete="off" class="form-control placeholder-no-fix"> 
                                   <p><strong>Estatus</strong></p>
                               
                                 <select id="status_periferico_agregar" name="country" class="default" tabindex="2">
                                     <option value="Activo">Activo</option>
                                     <option value="Inactivo">Inactivo</option>
                                 </select>

                                  <p><strong>Equipo</strong></p>
                                  <select  id="equipo_periferico_agregar" class="defaultw" >
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
                                  </br>
                                  <div class="row">
                                      <div class="col-lg-2">
                                  <button id="boton_agregar" data-dismiss="modal" class="btn btn-success" type="submit"><strong> Agregar</strong></button>
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
<!--+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->










 <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="Modal_modificar" class="modal fade">
                      <div class="modal-dialog">
                          <div class="modal-content">
                              

                              <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                  <h4 class="modal-title selecion"><strong>MODIFICAR PERIFERICO</strong></h4>
                              </div>
                              <div class="modal-body">
                                  <form  id="formulario_agregar_accion" action="ajax/agregarAccion.php"   method ="post">

                                  <p><strong>Marca</strong></p>
                                  <input id="nombre_periferico_modificar" type="text" name="nombre_usuario" placeholder="*marca" autocomplete="off" class="form-control placeholder-no-fix">                        
                                   <p><strong>Serial</strong></p>
                                  <input id="serial_periferico_modificar" type="text" name="serial_periferico_modificar" placeholder="*usuario" autocomplete="off" class="form-control placeholder-no-fix"> 
                                   <p><strong>Tipo</strong></p>
                                  <input id="tipo_periferico_modificar" type="text" name="tipo_periferico_modificar" placeholder="*usuario" autocomplete="off" class="form-control placeholder-no-fix"> 
                                   <p><strong>Estatus</strong></p>
                               
                                 <select id="status_periferico_modificar" name="country" class="default" tabindex="2">
                                     <option value="AU">Activo</option>
                                     <option value="CA">INACTIVO</option>
                                     <option value="JP">Japan</option>
                                 </select>

                                  <p><strong>Equipo</strong></p>
                                  <select id="equipo_periferico_modificar" class="defaultw" >
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
                                  </br>

     <div class="row">
                                      <div class="col-lg-2">
                                  <button id="boton_cambio" data-dismiss="modal" class="btn btn-success" type="submit"><strong> Modificar</strong></button>
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


/////////////////////////////////////////////////////////////////////////////////
//crear combo box
$("#equipo_periferico_modificar").combobox();
$("#equipo_periferico_agregar").combobox();


$("#status_periferico_agregar").combobox();
$("#status_periferico_modificar").combobox();




function ajax_modificar(){
 
 //alert('modificar tabla');
 $.ajax({

   url: 'modificar_tabla.php',
         type:"post",
          data: {  

            nombre_tabla:'periferico',  //nombre de la tabla
            numero_atributos:5,
            id_objeto: table.row('.selected').data()[0],



            nombre_atributo1:'Serial_periferico',
            valor_atributo1:$('#serial_periferico_modificar').val(),
            esNumero1:1,


            nombre_atributo2:'Nombre_periferico',
            valor_atributo2:$('#nombre_periferico_modificar').val(),
            esNumero2:1,
           


            nombre_atributo3:'Tipo_periferico',
            valor_atributo3:$('#tipo_periferico_modificar').val(),
            esNumero3:1,


            nombre_atributo4:'Status_periferico',
            valor_atributo4:$('#status_periferico_modificar').val(),
            esNumero4:1,

           
            nombre_atributo5:'fk_equipo',
            esNumero5:0,
            valor_atributo5:$('#equipo_periferico_modificar').val()
     

             },
   success:function(data,textStatus,jqXHR){
             
          // alert(data);
          if(data=='error'){
                    alert('Error al agregar la marca no se aceptan marcas duplicadas');
             }else{
                var id=table.row('.selected').data()[0];
                alert('se modifico con exito');
            //   table.row('.selected').data()[1]=$('#id_rol_modificar').val();
                table.row('.selected').remove().draw( false );
               table.row.add([parseInt(id),$('#serial_periferico_modificar').val(),$('#nombre_periferico_modificar').val(),$('#tipo_periferico_modificar').val(),$('#status_periferico_modificar').val(),$("#equipo_periferico_modificar option:selected").text()],nueva_fecha).draw(false);

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





function ajax_agregar(){
    var f = new Date(); 
    var nueva_fecha=f.getFullYear()+ "-" + (f.getMonth() +1) + "-" +f.getDate(); 
    $.ajax({

             url: 'agregar_tabla.php',
             type:"post",
             data: {  

            nombre_tabla:'periferico',  //nombre de la tabla
            numero_atributos:6,

            nombre_atributo1:'Serial_periferico',
            valor_atributo1:$('#serial_periferico_agregar').val(),
            esNumero1:1,


            nombre_atributo2:'Nombre_periferico',
            valor_atributo2:$('#nombre_periferico_agregar').val(),
            esNumero2:1,
           


            nombre_atributo3:'Tipo_periferico',
            valor_atributo3:$('#tipo_periferico_agregar').val(),
            esNumero3:1,


            nombre_atributo4:'Status_periferico',
            valor_atributo4:$('#status_periferico_agregar').val(),
            esNumero4:1,

            nombre_atributo5:'fecha_registro_periferico',
            valor_atributo5:nueva_fecha,
            esNumero5:1,

         
            nombre_atributo6:'fk_equipo',
            esNumero6:0,
            valor_atributo6:$('#equipo_periferico_agregar').val()
             },
         success:function(data,textStatus,jqXHR){
            // alert(data);

             if(data=='error'){
                    alert('Error al agregar la marca no se aceptan marcas duplicadas');
             }else{

               alert('se agrego con exito');
               table.row.add([parseInt(data),$('#serial_periferico_agregar').val(),$('#nombre_periferico_agregar').val(),$('#tipo_periferico_agregar').val(),$('#status_periferico_agregar').val(),$("#equipo_periferico_agregar option:selected").text(),nueva_fecha]).draw(false);
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
   
     data: {  nombre_tabla:'periferico',                  //nombre de la tabla
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
// alert('d');
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
   ajax_permiso('eliminar','eliminar periferico'); 
    });

//boton del modificar
$('#boton_cambio').click(function() {

  ajax_permiso('modificar','modificar periferico');

 });



$('#boton_agregar').click(function(){
   ajax_permiso('agregar','agregar periferico'); 
  
 });



///////////////////////////////////////////////////////////////////////////////////////////////////

$('#boton_modificar').click(function() {  
  datos_cargo=table.row('.selected').data();

   //$("#id_cargo_modificar").val(datos_cargo[0]);
   $("#nombre_periferico_modificar").val(datos_cargo[1]);
   $("#serial_periferico_modificar").val(datos_cargo[2]);
   $("#tipo_periferico_modificar").val(datos_cargo[3]);
 //  $("#salario_cargo_modificar").val(datos_cargo[1]);
 


 });


});

</script>

  </body>
</html>
