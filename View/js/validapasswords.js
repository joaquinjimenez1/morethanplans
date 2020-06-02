var boton = document.getElementById("enviar");
boton.addEventListener('click',validaPasswords);

function validaPasswords(){
    if(document.getElementById('clave1').value == document.getElementById('clave2').value)   {
      document.getElementById('clave2').setCustomValidity(""); 
      }
      else{
        document.getElementById('clave2').setCustomValidity("Las contraseñas no coinciden.");
      } 
  }