<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Registro - FiscalFactsHub.com</title>
    <!--Link de CSS "Login-style.css"-->
    <link rel="stylesheet" href="./css/register-style.css" />
    <!--Link de CSS "Boostrap"-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <!--link de CSS "boxicons"-->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <!--Wrapper principal-->
    <div id="main-wrapper-register">
        <!--Contenedor principal para elementos del login-->
        <div id="container-register">
            <h1>Registro</h1>
            <form action="./actions/register-action.php" method="post" enctype="multipart/form-data">
                <div id="register-first-part">
                    <label for="tipo" style="margin-top: 10px;">Tipo: </label>
                    <select class="form-select" aria-label="Default select example" id="tipo" name="tipousuario">
                        <option value="" disabled selected>Elige una opción</option>
                        <option value="Fisica">Fisica</option>
                        <option value="Moral">Moral</option>
                    </select>
                </div>

                <div id="register-second-part">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="rfc" class="form-label" style="margin-top: 10px;">RFC: </label>
                                <input type="text" class="form-control" name="rfc" id="rfc" aria-describedby="emailHelp"
                                    placeholder="RFC000001NN">
                            </div>
                            <div class="message-error-sat">
                                <span id="rfc-message" class="message-error-satt"></span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="curp" class="form-label" style="margin-top: 10px;">CURP: </label>
                                <input type="text" class="form-control" name="curp" id="curp" aria-describedby="emailHelp"
                                    placeholder="XXXXXXXXXXXXXXXXXX">
                            </div>
                            <div class="message-error-sat">
                                <span id="curp-message" class="message-error-satt"></span>
                            </div>
                        </div>
                    </div>
                </div>


                <div id="register-thirt-part">
                    <div>
                        <div class="mb-3">
                            <label class="form-label">Razon social: </label>
                            <input type="text" class="form-control" name="reasonsocial" id="razon-social" aria-describedby="emailHelp"
                                placeholder="Ingresa la razon social">
                        </div>
                    </div>
                </div>

                <div id="register-four-part">
                    <div class="row">
                        <div class="col-md-12">
                            <label for="tipo" class="form-label">T. de Proveedor:</label>
                        </div>
                        <div class="col-md-4" style="width: 400px;">
                            <select class="form-select" aria-label="Default select example" name="option1" id="tipo1">
                                <option value="" disabled selected>Elige una opción</option>
                                <option value="Bienes">Bienes</option>
                                <option value="Servicios">Servicios</option>
                            </select>
                        </div>
                        <div class="col-md-4" style="width: 400px;">
                            <select class="form-select" aria-label="Default select example" name="option2" id="tipo2">
                                
                            </select>
                        </div>
                    </div>
                </div>

                <div id="register-five-part">
                    <div class="row">
                        <div class="col-md-12">
                            <label class="form-label" style="margin-top: 10px;">Constancia
                                Fiscal: </label>
                        </div>
                        <div class="mb-3">
                            <input class="form-control" name="nose1" type="file" id="formFile1">
                        </div>
                    </div>
                </div>

                <div id="register-six-part">
                    <div class="row">
                        <div class="col-md-12">
                            <label class="form-label" style="margin-top: 10px;">Constancia
                                O. Cumplimiento: </label>
                        </div>
                        <div class="mb-3">
                            <input class="form-control" type="file" name="nose2" id="formFile2">
                        </div>
                    </div>
                </div>

                <div id="register-seven-part">
                    <div class="row">
                        <div class="col-md-12">
                            <label class="form-label" style="margin-top: 10px;">Constancia
                                Cta. Bancaria: </label>
                        </div>
                        <div class="mb-3">
                            <input class="form-control" type="file" name="nose3" id="formFile3">
                        </div>
                    </div>
                </div>


                <div id="register-eight-part">
                    <div>
                        <div class="mb-3">
                            <label class="form-label">Direccion: </label>
                            <input type="text" class="form-control" name="direction" id="direccion" aria-describedby="emailHelp"
                                placeholder="Direccion Fiscal">
                        </div>
                    </div>
                </div>

                <div id="register-nine-part">
                    <div class="row">
                        <div class="col-md-12">
                            <label class="form-label" style="margin-top: 10px;">Contacto
                                Vtas:</label>
                        </div>
                        <div class="col-md-3">
                            <div class="mb-3">
                                <input type="text" class="form-control" id="nombre-vtas"
                                    aria-describedby="emailHelp" name="namevtas" placeholder="Nombre(s)">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mb-3">
                                <input type="email" class="form-control" id="correo-vtas"
                                    aria-describedby="emailHelp" name="emailvtas" placeholder="Correo">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mb-3">
                                <input type="text" class="form-control" id="telefono-vtas"
                                    aria-describedby="emailHelp" name="phonevtas" placeholder="Telefono">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mb-3">
                                <input type="text" class="form-control" id="celular-vtas"
                                    aria-describedby="emailHelp" name="mobilevtas" placeholder="Celular">
                            </div>
                        </div>
                    </div>
                </div>

                <div id="register-nine-part">
                    <div class="row">
                        <div class="col-md-12">
                            <label class="form-label" style="margin-top: 10px;">Contacto
                                Conta:</label>
                        </div>
                        <div class="col-md-3">
                            <div class="mb-3">
                                <input type="text" class="form-control" id="nombre-conta"
                                    aria-describedby="emailHelp" name="nameconta" placeholder="Nombre(s)">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mb-3">
                                <input type="email" class="form-control" id="correo-conta"
                                    aria-describedby="emailHelp" name="emailconta" placeholder="Correo">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mb-3">
                                <input type="text" class="form-control" id="telefono-conta"
                                    aria-describedby="emailHelp" name="phoneconta" placeholder="Telefono">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mb-3">
                                <input type="text" class="form-control" id="celular-conta"
                                    aria-describedby="emailHelp" name="mobileconta" placeholder="Celular">
                            </div>
                        </div>
                    </div>
                </div>

                <div id="register-nine-part">
                    <div class="row">
                        <div class="col-md-12">
                            <label class="form-label" style="margin-top: 10px;">Contacto C y
                                C:</label>
                        </div>
                        <div class="col-md-3">
                            <div class="mb-3">
                                <input type="text" class="form-control" id="nombre-cyc"
                                    aria-describedby="emailHelp" name="namecyc" placeholder="Nombre(s)">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mb-3">
                                <input type="email" class="form-control" id="correo-cyc"
                                    aria-describedby="emailHelp" name="emailcyc" placeholder="Correo">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mb-3">
                                <input type="text" class="form-control" id="telefono-cyc"
                                    aria-describedby="emailHelp" name="phonecyc" placeholder="Telefono">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mb-3">
                                <input type="text" class="form-control" id="celular-cyc"
                                    aria-describedby="emailHelp" name="mobilecyc" placeholder="Celular">
                            </div>
                        </div>
                    </div>
                </div>

                <div id="register-eight-part">
                    <div class="row">
                        <div class="col-md-12">
                            <label class="form-label" style="margin-top: 10px;">Dias de credito:</label>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label>
                                <input type="radio" name="opcion" id="miCheckbox1">
                                Contado
                            </label>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label>
                                <input type="radio" name="opcion" id="miCheckbox2">
                                8 Dias
                            </label>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label>
                                <input type="radio" name="opcion" id="miCheckbox3">
                                15 Dias
                            </label>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label>
                                <input type="radio" name="opcion" id="miCheckbox4">
                                30 Dias
                            </label>
                        </div>
                    </div>
                </div>

                <div id="register-eight-part">
                    <div>
                        <div class="mb-3">
                            <label for="" class="form-label">Contraseña: </label>
                            <input type="text" class="form-control" id="password" name="passsword" aria-describedby="emailHelp"
                                placeholder="Ingresa cual sera tu contraseña">
                        </div>
                    </div>
                </div>                

                <div class="text-center">
                    <input type="submit" value="Registrar" class="btn btn-primary" name="register">
                </div>

            </form>
        </div>
    </div>

    <!--Links de Scripts "Boostrap"-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>
    <script src="./app/register-app.js"></script>
</body>

</html>
