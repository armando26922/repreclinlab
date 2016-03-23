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
                    <h3 class="page-header"><i class="fa fa fa-bars"></i><strong>Linea</strong></h3>
                    
                </div>
          </div>
              <!-- page start-->

                   <div class="row">
                     <div class="col-lg-1">
                     </div>
                      <div class="col-lg-8">
    

<div class="btn-group" role="group">
                        <button class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                           <strong>  Agregar Linea</strong>
                        </button>
        
                        <button id="boton_modificar" class="btn btn-info" data-toggle="modal" data-target="#Modal_modificar">
                         <strong>   Modificar Linea </strong>
                        </button>
            
                        <button id="boton_eliminar" class="btn btn-danger" data-toggle="modal" data-target="#modalEliminar">
                           <strong> Eliminar Linea</strong>
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
                            <td><strong>id_linea</strong></td>
                            <td><strong>Modelo</strong></td>
                            <td><strong>Linea</strong></td>
                            <td><strong>Marca Linea</strong></td>
                        </tr>
            
                        <tr>
                            <th><strong>id_linea</strong></th>
                            <th><strong>Modelo</strong></th>
                            <th><strong>Linea</strong></th>
                            <th><strong>Marca Linea</strong></th>
                        </tr>
                    </thead>
 
                    <tfoot>
                        <tr>
                            <td><strong>id_linea</strong></td>
                            <td><strong>Modelo</strong></td>
                            <td><strong>Linea</strong></td>
                            <td><strong>Marca Linea</strong></td>
                            
                        </tr>
                    </tfoot>
 
                    <tbody>
         



                     <?php 

                    $sql="SELECT linea.id_linea,linea.Nombre_linea,nombre_marca ,Modelo_linea
                          from linea,marca 
                           WHERE linea.fk_marca=marca.id_marca";
                    $base_db->ejecutar($sql);
                   
                      while($valor=$base_db->obtener_fila($base_db->getCorrida(),0)) { 
                       print("<tr>");
                       print("<td>".$valor['id_linea']."</td>");
                       print("<td>".$valor['Modelo_linea']."</td>");
                       print("<td>".$valor['Nombre_linea']."</td>");
                       print("<td>".$valor['nombre_marca']."</td>");
                      
  
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
                                  <h4 class="modal-title selecion">Linea</h4>
                              </div>
                              <div class="modal-body">
                                  <form  id="formulario_agregar_linea" action="ajax/agregarAccion.php"   method ="post">

                                  <p>Agregar Linea</p>
                                  <input id="nombre_linea" type="text" name="nombre_linea" placeholder="*linea" autocomplete="off" class="form-control placeholder-no-fix">   

                                  <p>Agregar Marca</p>
                                   <select id="id_marca_agregar" class="default"  tabindex="2">
                           <?php 
                      

                               $sql="SELECT marca.id_marca,marca.nombre_marca
                                 FROM  marca ";
                               $base_db->ejecutar($sql);


                      while($valor=$base_db->obtener_fila($base_db->getCorrida(),0)) { 
                                
          
                          print("<option value='".$valor['id_marca']."'>".$valor['nombre_marca']."</option>");
                 }  
              ?>
          
                                       


                                  </select>
                                  </br>
                                  <button id="boton_agregar" class="btn btn-success" type="summit"><strong>Agregar</strong></button>

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
                                  <h4 class="modal-title selecion"> Modificar Linea</h4>
                              </div>
                              <div class="modal-body">
                                  <form  id="formulario_modificar_linea" action="ajax/agregarAccion.php"   method ="post">

                                  <p>Agregar Linea</p>
                                  <input id="nombre_linea_modificar" type="text" name="nombre_linea" placeholder="*linea" autocomplete="off" class="form-control placeholder-no-fix">   

                                  <p>Agregar Marca</p>
                                   <select id="id_marca_modificar" name="id_marca_agregar" class="default"  tabindex="2">
                           <?php 
                      

                               $sql="SELECT marca.id_marca,marca.nombre_marca
                                 FROM  marca ";
                               $base_db->ejecutar($sql);


                      while($valor=$base_db->obtener_fila($base_db->getCorrida(),0)) { 
                                
          
                          print("<option value='".$valor['id_marca']."'>".$valor['nombre_marca']."</option>");
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
                                  <h4 class="modal-title selecion"><strong>Eliminar Linea</strong></h4>
                              </div>
                              <div class="modal-body">
                                 <center><p><strong>esta seguro de eliminar la Linea ?</strong></p></center> 
                              
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


/////////////////////////////////////////////////////////////////////////////////
//crear combo box
$("#id_marca_modificar").combobox();
$("#id_marca_agregar").combobox();




//////////////////////////////////---------------VALIDACIONES-CAMPOS-------------///////////////////////////////////////////

///Agregar linea////
$("#formulario_agregar_linea").ready(function($) {
$("#formulario_agregar_linea").validate({
  debug:true,
  rules:{
    nombre_linea:{
    required:true,
    minlength:2,
    maxlength:90
              }

   },
  messages:{ 
         nombre_linea:{ 
                      required:"Este campo es obligatorio",
                      minlength:"Minimo tiene que ser 2 caracteres",
                      maxlength:"Maximo tiene que ser 90 caracteres"
         }
    },
    submitHandler:function(form){
          ajax_permiso('agregar','agregar linea'); 
    }

});
});

////////////////////////////////////////////////////////////////////////////////////////////////////




function ajax_modificar(){
 
 //alert('modificar tabla');
 $.ajax({

   url: 'modificar_tabla.php',
         type:"post",
          data: {  

            nombre_tabla:'linea',  //nombre de la tabla
            numero_atributos:2,
            id_objeto: table.row('.selected').data()[0],



            nombre_atributo1:'nombre_linea',
            valor_atributo1:$('#nombre_linea_modificar').val(),
            esNumero1:1,
           
            nombre_atributo2:'fk_marca',
            esNumero2:0,
            valor_atributo2:$('#id_marca_modificar').val()
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
                table.row.add([parseInt(id),$('#nombre_linea_modificar').val(),$('#id_marca_modificar option:selected').text()]).draw(false);

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
             data: {  nombre_tabla:'linea',  //nombre de la tabla
                numero_atributos:2,
                
                nombre_atributo1:'nombre_linea',
                esNumero1:1,
                valor_atributo1:$('#nombre_linea').val(),
               
                nombre_atributo2:'fk_marca',
                esNumero2:0,
                valor_atributo2:$('#id_marca_agregar').val()
                
             },
         success:function(data,textStatus,jqXHR){
            // alert(data);

             if(data=='error'){
                    alert('Error al agregar la marca no se aceptan marcas duplicadas');
             }else{

                alert('se agrego con exito');
               table.row.add([parseInt(data),$('#nombre_linea').val(),$("#id_marca_agregar option:selected").text()]).draw(false);
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
   
     data: {  nombre_tabla:'linea',                  //nombre de la tabla
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



//////////////////////////////////////////////////////////////////////////////

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
   ajax_permiso('eliminar','eliminar linea'); 
    });

//boton del modificar
$('#boton_cambio').click(function() {

  ajax_permiso('modificar','modificar linea');

 });






///////////////////////////////////////////////////////////////////////////////////////////////////

$('#boton_modificar').click(function() {  
  datos_cargo=table.row('.selected').data();

   //$("#id_cargo_modificar").val(datos_cargo[0]);
   $("#nombre_linea_modificar").val(datos_cargo[1]);
 //  $("#salario_cargo_modificar").val(datos_cargo[1]);
 


 });



});

</script>

  </body>
</html>
