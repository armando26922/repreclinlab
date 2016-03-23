<!DOCTYPE html>
<html lang="en">

       <?php
          
 include"funciones/establecerConexion.php";
  
 include "funciones/generalphp.php";


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
              <!--overview start-->
			  <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-laptop"></i> Escritorio General</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-laptop"></i>Escritorio General</li>						  	
					</ol>
				</div>
			</div>

            <div class="row">


        <div id="id_equipo" class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
          <div class="info-box blue-bg">
            <i class="fa fa-cloud-download"></i>
            <div class="count"><?php print(cantidad_total("equipo",$base_db)); ?></div>
            <div class="title">Equipos</div>           
          </div><!--/.info-box-->     
        </div><!--/.col-->
        
        

        <div  id="id_repuesto" class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
          <div class="info-box brown-bg">
            <i class="fa fa-shopping-cart"></i>
            <div class="count"><?php print(cantidad_total("repuesto",$base_db)); ?></div>
            <div class="title">Repuestos</div>            
          </div><!--/.info-box-->     
        </div><!--/.col-->  
        
        <div id="id_cliente" class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
          <div class="info-box dark-bg">
            <i class="fa fa-thumbs-o-up"></i>
            <div class="count"><?php print(cantidad_total("cliente",$base_db)); ?></div>
            <div class="title">Clientes</div>            
          </div><!--/.info-box-->     
        </div><!--/.col-->
        
        <div id="id_empleado" class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
          <div class="info-box green-bg">
            <i class="fa fa-cubes"></i>
            <div class="count"><?php print(cantidad_total("empleado",$base_db)); ?></div>
            <div class="title">Empleados</div>            
          </div><!--/.info-box-->     
        </div><!--/.col-->


              <div id="id_periferico" class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
              <div class="info-box blue-bg">
               <i class="fa fa-cloud-download"></i>
               <div class="count"><?php print(cantidad_total("periferico",$base_db)); ?></div>
               <div class="title">Perifericos</div>           
               </div><!--/.info-box-->     
               </div><!--/.col-->
        
              <div id="id_usuario" class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
              <div class="info-box blue-bg">
               <i class="fa fa-cloud-download"></i>
               <div class="count"><?php print(cantidad_total("usuario",$base_db)); ?></div>
               <div class="title">Usuarios</div>           
               </div><!--/.info-box-->     
               </div><!--/.col-->
      </div><!--/.row-->

      <div class="row">

 <div class="col-lg-8">
                
                  </div>
                
                  <!-- Widget footer -->
                  

              </div> 
            </div>

      </div>









            </div>
             
              
           
              <!-- project team & activity end -->
          </section>
      </section>
      <!--main content end-->
  </section>
  <!-- container section start -->

    <!-- javascripts -->
    <script src="js/jquery.js"></script>
	<script src="js/jquery-ui-1.10.4.min.js"></script>
    <script src="js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui-1.9.2.custom.min.js"></script>
    <!-- bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <!-- nice scroll -->
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
    <!-- charts scripts -->
    <script src="assets/jquery-knob/js/jquery.knob.js"></script>
    <script src="js/jquery.sparkline.js" type="text/javascript"></script>
    <script src="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
    <script src="js/owl.carousel.js" ></script>
    <!-- jQuery full calendar -->
    <<script src="js/fullcalendar.min.js"></script> <!-- Full Google Calendar - Calendar -->
	<script src="assets/fullcalendar/fullcalendar/fullcalendar.js"></script>
    <!--script for this page only-->
    <script src="js/calendar-custom.js"></script>
	<script src="js/jquery.rateit.min.js"></script>
    <!-- custom select -->
    <script src="js/jquery.customSelect.min.js" ></script>
	<script src="assets/chart-master/Chart.js"></script>
   
    <!--custome script for all page-->
    <script src="js/scripts.js"></script>
    <!-- custom script for this page-->
    <script src="js/sparkline-chart.js"></script>
    <script src="js/easy-pie-chart.js"></script>
	<script src="js/jquery-jvectormap-1.2.2.min.js"></script>
	<script src="js/jquery-jvectormap-world-mill-en.js"></script>
	<script src="js/xcharts.min.js"></script>
	<script src="js/jquery.autosize.min.js"></script>
	<script src="js/jquery.placeholder.min.js"></script>
	<script src="js/gdp-data.js"></script>	
	<script src="js/morris.min.js"></script>
	<script src="js/sparklines.js"></script>	
	<script src="js/charts.js"></script>
	<script src="js/jquery.slimscroll.min.js"></script>
  

<!-- librerias de jquery ui-- >
  <link href="css/jquery-ui-1.10.4.min.css" rel="stylesheet">
  <script src="js/jquery-ui-1.10.4.min.js"></script>


<!-- archivos generales--> 
  <link type="text/css" href="funciones/generalcss.css" rel="Stylesheet" />      
  <script type="text/javascript" src="funciones/generaljavascript.js"></script>
  

  <script>
         //knob
      $(function() {
        $(".knob").knob({
          'draw' : function () { 
            $(this.i).val(this.cv + '%')
          }
        })
      });

      //carousel
      $(document).ready(function() {


      $("#id_cliente").click(function(event) {
           /* Act on the event */
            window.location.href="crud_cliente.php";
        });


      $("#id_empleado").click(function(event) {
           /* Act on the event */
            window.location.href="crud_empleado.php";
        });

        $("#id_usuario").click(function(event) {
           /* Act on the event */
            window.location.href="crud_usuario.php";
        });

        $("#id_repuesto").click(function(event) {
           /* Act on the event */
            window.location.href="crud_repuesto.php";
        });

        $("#id_equipo").click(function(event) {
           /* Act on the event */
            window.location.href="crud_equipo.php";
        });

  
        $("#id_periferico").click(function(event) {
           /* Act on the event */
            window.location.href="crud_periferico.php";
        });


          $("#owl-slider").owlCarousel({
              navigation : true,
              slideSpeed : 300,
              paginationSpeed : 400,
              singleItem : true

          });
      });

      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });
	  
	  /* ---------- Map ---------- */
	$(function(){
	  $('#map').vectorMap({
	    map: 'world_mill_en',
	    series: {
	      regions: [{
	        values: gdpData,
	        scale: ['#000', '#000'],
	        normalizeFunction: 'polynomial'
	      }]
	    },
		backgroundColor: '#eef3f7',
	    onLabelShow: function(e, el, code){
	      el.html(el.html()+' (GDP - '+gdpData[code]+')');
	    }
	  });
	});



  </script>

  </body>
</html>
