---
title: 'Tarea Figura'
media_order: formas-geometricas-de-acrilico.jpg
visible: false
---

#### Ingresar un número y observar la figura
        
<input type="number" id="number" onkeyup="myFunction()">
<code id="rombo"></code>

<script>
function myFunction() {
    //Imprimir figuras de triangulos formados por asteriscos con ciclo for
    var x,y;
    var st="";
    var max= document.getElementById("number").value;
   
    for (x=0;x<max;x++){
        for(y=0;y<=x;y++){
            st=st+"*";
        }
        st = st + "<br>";
    }
    for (x=0;x<max;x++){
        for(y=0;y<max;y++){
            if(y<=x){
                st = st + "&nbsp";
            }else{
                st = st + "*";
       		 }
        }
        st = st + "<br>";
    }
	document.getElementById('rombo').innerHTML = st;
    document.getElementById('number').value = " ";
    }
</script>