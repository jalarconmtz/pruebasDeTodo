/*** author: Nuup Sistemas */

/**
 * El método localeCompare() retorna un número indicando si 
 * una cadena de carateres de referencia va antes, después o 
 * si es la misma que la cadena dada en orden alfabético.
 * DEVUELVE LOS SIGUIENTES VALORES
 * 1: si cadena1 si más grande en orden alfabético que cadena2
 * -1: si cadena1 si más pequeña en orden alfabético que cadena2
 * 0 : si cadena1 y cadena2 son iguales en orden alfabético  
 * */

let cadena1 = "Hola";
let cadena2 = "Mundo";
console.log(cadena1.localeCompare(cadena2)); // Resultado: -1

let cadena3 = "Jueves";
let cadena4 = "Dia";
console.log(cadena3.localeCompare(cadena4)); // Resultado: 1

let cadena5 = "Nuupsistemas";
let cadena6 = "Nuupsistemas";
console.log(cadena5.localeCompare(cadena6)); // Resultado: 0


