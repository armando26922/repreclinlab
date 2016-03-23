<script>
	//alerta sobre llenar todos los campos
	function llenarcampos()
	{
     	alert("Todos los campos son obligatorios");
        window.location = "login.html";
	}

	//alerta sobre usuario o clave incorrecta
	function campoincorrecto()
	{
     	alert("Los datos ingresados son incorrectos");
        window.location="login.html";
	}
</script>


<?php

$nombre = $_POST["usuario"];
$clave =  $_POST["clave"];

//Administrador
if (($nombre == "JorgeO") && ($clave == "12345"))
{
	header("Location: index.php");
}
else 
{
	//Inventario
	if (($nombre == "Denis") && ($clave == "12345"))
	{
		header("Location: index.php");
	}
	else 
	{
		//Atención al cliente
		if (($nombre == "Mario") && ($clave == "12345"))
		{
			header("Location: index.php");
		}
		else
		{
			//Técnico
			if (($nombre == "Armando") && ($clave == "12345"))
			{
				header("Location: index.php");
			}
			else
			{
				//valida campos
				if (($nombre == "") || ($clave == ""))
					echo "<script>llenarcampos();</script>";
				else
				{
					echo "<script>campoincorrecto();</script>";
				}
			}
		}	
	}	
}

?>