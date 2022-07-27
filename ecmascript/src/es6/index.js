// <i class="fas fa-comment-alt-lines    "></i>
function newFunction(name, age, country){ 
	w
}

function newFunction2(name = 'Oscar', age = 32, country = 'MX' ) {
    console.log(name, age, country);
}

newFunction2();
newFunction2('Ricardo', 10 , 'CO');

let hello = "Hello";
let world = "World";
let epicPhrase = hello + ' ' + world;
console.log(epicPhrase);

let epicPhrase2 = `${hello} ${world}`;
console.log(epicPhrase2);

let lorem = "esta es la frase larga \n"
+ "siguiente fila de la frase";

let lorem2 = `tra frase de pirmera linea
esta es la segunda linea`;

console.log(lorem);
console.log(lorem2);

let person = {
    'name' : 'jose',
    'age' : 45,
    'pais' : 'MX'
}

console.log(person.name, person.age);

let {name, age, pais} = person;
console.log(name, age, pais);