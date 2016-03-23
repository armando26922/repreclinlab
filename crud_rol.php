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
					<h3 class="page-header"><i class="fa fa fa-bars"></i><strong>Roles del Sistema</strong></h3>
					
				</div>
		  </div>
              <!-- page start-->

                    <div class="row">
                     <div class="col-lg-1">
                     </div>
                      <div class="col-lg-8">
    

                       <div class="btn-group" role="group">

                        <button class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                           <strong>  Agregar Rol</strong>
                        </button>
        
                        <button id="boton_modificar" class="btn btn-info" data-toggle="modal" data-target="#myModal2">
                         <strong>   Modificar Rol </strong>
                        </button>
            
                        <button id="boton_eliminar" class="btn btn-danger" data-toggle="modal" data-target="#modalEliminar">
                           <strong> Eliminar Rol</strong>
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
                            <td><strong>id_rol</strong></td> 
                            <td><strong>Nombre del Rol</strong></td> 
                        </tr>
            
                        <tr>
                            <th><strong>id_rol</strong></th>
                            <th><strong>Nombre del Rol</strong></th>
                        </tr>
                    </thead>
 
                    <tfoot>
                        <tr>
                            <td><strong>id_rol</strong></td>                          
                            <td><strong>Nombre del Rol</strong></td>                          
                        </tr>
                    </tfoot>
 
                    <tbody>
                     


                     <?php 

                  $sql=" SELECT id_rol,Nombre_rol
                          FROM rol";
                    $base_db->ejecutar($sql);
                   
                      while($valor=$base_db->obtener_fila($base_db->getCorrida(),0)) { 
                       print("<tr>");
                       print("<td>".$valor['id_rol']."</td>");
                       print("<td>".$valor['Nombre_rol']."</td>");
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
                                  <h4 class="modal-title selecion"> Agregar Roles</h4>
                              </div>
                              <div class="modal-body">
                                  <form  id="formulario_agregar_rol" action="ajax/agregarAccion.php"   method ="post">

                                  <p>Agregar Rol</p>
                                  <input type="text" id="nombre_rol" name="nombre_rol" placeholder="*rol" autocomplete="off" class="form-control placeholder-no-fix">                        
                                   </br>
 </br>

                                  <div class="row">
                                      <div class="col-lg-2">
                                  <button id="boton_agregar"  class="btn btn-default" type="summit">Agregar</button>
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

 <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal2" class="modal fade">
                      <div class="modal-dialog">
                          <div class="modal-content">
                              

                              <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                  <h4 class="modal-title selecion"><strong>Modificar Roles</strong></h4>
                              </div>
                              <div class="modal-body">
                                  <form  id="formulario_modificar_rol"    method ="post">

                                  <p>rol</p>
                                  <input type="hidden"  id="id_rol_modificar" name="id_rol_modificar" placeholder="*rol" autocomplete="off" class="form-control placeholder-no-fix">                        

                                  <input type="text"  id="nombre_rol_modificar" name="nombre_rol_modificar" placeholder="*rol" autocomplete="off" class="form-control placeholder-no-fix">                        
                                  </br>
  <div class="row">
                                      <div class="col-lg-2">
                                  <button id="boton_cambio"  class="btn btn-success" type="submit"><strong>Modificar</strong></button>
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
                                  <h4 class="modal-title selecion"><strong>Eliminar Rol</strong></h4>
                              </div>
                              <div class="modal-body">
                                 <center><p><strong>Esta seguro de eliminar el Rol ?</strong></p></center> 
                              
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
    <script type="text/javascript" src="plugins/dist/jquery.validate.js"></script>


<script>
//////////////////////////////////---------------VALIDACIONES-CAMPOS-------------///////////////////////////////////////////



$(document).ready(function(){


/////////////////////////////-------------INICIO  AJAX Agregar,Modificar,Eliminar,Permiso--------------///////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////
function ajax_agregar(){
    $.ajax({

             url: 'agregar_tabla.php',
             type:"post",
             data: {  nombre_tabla:'rol',  //nombre de la tabla
                numero_atributos:1,
                nombre_atributo1:'nombre_rol',
                 esNumero1:1,
                 valor_atributo1:$('#nombre_rol').val()

             },
         success:function(data,textStatus,jqXHR){
            // alert(data);

             if(data=='error'){
                    alert('Error al agregar la marca no se aceptan marcas duplicadas');
             }else{

                alert('se agrego con exito');
               table.row.add([parseInt(data),$('#nombre_rol').val()]).draw(false);
              }
 
        
         },
           
         error:function(jqXHR,textStatus,errorThrown)
        {

          alert("error");

        }
  });

}
function ajax_eliminar(){   ///// inicio de la funcion ajax_eliminar

  $.ajax({ //inicio ajax insertar
  
   url: 'eliminar_tabla.php',
         type:"post",
   
     data: {  nombre_tabla:'rol',                  //nombre de la tabla
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

function ajax_modificar(){
 $.ajax({

   url: 'modificar_tabla.php',
         type:"post",
        data: { 
                nombre_tabla:'rol',  //nombre de la tabla
                numero_atributos:1,
                id_objeto: table.row('.selected').data()[0],
                
                nombre_atributo1:'nombre_rol',
                esNumero1:1,
                valor_atributo1:$('#nombre_rol_modificar').val()

             },
          success:function(data,textStatus,jqXHR){
             
         // alert(data);
          if(data=='error'){
                    alert('Error al agregar la marca no se aceptan marcas duplicadas');
             }else{

                alert('se agrego con exito');

                 var id=table.row('.selected').data()[0];
           //     alert('se modifico con exito');
            //   table.row('.selected').data()[1]=$('#id_rol_modificar').val();
                table.row('.selected').remove().draw( false );
                table.row.add([parseInt(id),$('#nombre_rol_modificar').val()]).draw(false);
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
              
             alert('agrego');
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


///Agregar rol///
$("#formulario_agregar_rol").ready(function($) {
$("#formulario_agregar_rol").validate({
  debug:true,
  rules:{
    nombre_rol:{
    required:true,
    minlength:2,
    maxlength:90
  // depends:function(){
   //     alert("hola mundo");

    //}
        }
   },
  messages:{ 
         nombre_rol:{ 
                      required:"Este campo es obligatorio",
                      minlength:"Minimo tiene que ser 2 caracteres",
                      maxlength:"Maximo tiene que ser 90 caracteres"
         }
      
    },
    invalidHandler:function(event,validator){
        alert("Error al mandar el formulario revise los campos");


    },
    submitHandler:function(form){
          ajax_permiso('agregar','agregar rol'); 
    }

});//fin jquery validate

});//fin cargar formulario




///Modificar rol////
$("#formulario_modificar_rol").ready(function($) {
$("#formulario_modificar_rol").validate({
  debug:true,
  rules:{
    nombre_rol_modificar:{
    required:true,
    minlength:2,
    maxlength:90
  // depends:function(){
   //     alert("hola mundo");

    //}
        }
   },
  messages:{ 
         nombre_rol_modificar:{ 
                      required:"Este campo es obligatorio",
                      minlength:"Minimo tiene que ser 2 caracteres",
                      maxlength:"Maximo tiene que ser 90 caracteres"
         }
      
    },
    invalidHandler:function(event,validator){
        alert("Error al mandar el formulario revise los campos");


    },
    submitHandler:function(form){
          ajax_permiso('modificar','modificar rol'); 
    }

});//fin jquery validate

});//fin cargar formulario

//////////////////////////////////////////////////////////////////////////////////////////////////////////////
   


   var table = $('#example').DataTable({
    "bLengthChange": false,
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

 



/////////////////////////////////////////////////////////////////////////////////
//$("#boton_agregar").click(function(event) {
            
//  ajax_permiso('agregar','agregar rol'); 

//});
        

///////////////////////////////////////////////////////////////////////////////////////////////////

$('#boton_modificar').click(function() {
  
  datos_marca=table.row('.selected').data();

  $("#id_rol_modificar").val(datos_marca[0]);
  $("#nombre_rol_modificar").val(datos_marca[1]);
  


 });

////////////////////////////////////////////////////////////////////////////////////////
var id_marca;
//boton de el modal
$('#boton_eliminar_final').click(function(){

   ajax_permiso('eliminar','eliminar rol'); 

});



//$('#boton_agregar').click(function(){
 //   ajax_permiso('agregar','agregar marca'); 
//});


//$('#boton_cambio').click(function() {

  //ajax_permiso('modificar','modificar rol');

 //});

 //////////////////////////////////////////////////////////////////////////////////////////



});

</script>

  </body>
</html>
