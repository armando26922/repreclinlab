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

            ?>      <!--sidebar end-->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
		  <div class="row">
				<div class="col-lg-12">

					<h3 class="page-header"><i class="fa fa-bars" action="agregarAccion.php"></i></a><strong>Tec-Stock</strong></h3>

					
			    </div>
		  </div>
              <!-- page start-->

            <div class="row">
                     <div class="col-lg-1">
                     </div>
                      <div class="col-lg-8">
    
                       <div class="btn-group" role="group">


                        <button class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                           <strong>  Agregar Tec-Stock</strong>
                        </button>
        
                        <button id="boton_modificar" class="btn btn-info" data-toggle="modal" data-target="#myModalModificar">
                         <strong>   Modificar Tec-Stock </strong>
                        </button>
            
                        <button id="boton_eliminar" class="btn btn-danger" data-toggle="modal" data-target="#modalEliminar">
                           <strong> Eliminar Tec-Stock</strong>
                        </button> 
             </div>
                  
             </div>

                         </div>

             <div class="col-lg-1">
                 
             </div>
            </div>
<div class="row">
  <div class="col-xs-12">
    <div class="box">
      <div class="box-header">
        
        
        <div class="no-move"></div>
      </div>
      <div class="box-content no-padding">

        <table class="table table-bordered table-striped table-hover table-heading table-datatable"  id="example">
          <thead>
            <tr>
            
                            <td><strong>Tecnico</strong></td>
                            <td><strong>Serial</strong></td> 
                            <td><strong>Stock</strong></td> 

            </tr>
                       <tr class="filters">
                        <th><input type="text" class="form-control" placeholder="Tecnico" ></th>
                        <th><input type="text" class="form-control" placeholder="Serial" ></th>
                        <th><input type="text" class="form-control" placeholder="Stock" disabled></th>
                    </tr>
          </thead>
          <tbody>
                       <?php 


                    $sql="SELECT fk_repuesto, fk_empleado, cant_empleado_repuesto 
                          FROM empleado_repuesto";
                    $base_db->ejecutar($sql);
                    
                   
                      while($valor=$base_db->obtener_fila($base_db->getCorrida(),0)) { 
                       print("<tr>");
                       print("<td>".$valor['fk_empleado']."</td>");
                       print("<td>".$valor['fk_repuesto']."</td>");
                       print("<td>".$valor['cant_empleado_repuesto']."</td>");
   
  
                       print("</tr>");
                    
                         
                 }  
              ?>
                    </tbody>
          <tfoot>
            <tr>
              <th><strong>Tecnico</strong></th>
                            <th><strong>Serial</strong></th> 
                            <th><strong>Stock</strong></th> 
            </tr>
          </tfoot>
        </table>
      </div>
    </div>
  </div>
</div> 




 <div aria-hidden="false" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade"   >

 
                      <div class="modal-dialog">
                          <div class="modal-content">
                              

                              <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                  <h4 class="modal-title selecion"><strong>TEC-STOCK</strong></h4>
                              </div>
                              <div class="modal-body">
                                  <form  id="formulario_agregar_accion" action="agregarAccion.php"   method ="post">

                                   <p><strong>Tecnico</strong></p>

                                  <select class="defaultw" id="id_empleado" >
                                      <?php 

                          

                    $sql="SELECT id_empleado, nombre_empleado, apellido_empleado
                          FROM empleado";
                    $base_db->ejecutar($sql);
                    
                   
                      while($valor=$base_db->obtener_fila($base_db->getCorrida(),0)) { 
                      print("<option  value='".$valor['id_empleado']."'>".$valor['nombre_empleado']." ".$valor['apellido_empleado']."</option>");
                    
                         
                 }  
              ?>
                                
                                     </select>
                                     <p><strong>Serial-Respuesto</strong></p>
                                  <select class="defaultw" id="id_repuesto" >
                                  <?php 

                          

                    $sql="SELECT id_repuesto,codigo_parte_repuesto
                          FROM repuesto";
                    $base_db->ejecutar($sql);
                    
                   
                      while($valor=$base_db->obtener_fila($base_db->getCorrida(),0)) { 
                      print("<option  value='".$valor['id_repuesto']."'>".$valor['codigo_parte_repuesto']."</option>");
                    
                         
                 }  
              ?>
                                  </select> 

                                  <p><strong>Stock</strong></p>
                                  <input type="text" id="id_stock" name="stock" placeholder="*Stock" autocomplete="off" class="form-control placeholder-no-fix">                        
                                  </br>
                                  </br>



                                  <button id="boton_agregar" data-dismiss="modal" class="btn btn-success" type="summit"  href="agregarAccion.php"><strong> Agregar</strong></button>

                                   </form>

                              
                              </div>
                              <div class="modal-footer">
                                    <button data-dismiss="modal" class="btn btn-default" type="button"><strong>Cancelar</strong></button>

                                        
                              </div>
                          

                          </div>
                      </div>
  </div>
