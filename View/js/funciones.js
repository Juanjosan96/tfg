  // pelicula TODO AQUI



    // Variables globales
    // var fechaSeleccionada = null;
    // var horaSeleccionada = null;
    // var bloqueFechaAnterior = null;
    // var bloqueHoraAnterior = null;
    // 
    // var cantidad;
    // function obtenerFechas() {
    //   var fechas = [];
    //   var fechaActual = new Date();
  
    //   for (var i = 0; i < 5; i++) {
    //     var fecha = new Date(fechaActual);
    //     fecha.setDate(fecha.getDate() + i);
    //     fechas.push(fecha);
    //   }
  
    //   return fechas;
    // }
  
    // function mostrarFechas() {
    //   var bloquesFecha = document.getElementsByClassName("bloque-fecha");
    //   var fechas = obtenerFechas();
  
    //   for (var i = 0; i < bloquesFecha.length; i++) {
    //     bloquesFecha[i].textContent = fechas[i].toLocaleDateString();
    //   }
    // }
  
    // function updateResult() {
    //   var cuadroCantidad = document.getElementById("cuadro-cantidad");
    //   var result = parseInt(cuadroCantidad.getAttribute("data-cantidad"));
    //   document.getElementById("result-container").textContent = 'Importe total: ' + result + '€';
    // }
  
    // function incrementarCantidad() {
    //   if (cantidad < 6) {
    //     cantidad++;
    //     mostrarCantidad();
    //     updateResult();
    //   }
    // }
  
    // function decrementarCantidad() {
    //   if (cantidad > 1) {
    //     cantidad--;
    //     mostrarCantidad();
    //     updateResult();
    //   }
    // }
  
    // function mostrarCantidad() {
    //   var cuadroCantidad = document.getElementById("cuadro-cantidad");
    //   cuadroCantidad.textContent = cantidad;
    //   cuadroCantidad.setAttribute("data-cantidad", cantidad * 9);
    // }
  
    // function mostrarInformacionFecha(bloque) {
    //   if (bloqueFechaAnterior) {
    //     bloqueFechaAnterior.classList.remove("seleccionado-color");
    //   }
  
    //   bloque.classList.add("seleccionado-color");
    //   bloqueFechaAnterior = bloque;
  
    //   fechaSeleccionada = bloque.textContent;
    //   console.log("Fecha seleccionada: " + fechaSeleccionada);
    //   mostrarInformacionCompleta();
    //   habilitarBotonEnviar();
    // }
  
    // function mostrarInformacionHora(bloque) {
    //   if (bloqueHoraAnterior) {
    //     bloqueHoraAnterior.classList.remove("seleccionado-color");
    //   }
  
    //   bloque.classList.add("seleccionado-color");
    //   bloqueHoraAnterior = bloque;
  
    //   horaSeleccionada = bloque.textContent;
    //   console.log("Hora seleccionada: " + horaSeleccionada);
    //   mostrarInformacionCompleta();
    //   habilitarBotonEnviar();
    // }
  
    // function mostrarInformacionCompleta() {
    //   var informacionCompleta = "Fecha seleccionada: " + fechaSeleccionada + ", Hora seleccionada: " + horaSeleccionada + ", Cantidad: " + cantidad;
    //   console.log(informacionCompleta);
    // }
  
    // function habilitarBotonEnviar() {
    //   var botonEnviar = document.getElementById("boton-enviar");
    //   botonEnviar.disabled = !(fechaSeleccionada && horaSeleccionada);
    // }
  
    // function enviarDatos() {
    //   if (fechaSeleccionada && horaSeleccionada) {
    //     var datos = {
    //       fecha: fechaSeleccionada,
    //       hora: horaSeleccionada,
    //       cantidad: cantidad,
    //       precio: cantidad*9
    //     };
  
    //     var form = document.createElement("form");
    //     form.setAttribute("method", "POST");
    //     form.setAttribute("action", "../Controller/butacas.php");
    //     var hiddenField = document.createElement("input");
    //     hiddenField.setAttribute("type", "hidden");
    //     hiddenField.setAttribute("name", "datos");
    //     hiddenField.setAttribute("value", JSON.stringify(datos));
    //     form.appendChild(hiddenField);
  
    //     document.body.appendChild(form);
    //     form.submit();
    //   } else {
    //     console.log("Debes seleccionar una fecha y una hora antes de enviar los datos");
    //   }
    // }
  
    // var bloquesFecha = document.getElementsByClassName("bloque-fecha");
    // for (var i = 0; i < bloquesFecha.length; i++) {
    //   bloquesFecha[i].addEventListener("click", function() {
    //     mostrarInformacionFecha(this);
    //   });
    // }
  
    // var bloquesHora = document.getElementsByClassName("bloque-hora");
    // for (var i = 0; i < bloquesHora.length; i++) {
    //   bloquesHora[i].addEventListener("click", function() {
    //     mostrarInformacionHora(this);
    //   });
    // }

    // mostrarFechas();
    // updateResult();


      // BUATACA

      var valordefinitivo;

      var v=12;
      const unicos = [];

     let greenBtn = document.getElementById("verde");
     let greaseBtn = document.getElementById("gris");
     //

     var arrayButacas=[];
     
     
     //SACAR LOS VALORES DE LA CLASE, QUE CONTIENE FILA Y COLUMNA MEDIANTE SUBSTRING
     function red($this){
       
       console.log("aasdasdsa--->");
      console.log($this);
      var array=[];
    
         console.log($this.className);
         var texto =$this.outerHTML;
         var posicionColor=texto.indexOf('color');
         var textoColor=$this.outerHTML;
         var longColor=$this.outerHTML;
         var posicionId=texto.indexOf('id');
         longColor= longColor.substring(posicionId+3,posicionId+12);
         longColor=longColor.trim();
     
         // alert(longColor.length);
     if(longColor.length<=8){
         // alert();
         textoColor= textoColor.substring(posicionColor+5,posicionColor+6);
         // if(imgchange.src.includes("butacaVerde")){
         // }
         // else{
             // array.push(textoColor);
         // }
     }else{
         textoColor= textoColor.substring(posicionColor+5,posicionColor+7);
         // if(imgchange.src.includes("butacaVerde")){
         // }
         // else{
             // array.push(textoColor);
         // }
     
     }
     
     
     // alert(textoColor);
     
     
     
     //AQUI
     
     // var texto =$this.outerHTML;
     
     //MODICIAR CLASE AQUI, RESCATA VALORES 
     var posicion=texto.indexOf('class');
     
     texto= texto.substring(posicion+7,posicion+11);
     texto=texto.trim();
     var numeros = texto.split(",");
     var numero1 = numeros[0]; // Primer número: 1
     var numero2 = numeros[1]; // Segundo número: 2
     
  
     console.log("paaaaaaaaaaaaaaaaaa->"+cantidad);
     var seatNumber = 'Fila: '+numeros[0] + '-Butaca: ' + numeros[1];
     
     var selectedSeats = document.getElementById("selectedSeats");
     
         // let valorNombre = document.getElementById('nombre').innerHTML;
         let imgchange = document.getElementById("color"+textoColor);
     
         if(imgchange.src.includes("butacaGris")){
             if(cantidad>0){
                 console.log(cantidad);
             var posicion=texto.indexOf('valor');
             texto= texto.substring(posicion+5,posicion+7);
             array.push(textoColor);
             let imgchangeColor = document.getElementById("color"+textoColor).outerHTML;
             // alert(imgchangeColor);
             imgchange.src="../View/img/butacaVerde.PNG";
             cantidad--;
             // console.log($this.id);
     
         // if (valorNombre == $this.id) {
             // document.getElementById('nombre').innerHTML = "";
         // } else {
             // document.getElementById('nombre').innerHTML += $this.id;
     
     
     
             var listItem = document.createElement("li");
             arrayButacas.push(seatNumber);
                     listItem.textContent = seatNumber;
                     selectedSeats.appendChild(listItem);
     
     
         // }
     
     }
      
     }
         else if(imgchange.src.includes("butacaVerde")){
             array = array.filter((item) => item !== textoColor)
     
             imgchange.src="../View/img/butacaGris.PNG";
             cantidad++;
             var listItems = selectedSeats.getElementsByTagName("li");
             arrayButacas.pop();
                     for (var i = 0; i < listItems.length; i++) {
                         if (listItems[i].textContent === seatNumber) {
                             selectedSeats.removeChild(listItems[i]);
                             break;
                         }
                     }
             // if (valorNombre.includes($this.id)) {
             // document.getElementById('nombre').innerHTML = "";
     
     
     
     
     
     
     //PONER AQUI LAS CLASES
     
     
     
     
     
         // } else {
         //     // document.getElementById('nombre').innerHTML += $this.id;
         // }
         }
     
     
         var numeros = [];
         numeros.push(7);
     
     
    
     
     array.forEach( (elemento) => {
       if (!unicos.includes(elemento)) {
         unicos.push(elemento);
     
       }
     });
     // numeros.forEach(element => console.log(element));
     
     
     // MUESTRA LOS DATOS
     console.log(unicos);
     
     retener(unicos);
     // enviarDatos(unicos);
     
     }
     
     
     // document.getElementById("enviarDatos").addEventListener("click", enviarDatos);
     

     
     
     
     function retener(valor){
      valordefinitivo=valor;
      return valordefinitivo;
     }
     
     
     
     
     
     function envio() {
       console.log(valordefinitivo);
       var json = JSON.stringify(valordefinitivo+'.'+arrayButacas);
     
      //  console.log("aquiiiiii");
      //  console.log(json);
     if(cantidad==0){
       var xhr = new XMLHttpRequest();
       xhr.open("POST", "../Controller/envio.php", true);
       xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
       xhr.onreadystatechange = function() {
         if (xhr.readyState === 4 && xhr.status === 200) {
           console.log(xhr.responseText);
           // Operación de guardado completada correctamente
           // Redireccionar a la página deseada
           window.location.href = "../Controller/pruebacookie.php";
         }
       };
       xhr.send("unicos=" + encodeURIComponent(json));
     }
     }
     

     
     
     
    
     

    //  function javascript_to_php() {
    //      var jsVar1 = "Hello";
    //      var jsVar2 = "World";
    //      window.location.href = window.location.href + "?w1=" + jsVar1 + "&w2=" + jsVar2;
    //  }
     
     
     
     // function nombreAsiento(asiento) {
     //     let id = asiento;
     //     let valorNombre = document.getElementById('nombre').innerHTML;
     
     //     if (valorNombre == id) {
     //         document.getElementById('nombre').innerHTML = "";
     //     } else {
     //         // document.getElementById('nombre').innerHTML = id;
     //     }
     // }
     // </script> -->
     
     //console.log("CLICK BUTACA END");
     
     // function nuevaPalabra() {
     //   let valor = document.getElementById("texto").value;
     // //   console.log(valor);
     //   let elementotexto = document.createElement("p");
     //   let elementobotoncopia = document.createElement("button");
     //   let elementobotonborrar = document.createElement("button");
     //   let elementobotonactualizar = document.createElement("button");
     //   let texto = document.createTextNode(valor);
     //   let contenido=document.getElementById("contenido");
     //   contenido.appendChild(elementotexto);
     //   elementotexto.appendChild(texto);
     //   contenido.appendChild(elementobotoncopia);
     // }



