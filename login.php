<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Inicio Sesión</title>

    <!-- Bootstrap CSS -->    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="css/elegant-icons-style.css" rel="stylesheet" />
    <link href="css/font-awesome.css" rel="stylesheet" />
    <!-- Custom styles -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>s
    <![endif]-->
</head>

  <body class="login-img3-body">

    <div class="container">

      <form id="formulario_login" class="login-form"  >        
        <div class="login-wrap">
            <p class="login-img"><i class="icon_lock_alt"></i></p>
            <div class="input-group">
              <span class="input-group-addon"><i class="icon_profile"></i></span>
              <input type="text" class="form-control" name="username" placeholder="Usuario" autofocus>
            </div>
            <div class="input-group">
                <span class="input-group-addon"><i class="icon_key_alt"></i></span>
                <input type="password" class="form-control" name="password" placeholder="Contraseña">
            </div>
            <button id="boton_ingresar" class="btn btn-primary btn-lg btn-block" >Iniciar Sesión</button>
        </div>
      </form>
    </div>

  </body>
 <script src="plugins/jquery/jquery-2.1.0.min.js"></script>

 <script>


$(document).on("ready", function(){

$("#boton_ingresar").on("click",function(e){

   e.preventDefault();
   var form_data=$("#formulario_login").serializeArray();
   var url="validar_usuario.php";
   // ajax para manejo 
   $.ajax({

         url:url,
         type:"post",
         data:form_data,
         success:function(data,textStatus,jqXHR){
            // document.write(data);
           if(data=="1_ingresar"){
           
              document.location="index.php";
                 
           }

           if(data=="2_falta_datos"){

             alert("Deben llenar todos los campos");
           }

           if(data=="3_no_encontrado"){

             alert("Usuario o Clave es invalido");
           }

         },
           
         error:function(jqXHR,textStatus,errorThrown)
        {

           alert("error");

        }

  });
});

}); 
    
</script>



</html>
