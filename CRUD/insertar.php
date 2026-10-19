<?php

include("db.php");

$con=conectar();

/*Recibir la informacion del formulario*/
$matricula= $_POST['matricula'];
$nombre= $_POST['nombre'];
$apellido_p= $_POST['apellido_p'];
$apellido_m= $_POST['apellido_m'];
$edad= $_POST['edad'];

/*Crear consulta para la BD*/
$sql= "INSERT INTO alumnos (matricula, nombre, apellido_p, apellido_m, edad) 
VALUES ('$matricula','$nombre', '$apellido_p','$apellido_m','$edad')";

/*ejecutar la consulta*/
$query= mysqli_query($con,$sql);

if($query){
    header("Location: alumnos.php");
}
else{
    echo "Error al insertar al alumno";
}