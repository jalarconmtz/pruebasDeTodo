/**
 * Author: Nuup Sistemas
 * La función de setTimeout(), es un método asíncrono y establece 
 * un temporizador que ejecutará una acción. Ese temporizador indica 
 * un momento específico en el que habrá un disparador para esa acción 
 * en particular.
 * setTimeout(function, milliseconds, param1, param2, ...)
 * Fuente: 
 * https://www.freecodecamp.org/news/javascript-wait-how-to-sleep-n-seconds-in-js-with-settimeout/
 */
let primermensaje = 'Este mensaje aparece al inicio del script';
// se va a ejectuar una acción, en este caso una función, después de 3 seg
console.log(primermensaje);

setTimeout(segundoMensaje, 3000);
// declaramos la función
function segundoMensaje() {
    console.log("Este es el segundo mensaje que aparece 3 seg después");
}