</div>
<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModalModificar" class="modal fade"   >
 
                      <div class="modal-dialog">
                          <div class="modal-content">
                              

                              <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                  <h4 class="modal-title selecion"><strong>TEC-STOCK</strong></h4>
                              </div>
                              <div class="modal-body">
                                  <form  id="formulario_agregar_accion" action="agregarAccion.php"   method ="post">

                                   <p><strong>Tecnico</strong></p>

                                
                                  <input type="text" id="id_tecnico_modificar" name="tecnico" placeholder="*tecnico" autocomplete="off" class="form-control placeholder-no-fix">
                                     <p><strong>Serial-Respuesto</strong></p>
                           
                                  <input type="text" id="id_serial_modificar" name="serial" placeholder="*serial" autocomplete="off" class="form-control placeholder-no-fix">

                                  <p><strong>Stock</strong></p>
                                  <input type="text" id="id_stock_modificar" name="stock" placeholder="*Stock" autocomplete="off" class="form-control placeholder-no-fix">                        
                                  </br>
                                  </br>



                                  <button id="boton_modificar_final" data-dismiss="modal" class="btn btn-success" type="summit"  href="agregarAccion.php"><strong> Modificar</strong></button>

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
                                  <h4 class="modal-title selecion"><strong>Eliminar Tec-Stock</strong></h4>
                              </div>
                              <div class="modal-body">
                                 <center><p><strong>Esta seguro de eliminar este Tec-Stock ?</strong></p></center> 
                              
                              </div>
                              <div class="modal-footer">
                              <div class="row">
                                  <div class="col-lg-2">
                                    <button id="boton_eliminar_final" data-dismiss="modal" class="btn btn-danger" type="button"><strong>Eliminar</strong></button>  
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


$( "#id_empleado" ).combobox();
$( "#id_repuesto" ).combobox();



  function ajax_modificar(){
 
 
 $.ajax({

   url: 'modificar_tec-stock.php',
         type:"post",
          data: {    
                     nombre_atributo:$('#id_tecnico_modificar').val(),
                     nombre_atributo2:$('#id_serial_modificar').val(),
                     nombre_atributo3:$('#id_stock_modificar').val(),


             },
   success:function(data,textStatus,jqXHR){
             
          alert(data);
          if(data=='error'){
                    alert('Error al modificar el tec-stock ');
             }else{
                var id=table.row('.selected').data()[0];
                //alert('se modifico con exito');
                //table.row('.selected').remove().draw( false );
              //table.row.add([parseInt(data),$('fk_empleado').val(),$('fk_repuesto'),$('#Cant_empleado_repuesto').val(),]).draw(false);

             
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

             url: 'agregar_tecstock.php',
             type:"post",
             data: {  
                     
                     nombre_atributo:$('#id_empleado').val(),
                     nombre_atributo2:$('#id_repuesto').val(),
                     nombre_atributo3:$('#id_stock').val(),
                     


             },
         success:function(data,textStatus,jqXHR){
             alert(data);

             if(data=='error'){
                    alert('Error al agregar el tec-stock ');
             }else{

                
               //table.row.add([parseInt(data),$('fk_empleado').val(),$('fk_repuesto'),$('#Cant_empleado_repuesto').val(),]).draw(false);
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

   url: 'eliminar_tec-stock.php',
         type:"post",
   
     data: {  //nombre_tabla:'empleado_repuesto',                  //nombre de la tabla
             nombre_atributo:table.row('.selected').data()[0],
             nombre_atributo2:table.row('.selected').data()[1],
             nombre_atributo3:table.row('.selected').data()[2],},
         success:function(data,textStatus,jqXHR){
             
       alert(data);
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



   $( "#buscador_principal" ).autocomplete({
  source: [ "c++", "java", "php", "coldfusion", "javascript", "asp", "ruby" ]
    });



 
                         






    $('#boton_eliminar_final').click( function () {
        
        ajax_eliminar();
    } );
     $('#boton_agregar').click(function(){

   ajax_agregar(); 

});
     
    $('#boton_modificar').click( function() {
  
  datos=table.row('.selected').data();

  
  $("#id_tecnico_modificar").val(datos[0]);
  $("#id_serial_modificar").val(datos[1]);
  $("#id_serial_modificar").attr({ disabled: true });
  $("#id_tecnico_modificar").attr({ disabled: true });
        

});
     $('#boton_modificar_final').click(function(){

   ajax_modificar(); 

});
     
     
     
  });

       
   

 


 

</script>

  </body>
</html>
