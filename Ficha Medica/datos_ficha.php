
<?php

require 'conex_ficha.php';

$id_ficha = $_POST ['id_ficha'];
$fecha_vis = $_POST['fecha_vis'];
$motivo = $_POST['motivo'];
$id_medico = $_POST['id_medico'];
$nombre_doc =$_POST['nombre_doc'];
$id_paciente = $_POST['id_paciente'];
$nom_paciente = $_POST['nomPaciente'];
$examenes = $_POST['examenes'];
$resulexam = $_POST['resulexam'];
$diagnostico = $_POST['diagnostico'];
$id_medicamento = $_POST['IdMedicamento'];
$medicamento = $_POST['medicamento'];
$dosis = $_POST['dosis'];
$tiempoapli = $_POST['tiempoapli'];
$observaciones = $_POST['observacion'];


$insertarficha = "INSERT INTO ficha_medica VALUES ('$id_ficha','$fecha_vis','$motivo',
                                                    '$id_medico', '$nombre_doc', '$id_paciente', 
                                                    '$nom_paciente', '$examenes', '$resulexam', '$diagnostico',
                                                    '$id_medicamento', '$dosis', '$tiempoapli', '$observaciones')";

$query = mysqli_query($conectar, $insertarficha);

if($query){

   echo "<script> alert('correcto');
    location.href = 'exp_paciente.html';
   </script>";

}else{
    echo "<script> alert('incorrecto');
    location.href = 'exp_paciente.html';
    </script>";
}



?>