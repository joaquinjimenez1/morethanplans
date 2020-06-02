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