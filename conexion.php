<?php require_once('index.php');?>
<?php
if(isset($_POST['ocupacion']) && !empty($_POST['ocupacion']) &&
isset($_POST['nombre']) && !empty($_POST['nombre']) &&
isset($_POST['email']) && !empty($_POST['email']) &&
isset($_POST['celular']) && !empty($_POST['celular']) &&
isset($_POST['cantidad']) && !empty($_POST['cantidad'])) 
{
	$destino = 'reddrum7@gmail.com; prestaproyectos@hotmail.com; julianprestamos@gmail.com';
	$desde   = "From:". "Préstamos Para Libre Inversión";
	$ocupacion  = $_POST['ocupacion'];
	$nombre  = $_POST['nombre'];
	$email   = $_POST['email'];
	$celular = $_POST['celular'];
	mail($destino,$ocupacion,$nombre,$email,$celular);
	echo "correo enviado"
} else {
	echo "problemas al enviar"
}
?>

<!-- prestaproyectos@hotmail.com; julianprestamos@gmail.com -->