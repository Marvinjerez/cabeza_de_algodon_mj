<?php

include('conex.php');

$user = $_POST['usuario'];
$pass = $_POST['contraseña'];

session_start();

$_SESSION['usuario']=$user;

$conex = mysqli_connect("localhost","root","Admin1248","db_proy");

$consulta = "SELECT * FROM users WHERE usuario='$user' AND contraseña='$pass'";

$query = mysqli_query($conex, $consulta);

$filas=mysqli_num_rows($query);

if($filas){

    header("location:../index/index.html");

}else{
    ?>
    <?php
    include("login.html");

  ?>
  <h1 class="bad">ERROR DE AUTENTIFICACION</h1>
  <?php
}
mysqli_free_result($query);
mysqli_close($conexion);