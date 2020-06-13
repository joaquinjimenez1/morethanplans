var boton = document.getElementById("enviar");
var titulo = document.getElementById("titulo");
var descripcion = document.getElementById("descripcion");
var lugar = document.getElementById("lugar");
boton.addEventListener('click',validaInput);
boton.addEventListener('touchstart',validaInput);
titulo.addEventListener('change',validaInput);
descripcion.addEventListener('change',validaInput);
lugar.addEventListener('change',validaInput);

function validaInput(){

  var arrayNoPermitidas = ["gilipollas","tonto","capullo","polla","coño","pene","puta","mierda","porno","navo","bastardo","idiota"];

  var contenidotitulo = titulo.value.toLowerCase();
  var contenidodescripcion = descripcion.value.toLowerCase();
  var contenidolugar = lugar.value.toLowerCase();

  var arrayTitulo = contenidotitulo.split(" ");
  var arrayDescripcion = contenidodescripcion.split(" ");
  var arrayLugar = contenidolugar.split(" ");
     
  for (let index = 0; index < arrayTitulo.length; index++) {
     if(arrayNoPermitidas.includes(arrayTitulo[index])){
      document.getElementById('titulo').setCustomValidity("El título incluye palabras no permitidas."); 
     }
     else {
      document.getElementById('titulo').setCustomValidity(""); 
     }
  }

  for (let index = 0; index < arrayDescripcion.length; index++) {
    if(arrayNoPermitidas.includes(arrayDescripcion[index])){
     document.getElementById('descripcion').setCustomValidity("La descripción incluye palabras no permitidas."); 
    }
    else {
     document.getElementById('descripcion').setCustomValidity(""); 
    }
 }

 for (let index = 0; index < arrayLugar.length; index++) {
  if(arrayNoPermitidas.includes(arrayLugar[index])){
   document.getElementById('lugar').setCustomValidity("El lugar incluye palabras no permitidas."); 
  }
  else {
   document.getElementById('lugar').setCustomValidity(""); 
  }
}
        
      
  }

  
  
  
