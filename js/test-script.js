/** @format */
function suma(a, b) {
    return a + b;
}

console.log('Hola mundo: ' + suma(2, 3));

function initializePage() {
    console.log("***Oload Completed***");
    console.log(navigator.userAgent);
    console.log(navigator.language);
    console.log(navigator.languages);
    console.log(navigator.onLine);
    //tarea, implementar la funcinalidad de copiado
    //crear un input text con algun texto predifinido -> UN BOTON ""Copiar -> copie en el clipboard
    //Pegar el texto en un notepad, en algun elemento visual que permita comprobar que se ha copiado


    // Crear un input text con algun texto predifinido
    let input = document.createElement("input");
    input.type = "text";
    input.value = "Este es el texto a copiar";
    document.body.appendChild(input);

    // Crear un botón que copie el texto en el clipboard
    let button = document.createElement("button");
    button.textContent = "Copiar";
    button.addEventListener("click", function () {
        // Seleccionar el texto del input
        input.select();
        // Copiar el texto en el clipboard
        document.execCommand("copy");
        // Mostrar un mensaje de confirmación
        alert("Texto copiado al portapapeles");
    });
    document.body.appendChild(button);
}


