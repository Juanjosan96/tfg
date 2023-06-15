      // BUATACA

      var valordefinitivo;

      var v = 12;
      const unicos = [];

      let greenBtn = document.getElementById("verde");
      let greaseBtn = document.getElementById("gris");

      var arrayButacas = [];


      //SACAR LOS VALORES DE LA CLASE, QUE CONTIENE FILA Y COLUMNA MEDIANTE SUBSTRING
      function red($this) {

        var array = [];
        var texto = $this.outerHTML;
        var posicionColor = texto.indexOf('color');
        var textoColor = $this.outerHTML;
        var longColor = $this.outerHTML;
        var posicionId = texto.indexOf('id');
        longColor = longColor.substring(posicionId + 3, posicionId + 12);
        longColor = longColor.trim();

        if (longColor.length <= 8) {
          textoColor = textoColor.substring(posicionColor + 5, posicionColor + 6);
        } else {
          textoColor = textoColor.substring(posicionColor + 5, posicionColor + 7);
        }

        var posicion = texto.indexOf('class');

        texto = texto.substring(posicion + 7, posicion + 11);
        texto = texto.trim();
        var numeros = texto.split(",");
        var numero1 = numeros[0]; // Primer número: 1
        var numero2 = numeros[1]; // Segundo número: 2


        var seatNumber = 'Fila: ' + numeros[0] + '-Butaca: ' + numeros[1];

        var selectedSeats = document.getElementById("selectedSeats");

        let imgchange = document.getElementById("color" + textoColor);

        if (imgchange.src.includes("butacaGris")) {
          if (cantidad > 0) {
            var posicion = texto.indexOf('valor');
            texto = texto.substring(posicion + 5, posicion + 7);
            array.push(textoColor);
            let imgchangeColor = document.getElementById("color" + textoColor).outerHTML;
            imgchange.src = "../View/img/butacaVerde.PNG";
            cantidad--;
            var listItem = document.createElement("li");
            arrayButacas.push(seatNumber);
            listItem.textContent = seatNumber;
            selectedSeats.appendChild(listItem);
          }

        } else if (imgchange.src.includes("butacaVerde")) {
          array = array.filter((item) => item !== textoColor)

          imgchange.src = "../View/img/butacaGris.PNG";
          cantidad++;
          var listItems = selectedSeats.getElementsByTagName("li");
          arrayButacas.pop();
          for (var i = 0; i < listItems.length; i++) {
            if (listItems[i].textContent === seatNumber) {
              selectedSeats.removeChild(listItems[i]);
              break;
            }
          }
        }


        var numeros = [];
        numeros.push(7);

        // Evita valores duplicados
        array.forEach((elemento) => {
          if (!unicos.includes(elemento)) {
            unicos.push(elemento);

          }
        });

        // Muestra los datos
        retener(unicos);
      }

      function retener(valor) {
        valordefinitivo = valor;
        return valordefinitivo;
      }

      // Se crea los datos en la BD y se redirige al controlador de resumen
      function envio() {
        var json = JSON.stringify(valordefinitivo + '.' + arrayButacas);
        if (cantidad == 0) {
          var xhr = new XMLHttpRequest();
          xhr.open("POST", "../Controller/envio.php", true);
          xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
          xhr.onreadystatechange = function () {
            if (xhr.readyState === 4 && xhr.status === 200) {
              window.location.href = "../Controller/resumenController.php";
            }
          };
          xhr.send("unicos=" + encodeURIComponent(json));
        }
      }

      function toggleMenu() {
        var menu =  document.querySelector('.nav-hero');
        var mobileMenu = document.getElementById("mobile-menu");
        mobileMenu.classList.toggle("active");
        if (menu.style.display === "flex") {
          menu.style.display = "none";
        } else {
          menu.style.display = "flex";
        }
      }
      