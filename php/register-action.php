<?php
//Inclusion de la conecion a la base de datos
include('../config/connection-bd.php');

//Obtencion de los elementos del formulario
$type = $_POST['tipousuario'];
$rfc = $_POST['rfc'];
$curp = $_POST['curp'];
$reason_social = $_POST['reasonsocial'];
$option_one = $_POST['option1'];
$option_two = $_POST['option2'];

$const_fiscal = $_FILES['nose1'];
$const_o_cump = $_FILES['nose2'];
$const_cta_banc = $_FILES['nose3'];

$const_fiscal1 = $_FILES['nose1']['name'];
$const_o_cump1 = $_FILES['nose2']['name'];
$const_cta_banc1 = $_FILES['nose3']['name'];

$direct = $_POST['direction'];

$name_vta = $_POST['namevtas'];
$email_vta = $_POST['emailvtas'];
$phone_vta = $_POST['phonevtas'];
$mobile_vta = $_POST['mobilevtas'];

$name_conta = $_POST['nameconta'];
$email_conta = $_POST['emailconta'];
$phone_conta = $_POST['phoneconta'];
$mobile_conta = $_POST['mobileconta'];

$name_cc = $_POST['namecyc'];
$email_cc = $_POST['emailcyc'];
$phone_cc = $_POST['phonecyc'];
$mobile_cc = $_POST['mobilecyc'];

$pass = $_POST['passsword'];
$days_credit = $_POST['opcion'];

/**
 * Funciones para el uso durante el codigo
 */

$target_dir = "../archives/";

// Función para mover un archivo subido
function subirArchivo($nombreInput)
{
    global $target_dir;

    $target_file = $target_dir . basename($_FILES[$nombreInput]["name"]);
    $uploadOk = 1; // Indicador si la subida es exitosa
    $pdfFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION)); // Extensión del archivo

    // Verificar si es un archivo PDF
    if ($pdfFileType != "pdf") {
        return "Solo se permiten archivos PDF.";
    }

    // Verificar si hubo algún error durante la subida
    if ($uploadOk == 0) {
        return "El archivo no fue subido.";
    } else {
        // Intentar subir el archivo
        if (move_uploaded_file($_FILES[$nombreInput]["tmp_name"], $target_file)) {
            return "El archivo " . basename($_FILES[$nombreInput]["name"]) . " ha sido subido.";
        } else {
            return "Hubo un error al subir el archivo.";
        }
    }
}

try {

    //Query para la insercion de los elementos en la db
    $query = "INSERT INTO user_ffh (
    rfc_u, 
    type_rfc_u, 
    curp_u, 
    pass_u, 
    reason_u, 
    type_proveedor_1_u, 
    type_proveedor_2_u, 
    const_fiscal_u, 
    const_o_cump_u, 
    const_cta_banc_u, 
    direction_u, 
    name_vtas_u, 
    email_vtas_u, 
    phone_vtas_u, 
    mobile_vtas_u, 
    name_conta_u, 
    email_conta_u, 
    phone_conta_u, 
    mobile_conta_u, 
    name_cc_u, 
    email_cc_u, 
    phone_cc_u, 
    mobile_cc_u,
    days_credit_u) VALUES ('$rfc', '$type', '$curp', '$pass', '$reason_social', '$option_one', '$option_two', '$const_fiscal1', 
    '$const_o_cump1', '$const_cta_banc1', '$direct', '$name_vta', '$email_vta', $phone_vta, $mobile_vta, '$name_conta', '$email_conta', 
    $phone_conta, $mobile_conta, '$name_cc', '$email_cc', $phone_cc, $mobile_cc, '$days_credit')";

    $executeQuery = mysqli_query($connect, $query);

    // Procesar cada archivo
    $rest1 = subirArchivo('nose1');
    $rest2 = subirArchivo('nose2');
    $rest3 = subirArchivo('nose3');

    if (isset($executeQuery) && isset($rest1) && isset($rest2) && isset($rest3)) {
        echo "<script>window.location.href='../finish.php?user=" . urlencode($rfc) . "';</script>";
        exit();
    } else {
        echo "Algo salio mal";
    }

} catch (\Throwable $th) {
    echo "Error: ".$th;
}
