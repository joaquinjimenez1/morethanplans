var boton = document.getElementById("enviar");
boton.addEventListener('click',validaPasswords);
boton.addEventListener('touchstart',validaPasswords);

function validaPasswords(){
    if(document.getElementById('clave1').value == document.getElementById('clave2').value)   {

      if(document.getElementById('clave1').value.length<8){
        document.getElementById('clave2').setCustomValidity("La clave debe tener al menos 8 caracteres."); 
      }

      else {
        document.getElementById('clave2').setCustomValidity(""); 
      }

      
      }
      else{
        document.getElementById('clave2').setCustomValidity("Las contraseñas no coinciden.");
      } 
  }