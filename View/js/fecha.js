 // Variables globales
 var fechaSeleccionada = null;
 var horaSeleccionada = null;
 var bloqueFechaAnterior = null;
 var bloqueHoraAnterior = null;
 var cantidad=1;

 function obtenerFechas() {
   var fechas = [];
   var fechaActual = new Date();

   for (var i = 0; i < 5; i++) {
     var fecha = new Date(fechaActual);
     fecha.setDate(fecha.getDate() + i);
     fechas.push(fecha);
   }

   return fechas;
 }

 function mostrarFechas() {
   var bloquesFecha = document.getElementsByClassName("bloque-fecha");
   var fechas = obtenerFechas();

   for (var i = 0; i < bloquesFecha.length; i++) {
     bloquesFecha[i].textContent = fechas[i].toLocaleDateString();
   }
 }

 function updateResult() {
   var cuadroCantidad = document.getElementById("cuadro-cantidad");
   var result = parseInt(cuadroCantidad.getAttribute("data-cantidad"));
   document.getElementById("result-container").textContent = 'Importe total: ' + result + '€';
 }

 function incrementarCantidad() {
   if (cantidad < 6) {
     cantidad++;
     mostrarCantidad();
     updateResult();
   }
 }

 function decrementarCantidad() {
   if (cantidad > 1) {
     cantidad--;
     mostrarCantidad();
     updateResult();
   }
 }

 function mostrarCantidad() {
   var cuadroCantidad = document.getElementById("cuadro-cantidad");
   cuadroCantidad.textContent = cantidad;
   cuadroCantidad.setAttribute("data-cantidad", cantidad * 9);
 }

 function mostrarInformacionFecha(bloque) {
   if (bloqueFechaAnterior) {
     bloqueFechaAnterior.classList.remove("seleccionado-color");
   }

   bloque.classList.add("seleccionado-color");
   bloqueFechaAnterior = bloque;

   fechaSeleccionada = bloque.textContent;
   console.log("Fecha seleccionada: " + fechaSeleccionada);
   mostrarInformacionCompleta();
   habilitarBotonEnviar();
 }

 function mostrarInformacionHora(bloque) {
   if (bloqueHoraAnterior) {
     bloqueHoraAnterior.classList.remove("seleccionado-color");
   }

   bloque.classList.add("seleccionado-color");
   bloqueHoraAnterior = bloque;

   horaSeleccionada = bloque.textContent;
   console.log("Hora seleccionada: " + horaSeleccionada);
   mostrarInformacionCompleta();
   habilitarBotonEnviar();
 }

 function mostrarInformacionCompleta() {
   var informacionCompleta = "Fecha seleccionada: " + fechaSeleccionada + ", Hora seleccionada: " + horaSeleccionada + ", Cantidad: " + cantidad;
   console.log(informacionCompleta);
 }

 function habilitarBotonEnviar() {
   var botonEnviar = document.getElementById("boton-enviar");
   botonEnviar.disabled = !(fechaSeleccionada && horaSeleccionada);
 }

 function enviarDatos() {
   if (fechaSeleccionada && horaSeleccionada) {
     var datos = {
       fecha: fechaSeleccionada,
       hora: horaSeleccionada,
       cantidad: cantidad,
       precio: cantidad*9
     };

     var form = document.createElement("form");
     form.setAttribute("method", "POST");
    //  form.setAttribute("action", "../Controller/pruebaAJAX.php");
     form.setAttribute("action", "../Controller/butacas.php");
     var hiddenField = document.createElement("input");
     hiddenField.setAttribute("type", "hidden");
     hiddenField.setAttribute("name", "datos");
     hiddenField.setAttribute("value", JSON.stringify(datos));
     form.appendChild(hiddenField);

     document.body.appendChild(form);
     form.submit();
   } else {
     console.log("Debes seleccionar una fecha y una hora antes de enviar los datos");
   }
 }

 var bloquesFecha = document.getElementsByClassName("bloque-fecha");
 for (var i = 0; i < bloquesFecha.length; i++) {
   bloquesFecha[i].addEventListener("click", function() {
     mostrarInformacionFecha(this);
   });
 }

 var bloquesHora = document.getElementsByClassName("bloque-hora");
 for (var i = 0; i < bloquesHora.length; i++) {
   bloquesHora[i].addEventListener("click", function() {
     mostrarInformacionHora(this);
   });
 }

 mostrarFechas();
 updateResult();
