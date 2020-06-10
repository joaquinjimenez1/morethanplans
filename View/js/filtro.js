
function validaTitulos(){

  var cadenaTotal = document.getElementById('titulo').value+" "+document.getElementById('descripcion').value+" "+document.getElementById('lugar').value;
  var arrayPalabras = cadenaTotal.split(" ");
  var arrayNoPermitidas = ["gilipollas","tonto","capullo","polla","coño","pene","puta","mierda","porno","navo","bastardo","idiota",];


  var permitido = true;

  for (let i = 0; i < arrayPalabras.length; i++) {
   
    if (arrayNoPermitidas.includes(arrayPalabras[$i])) {
      
      permitido = false;
    }
    
  }

      if(permitido==false){
        document.getElementById('titulo').setCustomValidity("Hay palabras no permitidas en uno de los campos."); 
      }

      else {
        document.getElementById('titulo').setCustomValidity(""); 
      }


  }