function buscarGifRandom(){
  var url = "https://api.giphy.com/v1/gifs/random?api_key=PuhlljnIs04eW2ezoSHpJ6Fov6102e4T&tag=&rating=G"

  fetch(url)
   .then(function(respuesta){
     return respuesta.json();
   })
   .then(function(datos){
     //Operamos con los datos
     var image = datos.data.images.original.url;
     var random = document.querySelector(".random");
     random.src = image;


   })
   .catch()
}

buscarGifRandom();

var nuevoGif = document.querySelector(".nuevo");
nuevoGif.addEventListener('click', function(event){
  buscarGifRandom();
})

// Los 5 gifs más vistos.
var trending = "https://api.giphy.com/v1/gifs/trending?api_key=PuhlljnIs04eW2ezoSHpJ6Fov6102e4T&limit=5&offset=5&rating=G"

fetch(trending)
  .then(function(res){
    return res.json();
  })
  .then(function(datos){
    var array = datos.data;
    var lista = document.querySelector(".lista");
    var li = "";

    for (var i = 0; i < array.length; i++){
      //construir un li con su imagen
      li += "<li>"
      li +=   "<img src='" + array[i].images.original.url + "'>"
      li += "</li>"
    }
      lista.innerHTML = li;
  })












//
