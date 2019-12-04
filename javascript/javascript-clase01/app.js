// window.onload = function(){
  var color = prompt("Indica un color");

  var title = document.querySelector("h1");
  console.log(title);

  title.style.color = color;



  var texto = 'Hola a todas';
  var number = 4567.987;
  var boolean = true;
  var arrays = ["hola", "adios", 45678, true, []];

  var auto = {
    marca: "Honda",
    modelo: "Civic",
    anio: 2009,
    km: 12300,
    conductores:["Ale", "Gonza"],
    arrancar: function(){
      return "arrancando...";
    },
    aumentarKm: function(viaje){
      return this.km += viaje;
    }
  }

  console.log(auto);
  auto.aumentarKm(1000);
  console.log(auto.aumentarKm(1000));
  console.log(auto);

  var auto2 = {
    marca: "Honda",
    modelo: "Civic",
    anio: 2009,
    km: 12300,
    conductores:["Ale", "Gonza"],
    arrancar: function(){
      return "arrancando...";
    },
    aumentarKm: function(viaje){
      return this.km += viaje;
    }
  }

    console.log(auto2);
    auto2.aumentarKm(500);
    console.log(auto2.aumentarKm(500));
    console.log(auto2);

// }
