<?php
include("db.php");
$con=conectar();
$id = $_GET['id'];
$sql="SELECT * FROM alumnos WHERE id='$id'";
$query=mysqli_query($con, $sql);
$row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar</title>
</head>
<body>
    <h1>Actualizar Alumno</h1>
    <form action="update.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
       <label>Matrícula:</label><br>
       <input type="text" name="matricula" value="<?php echo $row['matricula']; ?>"><br><br>
       <label>Nombre:</label><br>
       <input type="text" name="nombre" value="<?php echo $row['nombre']; ?>"><br><br>
       <label>Apellido Paterno:</label><br>
       <input type="text" name="apellido_p" value="<?php echo $row['apellido_p']; ?>"><br><br>
       <label>Apellido Materno:</label><br>
       <input type="text" name="apellido_m" value="<?php echo $row['apellido_m']; ?>"><br><br>
       <label>Edad:</label><br>
       <input type="text" name="edad" value="<?php echo $row['edad']; ?>"><br><br>
       <input type="submit" value="Actualizar">
    </form>
</body>
</html>