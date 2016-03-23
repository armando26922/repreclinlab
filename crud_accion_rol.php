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
          <h3 class="page-header"><i class="fa fa fa-bars"></i> <strong>Accion de los Roles</strong></h3>
          
        </div>
      </div>
              <!-- page start-->

                   <div class="row">
                     <div class="col-lg-1">
                     </div>
                      <div class="col-lg-8">
    

<div class="btn-group" role="group">
                        <button class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                           <strong>  Agregar Accion al Rol</strong>
                        </button>
        
                        <button id="boton_modificar" class="btn btn-info" data-toggle="modal" data-target="#Modal_modificar">
                         <strong>   Modificar Accion al Rol </strong>
                        </button>
            
                        <button id="boton_eliminar" class="btn btn-danger" data-toggle="modal" data-target="#modalEliminar">
                           <strong> Eliminar Accion del Rol</strong>
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
                            <td><strong>id_accion_rol</strong></td>
                            <td><strong>Rol</strong></td>
                            <td><strong>Accion</strong></td>
                           
                        </tr>
            
                        <tr>
                            <th><strong>id_accion_rol</strong></th>
                            <th><strong>Rol</strong></th>
                            <th><strong>Accion</strong></th>
                        </tr>
                    </thead>
 
                    <tfoot>
                        <tr>
                            <th><strong>id_accion_rol</strong></th>
                            <td><strong>Rol</strong></td>
                            <td><strong>Accion</strong></td>
                            
                        </tr>
                    </tfoot>
 
                    <tbody>
                      


 <?php 

                    $sql="SELECT  accion_rol.id_accion_rol,rol.Nombre_rol,accion.Nombre_accion 
