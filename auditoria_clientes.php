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
					<h3 class="page-header"><i class="fa fa fa-bars"></i><strong>Auditoria Cliente</strong></h3>
					
			    </div>
		  </div>
              <!-- page start-->

            

             <div class="row">    
   
            <div class="col-lg-12">


                
            <table id="example"  class="table table-bordered   table-heading table-datatable" cellspacing="0" width="100%">
                    <thead>
                         <tr>
                            <td><strong>Operacion Realizada</strong></td>
                            <td><strong>Campos Modificados</strong></td>
                            <td><strong>Dato Antiguo</strong></td>
                            <td><strong>Dato Modificado</strong></td>
                            <td><strong>Fecha de Registro</strong></td>
                             
                        </tr>
            
                        <tr>
                            <th><strong>Operacion Realizada</strong></th>
                            <th><strong>Campos Modificados</strong></th>
                            <th><strong>Dato Antiguo</strong></th>
                            <th><strong>Dato Modificado</strong></th>
                            <th><strong>Fecha de Registro</strong></th>
                         </tr>
                    </thead>
 
                    <tfoot>
                        <tr>
                            <td><strong>Operacion Realizada</strong></td>
                            <td><strong>Campos Modificados</strong></td>
                            <td><strong>Dato Antiguo</strong></td>
                            <td><strong>Dato Modificado</strong></td>
                            <td><strong>Fecha de Registro</strong></td>
                        </tr>
                    </tfoot>
 
                    <tbody>
                      
                     <?php 

                  $sql=" SELECT tabla_modificada_auditoria,operacion_realizada_auditoria,campo_modificado_auditoria,dato_antiguo_auditoria,dato_modificado_auditoria,fecha_registro_auditoria 
FROM auditoria";
                    $base_db->ejecutar($sql);
                   
                      while($valor=$base_db->obtener_fila($base_db->getCorrida(),0)) { 
                       print("<tr>");
                       print("<td>".$valor['operacion_realizada_auditoria']."</td>");
                       print("<td>".$valor['campo_modificado_auditoria']."</td>");
                       print("<td>".$valor['dato_antiguo_auditoria']."</td>");
                       print("<td>".$valor['dato_modificado_auditoria']."</td>");
                       print("<td>".$valor['fecha_registro_auditoria']."</td>");
                       print("</tr>");
                    
                         
                 }  
              ?>
                    </tbody>
            </table> 
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
  <!--combo box-->
    <script src="dropKick/jquery.dropkick.js"></script>
    <script src="dropKick/jquery.dropkick-min.js"></script>
    <link rel="stylesheet" href="dropKick/dropkick.css" type="text/css">



<script>
$(document).ready(function(){

       
   var table = $('#example').DataTable({
    "bLengthChange": false,

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

   $('.default').dropkick();







    $('#boton_eliminar').click( function () {
        table.row('.selected').remove().draw( false );
    } );
} );

</script>

  </body>
</html>
