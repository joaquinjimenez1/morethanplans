
function iniciar(){
  document.getElementById('titulo').addEventListener('blur',validaInput('titulo'));
  document.getElementById('descripcion').addEventListener('blur',validaInput('descripcion'));
  document.getElementById('lugar').addEventListener('blur',validaInput('lugar'));
}


function validaInput(campo){

  var cadenaTotal = document.getElementById(campo).value;
  var cadenaMinusculas = cadenaTotal.toLowerCase();
  var arrayPalabras = cadenaMinusculas.split(" ");
  var arrayNoPermitidas = ["gilipollas","tonto","capullo","polla","coño","pene","puta","mierda","porno","navo","bastardo","idiota",];


  for (let index = 0; index < arrayPalabras.length; index++) {

    if(arrayNoPermitidas.includes(arrayPalabras[index])){
      document.getElementById(campo).setCustomValidity("El campo "+campo+" incluye palabras no permitidas.");
    }
  
    else {
      document.getElementById(campo).setCustomValidity("");
    }
    
  }


  }


  addEventListener("load", iniciar);