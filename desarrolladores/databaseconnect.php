    <?php
    $servername = "localhost";
    $database = "id15180472_agromed";
    $username = "id15180472_root";
    $password = "@gr0M3dMARV2020";
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $database);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    echo "Connected successfully";
     
    /*if(!mysqli_select_db($conn, $database)) 
      { 
        echo "Error seleccionando la base de datos.<br>"; 
        exit(); 
      }
     else
      {
       echo "Obtuvimos la base de datos $database sin problema.<br>";
     }
    
    //mysqli_close($conn);*/
    ?>