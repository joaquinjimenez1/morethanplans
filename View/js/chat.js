
var texto = document.getElementById("textochat");
var contenedor = document.getElementById("chat");
var boton = document.getElementById("botonchat");

var hijo = document.createElement("p");
hijo.innerHTML = "<p class='w3-animate-bottom chatasistente'>¡Hola! encantada. ¿Qué tal estás?</p>";
contenedor.appendChild(hijo);

var pasadas = 0;

var respuesta = "";

boton.onclick = function(){

   
    var introducido = texto.value;
    if(introducido!=""){

        var hijo = document.createElement("p");
            hijo.innerHTML = "<p class='w3-animate-bottom chatusuario'>"+introducido+"</p>";
            contenedor.appendChild(hijo);
            texto.value="";

        switch(pasadas) {

            case 0:
                var hijo = document.createElement("p");

                if(introducido.includes("mal") || introducido.includes("regular") || introducido.includes("fatal") || introducido.includes("mejorable") || introducido.includes("triste") || introducido.includes("aburrid")){
                    hijo.innerHTML = "<p class='w3-animate-bottom chatasistente'>Vaya... ¿Con qué planes podríamos mejorar eso?</p>";
                }

                else {
                    hijo.innerHTML = "<p class='w3-animate-bottom chatasistente'>¡Me alegro! Dime ejemplos de planes que te gustaría hacer.</p>";
                }
                contenedor.appendChild(hijo);
                pasadas++;
              break;

              case 1:

                var hijo = document.createElement("p");
                if(introducido.includes("ninguno") || introducido.includes("no lo sé") || introducido.includes("no sé") || introducido.includes("no lo se") || introducido.includes("no se") || introducido.includes("ni idea")){
                    hijo.innerHTML = "<p class='w3-animate-bottom chatasistente'>No te preocupes, voy a proponerte algunos según tus preferencias. ¿Podrías decirme lugares donde te gustaría ir?</p>";
                }

                else {
                    hijo.innerHTML = "<p class='w3-animate-bottom chatasistente'>Dame un segundo a ver si encuentro algo... ¿Podrías decirme lugares donde te gustaría ir?</p>";
                }

                respuesta = introducido;
                contenedor.appendChild(hijo);
                pasadas++;

              break;

              case 2:

                var hijo = document.createElement("p");
                hijo.innerHTML = "<p class='w3-animate-bottom chatasistente'>Aquí tienes algunos planes que creo que pueden gustarte.</p>";
                contenedor.appendChild(hijo);
                respuesta = respuesta+" "+introducido;
                finChat(respuesta);
              break;
          }
        
    }

    
    }


function finChat(respuesta) {
    var contenedorPrincipal = document.getElementById("customplan");
    contenedorPrincipal.innerHTML = "<h2>Resultados de la búsqueda</h2>";

    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        contenedorPrincipal.innerHTML = this.responseText;
        var iconitos = document.getElementsByClassName("icon");

for (let index = 0; index < iconitos.length; index++) {
    iconitos[index].onclick = function(){

    if(iconitos[index].classList[1]=="icono"){
        iconitos[index].classList.replace('icono','iconousado');
        conexion1=new XMLHttpRequest();
        conexion1.open('POST','../Controller/c_gustos.php', true);
        conexion1.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
        conexion1.send("idparainsertar="+iconitos[index].id); 
    }

    else {
        iconitos[index].classList.replace('iconousado','icono');
        conexion1=new XMLHttpRequest();
        conexion1.open('POST','../Controller/c_gustos.php', true);
        conexion1.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
        conexion1.send("idparainsertar="+iconitos[index].id); 
    }
    }
    
}
      }
    };
    xmlhttp.open("GET", "../Controller/c_buscador.php?respuesta=" + respuesta, true);
    xmlhttp.send();
    
}

       
       