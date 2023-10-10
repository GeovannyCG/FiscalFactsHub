<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login - FiscalFactsHub.com</title>
    <!--Link de CSS "Login-style.css"-->
    <link rel="stylesheet" href="./assets/css/login-style.css" />
    <!--Link de CSS "Boostrap"-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <!--link de CSS "boxicons"-->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <!--Wrapper principal-->
    <div class="container-main">
        <div class="section1" style="background-color: white;">
            <img id="logo" src="./assets/img/newlogotype.png" alt="">
            <div class="container-form">
                <form>
                    <h1>Ingresar</h1>
                    <div class="message-error">
                        <span id="rfc-message" style="color: red;"></span>
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" placeholder="Ingresa tu RFC" id="rfcInput" aria-describedby="emailHelp" />
                    </div>
                    <div class="message-error">
                        <span id="password-message" style="color: red;"></span>
                    </div>
                    <div class="mb-3">
                        <input placeholder="Contraseña" type="password" class="form-control" id="passwordInput" />
                    </div>
                    <div class="mb-3">
                        <a href="./register.php">¿Aun no estas registrado?</a>
                    </div>

                    <div class="mb-3">
                        <div class="input_field captch_box">
                            <input type="text" value="" disabled id="catpcha-screen" />
                            <button id="refresh_button" class="refresh_button">
                                <i class='bx bx-refresh'></i>
                            </button>
                        </div>
                        <div class="input_field captch_input">
                            <input type="text" placeholder="Enter captcha" id="input-catpcha" />
                        </div>
                    </div>
                    <div class="input_field button">
                        <button type="submit" class="btn btn-primary" id="btn-submit" disabled>Login</button>
                    </div>
                </form>
            </div>

            <footer id="footer-login">
                <span>2023, QuoteMaster®. Todos los derechos reservados <a href="./Términos y Condiciones de ExamNow.pdf" target="blank">Terminos y condiciones.</a></span>
            </footer>
        </div>
        <div class="section2" style="background-color: #3498db;">
        
        </div>

    </div>
    <!--Links de Scripts "Boostrap"-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <!-- Script de formulario -->
    <script src="./app/login-app.js"></script>
</body>

</html>