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
          <h3 class="page-header"><i class="fa fa fa-bars"></i><strong>Notificaciones</strong></h3>
          
          </div>
      </div>
              <!-- page start-->

            <div class="row">
                     <div class="col-lg-1">
                     </div>
                      <div class="col-lg-8">
    

<div class="btn-group" role="group">

                     
            
                        <button id="boton_eliminar" class="btn btn-danger" data-toggle="modal" data-target="#modalEliminar">
                           <strong> Eliminar Notificaciones</strong>
                        </button>     
             </div>

                         </div>

             <div class="col-lg-1">
                 
             </div>
            </div>

             <div class="row">    
            <div class="col-lg-1"></div>

            <div id="contenedor" class="col-lg-10">
    
            <table id="example"  class="table table-bordered   table-heading table-datatable" cellspacing="0" width="100%">
                    <thead>
                         <tr>
                            <td><strong>Numero Notificacion</strong></td>
                            <td><strong>Descripcion Notificacion</strong></td>
                            <td><strong>Registro</strong></td>                         
                            <td><strong>Visto</strong></td>                   
                            <td><strong>Usuario</strong></td>   
                        </tr>
            
                        <tr>

                            <th><strong>Numero Notificacion</strong></th>
                            <th><strong>Descripcion Notificacion</strong></th>
                            <th><strong>Registro</strong></th>                         
                            <th><strong>Visto</strong></th>
                            <th><strong>Usuario</strong></th>
                           
                        </tr>
                    </thead>
 
                    <tfoot>
                        <tr>
                            <td><strong>Numero Notificacion</strong></td>
                            <td><strong>Descripcion Notificacion</strong></td>
                            <td><strong>Registro</strong></td>                         
                            <td><strong>Visto</strong></td>                   
                            <td><strong>Usuario</strong></td>                   
                        </tr>
                    </tfoot>
 
                    <tbody id="cuerpo"> 
                       
 <?php 

                    $sql="SELECT id_notificacion,descripcion_notificacion,registro_notificacion,visto_notificacion,usuario.Username_usuario
                          FROM notificacion,usuario
                          where usuario.id_usuario=notificacion.fk_usuario";
                    $base_db->ejecutar($sql);
                   
                      while($valor=$base_db->obtener_fila($base_db->getCorrida(),0)) { 
                       print("<tr>");
                       print("<td>".$valor['id_notificacion']."</td>");
                       print("<td>".$valor['description_notificacion']."</td>");
                       print("<td>".$valor['registro_notificacion']."</td>");
                       print("<td>".$valor['visto_notificacion']." </td>");
                       print("<td>".$valor['Username_usuario']." </td>");
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
                                  <form  id="formulario_agregar_usuario" action="ajax/agregarAccion.php"   method ="post">

                                  <p><strong>Usuario</strong></p>
                                  <input id="nombre_usuario" type="text" name="nombre_usuario" placeholder="*usuario" autocomplete="off" class="form-control placeholder-no-fix">                        
                                   <p><strong>Clave</strong></p>
                                  <input id="clave_usuario" type="password" name="clave_usuario" placeholder="*clave" autocomplete="off" class="form-control placeholder-no-fix">                        
                                 
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




                                  <button id="boton_agregar" data-dismiss="modal" class="btn btn-success" type="summit"><strong> Agregar</strong></button>

                                   </form>

                              
                              </div>
                              <div class="modal-footer">
                                    <button data-dismiss="modal" class="btn btn-default" type="button"><strong>Cancelar</strong></button>

                                        
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
                                  <form  id="formulario_agregar_accion" action="ajax/agregarAccion.php"   method ="post">

                                  <p><strong>Usuario</strong></p>
                                  <input id="nombre_usuario_modificar" type="text" name="nombre_usuario" placeholder="*usuario" autocomplete="off" class="form-control placeholder-no-fix">                        
                                   <p><strong>Clave</strong></p>
                                  <input id="clave_usuario_modificar" type="password" name="clave_usuario" placeholder="*clave" autocomplete="off" class="form-control placeholder-no-fix">                        
                                 
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



                                  <button id="boton_cambio" data-dismiss="modal" class="btn btn-success" type="summit"><strong> Modificar</strong></button>

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
 
var tabla;


$(document).ready(function(){
////////////////////////////////////////////////////////////////////////////////////////////////////////////
$( "#empleado_usuario" ).combobox();
$( "#empleado_usuario_modificar" ).combobox();
$( "#rol_usuario_modificar" ).combobox();
$( "#rol_usuario" ).combobox();



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

//modificar los datos
$('#boton_cambio').click(function() {

  ajax_permiso('modificar','modificar usuario');

 });


//boton de el modal
$('#boton_eliminar_final').click( function () {

   ajax_permiso('eliminar','eliminar usuario'); 
  
    });




$('#boton_agregar').click(function(){

   ajax_permiso('agregar','agregar usuario'); 
   
  
  
 });
 




});

</script>

  </body>
</html>
