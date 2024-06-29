//DOM'S declaration of elements in formula
let inputRrfc = document.getElementById("rfc");
let inputRcurp = document.getElementById("curp");
let listMain = document.getElementById("tipo1");
let listSecound = document.getElementById("tipo2");
let messageErrorCurp = document.getElementById("curp-message");
let messageErrorRfc = document.getElementById("rfc-message");

/**
 * Here be are the methods verify the formula information
 */

//Function to verify format RFC
function VerifyRFC(rfc) {
    const rfcRegex = /^[A-ZÑ&]{3}\d{6}[A-Z0-9]{3}$/;
    let physical =  rfcRegex.test(rfc);

    const rfcRegex1 = /^[A-ZÑ&]{4}\d{6}[A-Z1-9]{3}$/;
    let moral = rfcRegex1.test(rfc);

    if (physical ==  true || moral == true) {
        inputRrfc.setAttribute("style", "border-color: green;");
        messageErrorRfc.setAttribute("style", "color: green;");
        messageErrorRfc.textContent = "RFC valido";

    } else {
        inputRrfc.setAttribute("style", "border-color: red;");
        messageErrorRfc.setAttribute("style", "color: red;");
        messageErrorRfc.textContent = "RFC no valido";
    }
}

//Function to verify format CURP
function verifyCURP(curp) {
    const curpRegex = /^[A-Z]{4}\d{6}[HM][A-Z]{5}[A-Z\d]\d$/;
    let curptest = curpRegex.test(curp);

    if (curptest == true) {
        inputRcurp.setAttribute("style", "border-color: green;");
        messageErrorCurp.setAttribute("style", "color: green;");
        messageErrorCurp.textContent = "CURP valido";
    } else {
        inputRcurp.setAttribute("style", "border-color: red;");
        messageErrorCurp.setAttribute("style", "color: red;");
        messageErrorCurp.textContent = "CURP no valido";
    }
}


/**
 * Here be are the events to interaction for user with form
 */

//Event to change options of list
listMain.addEventListener("change", () => {
    if (listMain.value == "Bienes") {
        listSecound.innerHTML = `
        <option value="Aceros">Aceros</option>
        <option value="Aditivos">Aditivos</option>
        <option value="Agregados">Agregados</option>
        <option value="Cancelería">Cancelería</option>
        <option value="Carpintería">Carpintería</option>
        <option value="Cimbras">Cimbras</option>
        <option value="Combustible">Combustible</option>
        <option value="Electrico">Electrico</option>
        <option value="Ferretería">Ferretería</option>
        <option value="Herrería">Herrería</option>
        <option value="Jardinería">Jardinería</option>
        <option value="Muebles">Muebles</option>
        <option value="Piedras">Piedras</option>
        <option value="Pinturas">Pinturas</option>
        <option value="Pisos y azulejos">Pisos y azulejos</option>
        <option value="Plásticos">Plásticos</option>
        <option value="Plomería">Plomería</option>
        <option value="Polvos">Polvos</option>
        <option value="Prefabricados">Prefabricados</option>
        <option value="Premezclados">Premezclados</option>
        `;
    } else if (listMain.value == "Servicios") {
        listSecound.innerHTML = `
        <option value="Agua potable">Agua potable</option>
        <option value="Capacitación al personal">Capacitación al personal</option>
        <option value="Energía eléctrica">Energía eléctrica</option>
        <option value="Fianzas">Fianzas</option>
        <option value="Fletes y acarreos">Fletes y acarreos</option>
        <option value="Herramienta">Herramienta</option>
        <option value="Internet">Internet</option>
        <option value="Instalaciones provicionales">Instalaciones provisionales</option>
        <option value="Maquinaría y equipo">Maquinaria y equipo</option>
        <option value="Papelería">Papelería</option>
        <option value="Protección y seguridad">Protección y seguridad</option>
        <option value="Recolección de basura">Recolección de basura</option>
        <option value="Reparación y mantenimiento">Reparación y mantenimiento</option>
        <option value="Seguridad, salud e higiene">Seguridad, salud e higiene</option>
        <option value="Telefonía móvil">Telefonía móvil</option>
        <option value="Subcontratos">Subcontratos</option>
        `;
    }
});

inputRrfc.addEventListener("blur", () => {
    VerifyRFC(inputRrfc.value);
});

inputRcurp.addEventListener("blur", () => {
    verifyCURP(inputRcurp.value);
});


