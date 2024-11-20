<?php
include "./conexion.php";
mysqli_set_charset($conexion,'utf8');

$buscarusuario="SELECT * FROM  persona WHERE nombre_usuario ='$_POST[nombre_usuario]'";

$resultado = $conexion -> query($buscarusuario);
$count =mysqli_num_rows($resultado);
if($count==1){

    echo "<script>
            alert('El usuario ya esta registrado');
            window.location.href = 'Registro.php';
         </script>";

}else{

    mysqli_query($conexion,"INSERT INTO persona(
        nombre_usuario,no_cuenta,telefono,email,password)
        VALUES(
            '$_POST[nombre_usuario]',
            '$_POST[no_cuenta]',
            '$_POST[telefono]',
            '$_POST[email]',
            '$_POST[password]'
        )");
        echo "<script>
            alert('Usuario creado con exito');
            window.location.href = 'Registro.php';
            </script>";

}
 

?>