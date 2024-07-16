<?php
require_once '../includes/config.php';
$name = $_POST["name"];
$lastName = $_POST["lastName"];
$email = $_POST["email"];
$tel = $_POST["tel"] != NULL ? (str_replace(['-', ' '], '', $_POST["tel"])) : NULL;
$age = $_POST["age"];
$dni = $_POST["dni"];
$pass = sha1($_POST["pass"]);
$signUp = "../torres.php?sec=sing-up&error";
$home = "../torres.php?sec=home";
//Verificacion cliente repetido
$sql = 'SELECT * FROM usuarios WHERE email = "' . $email . '"';
$query = mysqli_query($conn, $sql);
if (!$query) {
    die('Hubo un error en la consulta: ' . mysqli_error($conn));
} 
if (mysqli_num_rows($query) > 0) {
    header("Location: $signUp");
    die();
}
//Ingreso de nuevo cliente
$sqlInsert = "INSERT INTO `usuarios` (`nombre`, `apellido`, `email`, `contraseña`, `telefono`, `DNI`, `edad`, `rol`, `fecha_alta`, `fecha_baja`) VALUES ('" . $name . "', '" . $lastName . "', '" . $email . "', '" . $pass . "', '" . $tel . "', '" . $dni . "', '" . $age . "', '0', NOW(), null);";
$queryVerif = mysqli_query($conn, $sqlInsert);
if (!$queryVerif) {
    die('Hubo un error en la consulta: ' . mysqli_error($conn));
}
//parte del Señor Jefe Paul 😎(lo copie del login.php 🥶)
// session_start();
// $_SESSION['USER'] = $name;

//for($i = 0; $i < count($user); $i++){
// echo $_SESSION['USER'][0]['nombre'];
//}
header("Location: $home");
    die();
?>