FROM accion_rol ,accion, rol
where accion_rol.fk_accion=accion.id_accion and accion_rol.fk_rol=rol.id_rol";
                    $base_db->ejecutar($sql);
                   
                      while($valor=$base_db->obtener_fila($base_db->getCorrida(),0)) { 
                       print("<tr>");
                       print("<td>".$valor['id_accion_rol']."</td>");
                       print("<td>".$valor['Nombre_rol']."</td>");
                       print("<td>".$valor['Nombre_accion']."</td>");  
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
                                  <h4 class="modal-title selecion">Acciones de Roles</h4>
                              </div>
                              <div class="modal-body">
                                  <form  id="formulario_agregar_accion" action="ajax/agregarAccion.php"   method ="post">

                                          <p>ROl</p>
                                   <select id="id_rol_agregar" class="default"  tabindex="2">
                           <?php 
                      

                               $sql="SELECT rol.id_rol,rol.Nombre_rol
                                 FROM  rol ";
                               $base_db->ejecutar($sql);


                      while($valor=$base_db->obtener_fila($base_db->getCorrida(),0)) { 
                                
          
                          print("<option value='".$valor['id_rol']."'>".$valor['Nombre_rol']."</option>");
                 }  
              ?>
          
                                       


                                  </select>



                                          <p>Accion</p>
                                   <select id="id_accion_agregar" class="default"  tabindex="2">
                           <?php 
                      

                               $sql="SELECT accion.id_accion,accion.Nombre_accion
                                 FROM  accion ";
                               $base_db->ejecutar($sql);


                      while($valor=$base_db->obtener_fila($base_db->getCorrida(),0)) { 
                                
          
                          print("<option value='".$valor['id_accion']."'>".$valor['Nombre_accion']."</option>");
                 }  
              ?>                                  </select>

          
                                      

                                   </form>

                              
                              </div>
                              <div class="modal-footer">
                                  
 <div class="row">
                                      <div class="col-lg-2">
                                  <button id="boton_agregar" data-dismiss="modal" class="btn btn-success" type="summit"><strong>Agregar</strong></button>
                                    </div>
                                    <div class="col-lg-8"></div>
                                    <div class="col-lg-2">
                                     <button data-dismiss="modal" class="btn btn-default" type="button"><strong>Cancelar</strong></button>
                                    </div>
                                  </div>                        
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
                                  <h4 class="modal-title selecion">Modificar Acciones de Roles</h4>
                              </div>
                              <div class="modal-body">
                                  <form  id="formulario_agregar_accion" action="ajax/agregarAccion.php"   method ="post">

                                          <p>ROl</p>
                                   <select id="id_rol_modificar" class="default"  tabindex="2">
                           <?php 
                      

                               $sql="SELECT rol.id_rol,rol.Nombre_rol
                                 FROM  rol ";
                               $base_db->ejecutar($sql);


                      while($valor=$base_db->obtener_fila($base_db->getCorrida(),0)) { 
                                
          
                          print("<option value='".$valor['id_rol']."'>".$valor['Nombre_rol']."</option>");
                 }  
              ?>
          
                                       


                                  </select>



                                          <p>Accion</p>
                                   <select id="id_accion_modificar" class="default"  tabindex="2">
                           <?php 
                      

                               $sql="SELECT accion.id_accion,accion.Nombre_accion
                                 FROM  accion ";
                               $base_db->ejecutar($sql);


                      while($valor=$base_db->obtener_fila($base_db->getCorrida(),0)) { 
                                
          
                          print("<option value='".$valor['id_accion']."'>".$valor['Nombre_accion']."</option>");
                 }  
              ?>                                  </select>

          
                                

                                   </form>

                              
                              </div>
                              <div class="modal-footer">
                                  
 <div class="row">
                                      <div class="col-lg-2">
                                  <button id="boton_cambio" data-dismiss="modal" class="btn btn-success" type="summit"><strong>Modificar</strong></button>
                                    </div>
                                    <div class="col-lg-8"></div>
                                    <div class="col-lg-2">
                                     <button data-dismiss="modal" class="btn btn-default" type="button"><strong>Cancelar</strong></button>
                                    </div>
                                  </div>                        
                              </div>



                              </div>
                          

                          </div>
                      </div>
    </div>








 <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="modalEliminar" class="modal fade">
                      <div class="modal-dialog">
                          <div class="modal-content">
                              

                              <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                  <h4 class="modal-title selecion"><strong>Eliminar Acciones a Roles</strong></h4>
                              </div>
                              <div class="modal-body">
                                 <center><p><strong>esta seguro de eliminar esta Accion al Rol ?</strong></p></center> 
                              
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
////////////////////////////////////////////////////////////////////////////////////////////////////////////
$( "#id_accion_agregar" ).combobox();
$( "#id_accion_modificar" ).combobox();
$( "#id_rol_agregar" ).combobox();
$( "#id_rol_modificar" ).combobox();


function ajax_modificar(){
 
 alert('modificar tabla');
 $.ajax({

   url: 'modificar_tabla.php',
         type:"post",
        data: { 
                nombre_tabla:'accion_rol',  //nombre de la tabla
                numero_atributos:2,
                id_objeto: table.row('.selected').data()[0],
                
                nombre_atributo1:'fk_accion',
                esNumero1:0,
                valor_atributo1:$('#id_accion_modificar').val(),
               
                nombre_atributo2:'fk_rol',
                esNumero2:0,
                valor_atributo2:$('#id_rol_modificar').val()


                

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
                table.row.add([parseInt(id),$('#id_rol_modificar option:selected').text(),$('#id_accion_modificar option:selected').text()]).draw(false);

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


    $.ajax({

             url: 'agregar_tabla.php',
             type:"post",
             data: {  nombre_tabla:'accion_rol',  //nombre de la tabla
                      numero_atributos:2,
                
                      nombre_atributo1:'fk_rol',
                      esNumero1:0,
                      valor_atributo1:$('#id_rol_agregar').val(),

                      nombre_atributo2:'fk_accion',
                      esNumero2:0,
                      valor_atributo2:$('#id_accion_agregar').val(),

             },
         success:function(data,textStatus,jqXHR){
            // alert(data);

             if(data=='error'){
                    alert('Error al agregar la marca no se aceptan marcas duplicadas');
             }else{

                alert('se agrego con exito');
               table.row.add([parseInt(data),$('#id_rol_agregar option:selected').text(),$('#id_accion_agregar option:selected').text()]).draw(false);
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
   
     data: {  nombre_tabla:'accion_rol',                  //nombre de la tabla
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

           alert('entro permiso');
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
     dom: 'T<"clear">lfrtip',
             "iDisplayLength": 8,

     "columnDefs": [
            {
                "targets": [0],
                "visible": false
            }
        ],

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

$('#boton_cambio').click(function() {

  ajax_permiso('modificar','modificar acciones a roles');

 });



//boton de el modal
$('#boton_eliminar_final').click(function(){

   ajax_permiso('eliminar','eliminar acciones a roles'); 

});



$('#boton_agregar').click(function(){

   ajax_permiso('agregar','agregar acciones a roles'); 

});

//////////////////////////////////////////////////////////////////////////////////////////


});

</script>

  </body>
</html>
