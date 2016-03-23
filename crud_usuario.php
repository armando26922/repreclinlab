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
        <?php 
                  include "header.php";
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
					<h3 class="page-header"><i class="fa fa fa-bars"></i><strong>Usuarios del Sistema</strong></h3>
					
			    </div>
		  </div>
              <!-- page start-->
   <!-- inicio fila numero1-->
     <div class="row">
          <div class="col-lg-1"></div>
          
          <div class="col-lg-8">
    

                <div class="btn-group" role="group">

                        <button class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                           <strong>  Agregar Usuario</strong>
                        </button>
        
                        <button id="boton_modificar" class="btn btn-info" data-toggle="modal" data-target="#Modal_modificar">
                         <strong>   Modificar Usuario </strong>
                        </button>
            
                        <button id="boton_eliminar" class="btn btn-danger" data-toggle="modal" data-target="#modalEliminar">
                           <strong> Eliminar Usuario</strong>
                        </button>     
                </div>

          </div>
          <div class="col-lg-1"></div>
      </div>
      <!-- fin fila numero1-->
      <!-- inicio fila numero2-->
       <div class="row">    
            <div class="col-lg-1"></div>
               <div id="contenedor" class="col-lg-10">
                  <table id="example"  class="table table-bordered   table-heading table-datatable" cellspacing="0" width="100%">
                    <thead>
                         <tr>
                            <td><strong>id_usuario</strong></td>
                            <td><strong>Usuario</strong></td>
                            <td><strong>Clave</strong></td>                         
                            <td><strong>Rol</strong></td>
                            <td><strong>Empleado</strong></td> 
                            <td><strong>Foto</strong></td> 
                        </tr>
                        <tr>

                            <th><strong>id_usuario</strong></th>
                            <th><strong>Usuario</strong></th>
                            <th><strong>Clave</strong></th>                         
                            <th><strong>Rol</strong></th>
                            <th><strong>Empleado</strong></th>
                            <th><strong>Foto</strong></th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <td><strong>id_usuario</strong></td>
                            <td><strong>Usuario</strong></td>
                             <td><strong>Clave</strong></td>                         
                            <td><strong>Rol</strong></td>
                            <td><strong>Empleado</strong></td> 
                            <td><strong>Foto</strong></td> 
                            
                        </tr>
                    </tfoot>
                    <tbody id="cuerpo"> 
                       
                    <?php 

                    $sql="SELECT usuario.id_usuario,imagen_usuario, usuario.username_usuario ,usuario.Password_usuario, rol.Nombre_rol,empleado.CI_empleado
                          FROM  usuario ,rol,empleado
                          WHERE usuario.fk_empleado=empleado.id_empleado and usuario.fk_rol=rol.id_rol";
                    $base_db->ejecutar($sql);
                   
                      while($valor=$base_db->obtener_fila($base_db->getCorrida(),0)) { 
                       print("<tr>");
                       print("<td>".$valor['id_usuario']."</td>");
                       print("<td>".$valor['username_usuario']."</td>");
                       print("<td>".$valor['Password_usuario']."</td>");
                       print("<td>".$valor['Nombre_rol']." </td>");
                       print("<td>".$valor['CI_empleado']."</td>");      
                       print("<td><span class='profile-ava'> <img src='".$valor['imagen_usuario']."' alt='imagen' height='40' width='70'></span> </td>");      
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
                                  <h4 class="modal-title selecion"><strong>USUARIO</strong></h4>
                              </div>
                              <div class="modal-body">
                                  <form  id="formulario_agregar_usuario"    method ="post">
                                  <p><strong>Usuario</strong></p>
                                  <input id="nombre_usuario" type="text" name="nombre_usuario" placeholder="*usuario" autocomplete="off" class="form-control placeholder-no-fix">                        
                                 </br>
                                                                 <p><strong>Clave</strong></p>
                                  <input id="clave_usuario" type="password" name="clave_usuario" placeholder="*clave" autocomplete="off" class="form-control placeholder-no-fix">                        
                                 </br>
                                  <p><strong>Elegir Rol</strong></p>
                                   <select id="rol_usuario" name="rol_usuario" class="default" tabindex="2">
                                   <?php 
                                      $sql="SELECT rol.id_rol,rol.Nombre_rol
                                      FROM  rol ";
                                      $base_db->ejecutar($sql);

                                      while($valor=$base_db->obtener_fila($base_db->getCorrida(),0)) {               
                                            print("<option value='".$valor['id_rol']."'>".$valor['Nombre_rol']."</option>");
                                            }  
                                        ?>
                                     </select>
                                   <p><strong>Elegir Empleado</strong></p>
                                    <select id="empleado_usuario" name="empleado_usuario" >
                                      <?php 
                                        $sql="SELECT  empleado.id_empleado,empleado.nombre_empleado, empleado.apellido_empleado,CI_empleado
                                         FROM empleado";
                          
                                         $base_db->ejecutar($sql);
      

                                         while($valor=$base_db->obtener_fila($base_db->getCorrida(),0)) { 
                                        print("<option value='".$valor['id_empleado']."'>".$valor['CI_empleado']."</option>");
                                          }  
                                           ?>
                                  </select>
                                  </br>
                                   <p><strong>Imagen</strong></p>
                                  <input id="imagen_usuario" type="file" name="imagen_subir" placeholder="*usuario" autocomplete="off" class="form-control placeholder-no-fix">                        
                                    </br>
                                    <div class="row">
                                      <div class="col-lg-2">
                                    <button id="boton_agregar"  class="btn btn-success" type="submit"><strong>Agregar</strong></button>
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


  <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="Modal_modificar" class="modal fade">
                      <div class="modal-dialog">
                          <div class="modal-content">
                              <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                  <h4 class="modal-title selecion"><strong>MODIFICAR USUARIO</strong></h4>
                              </div>
                              <div class="modal-body">
                                  <form  id="formulario_modificar_usuario" action="ajax/agregarAccion.php"   method ="post">

                                  <p><strong>Usuario</strong></p>
                                  <input id="nombre_usuario_modificar" type="text" name="nombre_usuario_modificar" placeholder="*usuario" autocomplete="off" class="form-control placeholder-no-fix">                        
                                   </br>
                                   <p><strong>Clave</strong></p>
                                  <input id="clave_usuario_modificar" type="password" name="clave_usuario_modificar" placeholder="*clave" autocomplete="off" class="form-control placeholder-no-fix">                        
                                 </br>
                                  <p><strong>Elegir Rol</strong></p>
                                   <select id="rol_usuario_modificar" name="rol_usuario" class="default" tabindex="2">
                                   <?php 
                      

                        $sql="SELECT rol.id_rol,rol.Nombre_rol
                              FROM  rol ";
                    $base_db->ejecutar($sql);


                      while($valor=$base_db->obtener_fila($base_db->getCorrida(),0)) { 
                                
          
                          print("<option value='".$valor['id_rol']."'>".$valor['Nombre_rol']."</option>");
                 }  
              ?>
              
                                     </select>

                                   <p><strong>Elegir Empleado</strong></p>
                                
                          <select id="empleado_usuario_modificar" name="empleado_usuario" >
                                      <?php 
                    $sql="SELECT  empleado.id_empleado,empleado.nombre_empleado, empleado.apellido_empleado,CI_empleado
                          FROM empleado";
                    $base_db->ejecutar($sql);


                      while($valor=$base_db->obtener_fila($base_db->getCorrida(),0)) { 
                                
          
                          print("<option value='".$valor['id_empleado']."'>".$valor['CI_empleado']."</option>");
                 }  
              ?>
              
                                  </select>
                                  </br>
                                  </br>




                                   </form>

                              
                              </div>
                              <div class="modal-footer">
                                  <div class="row">
                                      <div class="col-lg-2">
                                  <button id="boton_cambio"  class="btn btn-success" type="submit"><strong> Modificar</strong></button>
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
  

  <script type="text/javascript" src="plugins/dist/jquery.validate.js"></script>

<script>
 
//////////////////////////////////---------------VALIDACIONES-CAMPOS-------------///////////////////////////////////////////

///Agregar usuario////




var tabla;


$(document).ready(function(){

////////////////////////////////////////////////////////////////////////////////////////////////////////////
$( "#empleado_usuario" ).combobox();
$( "#empleado_usuario_modificar" ).combobox();
$( "#rol_usuario_modificar" ).combobox();
$( "#rol_usuario" ).combobox();







//////////////////////////////////////////////////////////////////////////////////////////////////////////////

function ajax_modificar(){

  $.ajax({

   url: 'modificar_tabla.php',
         type:"post",
data: {  

                 nombre_tabla:'usuario',  //nombre de la tabla
                 numero_atributos:4,
                 id_objeto: table.row('.selected').data()[0],

                
                 nombre_atributo1:'Username_usuario',
                 esNumero1:1,
                 valor_atributo1:$('#nombre_usuario_modificar').val(),

                 nombre_atributo2:'Password_usuario',
                 esNumero2:1,
                 valor_atributo2:$('#clave_usuario_modificar').val(),

                 nombre_atributo3:'fk_rol',
                 esNumero3:0,
                 valor_atributo3:$('#rol_usuario_modificar').val(),

                 nombre_atributo4:'fk_empleado',
                 esNumero4:0,
                 valor_atributo4:$('#empleado_usuario_modificar').val() 

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
                table.row.add([parseInt(id),$("#nombre_usuario_modificar").val(),$("#clave_usuario_modificar").val(),$('#rol_usuario_modificar option:selected').text(),$('#empleado_usuario_modificar option:selected').text()]).draw(false);

              }


         },
           
         error:function(jqXHR,textStatus,errorThrown)
        {

           alert("error");

        }

  });
}// final de ajax modificar

function guardar_imagen(){

var inputFileImage = document.getElementById("imagen_usuario");

var file = inputFileImage.files[0];

var data = new FormData();

data.append('archivo',file);

var url = "guardar_imagen.php";

$.ajax({

url:url,

type:'POST',

contentType:false,

data:data,
success:function(data,textStatus,jqXHR){

alert('ta');
},
processData:false,

cache:false});
}




function ajax_agregar(){
  //alert('agregar');
  var inputFileImage = document.getElementById("imagen_usuario");

   // document.write(inputFileImage.files[0]['name']

    $.ajax({

             url: 'agregar_tabla.php',
             type:"post",
             data: {  

                 nombre_tabla:'usuario',  //nombre de la tabla
                 numero_atributos:5,
                
                 nombre_atributo1:'Username_usuario',
                 esNumero1:1,
                 valor_atributo1:$('#nombre_usuario').val(),

                 nombre_atributo2:'Password_usuario',
                 esNumero2:1,
                 valor_atributo2:$('#clave_usuario').val(),

                 nombre_atributo3:'fk_rol',
                 esNumero3:0,
                 valor_atributo3:$('#rol_usuario').val(),

                 nombre_atributo4:'fk_empleado',
                 esNumero4:0,
                 valor_atributo4:$('#empleado_usuario').val(),

                 nombre_atributo5:'imagen_usuario',
                 esNumero5:1,
                 valor_atributo5:'imagenes_perfiles/'+inputFileImage.files[0]['name']




                 },
         success:function(data,textStatus,jqXHR){
              //alert(data);

             if(data=='error'){
                    alert('Error al agregar la marca no se aceptan marcas duplicadas');
             }else{

              guardar_imagen();

               alert('se agrego con exito');
               ajax_agregar_auditoria();
               table.row.add([parseInt(data),$('#nombre_usuario').val(),$('#clave_usuario').val(),$('#rol_usuario option:selected').text(),$('#empleado_usuario option:selected').text(),'imagenes_perfiles/'+inputFileImage.files[0]['name']]).draw(false);
               

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
   
     data: {  nombre_tabla:'usuario',                  //nombre de la tabla
             id_objeto:table.row('.selected').data()[0] },
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

//////////////////////////////////////
       

//////////////////////////////////////////////////////////////////////////////////////////////////////////////
$("#formulario_agregar_usuario").ready(function($) {

var validacion_usuario=$("#formulario_agregar_usuario").validate({
  rules:{
    nombre_usuario:{
                  required:true,
                  minlength:2,
                  maxlength:90
     },
    clave_usuario:{
                  required:true,
                  minlength:2,
                  maxlength:90
    }
   },
  messages:{ 
         nombre_usuario:{ 
                      required:"Este campo es obligatorio",
                      minlength:"Minimo tiene que ser 2 caracteres",
                      maxlength:"Maximo tiene que ser 90 caracteres"
         },
         clave_usuario:{ 
                      required:"Este campo es obligatorio",
                      minlength:"Minimo tiene que ser 2 caracteres",
                      maxlength:"Maximo tiene que ser 90 caracteres"
         }
    },
    invalidHandler:function(event,validator){
       alert("Error al mandar el formulario revise los campos");

    },

    submitHandler:function(form){
           form.submit(function(event) {
            event.preventDefault();
             });
           
          ajax_permiso('agregar','agregar usuario');
    }


});

});



///modificar usuario////
$("#formulario_modificar_usuario").ready(function($) {
$("#formulario_modificar_usuario").validate({
  debug:true,
  rules:{
    nombre_usuario_modificar:{
    required:true,
    minlength:2,
    maxlength:90
  // depends:function(){
   //     alert("hola mundo");

    //}
        },
    clave_usuario_modificar:{

    required:true,
    minlength:2,
    maxlength:90

    }
   },
  messages:{ 
         nombre_usuario_modificar:{ 
                      required:"Este campo es obligatorio",
                      minlength:"Minimo tiene que ser 2 caracteres",
                      maxlength:"Maximo tiene que ser 90 caracteres"
         },
         clave_usuario_modificar:{ 
                      required:"Este campo es obligatorio",
                      minlength:"Minimo tiene que ser 2 caracteres",
                      maxlength:"Maximo tiene que ser 90 caracteres"
         }
    },
    submitHandler:function(form){
          ajax_permiso('modificar','modificar usuario'); 
    }

});
});


////////////////////////////////////////////////////////////////////////////////////////////////////









////////////////////////////////////////////////////////
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

 tabla=table;

  $('#example thead th').each( function () {
        var title = $('#example thead td').eq( $(this).index() ).text();
        $(this).html( '<input type="text" onkeyup=buscar_valor(); id="'+title+'" placeholder="Buscar '+title+'" />' );
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






///////////////////////////////////////////////////////////////////////////////////////////////////

$('#boton_modificar').click(function() {
  
  datos_usuario=table.row('.selected').data();

  //$("#id_marca_modificar").val(datos_marca[0]);
  $("#nombre_usuario_modificar").val(datos_usuario[1]);
  $("#nombre_usuario_modificar").attr({
    disabled: true
  });
  $("#clave_usuario_modificar").val(datos_usuario[2]);
 // $("#").val(datos_usuario[3]);
  //$("#nombre_marca_modificar").val(datos_usuario[4]);




 });



//boton de el modal
$('#boton_eliminar_final').click( function () {

   ajax_permiso('eliminar','eliminar usuario'); 
  
    });







});

</script>

  </body>
</html>
