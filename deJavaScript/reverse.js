/** 
 * Author: Nuup Sistemas
 * Utilizaremos tres métodos, Split(), reverse(), Join() 
 * */

// split():  Método para para separar una cadena en una lista ordenada siguiendo un patrón
let cadenaMeses = 'Ene,Feb,Mar,Abr,May,Jun,Jul,Ago,Sep,Oct,Nov,Dic';
console.log(cadenaMeses.split(',')); 
/** este es el retorno de la función
[ 'Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun',
  'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic']
*/

// reverse() : cambia el orden de un arreglo
let cadenaSplit = cadenaMeses.split(',');
let nuevaCadenaOrden = cadenaSplit.reverse();
console.log(nuevaCadenaOrden);

/**
 [  'Dic', 'Nov', 'Oct','Sep', 'Ago', 'Jul',
  'Jun', 'May', 'Abr','Mar', 'Feb', 'Ene']
 */

// join(). Podemos unir el arreglo con el caracter que se designe
let cadenaFinal = nuevaCadenaOrden.join('-');
console.log(cadenaFinal);

/***Dic-Nov-Oct-Sep-Ago-Jul-Jun-May-Abr-Mar-Feb-Ene  */




