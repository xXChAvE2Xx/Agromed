<?php
			
			include 'databaseconnect.php';
			
			$email = $_POST['email'];				
			$conn = mysqli_connect($servername, $username, $password, $database);

			// Check connection
			if (!$conn) {
				die("Connection failed: " . mysqli_connect_error());
			}
				
			$sql = "SELECT correo, contrasena FROM usuarios WHERE correo='$email'";				
			$result = mysqli_query($conn, $sql);
				
			if (mysqli_num_rows($result) > 0) {				
				$row = mysqli_fetch_assoc($result);
				
				$subject = "Tu contraseña para Agromed";
				$body = "Tu contraseña es: " . $row['contrasena'];
				
				$headers = 'From: mgrvagromed@gmail.com' . "\r\n" .
				'Reply-To: mgrvagromed@gmail.com' . "\r\n" .
				'X-Mailer: PHP/' . phpversion();
				
				mail($email, $subject, $body, $headers);				
				
				echo "<script>window.location='index?passRecovery=true';</script>";
			} else {
				echo "<script>window.location='pass_recovery?passRecovery=false';</script>";
			}
			?>