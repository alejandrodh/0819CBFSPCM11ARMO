//Agregar un li a lista por JS
var lista = document.querySelector(".lista");
//lista.innerHTML += "<li>Elemento agregado por JS </li>"

function agregarLi(){
  lista.innerHTML += "<li>Elemento agregado por JS </li>"
}

//setTimeout(agregarLi, 3000);

//agregarLi();

var liAutomatico = setInterval(agregarLi, 3000);

var button = document.querySelector(".mistery");
// button.onclick = function(){
//   clearInterval(liAutomatico);
//   console.log("paramos");
// }


button.addEventListener("click", function(event){
  console.log(event);
  clearInterval(liAutomatico);
})


function stringBomb(unTexto) {

  var arrayConEspacios = unTexto.split(',');

  var arraySinEspacios = arrayConEspacios.map(function(element){
    return element.trim().replace("ñ", "n");
  })
  console.log(arraySinEspacios)

  var arrayFinal = arraySinEspacios.filter(function(element){
    return element.length > 3 && element.indexOf("a") > -1
  })
  console.log(arrayFinal)
  return arrayFinal.toString(",");

}

console.log(stringBomb("ale, pedra, mañana, eterno"));
