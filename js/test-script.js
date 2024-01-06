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
    //tarea, implementar la funcinalidad de copiado
    //crear un input text con algun texto predifinido -> UN BOTON ""Copiar -> cipie en el clipboard
    //Pegar el texto en un notepad, en algun elemento visual que permita comprobar que se ha copiado
    console.log(navigator.onLine);
}