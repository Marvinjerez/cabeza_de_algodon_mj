<?php

include('conex.php');

$user = $_POST['usuario'];
$pass = $_POST['contraseña'];

$conex = mysqli_connect("localhost","root","Admin1248","db_proy");

$insertar = "INSERT INTO users (usuario,contraseña) VALUES ('$user', '$pass') ";

$query = mysqli_query($conex, $insertar);

if($query){

   echo "<script> alert('Creación Correcta');
    location.href = '../login/login.html';
   </script>";

}else{
    echo "<script> alert('Creación incorrecta');
    location.href = 'sign_up.html';
    </script>";
}



?>