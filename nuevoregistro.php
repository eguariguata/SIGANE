<?php
#Salir si alguno de los datos no está presente
if(!isset($_POST["nombres"]) || !isset($_POST["apellidos"]) || !isset($_POST["cedulaescolar"])) exit();

#Si todo va bien, se ejecuta esta parte del código...

include_once "base_de_datos.php";
$nombres = $_POST["nombres"];
$apellidos = $_POST["apellidos"];
$cedulaescolar = $_POST["cedulaescolar"];


$sentencia = $base_de_datos->prepare("INSERT INTO alumnos(nombres, apellidos, cedula) VALUES (?, ?, ?);");
$resultado = $sentencia->execute([$nombres, $apellidos, $cedulaescolar]);

if($resultado === TRUE){
	
	header("Location: ./checkout.html");
	exit;
}
else echo "Algo salió mal. Por favor verifica que la tabla exista";


?>
