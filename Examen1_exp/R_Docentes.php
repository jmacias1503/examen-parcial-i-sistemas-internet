<?php
  $Clave = $_POST['Clave'];
  $Nombre = $_POST['Nombre'];
  $Salario = $_POST['Salario'];
  $ISR = $Salario * 0.8;
  $Sexo = $_POST['Sexo'];
  $Dept = $_POST['Dept'];
  $FechaIngreso = $_POST['FechaIngreso'];

  print("Clave: ".$Clave);
  print("Nombre: ".$Nombre);
  print("Salario: ".$Salario);
  print("ISR: ".$ISR);
  print("Sexo: ".$Sexo);
  print("Dept: ".$Dept);
  print("FechaIngreso: ".$FechaIngreso)

  $SQL = "INSERT INTO Docentes(Clave, Nombre, Salario, ISR, Sexo, Dept, FechaIngreso) VALUES('$Clave', '$Nombre', '$Salario', '$ISR', '$Sexo', '$Dept', '$FechaIngreso');";
  $host = "localhost";
  $username = "root";
  $password = "";
  $database = "examen";

  $conn = new mysqli($host, $username, $password, $database);

  $resultSet = mysqli_query($conn, $SQL);
  mysqli=close($conn);
  if ($resultSet == 1){
    print("Consulta realizada correctamente");
  }
  else {
    print("Error al ejecutar la consulta: ".$resultSet->error);
  }
?>
