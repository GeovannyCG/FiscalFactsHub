//DOM'S declaration of elements in formula
let inputRfc = document.getElementById("rfcInput");
let inputPassw = document.getElementById("passwordInput");
let refreshButton = document.getElementById("refresh_button");
let captchaScreen = document.getElementById("catpcha-screen");
let inputCaptcha = document.getElementById("input-catpcha");
let btnSubmit = document.getElementById("btn-submit");
let messageRfc = document.getElementById("rfc-message");
let messagePassword = document.getElementById("password-message");

/**
 * Here will are the methods that verify the formula information
 */

// Method to generate the captcha text
function generateTextCaptcha(longitud) {
    let characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
    let text = '';

    for (var i = 0; i < longitud; i++) {
        var indice = Math.floor(Math.random() * characters.length);
        text += characters.charAt(indice);
    }

    captchaScreen.value = text;
}

/**
 * Here will are the events that interactive with the form
 */

//Event for when the user leaves the entry "RFC"
inputRfc.addEventListener("blur", () => {

    if (inputRfc.value == "") {
        messageRfc.textContent = "*Ingresa tu RFC";
        inputRfc.setAttribute("style", "border-color: red;");
        btnSubmit.disabled = true;
    } else {
        messageRfc.textContent = "";
        inputRfc.removeAttribute("style", "border-color: red;");
        btnSubmit.disabled = false;
    }
});

inputRfc.addEventListener("keyup", () => {

    if (inputRfc.value == "") {
        messageRfc.textContent = "*Ingresa tu RFC";
        inputRfc.setAttribute("style", "border-color: red;");
        btnSubmit.disabled = true;
    } else {
        messageRfc.textContent = "";
        inputRfc.removeAttribute("style", "border-color: red;");
        btnSubmit.disabled = false;
    }
});

//Event for when the user leaves the entry "Password"
inputPassw.addEventListener("blur", () => {

    if (inputPassw.value == "") {
        messagePassword.textContent = "*Ingresa tu contraseña";
        inputPassw.setAttribute("style", "border-color: red;");
        btnSubmit.disabled = true;
    } else {
        messagePassword.textContent = "";
        inputPassw.removeAttribute("style", "border-color: red;");
        btnSubmit.disabled = false;
    }
});

inputRfc.addEventListener("keyup", () => {

    if (inputRfc.value == "") {
        messageRfc.textContent = "*Ingresa tu RFC";
        inputRfc.setAttribute("style", "border-color: red;");
        btnSubmit.disabled = true;
    } else {
        messageRfc.textContent = "";
        inputRfc.removeAttribute("style", "border-color: red;");
        btnSubmit.disabled = false;
    }
});

//Event for when the user leaves the entry "Password"

inputCaptcha.addEventListener("keyup", () => {
    if(inputCaptcha.value == captchaScreen.value || !inputRfc == "" || !inputPassw =="") {
        btnSubmit.disabled = true;

        messageRfc.textContent = "*Ingresa tu RFC";
        inputRfc.setAttribute("style", "border-color: red;");

        messagePassword.textContent = "*Ingresa tu contraseña";
        inputPassw.setAttribute("style", "border-color: red;");

    } else {
        btnSubmit.disabled = false;

        messageRfc.textContent = "";
        inputRfc.removeAttribute("style", "border-color: red;");

        messagePassword.textContent = "";
        inputPassw.removeAttribute("style", "border-color: red;");
    }
});

//Event for when the user clicks the Update button.
refreshButton.addEventListener("click", generateTextCaptcha(7));

/**
 *  Here will be function for when the HTML is load.
 */
document.addEventListener("DOMContentLoaded", generateTextCaptcha(7));


