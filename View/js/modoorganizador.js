var check = document.getElementById("customSwitch1");
check.addEventListener('click',modoorganizador);

function modoorganizador(){
  if(check.checked){

    document.getElementById("opcional").innerHTML = "";
    document.getElementById("opcional").innerHTML = "<label>Nombre de tu empresa, local u organización.</label><div class='form-group'><input required type='text' name='empresa' class='inputLogin' placeholder='EMPRESA'></div>";
    
  }

  else {
    document.getElementById("opcional").innerHTML = "";
    document.getElementById("opcional").innerHTML = "<label>Fecha de nacimiento (mantendremos el secreto)</label><div class='form-group'><input required type='date' name='fechanac' class='inputLogin' placeholder='FECHA DE NACIMIENTO'></div>";
   }
    

  }
 