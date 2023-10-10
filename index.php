<?php
//Se inicializa la variable de sesion
session_start();

//Se valida si hay una sesion activa
if (isset($_SESSION['rfc'])) {
    // echo "<script>location.href=''</script>";
} else {
    echo "<script>location.href='./Login/'</script>";
}