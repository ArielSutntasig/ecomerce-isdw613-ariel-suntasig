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
        // Copiar el texto en el clipboard usando la API de Clipboard
        navigator.clipboard.writeText(input.value)
            .then(() => {
                // Mostrar un mensaje de confirmación
                alert("Texto copiado al portapapeles");
                // Crear un notepad para pegar el texto
                createNotepad();
            })
            .catch((error) => {
                // Mostrar un mensaje de error
                alert("Error al copiar el texto: " + error);
            });
    });
    document.body.appendChild(button);
}


function createNotepad() {
    // Crear un elemento textarea que sirva de notepad
    let notepad = document.createElement("textarea");
    notepad.rows = 10;
    notepad.cols = 40;
    notepad.placeholder = "Aquí se pegará el texto copiado";
    document.body.appendChild(notepad);
    // Enfocar el notepad usando el método .focus()
    $(notepad).focus();
    // Pegar el texto del clipboard en el notepad usando la API de Clipboard
    navigator.clipboard.readText()
        .then((text) => {
            // Asignar el texto al notepad
            notepad.value = text;
        })
        .catch((error) => {
            // Mostrar un mensaje de error
            alert("Error al pegar el texto: " + error);
        });
}

