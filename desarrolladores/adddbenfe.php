<!Doctype html>
<html lang="en">
	<body>
		
		
			<?php
			
			// conexion con db
			include 'databaseconnect.php';	
			
			// Ejecucion de conexion
			$conn = mysqli_connect($servername, $username, $password, $database);

			// verifica conexion
			if (!$conn) {
				die("Connection failed: " . mysqli_connect_error());
			}
			
			//se resiven datos del formulario
			$enfermedad = $_POST['enfermedad']; 
			$tipo = $_POST['tipo']; 
			$color = $_POST['color']; 
			$textura = $_POST['textura']; 
			$descripcion = $_POST['descripcion']; 
			
			//--------------------------------------------------------------------
			
			$consulta="INSERT INTO enfermedades (enfermedad,tipo,color,textura,descripcion) VALUES ('$enfermedad','$tipo','$color','$textura','$descripcion')";
			
			$res = mysqli_query($conn,$consulta);
            header("location: https://agromed.gq/desarrolladores/regEE");
			?>
		

	</body>
</html>


