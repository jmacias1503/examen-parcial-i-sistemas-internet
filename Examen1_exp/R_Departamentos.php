<?php
    $ClaveDept = $_GET['ClaveDept'];
    $Nombre = $_GET['Nombre'];
    $Status = $_GET['Status'];

    print("ClaveDept: ".$ClaveDept);
    print("Nombre: ".$Nombre);
    print("Status: ".$Status);
    
    $SQL = "INSERT INTO departamentos VALUES ('$ClaveDept', '$Nombre', '$Status')";
    


    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "examen";

    $conn = new mysqli($servername, $username, $password, $dbname);

    $ResultSet = mysqli_query($conn, $SQL);
    mysqli_close($conn);

    if($ResultSet == 1){
        print("Actualizado correctamente"); //Process the result
    }
    else{
        print("Error al actualizar".$ResultSet->error);
    }
?>